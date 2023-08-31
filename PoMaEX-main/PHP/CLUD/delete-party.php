<?php
require('../../function.php');

$category_id = $_GET['category_id'];
if (isset($_GET['LGparty_id'])) {
    $LGparty_id = $_GET['LGparty_id'];
}

if (isset($_GET['LGparty_id'])) {
    delete1($LGparty_id);
    delete2($LGparty_id);
    delete3($LGparty_id);
}
redirect('PoMaEX-main/PHP/General/party-detail.php?LGparty_id=$LGparty_id &category_id=$category_id');
