<?php
require('../../function.php');

$category_id = $_GET['category_id'];
$LG_id = $_GET['LG_id'];
$enemy = $_GET['enemy'];
$trainer1 = $_GET['trainer1'];
$trainer2 = $_GET['trainer2'];
$trainer3 = $_GET['trainer3'];
$luckyskill1 = $_GET['luckyskill1'];
$luckyskill2 = $_GET['luckyskill2'];
$luckyskill3 = $_GET['luckyskill3'];
$URL1 = $_GET['URL1'];
$URL2 = $_GET['URL2'];
$URL3 = $_GET['URL3'];

$party = [];
$party['category_id'] = $category_id;
$party['LG_id'] = $LG_id;
$party['enemy_id'] = $enemy;
$party['trainer_id1'] = $trainer1;
$party['trainer_id2'] = $trainer2;
$party['trainer_id3'] = $trainer3;
$party['luckyskill_id1'] = $luckyskill1;
$party['luckyskill_id2'] = $luckyskill2;
$party['luckyskill_id3'] = $luckyskill3;
$party['URL1'] = $URL1;
$party['URL2'] = $URL2;
$party['URL3'] = $URL3;
add_LGparty($party);
redirect("PoMaEX-main/PHP/LG/LG-party-list.php?category_id=" . special($category_id) . "&LG_id=" . special($LG_id));
