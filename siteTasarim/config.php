<?php
$host = 'localhost';
$user = 'root';
$database = 'adminpanel';
$password = '';


$baglanti = new mysqli($host,$user,$password,$database);

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}




$baglanti->set_charset("utf8");


?>
