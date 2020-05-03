<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu
{
	/**
	 * @var array
	 */
	private $arguments;
	/**
	 * Menu constructor.
	 * @param array $arguments
	 */
	public function __construct($arguments = array())
	{
		$this->arguments = $arguments;
	}
	/**
	 * Generate the  menu structure
	 * @return string
	 */
	public function construirMenu()
	{
		$html = "<nav><ul>";
		foreach ($this->arr_menu as $opcion) {
			$html .= "<li>" . $opcion . "</li>";
		}
		$html .= "</ul></nav>";
		return $html;
	}

}

