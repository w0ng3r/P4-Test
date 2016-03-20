<?php
//suite.php
 @package unitTesting
 @authorA: George Wong: <w0ng3r@gmail.com>
 @authorB: Grace Sangonpiyaphan: <ggrace5599@gmail.com>
 @version 1.0 2015/04/30 
 @link http://w0ng3r.dlinkddns.com/P4/run_all.php
 @license http://www.gnu.org/licenses/old-licenses/lgpl-2.1.en.html
 @see function-test.php
 @see git_ItemClass.php
 @see git_ItemFunctions.php
 @see git_ItemOrderPage.php
 @see order-test.php
 @see run_all.php
 @see test-ItemClass.php
 @todo none

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
