<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ='products';
    protected $fillable =[
        'name',
        'details',
        'price',
        'image',
    ];
}
