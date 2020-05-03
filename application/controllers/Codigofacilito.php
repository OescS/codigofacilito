<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helpers('mihelper');
	}
	function Index(){
		$this->load->library('menu');
		$data['mi_menu'] = $this->menu->construirMenu(array('Inicio','Contacto','Curso'));
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido',$data);
	}
}

?>
