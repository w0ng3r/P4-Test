<?php
//page_test.php

require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class TestPage extends WebTestCase {

    function testSelectQuantity() 
    {
          
        $this->get("http://w0ng3r.dlinkddns.com/p4/git_ItemOrderPage.php");
        $this->assertResponse(200);
        $this->assertField("TacosQuantity","0");
        $this->setField("TacosQuantity", "5");
        $this->setField("HorchataQuantity", "9");
        $this->assertField("TacosQuantity","5","Taco quantity is incorrect");
        $this->assertField("HorchataQuantity","9","Horchata quantity is incorrect");


    }

    
    function testSubmitOrder()
    {
     
        $this->get("http://w0ng3r.dlinkddns.com/p4/git_ItemOrderPage.php");
        $this->setField("TacosQuantity", "5");
        $this->setField("QuesadillaQuantity", "1");
        $this->setField("BurritoQuantity", "2");
        $this->assertField("TacosQuantity","5");
        $this->assertField("QuesadillaQuantity","1");
        $this->assertField("BurritoQuantity","2");
        $this->clickSubmit("Submit");  
        $this->assertResponse(200);
        $this->assertText("Your order total is $25");
    }//testSubmitOrder

}//testpage