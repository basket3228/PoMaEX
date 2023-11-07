<?php
require('../../function.php');

$LGparty_id = $_POST['LGparty_id'];
$trainer_id1 = convertNull($_POST['trainer_id1']);
$trainer_id2 = convertNull($_POST['trainer_id2']);
$trainer_id3 = convertNull($_POST['trainer_id3']);

update_party1($trainer_id1, $LGparty_id);
update_party2($trainer_id2, $LGparty_id);
update_party3($trainer_id3, $LGparty_id);


redirect("PoMaEX-main/PHP/General/party-detail.php?LGparty_id=" . special($LGparty_id));

function convertNull($trainer_id)
{
  if (empty($trainer_id)) {
    $trainer_id = null;
  }
  return $trainer_id;
}
