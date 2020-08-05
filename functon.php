<?php 


function sayHello($name='saalih', $time = 'evening'){
    echo "good $time $name";
}

sayHello('Adjoa', 'night');

function formatPro($product){
   // echo "{$product['name']} cost {$product['price']} to buy <br />";
    return "{$product['name']} cost {$product['price']} to buy <br />";
}

$formatted = formatPro(['name' => 'gold stars', 'price' => 20]);
echo $formatted;

?>