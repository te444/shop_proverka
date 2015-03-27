<?php 
namespace App\Http\Controllers;

use App;
use App\Product;
class ProductController extends Controller {

	
	public function __construct()
	{
		
		parent::__construct();
		$this->styles[]= '';
               
		}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function Index()
	{
             $this->title= 'Категории товаров';
	   $cats = \App\Category::all();
	   $last_added= \App\Product::paginate(6);
           
	$view = view('last_added')->with('products', $last_added);
       
	return view('product')->with('table', $view)->with('cats', $cats)->with('products', $last_added);
                
    }
	
	
	
	public function showCat($cat){
             $this->title= $cat;
	$cats = \App\Category::all();
	$cat = str_replace("_", " ", $cat);
	
     $product_arr = Product::where('cat', '=', $cat)->paginate(6);
   
	$view = view('last_added')->with('products', $product_arr);
      $title = "<a href='".asset('/products')."'>Продукция</a> : фирмы ".$cat;
	return view('product')->with('table', $view)->with('cats', $cats)->with('title',$title);
	}
	
	
	
	

}
