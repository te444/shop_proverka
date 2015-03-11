<?php
namespace App\Http\Controllers\Adminka;
use App\Http\Controllers\Controller;
use Image;
use Input;
use Illuminate\Support\Facades\File;


class AdminController extends Controller{
public function __construct(){
parent::__construct();
$this->middleware('admin');
$this->styles[]= 'css/admin.css';




}

public function getIndex(){

return view('admin/admin');


}


public function getParse(){
    
    return view('admin/admin')->nest('parse_form', 'admin/parseform');
    
}

public function getUsers(){
$users  = \App\User::all();
$a = view('admin/regusers')->with('users', $users);
return view('admin/admin')->with('regusers', $a);

}


public function getBasket(){

$order  = \App\Orders::all();
$a = view('admin/orderproducts')->with('orders', $order);
return view('admin/admin')->with('orderproducts', $a);


}



public function getAdd(){
    
    
    
    return view('admin/admin')->nest('addproduct', 'admin/addproduct');
    
    
    
}

public function postAdd(){
     $add = new \App\Product();
    $input  = new \Illuminate\Support\Facades\Input();
   
    if($input::get('marka') != Null ){
	
	$img_name = time().'image.jpg';
	$img = $input::file('image')->move("img/clock", $img_name);
	$price = $input::get('price');
	$model = $input::get('model');
	$marka = $input::get('marka');
	$weight = $input::get('weight');
	$property = $input::get('property');
	
    $name = $input::get('name');
    $add->name = $name;
    $add->img = $img_name;
    $add->price = $price;
    $add->model = $model;
    $add->marka = $marka;
    $add->weight = $weight;
    $add->property = $property;
    $add->save();
    
   }

}


}






?>