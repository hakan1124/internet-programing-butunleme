<!--register.php-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <title>Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
</head>
<body>

<?php
session_start(); //oturum başlattık
include("inc/vt.php"); //veri tabanına bağlandık 

//Giriş formu doldurulmuşsa kontrol ediyoruz
if ($_POST) {
    $txtKadi = $_POST["txtKadi"]; //Kullanıcı adını değişkene atadık
    $txtParola = $_POST["txtParola"]; //Parolayı değişkene atadık
    $txtParolaTekrar = $_POST["txtParolaTekrar"]; //Parolayı değişkene atadık
}
?>
<!-- Formumuzu oluşturuyoruz-->
<form id="form1" method="post" class="container">
    <div class="row align-content-center justify-content-center ">
        <div class="col-md-3 kutu">
            <h3 class="text-center">KAYIT OL</h3>
            <table class="table">
                <tr>
                    <td>
                        <!-- Kullanıcı adı form gönderildiğinde kaybolmasın diye value ya ekliyoruz-->
                        <input type="text" ID="txtKadi" name="txtKadi" class="form-control" placeholder="Kullanıcı adı" value='<?php echo @$txtKadi ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" ID="txtParola" name="txtParola" class="form-control" placeholder="Parola"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" ID="txtParolaTekrar" name="txtParolaTekrar" class="form-control" placeholder="Parola Tekrar"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        //Post varsa yani submit yapılmışsa veri tabanından kontrolü yapıyoruz.
                        if ($_POST) {

                            //Verilerin düzgün girilip girilmediğini kontrol ediyoruz
                            if ($txtParola == $txtParolaTekrar && $txtParola != '' && $txtKadi != '') {
                                //parolayı belilirlediğimiz şekilde şifreliyip veri tabanına yazıyoruz
                                $txtParola = md5('56' . $txtParola . '23');
                                if ($sorgu = $baglanti->query("INSERT INTO kullanicilar (kadi, parola) VALUES ('$txtKadi', '$txtParola')"))
                                {
                                    header("location:index.php"); //kayıt başarılı ise sayfayı yönlendiriyoruz
                                }
                                else
                                {
                                    echo 'bir hata oldu tekrar deneyin';
                                }
                            }
                            else
                            {
                                //eğer kullanıcı adı ve parola boş ve paralolar uyuşmuyorsa
                                //hata mesajı verdiriyoruz
                                echo "Alanları düzgün doldurunuz";
                            }
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Kaydet"/>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <a href="index.php" class="btn btn-danger btn-block"> Ana Sayfa </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>
</body>
</html>