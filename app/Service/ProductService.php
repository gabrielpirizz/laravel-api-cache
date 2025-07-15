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

    //colocar aqui métodos para buscar produtos por ID, criar, atualizar e deletar produtos

    public function createNewProduct(array $data)
    {
        return $this->productRepository->createNewProduct($data);
    }

    // Additional methods for creating, updating, and deleting products can be added here
}
