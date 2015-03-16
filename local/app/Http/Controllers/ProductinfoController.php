<?php 
namespace App\Http\Controllers;
use Input;
use Session;
Use Auth;
Use Cookie;


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
           $key = array();
           $key[]= Input::get('add');
          
           Cookie::make('mama', '2222');
        }
       
             return view('product_info')->with('product', $product);   
    }
    
    
	

}
