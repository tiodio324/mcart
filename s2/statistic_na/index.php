<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Статистика");
?>
<?LocalRedirect("/s2/statistic_na/dashboard/");?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth1", 
	array(
		"FORGOT_PASSWORD_URL" => "/s2/statistic_na/",
		"PROFILE_URL" => "/s2/statistic_na/profile/",
		"REGISTER_URL" => "",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth1"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>