<?php
namespace App\Http\Controllers\Adminka;
use App\Http\Controllers\Controller;


class AdminController extends Controller{
public function __construct(){
parent::__construct();
$this->middleware('admin');
$this->styles[]= 'css/admin.css';




}

public function getIndex(){

return view('.admin');


}


public function getParse(){
    
    return view('.admin')->nest('parse_form', 'admin/parseform');
    
}

public function getUsers(){
$users  = \App\User::all();
$a = view('admin/regusers')->with('users', $users);
return view('.admin')->with('regusers', $a);

}

public function getBasket(){

$order  = \App\Orders::all();
$a = view('admin/orderproducts')->with('orders', $order);
return view('.admin')->with('orderproducts', $a);


}


}






?>