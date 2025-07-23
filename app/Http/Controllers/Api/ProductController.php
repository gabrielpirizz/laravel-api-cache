<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProduct;
use App\Http\Resources\ProductResource;
use App\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productService->getAllProducts();

        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateProduct $request)
    {
        $product = $this->productService->createNewProduct($request->validated());

        return new ProductResource($product);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $identify)
    {
        $product = $this->productService->getProduct($identify);

        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateProduct $request, string $identify)
    {
        $this->productService->updateProduct($identify, $request->validated());

        return response()->json(['message' => 'Product updated successfully.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $identify)
    {
        $this->productService->deleteProduct($identify);

        return response()->json([], 204);
    }
}
