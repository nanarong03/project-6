<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detailuser extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ='detailuser';
    protected $fillable =[
        'name',
        'detail',
        'image',
        'created_by',
        'updated_by',
    ];
}
