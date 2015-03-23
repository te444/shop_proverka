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

    public $prod = array();
	
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
	
	for($i=0; $i<count($prod_arr); $i++){
	if($prod_arr[$i]== Null)
	unset($prod_arr[$i]);
	}
	
	$this->prod = $prod_arr;
	
   return view('basket')->with('orderproducts',$prod_arr );
                
    }
   
    public function getDelete($id){
     setcookie($id, '', time()-3600, '/');
       return Redirect::to('basket');
     }
	 
	 
public function getAdd(){
  $order= new \App\Orders();
 
  $input  = new \Illuminate\Support\Facades\Input();
   
   $order_prod = array();
	foreach($_COOKIE as $name => $number){
	$name = (int)$name;
	$order_prod[] = $name;
	}
	for($i=0; $i<count($order_prod); $i++){
	if($order_prod[$i]== Null)
	unset($order_prod[$i]);
	}
	
	
 
  if($input::get('name') != Null ){
  $name = $input::get('name');
	
  /*$lastName = $input::get('last_name');
  $adress = $input::get('address');
  $tel = $input::get('tel');
  
  $order->id_product=serialize($order_prod);
  $order->lastname= $lastName;
  $order->tel=$tel;
  $order->address=$adress;
 */
  $order->name=123;
 
  //$order->number=$this->prod;
  $order->save;
}


}
}
?>