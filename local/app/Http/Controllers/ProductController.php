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
	   $cats = \App\Category::all();
	   $last_added= \App\Product::all();
		$view = view('last_added')->with('products', $last_added);
	  
        return view('product')->with('table', $view)->with('cats', $cats);
                
    }
	
	
	
	public function showCat($cat){
	$cats = \App\Category::all();
	$cat = str_replace("_", " ", $cat);
	dd($cat);
     $product_arr = Product::all->where('cat', '=', $cat);
	$view = view('last_added')->with('products', $product_arr);
	return view('product')->with('table', $view)->with('cats', $cats);
	}
	
	
	
	

}
