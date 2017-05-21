<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'name', 'qoh', 'price_per_item', 'created'
    ];
}
