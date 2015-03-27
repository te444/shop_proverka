<?php
namespace App\Http\Controllers\Adminka;
use App\Http\Controllers\Controller;
use Image;
use Input;
use Illuminate\Support\Facades\File;
use \App\Product;
use Redirect;


class AdminController extends Controller{
public function __construct(){
parent::__construct();
$this->middleware('admin');
$this->styles[]= 'css/admin.css';
}

public function getIndex(){
 $this->title='Панель Администратора';
return view('admin/admin');

}


public function getUsers(){
     $this->title='Зарегистрированные пользователи';
$users  = \App\User::all();
$a = view('admin/regusers')->with('users', $users);
return view('admin/admin')->with('regusers', $a);

}


public function getOrderprod(){
    $input  = new \Illuminate\Support\Facades\Input();
     $this->title='Корзина заказов';
      $order= new \App\Orders();
      $stat = $input::get('stat');
      
      if( $stat != null){
       
          $id= $input::get('order_id');
         
         $zak = $order->find($id);
         
         $zak->status = $stat;
         $zak->save();
     }
          
      
          $order_info = $order::all();
        
      for($i=0; $i<count($order_info); $i++){
          $e= unserialize($order_info[$i]->id_product);
          $e = Product::find($e);
          
          $k = unserialize($order_info[$i]->number);
        
          $order_info[$i]->id_product =  $e;
          $order_info[$i]->number =  $k;
      }
         $a = view('admin/orderproducts')->with('orders', $order_info);
        return view('admin/admin')->with('orderproducts', $a);


}




public function getAdd(){
     $this->title='Добавить товар';
return view('admin/admin')->nest('addproduct', 'admin/addproduct');
}

public function postAdd(){
    $add = new \App\Product();
	$input  = new \Illuminate\Support\Facades\Input();
   
    if($input::get('marka') != Null ){
	$img_name = time().'image.jpg';
    $video_name = time().'video.mp4';
	$img = $input::file('image')->move("img/clock", $img_name);
    $img = $input::file('video')->move("video/clock", $video_name);
	$price = $input::get('price');
	$model = $input::get('model');
	$marka = $input::get('marka');
	$weight = $input::get('weight');
    $property = $input::get('property');
    $cat = $input::get('cat');
	$name = $input::get('name');
	
    $add->name = $name;
    $add->img = $img_name;
    $add->price = $price;
    $add->model = $model;
    $add->marka = $marka;
    $add->weight = $weight;
    $add->property = $property;
    $add->video = $video_name;
    $add->cat = $cat;
    if($add->save())
        return Redirect::to('admin/add')->with('alert', '1');
  }

}

public function getProductlist(){
 $this->title='Перечень продукции';
 $allproduct = Product::all();
 $product = view('admin/productlist')->with('allproduct', $allproduct);
 
 return view('admin/admin')->with('productlist', $product);
}

public function getDelete($id){
Product::find($id)->delete();
return Redirect::to('admin/productlist');


}

}






?>