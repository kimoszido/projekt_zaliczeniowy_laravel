<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsOpinion extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function productsOpinion()
    {
    	return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function usersOpinion()
    {
    	return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
