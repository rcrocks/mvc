<?php

namespace App\Controllers;

use App\Models\Post;

class PostController extends Controller {

	public function add()
	{
		if ($this->request->isPosted()) {

			//simple validation
			$formErrors = new \stdclass();
			$validation = true;
			if(!$this->validator->isValidText($this->request->getParam('title'))) {
				$validation = false;
				$formErrors->title = "Invalid title";
			}

			if(!$this->validator->isValidText($this->request->getParam('content'))) {
				$validation = false;
				$formErrors->title = "Invalid content";
			}

			if($validation){
				$post = new Post();
				$post->addPost('myslug',
								$this->request->getParam('title'), 
								$this->request->getParam('content'),
								1, 1);
				$this->response->redirect('/');

			} else {
				return $this->view->render('addpost', [
					$formErrors
				]);
			}

		} else {
			$this->view->render('addpost');
		}
	}

}