<?php 

// while loop
$i = 1;
while ($i < 7){
    echo "This value is $i <br/>";
    $i++;
}

//do-while loop
$x = 5;
do{
    echo "The number is " . $x . "<br/>";
    $x++;
}while($x <= 7);

for($a = 0; $a < 6; $a++){
    echo "Value of a : " . $a . "<br/>";
}

// foreach loop
$names = ['Kofi', 'Ama', 'Ako'];

foreach ($names as $name) {
    echo $name . "<br/>";

}

// switch control
$today = 'Tue';

switch($today){
    case "Mon":
        echo "Today is Monday";
    break;
    case "Tue":
        echo "Today is Tuesday";
    break;
    case "Wed":
        echo "Today is Wednesday";
    break;
    case "Thur":
        echo "Today is Thursday";
    break;
    case "Fri":
        echo "Today is Friday";
    break;
    default;
    echo "Invalid day";
    
}

echo "<br/>";
// continue statement
for($i = 0; $i< 10; $i++){
    if($i%2 == 0){
        continue;
    }
    echo $i . ' ';
}
echo "<br/>";
// looping array
$products = ['milo', 'sardine', 'milk', 'magerine']

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <h1>Products</h1>
   
<ul>


<?php foreach($products as $product){  ?>

    <h3>  <?php echo $product ; ?> </h3>
<?php } ?>
</ul>

</body>
</html>