<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'product_table';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'name', 'image', 'brand', 'price_1', 'price_2', 'description', 'quantity'
    ];
}
