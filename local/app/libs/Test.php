<?php
namespace app\Libs;

class Test{
public $msg;

public function __construct($msg=null){
$this->msg= $msg;
echo 'Hello world';
}
public function foo(){

echo $this->msg;

}




}



?>