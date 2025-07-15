<?php

namespace App\Service;

use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->getAllProducts();
    }

    public function createNewProduct(array $data)
    {
        return $this->productRepository->createNewProduct($data);
    }
}
