<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class body extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'product_id', 'body_type', 'body_sendor'
    ];
    protected $table = 'tbl_body';
    protected $primaryKey = 'product_id';
}
