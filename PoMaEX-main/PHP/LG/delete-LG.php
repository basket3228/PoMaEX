<?php
require('../../function.php');
$eventnumber = $_GET['eventnumber'];

delete_LG($eventnumber);
redirect("PoMaEX-main/PHP/LG/LGList.php");
