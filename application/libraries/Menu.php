<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu
{

	/**
	 * Generate the  menu structure
	 * @return string
	 */
	public function construirMenu($arguments)
	{
		$html = "<nav><ul>";
		foreach ($arguments as $opcion) {
			$html .= "<li>" . $opcion . "</li>";
		}
		$html .= "</ul></nav>";
		return $html;
	}

}
