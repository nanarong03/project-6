<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeProducts extends Model
{
    use HasFactory,SoftDeletes;

    protected $table ='type_products';
    protected $fillable =[
        'name',
        'iamge',
    ];
}
