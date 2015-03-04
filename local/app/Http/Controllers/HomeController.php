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
	$name= "hiii";
		return view('home')->with('name', $name);
	}
	
	public function test(){
	


App::make('App\Libs\Test')->foo();
	
	
	}

}
