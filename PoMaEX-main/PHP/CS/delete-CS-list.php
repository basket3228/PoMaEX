<?php
require('../../function.php');

$CSparty_id = $_GET['CSparty_id'];
$type_id = $_GET['type_id'];

deleteCSparty($CSparty_id);
redirect("PoMaEX-main/PHP/CS/CS-party-list.php?type_id=" . special($type_id));
