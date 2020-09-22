<?php
//Example 1
$x = 10;
$y = 20;

if($x >= $y){
    echo $x;
}else {
    echo $y;
}

//Example 2
$age =21;

if($age <= 13){
    echo 'Child';
}elseif($age>13 && $age<19){
    echo 'Teenager';
}else{
    echo 'Adult';
}

?>