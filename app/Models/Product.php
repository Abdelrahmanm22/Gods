<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = "product";
    protected $fillable = [
        'id',
        'name',
        'price',
        'image',
        'position',
        'idAdmin',
    ];
    protected static function boot(){
        parent::boot();
        Product::creating(function ($model){
            $model->position =Product::max('position')+1;
        });
    }
}
