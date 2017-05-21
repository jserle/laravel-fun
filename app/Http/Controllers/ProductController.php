<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Services\ProductJsonFileService;

class ProductController extends Controller
{
    public function index(ProductJsonFileService $productJsonFileService)
    {
        return $productJsonFileService->loadAllProducts();
    }

    public function store(Request $request, ProductJsonFileService $productJsonFileService)
    {
        $data = $request->toArray();
        $product = new Product();
        $product->fill($data);
        $productJsonFileService->saveProduct($product);
    }
}
