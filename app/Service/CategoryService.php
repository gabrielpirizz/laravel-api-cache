<?php

namespace App\Service;

use App\Repositories\CategoryRepository;
use Illuminate\Support\Str;

class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->getAllCategories();
    }

    public function getCategory(string $identify)
    {
        if (Str::isUuid($identify)) {
            return $this->categoryRepository->getCategoryByUuid($identify);
        }

        return $this->categoryRepository->getCategoryBySlug($identify);

    }

    public function createNewCategory(array $data)
    {
        return $this->categoryRepository->createNewCategory($data);
    }

    public function deleteCategory(string $identify)
    {
        if (Str::isUuid($identify)) {
            return $this->categoryRepository->deleteCategoryByUuid($identify);
        }
        return $this->categoryRepository->deleteCategoryBySlug($identify);
    }

    public function updateCategory(string $identify, array $data)
    {
        if (Str::isUuid($identify)) {
            return $this->categoryRepository->updateCategoryByUuid($identify, $data);
        }
        return $this->categoryRepository->updateCategoryBySlug($identify, $data);
    }
}
