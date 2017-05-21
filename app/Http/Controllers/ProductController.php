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

    public function store(Product $product)
    {
        $product->save();
    }
}
