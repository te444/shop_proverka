<?php 
namespace App\Http\Controllers;
use App\Product;
use Session;
use App;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Cookie;
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
          
	//$orderproducts = Session::get(Auth::user()->id);
	$a = Cookie::get('mama');
    return view('basket')->with('orderproducts',$a );
                
    }
    
   /* public function getDelete($id){
     
        $all= array();
        $all = Session::get(Auth::user()->id);
        unset($all[$id]);
        Session::forget(Auth::user()->id);
        Session::push(Auth::user()->id, $all);
       
       return Redirect::to('basket');


}
	
*/
}
?>