<?php
//functions
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
 @see suite.php
 @see test-ItemClass.php
 @todo none 

function generateItemRow(Item $tempItem)
{

    $return = '
    <tr>
        <td>  '. $tempItem->name .'</td>
        <td>  '. $tempItem->description .'
        </td>
        <td>   $'.$tempItem->price.'
        </td>

        <td>
        <select name="'. $tempItem->name . 'Quantity">
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


    
    return $return;
}   


function calculateTotal($itemsOrdered, $menuItems)
{
	$total=0;
    
  
    foreach($menuItems as $tempItem) //while the array has items left in it
            {
                
               if ($itemsOrdered[$tempItem->name.'Quantity'] > 0) //call create row function and pass in individual item
               {
                   $total = $total + ($itemsOrdered[$tempItem->name.'Quantity']*$tempItem->price);
                   
               }
            }
    return $total;
    
      
 
    
}
