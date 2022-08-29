<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class slideHome extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ='products';
    protected $fillable =[
        'image',
        'name',
        'details',
    ];
}
