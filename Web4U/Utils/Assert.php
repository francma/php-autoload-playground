<?php declare(strict_types = 1);

namespace Web4U\Utils;

use RuntimeException;

class Assert {

	static function int($a) {
		if(!is_numeric($a)) throw new RuntimeException;
	}

}