    <?php
    //item order page
    include 'git_ItemClass.php';
    include 'git_ItemFunctions.php';

    $menuItems[]=new Item("Tacos", 2.50, "Two Tacos made with your choice of meat. lettuce and guacamole");
    $menuItems[]=new Item("Burrito", 4.50, "Your choice of meat, rice, beans, tomato and grilled onions wrapped in a tortilla skin");
    $menuItems[]=new Item("Chimichanga", 4.75, "Deep Fried Burrito Goodness!");
    $menuItems[]=new Item("Quesadilla", 3.50, "Cheese and choice of meat, grilled to perfection");
    $menuItems[]=new Item("Horchata", 2.00, "Wash it down with our delicious, authentic Horchata");
    $menuItems[]=new Item("Sodas", 1.50, "Take your pick of our Mexican sodas!");
    $menuItems[]=new Item("Churros", 1.50, "Fried dough sprinkled with cinnamon and sugar.");
   
	
	if (isset($_POST['orderedItems']))//items ordered, display summary and price
        {   
          
		
          
  
                      
         $totalCost = CalculateTotal($_POST, $menuItems);
            echo"Your order total is $$totalCost";
            echo'<br>';
        echo '<a href='. $_SERVER['PHP_SELF'] .'> Place Another Order! </a>';       
        }
       
        else if (!isset($_POST['orderedItems'])) //if nothing is ordered, print the menu
        {  
            echo '
            <html>
            
            <table>
            <form action = "git_ItemOrderPage.php"  method = "POST"> ';
            echo'<tr><th>Menu:</th></tr>';
            echo'<tr><td> Item: </td> <td> Description: </td> <td> Price:     </td><td> Quantity: </td></tr>';
            foreach($menuItems as $tempItem) //while the array has items left in it
            {
                $tempString = generateItemRow($tempItem); //call create row function and pass in individual item
                echo $tempString;
            }
               
    
         
	  echo  '<tr> <td><input type = "submit" name="orderedItems" value ="Submit"></td></tr>
               
	   	</tbody>
               
	
	    </form>
               
	   	</table>
        

    	
        
           
           
            
            
            
            
            
            
            ';
            

        }//if statement to generate menu + order form




      
