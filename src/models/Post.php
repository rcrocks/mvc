<?php

namespace App\Models;

use App\Core\Database;

class Post extends BaseModel {

	public function getPosts()
	{
		$query = $this->db->prepare("SELECT * FROM posts");
		try{
			$query->execute();
			return $query->fetchAll(\PDO::FETCH_ASSOC);
		}
		catch(\PDOException $e) {
			die('Unable to retrive posts');
		}
	}

	public function addPost($slug, $title, $content, $created_by, $status)
	{
		$query = $this->db->prepare("INSERT INTO posts (slug, title, content, created_on, created_by, status) VALUES (?, ?, ?, NOW(), ?, ?)");
		try{
			$query->execute([
				$slug, $title, $content, $created_by, $status 
			]);
		}
		catch(\PDOException $e) {
			die($query->queryString);
			die('Unable to add the post ' . $e->getMessage());
		}
	}

}