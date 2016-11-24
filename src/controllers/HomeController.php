<?php

namespace App\Controllers;

use App\Models\Post;

class HomeController extends Controller {

	public function index ()
	{
		$posts = new Post();
		$this->view->render('home', [
			'exposts'	=>	$posts->getPosts()
		]);
	}

	public function test ()
	{
		var_dump($this->request->getParam('test'));die;
	}

}