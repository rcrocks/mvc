<?php

namespace App\Controllers;

use App\Core\Request;
use App\Core\Response;
use App\Core\Render;
use App\Core\Validator;

class Controller {

	public function __construct(Request $request, Response $response, Render $render, Validator $validator) 
	{
		session_start();
		$this->request = $request;
		$this->response = $response;
		$this->view = $render;
		$this->validator = $validator;
	}

	public function start() 
	{
		$action = $this->request->getPart(1);
		if($action) {
			if(method_exists($this, $action)) {
				return $this->$action();
			} else {
				$this->response->redirect('/');
			}
		}

		$this->index();
	}

	public function index() {
		echo "progress";
	}

}