<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductAjaxController extends Controller
{
    public function getCats(Request $request)
    {
        $validData = $request->validate([
            'catID' => 'required|numeric'
        ]);

        $childs = ProductCategory::where('parent', '=', $validData['catID'])->get();

        if (is_null($childs))
            return response(['data' => []]);

        return response(['data' => $childs]);

    }
}
