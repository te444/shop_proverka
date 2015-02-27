<?php namespace App\Http\Controllers;
use App\Product;


class BaseController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	
	parent::__construct();	
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
	$name = "HI my dear friend";
		return view('home')->with('name',$name);
	}
	public function getArticles()
	{
	$name = "Статьи";
		return view('articles')->with('name',$name);
	}
	public function getProducts()
	{
	 $products = Product::all();
	 
	return view('products')->with('name',$products);
	}
	
	public function getAuth(){
	
	}
}
