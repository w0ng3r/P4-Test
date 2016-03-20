<?php
//run_all.php
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
 @see suite.php
 @see test-ItemClass.php
 @todo none 

/*
Will attempt to run all test files in the current folder, 
inside separate iframes.

Good for a detailed view of the test files.

*/

if ($handle = opendir('.')) {
	$str = '';
    while (false !== ($entry = readdir($handle))) {

		//to be run, the file name must include .php and "test"
        if ($entry != "." && $entry != ".."  && strpos($entry,'.php') != false && strpos($entry,'test')!=false) {
			$str .= 
			'
			<iframe width="100%" height="300px" src="' . $entry . '">
			</iframe>';
        }
    }
	echo $str;
    closedir($handle);
}
