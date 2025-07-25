<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    public function creating(Category $category): void
    {
        $category->uuid = (string)Str::uuid();
        $category->slug = Str::slug($category->name);
    }
}
