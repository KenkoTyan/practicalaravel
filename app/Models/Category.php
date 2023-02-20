<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = [
        'id', 
        'name', 
        'created_at', 
        'updated_at',
    ];
    /* один */
    /*получить товары к категории */
    public function showProduct(){
        return $this->hasMany(Product::class);
    }
}
