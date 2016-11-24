<?php
 
 namespace App\Core;

 class Render {

 	private $viewPath;

 	public function __construct()
 	{
 		$this->viewPath = APP_SYSTEM_PATH . "/src/views/";
 	}

 	public function render($name, Array $params=[])
 	{
 		foreach ($params as $key=>$value) {
 			$this->$key = $value;
 		}
 		include_once($this->viewPath . $name . '.php');
 	}
 }