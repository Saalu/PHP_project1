<?php

$name = "Saalu";
// =========index arrays==================
 $colors = ['red', 'blue', 'grey'];
$names = ['ama', 'kofi', 'manu'];

 $colorsTwo = array('yellow', 'red', 'black');


$colorsTwo[2] = "cyan";
echo strlen($name);

// print_r($colorsTwo);

$allItems = array_merge($colors, $names);


array_push($colors, "white");
//  print_r($allItems);


// ===========associative arrays(key $ value pairs)========
 $phones = ['blk' => 'black' , 'yel' => 'yellow', 'org' => 'orange'];

print_r($phones)


?>