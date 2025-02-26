<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.index",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "arrFilter",
		"IBLOCKS" => array(),
		"IBLOCK_SORT_BY" => "SORT",
		"IBLOCK_SORT_ORDER" => "ASC",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_URL" => "",
		"NEWS_COUNT" => "5",
		"PROPERTY_CODE" => array("",""),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>