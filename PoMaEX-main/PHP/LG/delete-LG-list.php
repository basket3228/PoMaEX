<?php
require('../../function.php');

$LGparty_id = $_GET['LGparty_id'];
$LG_id = $_GET['LG_id'];
$category_id = $_GET['category_id'];

deleteLGparty($LGparty_id);
redirect("PoMaEX-main/PHP/LG/LG-party-list.php?category_id=" . $category_id . "&LG_id=" . $LG_id);
