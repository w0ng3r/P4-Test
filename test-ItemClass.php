<?php
//test-ItemClass.php
@package unitTesting
@authorA: George Wong: <w0ng3r@gmail.com>
@authorB: Grace Sangonpiyaphan: <ggrace5599@gmail.com>
@version 1.0 2015/04/30 
@link http://w0ng3r.dlinkddns.com/P4/run_all.php
@license http://www.apache.org/licenses/LICENSE-2.0
@see function-test.php
@see git_ItemFunctions.php
@see git_ItemOrderPage.php
@see order-test.php
@see run_all.php
@see suite.php
@todo none 
require_once 'simpletest/autorun.php';

include 'git_ItemClass.php';
//this is to test item class
class TestItemClass extends UnitTestCase {
    //this is a function to test a new item adding into the list
    function TestConstructor()
    {
        $tempItem = new Item("Fish", "50", "Fresh Alaskan Cod! Just came in this morning!");
        $this->assertEqual($tempItem->name, "Fish");
        $this->assertEqual($tempItem->price, "50");
        $this->assertEqual($tempItem->description, "Fresh Alaskan Cod! Just came in this morning!");
    }
}
