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

	public function &sortFast() {
		$arr = $this->arr;

		$sorted = array();
		$times = count($arr);
		$position = 'end';

		for($i = 0; $i < $times; $i++) {
			if($position === 'end') {
				$sorted[] = array_pop($arr);
				$position = 'start';
			} else if($position === 'start') {
				$sorted[] = array_shift($arr);
				$position = 'end';
			}
		}

		return $sorted;
	}

	public function indexOf($needle, &$haystack) {
		return array_search($needle, $haystack, true);
	}

	public function __get($name) {
		return $this->$name;
	}
}