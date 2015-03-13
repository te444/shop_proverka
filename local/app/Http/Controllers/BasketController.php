<?php 
namespace App\Http\Controllers;

use App;
class BasketController extends Controller {

	
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
	$users  = \App\User::);
	
    return view('basket');
                
    }
	

}
