<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json((new Products())->all());
    }

    public function store(Request $request): JsonResponse
    {
        $product = new Products();
        
        $request->validate([
            'name'  => 'required',
            'image' => 'required',
            'value' => 'required',
        ]);
        
        $product->name  = $request->name;
        $product->image = $request->image;
        $product->value = $request->value;
        $product->save();

        return response()->json(['created' => true], 201);
        
    }

    public function update(Request $request): JsonResponse
    {
        
        $productId = $request->route()->parameter('id');
        $product = Products::find($productId);

        $request->validate([
            'name'  => 'required',
            'image' => 'required',
            'value' => 'required',
        ]);

        $product->name  = $request->name;
        $product->image = $request->image;
        $product->value = $request->value;
        $product->save();

        return response()->json(['updated' => true]);
    }
    
    public function delete(Request $request): JsonResponse
    {
        
        $productId = $request->route()->parameter('id');
        $product = Products::find($productId);
        $product->delete();

        return response()->json(['deleted' => true]);
    }
}
