<?php



 $names = ['ama', 'kofi', 'manu'];

 $products = [
    ['name' => 'star', 'price' => 20],
    ['name' => 'moon', 'price' => 15],
    ['name' => 'sun', 'price' => 33],
    ['name' => 'night', 'price' => 40],
    ['name' => 'gingle', 'price' => 2],

];

    foreach($products as $product){
        // if($product['price'] <= 33 && $product['price'] > 15  ){
        //     echo $product['name'] . '<br />';
        // }

        if($product['price'] > 20 || $product['price'] < 15  ){
            echo $product['name'] . '<br />';
        }
    }

    // $price = 20 ;

    // if($price < 10){
    //     echo 'condition met';
    // }elseif ($price == 20) {
    //     # code...
    //     echo 'elseif condition met';
    // }
    // else{
    //     echo 'condition not met';

    // }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
</head>
<body>
    <h1>Products</h1>

    <ul>
        <?php foreach($products as $product){ ?>
            <?php if($product['price'] > 15) {?>
                <li><?php echo $product['name']?></li>
            <?php }?>

        <?php }?>
    </ul>

    <!-- <ul>
        <?php   foreach($products as $product) {?>
            <h3><?php echo $product['name']; ?></h3>
            <p> <?php echo $product['price']; ?> </p>

       <?php } ?>
    </ul> -->
</body>
</html>