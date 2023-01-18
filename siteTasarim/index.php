<?php
require('config.php');
require('buttons.php');
require('images.php');
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

    function showUser(str) {
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "personnels.php?q=" + str, true);
        xmlhttp.send();
      }
    }
  </script>
</head>

<body>
  <div id="loading">
    <img src="assets/spinner.gif" alt="Yükleniyor..." />
  </div>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="
      <?php
      print $navImageQuery["button_text"];
      ?>
      " style="width:32px;height:32px" /></a>
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
          <a id="loginBtn" class="btn btn-light text-center m-2 disabled">
            <?php
            if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789"){
              print $_SESSION["kadi"];
            } else
            ?>
          </a>
          <a href="login.php" class="btn btn-danger text-center m-2 ms-0">Giriş</a> <br><br>
          <a href="logout.php" class="btn btn-danger text-center m-2 ms-0">Çıkış</a> <br><br>

        </form>
      </div>
    </div>
  </nav>


  <section class="bannerbg">
    <div class="blur">
      <div class="row container">
        <div class="col-6">
          <img class="img-fluid" src="
          <?php
          print $bannerImageQuery["banner_img"];
          ?>
          ">
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
          <div class="row">
            <div class="col-12 m-3 d-flex justify-content-center align-items-center">
              <button type="button" class="btn btn-light yellow w-75">
                <?php
                print " " . $bannerButtonQuery1["button_text"];
                ?>
              </button>
            </div>
            <div class="col-12 m-3 d-flex justify-content-center align-items-center">
              <button type="button" class="btn btn-light yellow w-75">
                <?php
                print " " . $bannerButtonQuery2["button_text"];
                ?>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="py-5 border-bottom bg-light" id="features">
    <div class="container px-5">
      <div class="row gx-5">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
          <h2 class="h4 fw-bolder">
            <?php
            print $whyusQuery1["whyus_header"];
            ?>
          </h2>
          <p> </p>
          <a class="text-decoration-none text-dark">
            <?php
            print $whyusQuery1["whyus_text"]
            ?>
          </a>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
          <h2 class="h4 fw-bolder">
            <?php
            print $whyusQuery2["whyus_header"];
            ?>
          </h2>
          <p> </p>
          <a class="text-decoration-none text-dark">
            <?php
            print $whyusQuery2["whyus_text"]
            ?>
          </a>
        </div>
        <div class="col-lg-4">
          <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
          <h2 class="h4 fw-bolder">
            <?php
            print $whyusQuery3["whyus_header"];
            ?>
          </h2>
          <p> </p>
          <a class="text-decoration-none text-dark">
            <?php
            print $whyusQuery3["whyus_text"]
            ?>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="guideAbout">
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="1" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel"> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div id="txtHint" class="offcanvas-body">
        <p>Try scrolling the rest of the page to see this option in action.</p>
      </div>
    </div>
  </section>

  <section class="container bg-white">
    <div class="text-center mt-5">
      <h2 class="text-dark fw-bold">
        <?php
        print $personnelTextQuery["personnels_text_header"];
        ?>
      </h2>
      <figure>
        <blockquote>
          <p>
            <?php
            print $personnelTextQuery["personnels_text_text"];
            ?>
          </p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <?php
          print $personnelTextQuery["personnels_text_slogan"];
          ?>
        </figcaption>
      </figure>
    </div>

    <div class="row row-cols-1 row-cols-12 g-6 mt-5 mb-5 bg-white">
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="1" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/1.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="2" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/2.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="3" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/3.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="4" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/4.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="5" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/5.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="6" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/6.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-12 g-4 mt-5 mb-5 bg-white">
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="7" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/7.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="8" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/8.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="9" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/9.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="10" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/10.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="11" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/11.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
      <div class="col-2">
        <button class="btn btn-white" name="users" onclick="showUser(this.value)" value="12" type="button">
          <a class="rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#1" aria-controls="offcanvasScrolling"><img src="assets/humans/12.jpg" class="img-fluid rounded" alt="BİLGİ İÇİN TIKLAYIN"><span class="position-absolute top-0 start-100 translate-middle rounded-circle text-dark"><span class="visually-hidden"></span>
            </span></a>
        </button>
      </div>
    </div>
    <div class="text-center mt-5">
      <figure>
        <figcaption class="blockquote-footer">
          <?php
          print $personnelTextQuery["personnels_text_tooltip"];
          ?>
        </figcaption>
      </figure>
    </div>
  </section>

  <form>

  </form>

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



  <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <script src="script/script.js"></script>
</body>

</html>