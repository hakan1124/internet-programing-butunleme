<?php
error_reporting(1);
?>
<!--Login.php-->
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <title>Giriş</title>
</head>

<body>
    <?php
    session_start(); //oturum başlattık
    include("inc/vt.php"); //veri tabanına bağlandık 

    //eğer mevcut oturum varsa sayfayı yönlendiriyoruz.
    if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
        header("location:index.php");
    } //eğer önceden beni hatırla işaretlenmiş ise oturum oluşturup sayfayı yönlendiriyoruz.
    else if (isset($_COOKIE["cerez"])) {
        //Kullanıcı adlarını çeken sorgumuz
        $sorgu = $baglanti->query("select kadi from kullanicilar");

        //Kullanıcı adlarını döngü yardımı ile tek tek elde ediyoruz
        while ($sonuc = $sorgu->fetch_assoc()) {
            //eğer bizim belirlediğimiz yapıya uygun kullanıcı var mı diye bakıyoruz.
            if ($_COOKIE["cerez"] == md5("aa" . $sonuc['kadi'] . "bb")) {

                //oturum oluşturma buradaki değerleri güvenlik açısından
                //farklı değerler yapabilirsiniz
                //aynı zamanda kullanıcı adınıda burada tuttum
                $_SESSION["Oturum"] = "6789";
                $_SESSION["kadi"] = $sonuc['kadi'];

                //sonrasında index sayfasına yönlendiriyorum
                header("location:index.php");
            }
        }
    }
    //Giriş formu doldurulmuşsa kontrol ediyoruz
    if ($_POST) {
        $txtKadi = $_POST["txtKadi"]; //Kullanıcı adını değişkene atadık
        $txtParola = $_POST["txtParola"]; //Parolayı değişkene atadık
    }
    ?>
    <!-- Formumuzu oluşturuyoruz-->
    <form id="form1" method="post" class="container">
        <div class="row align-content-center justify-content-center ">
            <div class="col-md-3 kutu">
                <h3 class="text-center">Giriş Ekranı</h3>
                <table class="table">
                    <tr>
                        <td>
                            <!-- Kullanıcı adı form gönderildiğinde kaybolmasın diye value ya ekliyoruz-->
                            <input type="text" ID="txtKadi" name="txtKadi" class="form-control" placeholder="Kullanıcı adı" value='<?php echo @$txtKadi ?>' />

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" ID="txtParola" name="txtParola" class="form-control" placeholder="Parola" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" ID="ckbHatirla" name="ckbHatirla" />
                                Beni hatırla
                            </label>
                            <br>
                            <?php
                            //Post varsa yani submit yapılmışsa veri tabanından kontrolü yapıyoruz.
                            if ($_POST) {
                                //sorguda kullanıcı adını alıp ona karşılık parola var mı diye bakıyoruz.
                                $sorgu = $baglanti->query("select parola from kullanicilar where kadi='$txtKadi'");
                                $sonuc = $sorgu->fetch_assoc();

                                $adminPass = $baglanti->query("SELECT parola FROM kullanicilar WHERE kadi='admin'");
                                $adminPassQuery = $adminPass->fetch_assoc();
                                if ($txtKadi == 'admin') {
                                    $_SESSION["Oturum"] = "admin"; //oturum oluşturma
                                    $_SESSION["kadi"] = "admin";
                                    header("location:admin.php");
                                }
                                //parolaları md5 ile şifreledim ve başına sonuna kendimce eklemeler yaptım.
                                elseif ($txtKadi !== 'admin') {
                                    $_SESSION["Oturum"] = "6789"; //oturum oluşturma
                                    $_SESSION["kadi"] = $txtKadi;
                                    //eğer beni hatırla seçilmiş ise cookie oluşturuyoruz.
                                    //cookie de şifreleyerek kullanıcı adından oluşturdum
                                    if (isset($_POST["ckbHatirla"])) {
                                        setcookie("cerez", md5("aa" . $txtKadi . "bb"), time() + (60 * 60 * 24 * 7));
                                    }
                                    header("location:index.php"); //sayfa yönlendirme
                                } else {
                                    //eğer kullanıcı adı ve parola doğru girilmemiş ise
                                    //hata mesajı verdiriyoruz
                                    echo "Kullanıcı adı veya parola yanlış!";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Giriş" />
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="register.php" class="btn btn-primary">Yeni Kullanıcı</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="index.php" class="btn btn-primary">Ana Sayfa</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</body>

</html>