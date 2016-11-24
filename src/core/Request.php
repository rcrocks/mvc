<?php

namespace App\Core;

class Request {

	protected $path;
	protected $parts;
	protected $params;
	protected $posted;

	public function __construct()
	{
		$this->path = isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : FALSE;
		$this->parts = explode('/', trim($this->path, "/"));

		if($_POST) {
			$this->posted = true;
			foreach ($_POST as $key => $value) {
				$this->params[$key] = $value;
			}
		}

		if($_GET) {
			foreach ($_GET as $key => $value) {
				$this->params[$key] = $value;
			}
		}

		unset($_REQUEST, $_GET, $POST);
	}

	public function getRequestUri()
	{
		return $this->path;
	}

	public function getPart($key) 
	{
		return array_key_exists($key, $this->parts) ? $this->parts[$key] : FALSE;
	}

	public function getParts()
	{
		return $this->parts;
	}

	public function getParam($key)
	{
		return array_key_exists($key, $this->params) ? $this->params[$key] : FALSE;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function isPosted()
	{
		return $this->posted ? true : false;
	}
}