<?php
require('config.php');

$bannerImage = $baglanti->query("SELECT banner_img FROM banner WHERE banner_id = 1");
$bannerImageQuery = $bannerImage->fetch_array();


?>