<?php
require('config.php');

// BANNER(REKLAM GÖRSELİ) KISMI
$bannerButton1 = $baglanti->query("SELECT button_text FROM banner_buttons WHERE button_id = 1");
$bannerButtonQuery1 = $bannerButton1->fetch_array();
$bannerButton2 = $baglanti->query("SELECT button_text FROM banner_buttons WHERE button_id = 2");
$bannerButtonQuery2 = $bannerButton2->fetch_array();

// NAV(MENU) KISMI
$navButton1 = $baglanti->query("SELECT button_text FROM nav_buttons WHERE button_id = 1");
$navButtonQuery1 = $navButton1->fetch_array();
$navButton2 = $baglanti->query("SELECT button_text FROM nav_buttons WHERE button_id = 2");
$navButtonQuery2 = $navButton2->fetch_array();
$navButton3 = $baglanti->query("SELECT button_text FROM nav_buttons WHERE button_id = 3");
$navButtonQuery3 = $navButton3->fetch_array();
$navButton4 = $baglanti->query("SELECT button_text FROM nav_buttons WHERE button_id = 4");
$navButtonQuery4 = $navButton4->fetch_array();
$navButton5 = $baglanti->query("SELECT button_text FROM nav_buttons WHERE button_id = 5");
$navButtonQuery5 = $navButton5->fetch_array();
$navImage = $baglanti->query("SELECT button_text FROM nav_buttons WHERE button_id = 6");
$navImageQuery = $navImage->fetch_array();

// SEARCH(ARAMA) KISMI
$searchButton = $baglanti->query("SELECT search_button FROM search WHERE search_id = 1");
$searchButtonQuery = $searchButton->fetch_array();
$searchText = $baglanti->query("SELECT search_text FROM search WHERE search_id = 1");
$searchTextQuery = $searchText->fetch_array();
?>