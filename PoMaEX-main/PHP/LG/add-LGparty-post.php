<?php
require('../../function.php');

$LG_id = $_GET['LG_id'];

$N1 = $_GET['1'];
$L1 = $_GET['101'];
$N2 = $_GET['2'];
$L2 = $_GET['102'];
$N3 = $_GET['3'];
$L3 = $_GET['103'];

?>
<?php do { ?>
    <?php
    $E1 = $_GET['1001'];
    if ($N1 != null && $L1 != null) {
        $N1 = $_GET['1'];
        $L1 = $_GET['101'];
    } else {
        $N1 = null;
        $L1 = null;
    }

    $N2 = $_GET['2'];
    $L2 = $_GET['102'];
    $N3 = $_GET['3'];
    $L3 = $_GET['103'];

    // $URL = $_GET['URL'];

    $party = [];
    $party['LG_id'] = $LG_id;
    $party['enemy_id'] = $E1;
    $party['trainer_id1'] = $N1;
    $party['trainer_id2'] = $N2;
    $party['trainer_id3'] = $N3;
    $party['luckyskill_id1'] = $L1;
    $party['luckyskill_id2'] = $L2;
    $party['luckyskill_id3'] = $L3;
    // $party['URL'] = $URL;
    var_dump($party);
    add_LGparty($party);
    ?>
<?php } while ($E != null && $N1 != null && $N2 != null && $N3 != null && $L1 != null && $L2 != null && $L3 != null) ?>

<?php
redirect("PoMaEX-main/PHP/LG/LG-party-list.php?LG_id=" . special($LG_id));
?>


