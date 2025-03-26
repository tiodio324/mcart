<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Auth");
?>
<div class="site-wrap">
	<div class="site-section">
		<div class="container">
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	".default", 
	array(
		"FORGOT_PASSWORD_URL" => "/login/",
		"PROFILE_URL" => "/login/profile.php",
		"REGISTER_URL" => "/login/register.php",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>