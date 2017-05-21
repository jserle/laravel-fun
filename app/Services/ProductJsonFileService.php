<?php

namespace App\Services;

class ProductJsonFileService
{

    protected $dbFile;

    public function setDbfile($file)
    {
        $this->dbFile = $file;
    }

    public function loadAllProducts()
    {
        $contents = file_get_contents($this->dbFile);

        return json_decode($contents);
    }
	
}