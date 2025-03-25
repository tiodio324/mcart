<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    "NAME" => GetMessage("MCART_AGENTS_LIST_NAME"),
    "DESCRIPTION" => GetMessage("MCART_AGENTS_LIST_DESCRIPTION"),
    "CACHE_PATH" => "Y",
    "PATH" => array(
        "ID" => "mcart_components",
        "NAME" => GetMessage("MCART_COMPONENTS_SECTION_NAME"),
        "SORT" => 1000,
    ),
);
