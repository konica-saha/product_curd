<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image'];
    
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    use HasFactory;
}
