<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//used to interact with the product table
class Product extends Model
{
    use HasFactory;


    protected $table = 'product';
}
