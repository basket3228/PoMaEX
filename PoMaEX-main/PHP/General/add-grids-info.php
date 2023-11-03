<?php
require('../../function.php');

$category_id = $_GET['category_id'];

if (isset($_GET['LGparty_id'])) {
    $LGparty_id = $_GET['LGparty_id'];
    if ($category_id == 1) {
        $URL = $_GET['URL'];
        add_LG_grids($URL, $LGparty_id);
        redirect("PoMaEX-main/PHP/General/party-detail.php?LGparty_id=" . special($LGparty_id) . "&category_id=" . special($category_id));
    }
} else if (isset($_GET['CSparty_id'])) {
    $CSparty_id = $_GET['CSparty_id'];
    if ($category_id == 2) {
        $URL = $_GET['URL'];
        add_CS_grids($URL, $CSparty_id);
        redirect("PoMaEX-main/PHP/General/party-detail.php?CSparty_id=" . special($CSparty_id) . "&category_id=" . special($category_id));
    }
} else if (isset($_GET['SAparty_id'])) {
    $CSparty_id = $_GET['SAparty_id'];
    if ($category_id == 3) {
        $URL = $_GET['URL'];
        add_SA_grids($URL, $SAparty_id);
        redirect("PoMaEX-main/PHP/General/party-detail.php?SAparty_id=" . special($SAparty_id) . "&category_id=" . special($category_id));
    }
}
