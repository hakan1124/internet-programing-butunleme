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


    <div id="carouselExampleCaptions" class="carousel slide mh-50">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="eventfilter">
                    <img src="<?php
                                print $slideQuery["slide_first_img"];
                                ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        <?php
                        print $slideQuery["slide_first_header"];
                        ?>
                    </h5>
                    <p>
                        <?php
                        print $slideQuery["slide_first_text"];
                        ?>
                    </p>
                    <p class="text-reset">
                        <a href="#!" class="text-white text-decoration-underline">
                            <?php
                            print $slideQuery["slide_first_link"];
                            ?>
                        </a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="eventfilter">
                    <img src="<?php
                                print $slideQuery["slide_second_img"];
                                ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        <?php
                        print $slideQuery["slide_second_header"];
                        ?>
                    </h5>
                    <p>
                        <?php
                        print $slideQuery["slide_second_text"];
                        ?>
                    </p>
                    <p class="text-reset">
                        <a href="#!" class="text-white text-decoration-underline">
                            <?php
                            print $slideQuery["slide_second_link"];
                            ?>
                        </a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="eventfilter">
                    <img src="<?php
                                print $slideQuery["slide_third_img"];
                                ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        <?php
                        print $slideQuery["slide_third_header"];
                        ?>
                    </h5>
                    <p>
                        <?php
                        print $slideQuery["slide_third_text"];
                        ?>
                    </p>
                    <p class="text-reset">
                        <a href="#!" class="text-white text-decoration-underline">
                            <?php
                            print $slideQuery["slide_third_link"];
                            ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <section class="container mt-5 mb-5 rounded">
        <div class="row">
            <div class="col m-auto d-flex justify-content-center align-items-center">
                <img class="img-fluid img-responsive" src="assets/events/adventure.png" alt="image">
            </div>
            <div class="col">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active bg-dark text-white mb-1" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            Ön Bilgi
                        </button>
                        <button class="nav-link bg-dark text-white mb-1" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            İçerik
                        </button>
                        <button class="nav-link bg-dark text-white mb-1" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">
                            Plan Akışı
                        </button>
                        <button class="nav-link bg-dark text-white mb-1" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            Yolculuk
                        </button>
                        <button class="nav-link bg-dark text-white mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            İletişim
                        </button>
                    </div>
                    <div class="tab-content d-flex align-items-center justify-content-center" id="v-pills-tabContent">
                        <div class="tab-pane fade show active m-auto text-center" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <h1 class="text-center">
                             <?php
                                print $neweventQuery["newevent_header"]
                             ?>
                            </h1>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <?php
                                print $neweventQuery["newevent_information"]
                             ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                        <?php
                                print $neweventQuery["newevent_date"]
                             ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <?php
                                print $neweventQuery["newevent_travel"]
                             ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                        <?php
                                print $neweventQuery["newevent_contact"]
                             ?>
                        </div>
                    </div>
                </div>
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