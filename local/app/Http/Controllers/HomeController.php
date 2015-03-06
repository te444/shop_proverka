<?php 
namespace App\Http\Controllers;

use App;
class HomeController extends Controller {

	
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
	public function index()
	{
	$last_added= \App\Product::all();;
		
	$a = view('last_added')->with('products', $last_added);
        return view('home')->with('last_added', $a);
                
        }
        
        
        
        
	
	public function test(){
	


App::make('App\Libs\Test')->foo();
	
	
	}

}
