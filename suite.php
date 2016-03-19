<?php
//suite.php
/*
Use to setup a test suite and run
automated tests
*/
require_once 'simpletest/autorun.php';

class AllTests extends TestSuite {
    function AllTests() {
        $this->TestSuite('All tests');
        $this->addFile('order-test.php');
		$this->addFile('function-test.php');
	
    }
}
?>
