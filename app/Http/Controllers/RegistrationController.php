<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Post;
use App\Models\Category;
use App\Models\Product;

class RegistrationController extends Controller
{
    public function registration ()
    {
        $category_list = Category::all();
        $product_list = Product::all();

        return view('registration')
            ->with("category_list", $category_list)
            ->with("product_list", $product_list);
    }
}
