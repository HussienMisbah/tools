<?php

$string= "0e";
$counter = 0 ;
while(True)
{
  
  $trial = $string.$counter ;
  if ($trial== md5($trial) )
 	 {

		//print 'pingo<br>';
		print 'the string is '.$trial.' and the hash is :'.md5($trial);
		break;
	 }

$counter++;
}

?>
