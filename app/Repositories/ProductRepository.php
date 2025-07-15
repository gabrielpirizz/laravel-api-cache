<?php

namespace App\Repositories;
use App\Models\Product;

class ProductRepository
{
    protected $entity;

    public function __construct(Product $product)
    {
        $this->entity = $product;
    }

    public function getAllProducts()
    {
        return $this->entity->all();
//        return $this->entity::get();
    }

    public function createNewProduct(array $data)
    {
        return $this->entity->create($data);
    }

//    public function findProductById($id)
//    {
//        return $this->entity::find($id);
//    }
//
//    public function createProduct(array $data)
//    {
//        return $this->entity::create($data);
//    }
//
//    public function updateProduct($id, array $data)
//    {
//        $product = $this->findProductById($id);
//        if ($product) {
//            $product->update($data);
//            return $product;
//        }
//        return null;
//    }
//
//    public function deleteProduct($id)
//    {
//        $product = $this->findProductById($id);
//        if ($product) {
//            return $product->delete();
//        }
//        return false;
//    }
}
