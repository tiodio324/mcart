<?use Bitrix\Main\Page\Asset;?>
<title>HomeSpace &mdash; Colorlib Website Template</title>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang=<?LANGUAGE_ID?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?$APPLICATION->ShowHead();?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500&...;>

  <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");


    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
  ?>

</head>

<body>
<?$APPLICATION->ShowPanel();?>
  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <?$APPLICATION->IncludeComponent(
              	"bitrix:main.include", 
              	".default", 
              	array(
              		"AREA_FILE_RECURSIVE" => "Y",
              		"AREA_FILE_SHOW" => "file",
              		"AREA_FILE_SUFFIX" => "inc",
              		"EDIT_TEMPLATE" => "",
              		"PATH" => "/local/templates/home/components/bitrix/header/phone.php",
              		"COMPONENT_TEMPLATE" => ".default"
              	),
              	false
              );?>
              <?$APPLICATION->IncludeComponent(
              	"bitrix:main.include", 
              	".default", 
              	array(
              		"AREA_FILE_RECURSIVE" => "Y",
              		"AREA_FILE_SHOW" => "file",
              		"AREA_FILE_SUFFIX" => "inc",
              		"EDIT_TEMPLATE" => "",
              		"PATH" => "/local/templates/home/components/bitrix/header/mail.php",
              		"COMPONENT_TEMPLATE" => ".default"
              	),
              	false
              );?>
            </p>
          </div>
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include", 
              ".default", 
              array(
              	"AREA_FILE_RECURSIVE" => "Y",
              	"AREA_FILE_SHOW" => "file",
              	"AREA_FILE_SUFFIX" => "inc",
              	"EDIT_TEMPLATE" => "",
              	"PATH" => "/local/templates/home/components/bitrix/header/social_media.php",
              	"COMPONENT_TEMPLATE" => ".default"
              ),
              false
            );?>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <?$APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            ".default", 
            array(
            	"AREA_FILE_RECURSIVE" => "Y",
            	"AREA_FILE_SHOW" => "file",
            	"AREA_FILE_SUFFIX" => "inc",
            	"EDIT_TEMPLATE" => "",
            	"PATH" => "/local/templates/home/components/bitrix/header/logo.php",
            	"COMPONENT_TEMPLATE" => ".default"
            ),
            false
          );?>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li class="has-children">
                  <a href="properties.html">Properties</a>
                  <ul class="dropdown">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Lease</a></li>
                    <li class="has-children">
                      <a href="#">Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>


        </div>
      </div>
    </div>
  </div>
