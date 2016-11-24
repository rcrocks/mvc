<?php

namespace App\Core;

class Resolver {

	public function __construct(Request $request, Response $response, Render $render, Validator $validator)
	{
		$this->request = $request;
		$this->response = $response;
		$this->render = $render;
		$this->validator = $validator;
	}

	public function resolve() 
	{
		$subController = strtolower($this->request->getPart(0));
		$approvedControllers = ['home', 'post'];

		switch ($subController) {
			case '/':
			$subController = 'home';
			break;

			case 'post':
			$subController = 'post';
			break;

			default:
			$subController = 'home';
			break;
		}

		if (in_array($subController, $approvedControllers)) {
			$subController .= "Controller"; 
		} else {
			$subController = "HomeController";
		}

		$subController = ucfirst($subController);
		$subController = "App\Controllers\\$subController";
		return new $subController($this->request, $this->response, $this->render, $this->validator);
	}
}