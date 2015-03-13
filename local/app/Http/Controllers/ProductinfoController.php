<?php 
namespace App\Http\Controllers;
use Input;
use Session;
Use Auth;

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
	public function Index($id)
	{
	
	$product= \App\Product::find($id);
	
        
        if(Input::get('add')!= NULL){
            Session::put(Auth::user()->id, Input::get('add'));
           
        }
             return view('product_info')->with('product', $product);   
    }
    
    
	

}
