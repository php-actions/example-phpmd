<?php
namespace App;

class Greeter {
	public function greet(?string $n = null):string {
		if($n) {
			return "Hello, $n!";
		}

		return "Hello!";
	}
}
