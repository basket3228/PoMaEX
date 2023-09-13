<?php
require('../../function.php');
$category_id = $_GET['category_id'];

$name = $_GET['name'];
$eventnumber = $_GET['eventnumber'];
$enemy1 = $_GET['enemy1'];
$enemy2 = $_GET['enemy2'];
$enemy3 = $_GET['enemy3'];

$LG = [];
$LG['name'] = $name;
$LG['eventnumber'] = $eventnumber;
$LG['enemy_id1'] = $enemy1;
$LG['enemy_id2'] = $enemy2;
$LG['enemy_id3'] = $enemy3;
add_LG($LG);

redirect("PoMaEX-main/PHP/LG/LGList.php?category_id=" . $category_id);
