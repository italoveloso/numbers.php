<?php
	test('mode should return most common value in array', testStatisticMode);
	function testStatisticMode() {
		return NumbersStatistic::mode(array(0, 1, 1, 1, 2, 4, 6)) == 1;
	}