<?php
require('../../function.php');

if (isset($_GET['LGparty_id'])) {
    $LGparty_id = $_GET['LGparty_id'];
        $URL = $_GET['URL'];
        add_LG_grids($URL, $LGparty_id);
        redirect("PoMaEX-main/PHP/General/party-detail.php?LGparty_id=" . special($LGparty_id));
} else if (isset($_GET['CSparty_id'])) {
    $CSparty_id = $_GET['CSparty_id'];
        $URL = $_GET['URL'];
        add_CS_grids($URL, $CSparty_id);
        redirect("PoMaEX-main/PHP/General/party-detail.php?CSparty_id=" . special($CSparty_id));
} else if (isset($_GET['SAparty_id'])) {
    $CSparty_id = $_GET['SAparty_id'];
        $URL = $_GET['URL'];
        add_SA_grids($URL, $SAparty_id);
        redirect("PoMaEX-main/PHP/General/party-detail.php?SAparty_id=" . special($SAparty_id));
}

