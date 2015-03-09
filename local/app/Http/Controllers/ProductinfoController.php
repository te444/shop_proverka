<?php 
namespace App\Http\Controllers;

use App;
class ProductinfoController extends Controller {

	
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
	public function index($id)
	{
	
	$product= \App\Product::find($id);
		
	
    return view('product_info')->with('product', $product);
                
    }
	

}
