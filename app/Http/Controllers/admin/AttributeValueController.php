<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attr;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    public function getAttrVal(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $attr = Attr::where('name', $data['name'])->where('is_variable' , '=' , false)->first();
        if (is_null($attr))
            return response(['data' => []]);

        return response(['data' => $attr->productAttributeValues->pluck('value')]);

    }

    public function getVarAttrVal(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $attr = Attr::where('name', $data['name'])->where('is_variable' , '=' , true)->first();
        if (is_null($attr))
            return response(['data' => []]);

        return response(['data' => $attr->productAttributeValues->pluck('value')]);
    }
}
