<?php

namespace App\Http\Controllers;

use App\Models\Attr;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductInfo;
use App\Models\Seller;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use function Laravel\Prompts\error;

class SellerCreateProductController extends Controller
{
    public function create_product(Request $request)
    {
        /*get seller*/
        $token = session('seller_token');
        $seller = Seller::where('token', $token)->first();
        $seller_id = $seller->id;
        /*end get seller*/

        $validation_for_values = '';
        $valid_rule_v = '';
        if ($request->has('varAttributes')) {
            if (array_key_exists('value', $request['varAttributes'][0])) {
                $validation_for_values = 'varAttributes.*.value';
                $valid_rule_v = 'required';
            }
        }

        $validation_for_w = '';
        $validation_for_l = '';
        $validation_for_h = '';
        $validation_for_we = '';
        $valid_rule_s = '';
        if ($request->has('varAttributes')) {
            if (array_key_exists('dimensions', $request['varAttributes'][0])) {
                $validation_for_w = 'varAttributes.*.dimensions.width';
                $validation_for_l = 'varAttributes.*.dimensions.length';
                $validation_for_h = 'varAttributes.*.dimensions.height';
                $validation_for_we = 'varAttributes.*.dimensions.weight';
                $valid_rule_s = 'required|numeric';
            }
        }

        $validData = $request->validate([
            'cat_ids' => 'required',
            'brand_id' => 'required',
            'title' => 'required',
            'dimensions' => 'required',
            'dimensions.*' => 'required|numeric',
            'description' => 'required',
            'fixedAttributes' => 'required',
            'fixedAttributes.*.name' => 'required',
            'fixedAttributes.*.value' => 'required',
            'varType' => 'required|in:color,size,none',
            'varAttributes' => 'required',
            'varAttributes.*.price' => 'required|numeric',
            'varAttributes.*.quantity' => 'required|numeric',
            $validation_for_values => $valid_rule_v,
            $validation_for_w => $valid_rule_s,
            $validation_for_h => $valid_rule_s,
            $validation_for_l => $valid_rule_s,
            $validation_for_we => $valid_rule_s,
            'file' => 'required',
            'file.*' => 'required|mimes:jpg,webp|max:20000'
        ]);

        /*add product*/
        $originality = $request['originality'] === null ? 0 : 1;

        $brand_id = $validData['brand_id'] == -1 ? null : $validData['brand_id'];
        $dimensions = json_encode($validData['dimensions']);
        $product = Product::create([
            'brand_id' => $brand_id,
            'title' => $validData['title'],
            'description' => $validData['description'],
            'originality' => $originality,
            'dimensions' => $dimensions,
        ]);
        /*end add product*/

        /*add category*/
        $product->productCategories()->sync($validData['cat_ids']);
        /*end add category*/

        /*add gallery img*/
        $files = $request->file('file');
        foreach ($files as $file) {
            $destinationPath = '/assets/frontend/image/product/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
            $file->move(public_path($destinationPath), $file->getClientOriginalName());
            $product->galleries()->create([
                'image' => $destinationPath . $file->getClientOriginalName()
            ]);
        }
        /*end add gallery img*/

        /*add fixed attr*/
        $attributes = collect($validData['fixedAttributes']);

        $attributes->each(function ($item) use ($product) {
            $attr = Attr::firstOrCreate(
                ['name' => $item['name']],
                ['is_variable' => false]
            );

            $attr_value = $attr->productAttributeValues()->firstOrCreate(
                ['value' => $item['value']]
            );

            $product->productAttributes()->attach($attr->id, ['attr_value_id' => $attr_value->id]);
        });
        /*and add fixed attr*/


        /*add variable attr*/
        $attr = $validData['varType'] !== 'none' ? Attr::firstOrCreate(
            ['name' => $validData['varType']],
            ['is_variable' => true],
        ) : null;

        $varAttributes = collect($validData['varAttributes']);

        $varAttributes->each(function ($item) use ($product, $attr, $seller_id) {
            //none color and size
            if ($attr === null) {
                $product->productInfos()->create([
                    'attr_id' => null,
                    'attr_value_id' => null,
                    'seller_id' => $seller_id,
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'dimensions' => null
                ]);
            } else {
                $attr_value = $attr->productAttributeValues()->firstOrCreate(
                    ['value' => $item['value']]
                );
                if (isset($item['dimensions']['width'])) {
                    //size
                    $dimensions = json_encode($item['dimensions']);
                    $product->productInfos()->create([
                        'attr_id' => $attr->id,
                        'attr_value_id' => $attr_value->id,
                        'seller_id' => $seller_id,
                        'price' => $item['price'],
                        'quantity' => $item['quantity'],
                        'dimensions' => $dimensions,
                    ]);
                } else {
                    //color
                    $product->productInfos()->create([
                        'attr_id' => $attr->id,
                        'attr_value_id' => $attr_value->id,
                        'seller_id' => $seller_id,
                        'price' => $item['price'],
                        'quantity' => $item['quantity'],
                        'dimensions' => null
                    ]);
                }
            }
        });
        /*end add variable attr*/

        return back();
    }

    public function you_also_sell(Request $request)
    {
        $validData = $request->validate([
            'data' => 'required'
        ]);
        
        $data = json_decode($validData['data']);

        ProductInfo::create([
            'seller_id' => get_seller_by_token()->id,
            'product_id' => $data->product_id,
            'attr_id' => $data->attr_id,
            'attr_value_id' => $data->attr_value_id,
            'price' => $data->min_price,
            'quantity' => 1,
        ]);
      
    }
}
