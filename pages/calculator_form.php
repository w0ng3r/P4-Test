<?php
//calculator_form.php
 @package unitTesting
 @authorA: George Wong: <w0ng3r@gmail.com>
 @authorB: Grace Sangonpiyaphan: <ggrace5599@gmail.com>
 @version 1.0 2015/04/30 
 @link http://w0ng3r.dlinkddns.com/P4/run_all.php
 @license http://www.gnu.org/licenses/old-licenses/lgpl-2.1.en.html
 @see function_test.php
 @see git_ItemClass.php
 @see git_ItemFunctions.php
 @see git_ItemOrderPage.php
 @see order-test.php
 @see run_all.php
 @see suite.php
 @see test-ItemClass.php
 @todo none 

if(isset($_POST['num1']))
{
	$total = (float)$_POST['num1'] + (float)$_POST['num2'];
	echo 
	'
	<html>
		<body>
			<h1>Thank you!</h1>
			<p>Your total is ' . $total . '</p>
		</body>
	</html>
	';

}else{
	echo 
	'
	<html>
		<body>
			<form action="calculator_form.php" method="post">
			First Number: <input type="text" name="num1" /><br />
			Second Number: <input type="text" name="num2" /><br />
			<input type="submit" value="Add Em!" />
			</form>
		</body>
	</html>
	';

}

?>
