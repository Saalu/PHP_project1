<?php
// looping array
$products = ['milo', 'sardine', 'milk', 'magerine']

?>

<!--looping array inside HTML element -->
    <h1>Products</h1>
   
   <ul>
   
   <?php foreach($products as $product){  ?>
   
       <h3>  <?php echo $product ; ?> </h3>
   <?php } ?>
   </ul>