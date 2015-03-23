<?php 
namespace App\Http\Controllers;
use App\Product;
use Session;
use App;
use Auth;
use DB;
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
	public function getIndex()
	{
	$allProduct = array();
	
	foreach($_COOKIE as $name => $number){
	
	$name = (int)$name;
	if($name>0){
	$allProduct[$name] = $number;
	}
	
	}
        
	$prod_arr = array();
	foreach($allProduct as $key=>$value){
	 $prod_arr[] =  Product::find($key);
	}
      
	
    return view('basket')->with('orderproducts',$prod_arr );
                
    }
   
    public function getDelete($id){
     
       
       setcookie($id, '', time()-3600, '/');
       
       return Redirect::to('basket');


}
}
?>