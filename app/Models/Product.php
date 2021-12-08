<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'image',
    ];
    public function products()
    {
    	return $this->belongsToMany(Category::class, 'category_products', 'id_product');
    }

    public function featuresProduct()
    {
        return $this->hasOne(FeaturesProduct::class, 'features_product', 'id_product');
    }

    public function productsOpinion()
    {
    	return $this->hasOne(ProductsOpinion::class, 'products_opinion', 'id_product');
    }


}
