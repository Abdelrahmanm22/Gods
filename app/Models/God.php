<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class God extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "god";
    protected $fillable = [
        'id',
        'God_name',
        'Description',
        'image',
        'idAdmin',
    ];
}
