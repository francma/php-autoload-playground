<?php declare(strict_types = 1);

namespace Web4U\Math;

use Web4U\Utils\Assert;

class MathLib {

	function add($a, $b) {
		Assert::int($a);
		Assert::int($b);

		return $a + $b;
	}

	function sub($a, $b) {
		Assert::int($a);
		Assert::int($b);

		return $a - $b;
	}

}