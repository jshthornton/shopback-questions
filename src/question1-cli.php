<?php
require(__DIR__ . DIRECTORY_SEPARATOR . 'autoload.php');

$handle = fopen($argv[1], 'r');

if ($handle) {
	$line_number = 0;
	while (($line = fgets($handle)) !== false) {
		$line_number++;

		if($line_number === 1) {
			$t = $line;
			continue;
		}

		if($line_number > $t + 1) {
			break;
		}

		$values = explode(' ', $line);
		$n = $values[0];
		$k = $values[1];
		unset($values);

		$question = new Question1();

		// Use `>` in the terminal to pipe the stdout to a textfile if required.
		echo $question->predictiveIndexOf($k, ($n - 1)), "\r\n";
	}

	fclose($handle);
} else {
	throw new Exception('Unable to open file ' . $argv[1]);
}

?>