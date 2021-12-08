<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductsOpinion;
use App\Models\FeaturesProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public static function viewProduct ($id)
    {
        $features_product = DB::table('features_products')->where('id_product', $id)->get();
        $actual_product = Product::find($id);
        $actual_category = DB::table('category_products')->where('id_product', $id)->get('id_category');
        $category_list = Category::all();
        $product_list = Product::all();
        $img_list = DB::table('img_products')->get();
        $products_actual_category = DB::table('products')
                                ->join('category_products', 'products.id', 'category_products.id_product')
                                ->join('categories', 'category_products.id_category', 'categories.id')
                                ->select('products.id as id_product', 'products.name as name_product',
                                        'products.is_avalible', 'products.price_netto', 'products.vat',
                                        'category_products.id_category')
                                ->get();
        $opinions = DB::table('users')
                                ->join('products_opinion', 'users.id', 'products_opinion.id_user')
                                ->where('products_opinion.id_product', $id)
                                ->limit(5)
                                ->get();
        $menu_list = DB::table('menu_product')->get();


        return view('product', ['product' => Product::findOrFail($id)])
                ->with("category_list", $category_list)
                ->with("product_list", $product_list)
                ->with("actual_product", $actual_product)
                ->with("actual_category", $actual_category)
                ->with("features_product", $features_product)
                ->with("products_actual_category", $products_actual_category)
                ->with("img_list", $img_list)
                ->with("opinions", $opinions)
                ->with("menu_list", $menu_list);
    }

    public function product($id)
    {


        /*$products_actual_category = DB::table('products')
                                ->join('category_products', function($join){
                                    $join->on('products.id', 'category_products.id_product')
                                         ->where('category_products.id_category', 1);
                                })
                                ->join('categories', 'category_products.id_category', 'categories.id')
                                ->limit(4)
                                ->select('products.id as id_product', 'products.name as name_product',
                                        'products.is_avalible', 'products.price_netto', 'products.vat')
                                ->get();*/

        return ProductController::viewProduct($id);
    }

    public function add_opinion (Request $request, $id)
    {
        $user = Auth::user();

        $request->validate([
            'content' => ['required', 'string', 'max:1000'],
        ]);

        $data = array('id_product'=>$id, 'id_user'=>$user->id, 'content'=>$request->content);

        DB::table('products_opinion')->insert($data);

        /*ProductsOpinion::create(
            [
                'id_product' => $id,
                'id_user' => $user->id,
                'content' => $request->content
            ]
            );*/

        return ProductController::viewProduct($id);

    }
}
