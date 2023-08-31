<?php
require('../../function.php');

$name = $_GET['name'];
$eventnumber = $_GET['eventnumber'];
$enemy1 = $_GET['enemy1'];
$enemy2 = $_GET['enemy2'];
$enemy3 = $_GET['enemy3'];
$category = $_GET['category'];

$LG = [];
$LG['name'] = $name;
$LG['eventnumber'] = $eventnumber;
$LG['enemy_id1'] = $enemy1;
$LG['enemy_id2'] = $enemy2;
$LG['enemy_id3'] = $enemy3;
$LG['category_id'] = $category;
add_LG($LG);
redirect('PoMaEX-main/PHP/LG/LGList.php');
