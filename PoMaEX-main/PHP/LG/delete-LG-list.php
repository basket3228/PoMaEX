<?php
require('../../function.php');

$LGparty_id = $_GET['LGparty_id'];
$LG_id = $_GET['LG_id'];

deleteLGparty($LGparty_id);
redirect("PoMaEX-main/PHP/LG/LG-party-list.php?LG_id=" . special($LG_id));

