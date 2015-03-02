<?php
namespace App\Http\Controllers\Adminka;
use App\Http\Controllers\Controller;


class AdminController extends Controller{
public function __construct(){
parent::__construct();
$this->styles[]= 'css/admin.css';




}

public function index(){

return view('admin');


}


}






?>