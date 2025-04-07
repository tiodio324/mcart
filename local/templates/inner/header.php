<?use Bitrix\Main\Page\Asset;?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang=<?=LANGUAGE_ID?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?$APPLICATION->ShowTitle();?></title>
</head>
<body>
    <?$APPLICATION->IncludeComponent(
    	"bitrix:breadcrumb",
    	"",
    	Array(
    		"PATH" => "",
    		"SITE_ID" => "s1",
    		"START_FROM" => "0"
    	)
    );?>
</body>
</html>
