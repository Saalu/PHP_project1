<?php 
// exaple 1
function sayHello($name, $time= 'day'){
    echo "Good-$time $name, keep going <br/>";
}
sayHello('Saalu', 'afternoon');

// example 2
function formatProduct($product){
   // echo "{$product['name']} costs {$product['price']} to buy <br/>";
   return "{$product['name']} costs {$product['price']} to buy <br/>";

}

$formatted = formatProduct(['name' => 'Watch', 'price'=> 30]);
echo $formatted;


// example 2
//variable Scope

$name = 'sir';

function myFunc(){
    global $name;
    $name = 'Madam';
    echo "Hello $name";
}

myFunc()


?>