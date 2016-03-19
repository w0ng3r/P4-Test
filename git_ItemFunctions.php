<?php
//functions


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
