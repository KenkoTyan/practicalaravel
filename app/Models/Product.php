<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = [
        'id', 'name', 'price', 'year', 'model', 'country', 'amount', 'created_at', 'updated_at',
    ];

    public function Category(){
        return $this->HasOne(Category::class, 'id', 'category_id');
    }
}
