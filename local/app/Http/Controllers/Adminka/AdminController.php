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

return view('admin');


}


public function getParse(){
    
    return view('admin')->nest('parse_form', 'parseform');
    
}

public function getUsers(){
$users  = \App\User::all();
return view('admin')->with('users', $users);

}


}






?>