<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list", 
	".default", 
	array(
		"HLBLOCK_TNAME" => "realty_agents",
		"COMPONENT_TEMPLATE" => ".default",
		"HLBLOCK_TPAGINATION_ELEMS" => "3",
		"HLBLOCK_TCACHE_TIME" => "36000"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>