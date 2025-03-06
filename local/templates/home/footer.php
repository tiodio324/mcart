<?use Bitrix\Main\Page\Asset;?>
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include", 
          ".default", 
          array(
          	"AREA_FILE_RECURSIVE" => "Y",
          	"AREA_FILE_SHOW" => "file",
          	"AREA_FILE_SUFFIX" => "inc",
          	"EDIT_TEMPLATE" => "",
          	"PATH" => "/local/templates/home/components/bitrix/footer/about.php",
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
          	"PATH" => "/local/templates/home/components/bitrix/footer/navigations.php",
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
            	"PATH" => "/local/templates/home/components/bitrix/footer/social_media.php",
            	"COMPONENT_TEMPLATE" => ".default"
            ),
            false
          );?>
      </div>
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.include", 
        ".default", 
        array(
        	"AREA_FILE_RECURSIVE" => "Y",
        	"AREA_FILE_SHOW" => "file",
        	"AREA_FILE_SUFFIX" => "inc",
        	"EDIT_TEMPLATE" => "",
        	"PATH" => "/local/templates/home/components/bitrix/footer/copyright.php",
        	"COMPONENT_TEMPLATE" => ".default"
        ),
        false
        );?>
    </div>
  </footer>

  </div>

  <?$APPLICATION->ShowHead();?>
  <?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
  ?>

</body>

</html>
