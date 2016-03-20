<?php
//page_test.php
@package unitTesting
@authorA: George Wong: <w0ng3r@gmail.com>
@authorB: Grace Sangonpiyaphan: <ggrace5599@gmail.com>
@version 1.0 2015/04/30 
@link http://w0ng3r.dlinkddns.com/P4/run_all.php
@license http://www.apache.org/licenses/LICENSE-2.0
@see function-test.php
@see git_ItemClass.php
@see git_ItemFunctions.php
@see git_ItemOrderPage.php
@see run_all.php
@see suite.php
@see test-ItemClass.php
@todo none 

require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

//test page with items selected
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

    //test page with the selected orders were submited
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
