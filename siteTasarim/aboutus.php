<?php
require('config.php');
require('buttons.php');
require('text.php');
session_start(); //oturum başlattık
//oturumdaki bilgilerin doğruluğunu kontrol ediyoruz
if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
    //eğer veriler doğru ise sayfaya girmesine izin veriyoruz
    $kadi = $_SESSION["kadi"];
} else {
   
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/icon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <title> GEZGÖRÖĞREN </title>
    <script>
        window.addEventListener('load', fg_load)

        function fg_load() {
            document.getElementById('loading').style.display = 'none'
        }
    </script>
</head>

<body>
    <div id="loading">
        <img src="assets/spinner.gif" alt="Yükleniyor..." />
    </div>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/insblack.png" style="width:32px;height:32px" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" aria-current="page" href="index.php">
                            <?php
                            print $navButtonQuery1["button_text"];
                            ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="aboutus.php">
                            <?php
                            print $navButtonQuery2["button_text"];
                            ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            print $navButtonQuery3["button_text"];
                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="newevents.php">
                                    <?php
                                    print $navButtonQuery4["button_text"];
                                    ?>
                                </a></li>
                            <li><a class="dropdown-item" href="oldevents.php">
                                    <?php
                                    print $navButtonQuery5["button_text"];
                                    ?>
                                </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="<?php
                                                                                print $searchTextQuery["search_text"];
                                                                                ?>" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">
                        <?php
                        print $searchButtonQuery["search_button"];
                        ?>
                    </button>
                </form>
                <form class="d-flex">
          <a class="btn btn-light text-center m-2 disabled">
          <?php
            if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
            print $kadi;
            }
          ?></a>
          <a id="loginBtn" href="login.php" class="btn btn-danger text-center m-2 ms-0">Giriş</a> <br><br>
          <a href="logout.php" class="btn btn-danger text-center m-2 ms-0">Çıkış</a> <br><br>

        </form>
            </div>
        </div>
    </nav>


    <section class="container-fluid">
        <div class="row container">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="">
                    <h2 class="text-muted text-center">
                        <?php
                        print $aboutusQuery1["aboutus_header"];
                        ?>
                    </h2>
                    <p class="text-center">
                        <?php
                        print $aboutusQuery1["aboutus_text"];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <img class="img-fluid" src=" <?php
                                                print $aboutusQuery1["aboutus_img"];
                                                ?>">
            </div>
        </div>
        <div class="row bg-light">
            <div class="col-6">
                <img class="img-fluid" src="<?php
                                            print $aboutusQuery2["aboutus_img"];
                                            ?>">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div>
                    <p class="text-center">
                        <?php
                        print $aboutusQuery2["aboutus_text"];
                        ?>
                    </p>
                    <p class="text-center text-muted">
                        <?php
                        print $aboutusQuery2["aboutus_muted"];
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row container">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div>
                    <p class="text-center">
                        <?php
                        print $aboutusQuery3["aboutus_text"];
                        ?>
                    </p>
                    <p class="text-center text-muted">
                        <?php
                        print $aboutusQuery3["aboutus_muted"];
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-6">
                <img class="img-fluid" src="<?php
                                            print $aboutusQuery3["aboutus_img"];
                                            ?>">
            </div>
        </div>
    </section>








    <footer class="bg-light pt-1 mb-0">
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <img src="assets/insblack.png" style="width:32px;height:32px" />
                            <?php
                            print $footerQuery["footer_header"];
                            ?>
                        </h6>
                        <p>
                            <?php
                            print $footerQuery["footer_text"];
                            ?>
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <?php
                            print $footerMenuQuery1["footer_menu_header"];
                            ?>
                        </h6>
                        <p><i class="bi bi-github"></i>
                            <a href="#!" class="text-reset">
                                <?php
                                print $footerMenuQuery1["footer_menu_first"];
                                ?>
                            </a>
                        </p>
                        <p class="text-dark"><i class="bi bi-instagram"></i>
                            <a href="#!" class="text-reset">
                                <?php
                                print $footerMenuQuery1["footer_menu_second"];
                                ?>
                            </a>
                        </p>
                        <p><i class="bi bi-twitter"></i>
                            <a href="#!" class="text-reset">
                                <?php
                                print $footerMenuQuery1["footer_menu_third"];
                                ?>
                            </a>
                        </p>
                        <p><i class="bi bi-facebook"></i>
                            <a href="#!" class="text-reset">
                                <?php
                                print $footerMenuQuery1["footer_menu_fourth"];
                                ?>
                            </a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <?php
                            print $footerMenuQuery2["footer_menu_header"];
                            ?>
                        </h6>
                        <p><i class="bi bi-house-door-fill"></i>
                            <a href="index.html" class="text-reset">
                                <?php
                                print $footerMenuQuery2["footer_menu_first"];
                                ?>
                            </a>
                        </p>
                        <p><i class="bi bi-file-earmark-text-fill"></i>
                            <a href="aboutus.html" class="text-reset">
                                <?php
                                print $footerMenuQuery2["footer_menu_second"];
                                ?>
                            </a>
                        </p>
                        <p><i class="bi bi-calendar-event-fill"></i>
                            <a href="#!" class="text-reset">
                                <?php
                                print $footerMenuQuery2["footer_menu_third"];
                                ?>
                            </a>
                        </p>
                        <p><i class="bi bi-calendar3-event-fill"></i>
                            <a href="#!" class="text-reset">
                                <?php
                                print $footerMenuQuery2["footer_menu_fourth"];
                                ?>
                            </a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <?php
                            print $footerMenuQuery3["footer_menu_header"];
                            ?>
                        </h6>
                        <p><i class="bi bi-flag-fill"></i>
                            <?php
                            print $footerMenuQuery3["footer_menu_first"];
                            ?>
                        </p>
                        <p>
                            <i class="bi bi-envelope-fill"></i> <?php
                                                                print $footerMenuQuery3["footer_menu_second"];
                                                                ?>
                        </p>
                        <p><i class="bi bi-telephone-plus-fill"></i> <?php
                                                                        print $footerMenuQuery3["footer_menu_third"];
                                                                        ?></p>
                        <p><i class="bi bi-telephone-plus-fill"></i> <?php
                                                                        print $footerMenuQuery3["footer_menu_fourth"];
                                                                        ?></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.03);">
            <a class="text-reset fw-bold" href="https://www.instagram.com/hakanrbas">
                <?php
                print $copyrightQuery["copyright_text"];
                ?>
            </a>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>