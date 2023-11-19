<?php
require('../../function.php');

$LGparty_id = $_GET['LGparty_id'];
if (isset($_GET['trainer_id1'])) {
    deleteLGDetail1($LGparty_id);
} else if (isset($_GET['trainer_id2'])) {
    deleteLGDetail2($LGparty_id);
} else if (isset($_GET['trainer_id3'])) {
    deleteLGDetail3($LGparty_id);
}

redirect("PoMaEX-main/PHP/General/party-detail.php?LGparty_id=" . special($LGparty_id));
