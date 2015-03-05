<?php
class Question1Test extends PHPUnit_Framework_TestCase {
	public function testShouldPopulate() {
		$question = new Question1();
		$this->assertEquals(0, count($question->arr));
		$question->populate(5);
		$this->assertEquals(5, count($question->arr));
	}

	public function testShouldPopulateAscending() {
		$question = new Question1();
		$question->populate(5);

		$arr = $question->arr;
		$this->assertEquals(1, $arr[0]);
		$this->assertEquals(2, $arr[1]);
		$this->assertEquals(3, $arr[2]);
		$this->assertEquals(4, $arr[3]);
		$this->assertEquals(5, $arr[4]);
	}

	public function testShouldSortSameLength() {
		$question = new Question1();
		$question->populate(5);

		$sorted = $question->sort();

		$this->assertEquals(5, count($sorted));
	}

	public function testShouldSort() {
		$question = new Question1();
		$question->populate(5);

		$sorted = $question->sort();

		$this->assertEquals(5, $sorted[0]);
		$this->assertEquals(1, $sorted[1]);
		$this->assertEquals(4, $sorted[2]);
		$this->assertEquals(2, $sorted[3]);
		$this->assertEquals(3, $sorted[4]);
	}

	public function testShouldSortFastSameLength() {
		$question = new Question1();
		$question->populate(5);

		$sorted = $question->sortFast();

		$this->assertEquals(5, count($sorted));
	}

	public function testShouldSortFast() {
		$question = new Question1();
		$question->populate(5);

		$sorted = $question->sortFast();

		$this->assertEquals(5, $sorted[0]);
		$this->assertEquals(1, $sorted[1]);
		$this->assertEquals(4, $sorted[2]);
		$this->assertEquals(2, $sorted[3]);
		$this->assertEquals(3, $sorted[4]);
	}

	public function testIndexOf() {
		$question = new Question1();
		$question->populate(5);

		$sorted = $question->sortFast();

		$this->assertEquals(0, $question->indexOf(5, $sorted));
	}
}