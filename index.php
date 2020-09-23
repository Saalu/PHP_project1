<?php 


function sayHello($name, $time= 'day'){
    echo "Good-$time $name, keep going <br/>";
}

sayHello('Saalu', 'afternoon');

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <h1>Testing</h1>
   
<ul>

</ul>


</body>
</html>