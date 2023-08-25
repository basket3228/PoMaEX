<?php
require('../function.php');

$party_id = $_GET['party_id'];

if (isset($_GET['trainer_id'])) {
    $trainer_id = $_GET['trainer_id'];
    delete1($trainer_id);
    delete2($trainer_id);
    delete3($trainer_id);
}
redirect('PoMaEX-main/PHP/party-detail.php?party_id=' . $party_id);
