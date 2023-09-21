<?php
require('../../function.php');

$CSparty_id = $_GET['CSparty_id'];
$category_id = $_GET['category_id'];
if (isset($_GET['trainer_id1'])) {
    deleteCSDetail1($CSparty_id);
} else if (isset($_GET['trainer_id2'])) {
    deleteCSDetail2($CSparty_id);
} else if (isset($_GET['trainer_id3'])) {
    deleteCSDetail3($CSparty_id);
}

redirect("PoMaEX-main/PHP/General/party-detail.php?CSparty_id=" . special($CSparty_id) . "&category_id=" . special($category_id));
