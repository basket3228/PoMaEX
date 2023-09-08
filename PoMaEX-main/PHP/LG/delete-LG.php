<?php
require('../../function.php');
$eventnumber = $_GET['eventnumber'];
$category_id = $_GET['category_id'];

delete_LG($eventnumber);
redirect("PoMaEX-main/PHP/LG/LGList.php?category_id=" . $category_id);