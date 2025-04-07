<?use Bitrix\Main\Application;?>
<?require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";?>

<?
$page = Application::getInstance()->getContext()->getRequest()->getRequestedPageDirectory();
if ($page !== "/s2/") {
?>
		<!-- Page Title -->
		<div class="page-title dark-background">
			<div class="container position-relative">
				<h1><?echo $APPLICATION->ShowTitle(false);?></h1>
				<?
					$desc = $APPLICATION->ShowProperty("page_text_under_title");
						if (!empty($desc)):?>
							<p><?echo $desc?></p>
						<?else:?>
							<p></p>
						<?endif;
				?>
				<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "myBreadcrumb_dev", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s2",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
			</div>
		</div><!-- End Page Title -->
	<?}?>