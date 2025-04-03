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
				<nav class="breadcrumbs">
					<ol>
						<li><a href="#">Главная</a></li>
						<li><a href="#">Раздел 1</a></li>
						<li><a href="#">Раздел 1.1</a></li>
						<li class="current">Заголовок страницы</li>
					</ol>
				</nav>
			</div>
		</div><!-- End Page Title -->
	<?}?>