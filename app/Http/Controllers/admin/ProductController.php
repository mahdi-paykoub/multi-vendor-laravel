<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attr;
use App\Models\Notification;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductInfo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.all', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'attributes' => 'required',
            'attributes.*.name' => 'required',
            'attributes.*.value' => 'required',
            'varAttributes' => 'required',
            'varAttributes.*.price' => 'required|numeric',
            'varAttributes.*.quantity' => 'required|numeric',
            'varAttributes.*.name' => 'required',
            'varAttributes.*.value' => 'required',
        ]);


        $product = Product::create($validData);

        $attributes = collect($validData['attributes']);

        $attributes->each(function ($item) use ($product) {

            $attr = Attr::firstOrCreate(
                [
                    'name' => $item['name'],
                    'is_variable' => false
                ],
            );

            $attr_value = $attr->productAttributeValues()->firstOrCreate(
                ['value' => $item['value']]
            );

            $product->productAttributes()->attach($attr->id, ['attr_value_id' => $attr_value->id]);
        });

        $varAttributes = collect($validData['varAttributes']);

        $varAttributes->each(function ($item) use ($product) {
            if (!($item['name'] == -1) || !($item['value'] == -1)) {
                $attr = Attr::firstOrCreate(
                    [
                        'name' => $item['name'],
                        'is_variable' => true
                    ],
                );
                $attr_value = $attr->productAttributeValues()->firstOrCreate(
                    ['value' => $item['value']]
                );
                $product->productInfos()->create([
                    'attr_id' => $attr->id,
                    'attr_value_id' => $attr_value->id,
                    'seller_id' => 1,
                    'price' => $item['price'],
                    'quantity' => $item['quantity']
                ]);
            } else {
                $product->productInfos()->create([
                    'attr_id' => null,
                    'attr_value_id' => null,
                    'seller_id' => 1,
                    'price' => $item['price'],
                    'quantity' => $item['quantity']
                ]);
            }
        });

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $product->update($validData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
    public function published_products()
    {
        $products = Product::where('status', 'published')->get();
        return view('admin.product.published', compact('products'));
    }
    public function unpublished_products()
    {
        $products = Product::where('status', 'unpublished')->get();
        return view('admin.product.unpublished', compact('products'));
    }
    public function change_product_status(Request $request, Product $product)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'seller_id' => 'required',
            'status' => 'required',
        ]);
        $product->update(['status' => $validData['status']]);
        Notification::create([
            'title' => $validData['title'],
            'description' => $validData['description'],
            'seller_id' =>$validData['seller_id'],
            'link'=>$request['link']
        ]);
        return back();
    }
}
