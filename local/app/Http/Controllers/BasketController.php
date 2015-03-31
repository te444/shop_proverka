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
	 $this->title='Корзина';
	$allProduct = array();
	foreach($_COOKIE as $name => $number){
	
	$name = (int)$name;
	if($name>0){
	$allProduct[$name] = $number;
	}
	}
        
       
          $prod_arr = array();
	foreach($allProduct as $key=>$value){
	if( Product::find($key) != null){
            $prod_arr[] =  Product::find($key);
        }
	}
	
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
     $prod_arr = array();
          foreach($order_prod as $key=>$value){
          if( Product::find($key) != null){ 
                          $prod_arr[] =  Product::find($key)->id;
             }
          }
     if($input::get('name')==null or $input::get('last_name')==null or $input::get('address')==null or $input::get('tel')==null){
         return Redirect::to('basket')->with("error", '1');
     }
    if($input::get('name') != Null ){
    $name = $input::get('name');
    $lastName = $input::get('last_name');
    $adress = $input::get('address');
    $tel = $input::get('tel');
    $number_prod=  array();
    foreach ($order_prod as $prod){
        if($prod==null)
            continue;

        $number_prod[]=$input::get('number'.$prod);
    } 


    $order->id_product=serialize($prod_arr);
    $order->lastname= $lastName;
    $order->tel=$tel;
    $order->address=$adress;
    $order->name=$name;
    $order->number= serialize($number_prod);
    $order->save();

                                            }
                                             foreach ($order_prod as $key=>$id){
setcookie($id, '', time()-3600, '/');
}

return Redirect::to('basket')->with('alert', '1');

}



public function postStatus(){
$this->title='Статус заказа';
$order= new \App\Orders();
$input = new \Illuminate\Support\Facades\Input();
$tel = $input::get('tel_status');

$products =$order::where('tel', '=', $tel)->get();

if(count($order::where('tel', '=', $tel)->get()) == 0){
return Redirect::to('basket')->with("errorstat", '2');
}
$products =$order::where('tel', '=', $tel)->get();
foreach($products as $product){
$id_product = unserialize($product->id_product);
}


$prodinfo=array();
foreach ($id_product as $id){
if(Product::find($id)!= null){
  $prodinfo[] =Product::find($id);
}
}


return view('orederbytel')->with('products',$products )->with('prodinfo',$prodinfo);
}

}

?>