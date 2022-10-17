<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Typeproduct extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ='type_product';
    protected $fillable =[
        'name',
        'iamge',
        'created_by',
        'updated_by',
    ];
}
