<?php

$party_id = $_GET['party_id'];
$trainer1 = $_GET['trainer1'];
$trainer2 = $_GET['trainer2'];
$trainer3 = $_GET['trainer3'];
$lucky_skill1 = $_GET['lucky_skill1'];
$lucky_skill2 = $_GET['lucky_skill2'];
$lucky_skill3 = $_GET['lucky_skill3'];
$URL1 = $_GET['URL1'];
$URL2 = $_GET['URL2'];
$URL3 = $_GET['URL3'];

$sync = [];
$sync['party_id'] = $party_id;
$sync['trainer_id1'] = $trainer1;
$sync['trainer_id2'] = $trainer2;
$sync['trainer_id3'] = $trainer3;
$sync['lucky_skill_id1'] = $lucky_skill1;
$sync['lucky_skill_id2'] = $lucky_skill2;
$sync['lucky_skill_id3'] = $lucky_skill3;
$sync['PoMaTool_URL1'] = $URL1;
$sync['PoMaTool_URL2'] = $URL2;
$sync['PoMaTool_URL3'] = $URL3;

add_sync($sync);
redirect('PoMaEX-main/PHP/add-sync.php');
