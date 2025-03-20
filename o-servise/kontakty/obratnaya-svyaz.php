<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><div class="site-wrap">
	<div class="site-section">
		<div class="container">
			<div class="row">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"feedbackForm",
	Array(
		"COMPONENT_TEMPLATE" => "feedbackForm",
		"EMAIL_TO" => "nikita324smirnovvv@gmail.com",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
		"USE_CAPTCHA" => "Y"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>