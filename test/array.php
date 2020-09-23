
<?php

$people = ['ama', 'kofi', 'yaw'];
$people[] = 'adwoa';

array_push($people, 'koo');

$items = ['so', 'is', 'to'];

//print_r($people);
$mergeBoth = array_merge($people, $items);
//print_r($mergeBoth);


// Associative Array
$students =array('Dan' => '20', 'Sam' => '34', 'Tee' => '16');

// Multi-Dimensional Array
$items = array(
    'online' =>array('Ama', 'Esi'),
    'offline' =>array('Dan', 'Joe'),
    'away' => array('Rob', 'Kay')
) ;


$status = [
    ['title' => 'book',  'author' => 'mike'],
    ['title' => 'Jam',  'author' => 'Necodamos'],
    ['title' => 'Zoo',  'author' => 'Amos']
];

$status[] = ['title' => 'Boo', 'author' => 'Saalu'];

$popped = array_pop($status);
print_r($popped);

?>