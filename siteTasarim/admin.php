<?php
include("config.php");
session_start();
if(!isset($_SESSION["Oturum"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "Admin sayfasina hosgeldiniz..<br>";
    echo "<form action='' method='post'>
<input name='guncel' type='text' placeholder='Hakkında içerğini değiştir'></input>
<input name='updateForm' type='submit'></input>
<form>";
    $icerikUpdate = $_POST['guncel'];
    if($_POST){
        
        if ($baglanti->query("UPDATE aboutus SET aboutus_text = '$icerikUpdate' WHERE aboutus_id =1")) 
        {
            header("location:aboutus.php"); 
        }
        else
        {
            echo "Hata oluştu";
        }
    }
echo "<a href=logout.php>Çıkış Yap</a>";
}
?>