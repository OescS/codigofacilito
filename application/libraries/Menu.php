<? if( ! defined('BASEPATH')) exit('No se permite acceso directorio script');
	
	/* Clase para realizar menus	  */
	
	 } class Menu{
		 private $arr_menu;
		 public function __construct($arr){
		 	$this->arr_menu = $arr;
		 }	
		 public function construirMenu(){
		 	$ret_menu = "<nav><ul>";
		 	foreach ($this->arr_menu as $opcion){
		 		$ret_menu .= "<li>".$opcion."</li>";
		 	}
		 	$ret_menu .= "</ul></nav>";
		 	return $ret_menu;
		 }
	}
?>