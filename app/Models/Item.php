<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'items';
    protected $fillable = [
        'codeNo',
        'name',
        'image',
        'price',
        'description',
        'discount',
        'inStock',
        'categoryID'
    ];
}
