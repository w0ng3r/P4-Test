<?php
//function_test.php
 @package unitTesting
 @authorA: George Wong: <w0ng3r@gmail.com>
 @authorB: Grace Sangonpiyaphan: <ggrace5599@gmail.com>
 @version 1.0 2015/04/30 
 @link http://w0ng3r.dlinkddns.com/P4/run_all.php
 @license http://www.gnu.org/licenses/old-licenses/lgpl-2.1.en.html
 @see git_ItemClass.php
 @see git_ItemFunctions.php
 @see git_ItemOrderPage.php
 @see order-test.php
 @see run_all.php
 @see suite.php
 @see test-ItemClass.php
 @todo none 
require_once 'simpletest/autorun.php';
include 'git_itemFunctions.php';
include 'git_ItemClass.php';

//test order page/form by testing function to calculate the total and subtotal
class TestofOrderPage extends UnitTestCase {

    function TestCalculateTotal()
    {
      
       
       $orderArray = array(
            "TacosQuantity" => "5",
            "BurritoQuantity" => "2",
            "ChimichangaQuantity" => "0",
            "QuesadillaQuantity" => "1" ,
            "HorchataQuantity" => "0",
            "SodasQuantity" => "0",
            "ChurrosQuantity" => "0"
        );
        
    
        $menuItems[]=new Item("Tacos", 2.50, "Two Tacos made with your choice of meat. lettuce and guacamole");
        $menuItems[]=new Item("Burrito", 4.50, "Your choice of meat, rice, beans, tomato and grilled onions wrapped in a tortilla skin");
        $menuItems[]=new Item("Chimichanga", 4.75, "Deep Fried Burrito Goodness!");
        $menuItems[]=new Item("Quesadilla", 3.50, "Cheese and choice of meat, grilled to perfection");
        $menuItems[]=new Item("Horchata", 2.00, "Wash it down with our delicious, authentic Horchata");
        $menuItems[]=new Item("Sodas", 1.50, "Take your pick of our Mexican sodas!");
        $menuItems[]=new Item("Churros", 1.50, "Fried dough sprinkled with cinnamon and sugar.");
       
        $this->assertEqual(calculateTotal($orderArray, $menuItems), 25, "Total is correct");
       
        $this->assertEqual(calculateTotal(null, $menuItems), 0, "Total is correct");
       
        unset($orderArray);
        
        $orderArray = array(            
            "TacosQuantity" => "0",
            "BurritoQuantity" => "0",
            "ChimichangaQuantity" => "0",
            "QuesadillaQuantity" => "0" ,
            "HorchataQuantity" => "0",
            "SodasQuantity" => "0",
            "ChurrosQuantity" => "0"
                           );
        $this->assertEqual(calculateTotal($orderArray, $menuItems), 0, "Total is correct");
    }
    //test to create a new row of new item
    function TestGenerateItemRow() 
    {
        
        $tempItem = new Item("Food", 2, "Just any old food");
        $expected = '
    <tr>
        <td>  Food</td>
        <td>  Just any old food
        </td>
        <td>   $2
        </td>

        <td>
        <select name="FoodQuantity">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        </select> 
        <br/>
        </td>
        </tr>
        ';

        //print a tesing on the new row generated
        $this->assertEqual(generateItemRow($tempItem), $expected );
        
        
        
        
        
    }

}
