<?use Bitrix\Main\Page\Asset;?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
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
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <?$APPLICATION->IncludeComponent(
	            "bitrix:menu", 
	            "bottom_menu", 
	            array(
	            	"ALLOW_MULTI_SELECT" => "N",
	            	"CHILD_MENU_TYPE" => "left",
	            	"DELAY" => "N",
	            	"MAX_LEVEL" => "1",
	            	"MENU_CACHE_GET_VARS" => array(
	            	),
	            	"MENU_CACHE_TIME" => "3600",
	            	"MENU_CACHE_TYPE" => "A",
	            	"MENU_CACHE_USE_GROUPS" => "Y",
	            	"MENU_THEME" => "site",
	            	"ROOT_MENU_TYPE" => "left",
	            	"USE_EXT" => "N",
	            	"COMPONENT_TEMPLATE" => "bottom_menu"
	            ),
	            false
            );?>
          </div>
        </div>
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
