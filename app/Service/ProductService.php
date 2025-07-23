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

    public function getProduct(string $identify)
    {
        return $this->productRepository->getProductByUuid($identify);
    }

    public function createNewProduct(array $data)
    {
        return $this->productRepository->createNewProduct($data);
    }

    public function deleteProduct(string $identify)
    {
        return $this->productRepository->deleteProductByUuid($identify);
    }

    public function updateProduct(string $identify, array $data)
    {
        return $this->productRepository->updateProductByUuid($identify, $data);
    }
}
