<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use View;
use Image;
/*$img = Image::make('');
$img = resize(235, null, function($constrait){
$constrait->aspectRatio();

});
$pic_small = 's_'.$filename;
$img->save('путь')
*/
abstract class Controller extends BaseController {
public $styles = array('css/app.css', 'css/slider.css');
public $scripts = array('');
public function __construct(){

 View::composer('app', function($view){
 $view->with('styles', $this->styles);
       //->with('scripts', $this->scripts);

 });
	

}
}
