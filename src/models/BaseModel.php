<?php

namespace App\Models;

use App\Core\Database;

class BaseModel {

	protected $db;

	public function __construct()
	{
		$dbClass = new Database();
		$this->db = $dbClass->getConnection();
	}
}