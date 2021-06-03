<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lens extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'product_id', 'lens_body', 'lens_sensor', 'lens_tele', 'lens_standard', 'lens_wide', 'lens_macro', 'lens_portrait', 'lens_fisheye', 'lens_cine', 'lens_extender'
    ];
    protected $table = 'tbl_lens';
    protected $primaryKey = 'product_id';
}
