<?php
class Question1Test extends PHPUnit_Framework_TestCase {
	public function testShouldPopulate() {
		$question = new Question1();
		$this->assertEquals(count($question->arr), 0);
		$question->populate(5);
		$this->assertEquals(count($question->arr), 5);
	}

	public function testShouldPopulateAscending() {
		$question = new Question1();
		$question->populate(5);

		$arr = $question->arr;
		$this->assertEquals($arr[0], 1);
		$this->assertEquals($arr[1], 2);
		$this->assertEquals($arr[2], 3);
		$this->assertEquals($arr[3], 4);
		$this->assertEquals($arr[4], 5);
	}
}