<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class ProductGallery extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'products_id', 'url', 'is_featured'
    ];

}
