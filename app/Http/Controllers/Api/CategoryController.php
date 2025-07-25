<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCategory;
use App\Http\Resources\CategoryResource;
use App\Service\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected CategoryService $categoryService;

    public function __construct(CategoryService $CategoryService)
    {
        $this->categoryService = $CategoryService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryService->getAllCategories();

        return CategoryResource::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCategory $request)
    {
        $category  = $this->categoryService->createNewCategory($request->validated());

        return new CategoryResource($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $identify)
    {
        $category = $this->categoryService->getCategory($identify);

        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateCategory $request, string $identify)
    {
        $this->categoryService->updateCategory($identify, $request->validated());

        return response()->json(['message' => 'Category updated successfully.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $identify)
    {
        $this->categoryService->deleteCategory($identify);

        return response()->json([], 204);
    }
}
