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

	public function __get($name) {
		return $this->$name;
	}
}