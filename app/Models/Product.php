<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'id', 
        'category_id',
        'name', 
        'price', 
        'prod_country', 
        'prod_year', 
        'prod_model',
        'amount',
        'thumbnail', 
        'created_at', 
        'updated_at',
    ];
    /* многие */
    /* получить доступ к родительской категории */
    public function getCategory(){
        return $this->belongsTo(Category::class);
    }
}
