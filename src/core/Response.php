<?php

namespace App\Core;

class Response {

	public function redirect($url=null)
	{
		header("Location: $url");
		die();
	}

}