<?php
class Question1Test extends PHPUnit_Framework_TestCase {
	public function testShouldPopulate() {
		$question = new Question1();
		$this->assertEquals(count($question->arr), 0);
		$question->populate(5);
		$this->assertEquals(count($question->arr), 5);
	}
}