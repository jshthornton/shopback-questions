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
		$this->assertEquals(0, $arr[0]);
		$this->assertEquals(1, $arr[1]);
		$this->assertEquals(2, $arr[2]);
		$this->assertEquals(3, $arr[3]);
		$this->assertEquals(4, $arr[4]);
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

		$this->assertEquals(4, $sorted[0]);
		$this->assertEquals(0, $sorted[1]);
		$this->assertEquals(3, $sorted[2]);
		$this->assertEquals(1, $sorted[3]);
		$this->assertEquals(2, $sorted[4]);
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

		$this->assertEquals(4, $sorted[0]);
		$this->assertEquals(0, $sorted[1]);
		$this->assertEquals(3, $sorted[2]);
		$this->assertEquals(1, $sorted[3]);
		$this->assertEquals(2, $sorted[4]);
	}

	public function testIndexOf() {
		$question = new Question1();
		$question->populate(5);

		$sorted = $question->sortFast();

		$this->assertEquals(0, $question->indexOf(5, $sorted));
	}

	public function testPredictiveIndexOf() {
		$question = new Question1();

		$index = $question->predictiveIndexOf(4, 5);
		$this->assertEquals(0, $index);

		$index = $question->predictiveIndexOf(5, 6);
		$this->assertEquals(0, $index);

		$index = $question->predictiveIndexOf(1, 6);
		$this->assertEquals(3, $index);

		// 7
		$index = $question->predictiveIndexOf(0, 7);
		$this->assertEquals(1, $index);
		
		$index = $question->predictiveIndexOf(1, 7);
		$this->assertEquals(3, $index);
		
		$index = $question->predictiveIndexOf(2, 7);
		$this->assertEquals(5, $index);
		
		$index = $question->predictiveIndexOf(3, 7);
		$this->assertEquals(6, $index);
		
		$index = $question->predictiveIndexOf(4, 7);
		$this->assertEquals(4, $index);
		
		$index = $question->predictiveIndexOf(5, 7);
		$this->assertEquals(2, $index);
		
		$index = $question->predictiveIndexOf(6, 7);
		$this->assertEquals(0, $index);

		// 8
		$index = $question->predictiveIndexOf(0, 8);
		$this->assertEquals(1, $index);
		
		$index = $question->predictiveIndexOf(1, 8);
		$this->assertEquals(3, $index);
		
		$index = $question->predictiveIndexOf(2, 8);
		$this->assertEquals(5, $index);
		
		$index = $question->predictiveIndexOf(3, 8);
		$this->assertEquals(7, $index);
		
		$index = $question->predictiveIndexOf(4, 8);
		$this->assertEquals(6, $index);
		
		$index = $question->predictiveIndexOf(5, 8);
		$this->assertEquals(4, $index);
		
		$index = $question->predictiveIndexOf(6, 8);
		$this->assertEquals(2, $index);
		
		$index = $question->predictiveIndexOf(7, 8);
		$this->assertEquals(0, $index);
	}
}