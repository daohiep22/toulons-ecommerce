<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bill_table';
    protected $primaryKey = 'bill_id';
    protected $fillable = [
        'user_id', 'product_id', 'order_id', 'status', 'quantity', 'total', 'detail'
    ];
}
