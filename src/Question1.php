<?php

class Question1 {
	private $arr = array();

	public function populate($n) {
		unset($this->arr);
		$this->arr = array();

		for($i = 1; $i <= $n; $i++) {
			$this->arr[] = $i;
		}
	}

	public function &sort() {
		$arr = $this->arr;

		$sorted = array();
		$times = count($arr);

		for($i = 0; $i < $times; $i++) {
			$arr = array_reverse($arr);
			$sorted[] = array_shift($arr);
		}

		return $sorted;
		}

		return $locked;
		return $sorted;
	}

	public function __get($name) {
		return $this->$name;
	}
}