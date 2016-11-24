<?php

namespace App\Utils;

class FileReader {

	public function readjson($path)
	{
		if(file_exists($path)) {
			return json_decode(file_get_contents($path));
		}

		return false;
	}
}