<?php
require('config.php');
$whyus1 = $baglanti->query("SELECT whyus_header,whyus_text FROM whyus WHERE whyus_id = 1");
$whyusQuery1 = $whyus1->fetch_array();

$whyus2 = $baglanti->query("SELECT whyus_header,whyus_text FROM whyus WHERE whyus_id = 2");
$whyusQuery2 = $whyus2->fetch_array();

$whyus3 = $baglanti->query("SELECT whyus_header,whyus_text FROM whyus WHERE whyus_id = 3");
$whyusQuery3 = $whyus3->fetch_array();

// PERSONEL_TEXT
$personnelText = $baglanti->query("SELECT personnels_text_header, personnels_text_text,personnels_text_slogan,personnels_text_tooltip FROM personnels_show WHERE personnels_text_id");
$personnelTextQuery = $personnelText->fetch_array();

// FOOTER
$footer = $baglanti->query("SELECT footer_header, footer_text FROM footer WHERE footer_id = 1");
$footerQuery = $footer->fetch_array();

$footerMenu1 = $baglanti->query("SELECT footer_menu_header, footer_menu_first, footer_menu_second, footer_menu_third, footer_menu_fourth FROM footer_menu WHERE footer_menu_id = 1");
$footerMenuQuery1 = $footerMenu1->fetch_array();
$footerMenu2 = $baglanti->query("SELECT footer_menu_header, footer_menu_first, footer_menu_second, footer_menu_third, footer_menu_fourth FROM footer_menu WHERE footer_menu_id = 2");
$footerMenuQuery2 = $footerMenu2->fetch_array();
$footerMenu3 = $baglanti->query("SELECT footer_menu_header, footer_menu_first, footer_menu_second, footer_menu_third, footer_menu_fourth FROM footer_menu WHERE footer_menu_id = 3");
$footerMenuQuery3 = $footerMenu3->fetch_array();

//COPYRIGHT

$copyright = $baglanti->query("SELECT copyright_text FROM copyright WHERE copyright_id = 1");
$copyrightQuery = $copyright->fetch_array();


//ABOUTUS.PHP

//ABOUTUS

$aboutus1 = $baglanti->query("SELECT aboutus_img, aboutus_header, aboutus_text, aboutus_muted FROM aboutus WHERE aboutus_id = 1");
$aboutusQuery1 = $aboutus1->fetch_array();
$aboutus2 = $baglanti->query("SELECT aboutus_img, aboutus_header, aboutus_text, aboutus_muted FROM aboutus WHERE aboutus_id = 2");
$aboutusQuery2 = $aboutus2->fetch_array();
$aboutus3 = $baglanti->query("SELECT aboutus_img, aboutus_header, aboutus_text, aboutus_muted FROM aboutus WHERE aboutus_id = 3");
$aboutusQuery3 = $aboutus3->fetch_array();

//NEWEVENTS.PHP

//SLİDE

$slide = $baglanti->query("SELECT slide_first_img,slide_first_header,slide_first_text,slide_first_link,slide_second_img,slide_second_header,slide_second_text,slide_second_link,slide_third_img,slide_third_header,slide_third_text,slide_third_link FROM slide WHERE slide_id = 1");
$slideQuery = $slide->fetch_array();

//NEWEVENT

$newevent = $baglanti->query("SELECT newevent_photo,newevent_header,newevent_information,newevent_date,newevent_plan,newevent_travel,newevent_contact FROM newevent WHERE newevent_id = 1");
$neweventQuery = $newevent->fetch_array();

//OLDEVENTS.PHP

//OLDEVENT

$oldevent1 = $baglanti->query("SELECT oldevent_img,oldevent_header,oldevent_text,oldevent_date,oldevent_first_item,oldevent_second_item,oldevent_third_item,oldevent_link FROM oldevent WHERE oldevent_id = 1");
$oldeventQuery1 = $oldevent1->fetch_array();

$oldevent2 = $baglanti->query("SELECT oldevent_img,oldevent_header,oldevent_text,oldevent_date,oldevent_first_item,oldevent_second_item,oldevent_third_item,oldevent_link FROM oldevent WHERE oldevent_id = 2");
$oldeventQuery2 = $oldevent2->fetch_array();

$oldevent3 = $baglanti->query("SELECT oldevent_img,oldevent_header,oldevent_text,oldevent_date,oldevent_first_item,oldevent_second_item,oldevent_third_item,oldevent_link FROM oldevent WHERE oldevent_id = 3");
$oldeventQuery3 = $oldevent3->fetch_array();

?>