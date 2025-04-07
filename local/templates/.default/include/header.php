<?use Bitrix\Main\Page\Asset;?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<?require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/boot.php";?>
<!DOCTYPE html>
<html lang=<?=LANGUAGE_ID?>>

<head>
	<?$APPLICATION->ShowHead();?>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title><?$APPLICATION->ShowTitle();?></title>

	<!-- Favicons -->
	<?
		Asset::getInstance()->addString("<link href='" . DEFAULT_TEMPLATE_PATH . "/assets/img/favicon.png' rel='icon'>");
		Asset::getInstance()->addString("<link href='" . DEFAULT_TEMPLATE_PATH . "/assets/img/apple-touch-icon.png' rel='apple-touch-icon'>");
	?>

		<!-- Vendor CSS Files -->
	<?
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/bootstrap/css/bootstrap.min.css");
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/aos/aos.css");
	?>

		<!-- Main CSS File -->
	<?
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/main.css");
	?>
</head>

<body class="scrolled">
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

	<header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
			<a href="/s2/" class="logo d-flex align-items-center">
				<h1 class="sitename"><?echo GetMessage('SITE_NAME')?></h1>
			</a>
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "top_menu1",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	),
	false
);?>
		</div>
	</header>

	<main class="main">