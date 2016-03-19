<?php
//test-ItemClass.php

require_once 'simpletest/autorun.php';

include 'git_ItemClass.php';

class TestItemClass extends UnitTestCase {

    function TestConstructor()
    {
        $tempItem = new Item("Fish", "50", "Fresh Alaskan Cod! Just came in this morning!");
        $this->assertEqual($tempItem->name, "Fish");
        $this->assertEqual($tempItem->price, "50");
        $this->assertEqual($tempItem->description, "Fresh Alaskan Cod! Just came in this morning!");
    }
}