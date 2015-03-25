<?php 
namespace App\Http\Controllers;

use App;
class DileveryController extends Controller {

	
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
	  return view('dilevery');
                
    }
	

}
