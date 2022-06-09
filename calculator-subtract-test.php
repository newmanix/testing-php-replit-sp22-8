<?php
//calculator-subtract-test.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase {
	function testSubtract() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->subtract(4,2), 2, "4 - 2");
	  $this->assertEqual($myCalc->subtract(7,3), 4, "7 - 3");
	}
}