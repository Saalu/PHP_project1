<?php

//connect to database      host      username:    pass:        database:  
$conn = mysqli_connect( 'localhost', 'saalu', '123allahu', 'great_pizza');

// check connection
if(!$conn){
    echo 'Connection error' . mysqli_connect_error();
}

// write query for all pizzas fom table(pizzas)
$sql = 'SELECT title, ingredients, id FROM pizzas';

//make query & get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free results from memory
mysqli_free_result($result);

// close connection
mysqli_close($pizzas);


print_r($pizzas);


?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php');  ?>

<?php include('templates/footer.php');  ?>

</html>