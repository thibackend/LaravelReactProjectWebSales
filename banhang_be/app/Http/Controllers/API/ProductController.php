<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest as RequestsProductRequest;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(product::all());
    }

    /**
     * Store a newly created 
     */
    public function store(RequestsProductRequest $request)
    {
        $product = product::create($request->all());
        if (!$product) :
            return $this->commonResponse($product, 'Store failed', 422);
        else :
            return $this->commonResponse($product, 'Store successful', 201);
        endif;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return
            product::find($id) ?
            product::find($id)
            : $this->commonResponse([], "Product not found", 404);
        // echo "this is id: $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = product::find($id);
        if ($product) :
            $proUpdate = product::find($id)->update($request->all());
            return $this->commonResponse($proUpdate, "Update successful");
        else :
            return $this->commonResponse([], "Data not found!", 404);
        endif;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product::find($id);
        if (!$product) :
            return $this->commonResponse([], "Product not found", 404);
        else :
            $product->delete();
            return $this->commonResponse([], "Delete sucessful!", 200);
        endif;
    }
}
