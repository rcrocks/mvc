<?php

namespace App\Core;

class Validator {

	public function isValidText($text)
	{
		if (preg_match("/[^A-Za-z0-9\!]/", $text))
		{
		    return false;
		}

		return true;
	}
}