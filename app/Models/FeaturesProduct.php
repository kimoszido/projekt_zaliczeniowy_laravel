<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturesProduct extends Model
{
    use HasFactory;

    public function featuresProduct()
    {
    	return $this->belongsTo(Product::class, 'id_product', 'id');
    }

}
