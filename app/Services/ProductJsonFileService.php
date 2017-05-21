<?php

namespace App\Services;

use App\Product;

class ProductJsonFileService
{

    protected $dbFile;

    protected $writeBuffer;

    public function setDbfile($file)
    {
        $this->dbFile = $file;
    }

    public function loadAllProducts()
    {
        $contents = file_get_contents($this->dbFile);
        $decodedData = json_decode($contents);
        if ($decodedData === false) {
            throw new \Exception("Unable to decode JSON data");
        }
        return $decodedData;
    }

    public function saveProduct(Product $product)
    {
        $currentProducts = $this->loadAllProducts();
        $currentProducts[] = $product->toArray();
        $this->writeBuffer = $currentProducts;
        $this->writeProductData();
    }

    protected function writeProductData()
    {
        $jsonData = json_encode($this->writeBuffer, JSON_PRETTY_PRINT);
        if (!$jsonData) {
            throw new \Exception("Failed to encode product data to JSON");
        }
        $result = file_put_contents($this->dbFile, $jsonData);
        if (!$result) {
            throw new \Exception("Failed to write product data to file: " . $this->dbFile);
        }
    }
}