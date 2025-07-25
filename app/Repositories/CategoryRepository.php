<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    protected $entity;

    public function __construct(Category $category)
    {
        $this->entity = $category;
    }

    public function getAllCategories()
    {
        return $this->entity->all();
    }

    public function createNewCategory(array $data)
    {
        return $this->entity->create($data);
    }

    public function getCategoryByUuid($identify)
    {
        return $this->entity::where('uuid', $identify)->firstOrFail();
    }

    public function getCategoryBySlug($identify)
    {
        return $this->entity::where('slug', $identify)->firstOrFail();
    }

    public function deleteCategoryByUuid(string $identify)
    {
        $category = $this->getCategoryByUuid($identify);

        return $category->delete();
    }

    public function deleteCategoryBySlug(string $identify)
    {
        $category = $this->getCategoryBySlug($identify);

        return $category->delete();
    }

    public function updateCategoryByUuid(string $identify, array $data)
    {
        $category = $this->getCategoryByUuid($identify);

        return $category->update($data);
    }

    public function updateCategoryBySlug(string $identify, array $data)
    {
        $category = $this->getCategoryBySlug($identify);

        return $category->update($data);
    }
}
