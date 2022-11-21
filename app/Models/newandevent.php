<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newandevent extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ='newandevent';
    protected $fillable =[
        'name',
        'detail',
        'image',
        'created_by',
        'updated_by',
    ];
}
