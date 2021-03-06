<?php

class Increment extends Benchmark_Abstract {

	const TEST_STRING = 'testString';

	public function getShortDescription() {
		return 'Pre and post increment';
	}

	public function getLongDescription() {
		return 'Post incrementing forces php to save the variable before incrementing it because it\'s original value is returned instead of the incremented one.';
	}

	public function getLoops() {
		return 400000;
	}

	public function benchmark_post_increment() {
		$j = 0;
		$j++;
	}

	public function benchmark_pre_increment() {
		$j = 0;
		++$j;
	}
}

