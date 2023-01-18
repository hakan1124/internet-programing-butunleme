<?php
@$baglanti= new mysqli("localhost","root","","login");
	if($baglanti->connect_error)
	{
		echo $baglanti->connect_error." hatası oluştu";
		exit;
	}

$baglanti->set_charset("utf8");
?>