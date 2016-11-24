<?php

namespace App\Core;

class Database {

	protected $pdo;

	public function __construct()
	{
		try{

			if(defined("DB_HOST") && defined("DB_PORT") && defined("DB_USERNAME") && defined("DB_PASSWORD") && defined("DB_NAME")) {
				$dsn = 'mysql:host=' . DB_HOST . ';';
				$dsn .= 'port=' . DB_PORT . ';';
				$dsn .= "dbname=" . DB_NAME . ';';
				$dsn .= "charset=utf8";
				$this->pdo = new \PDO($dsn, DB_USERNAME, DB_PASSWORD, [
					\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
				]);
			} else {
				die("Database configurations are missing");
			}

		} catch (\PDOException $e) {
			die("Unable to connect");
		}

	}

	public function getConnection()
	{
		return $this->pdo;
	}

}