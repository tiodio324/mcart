<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        // пример параметр Название таблицы
        "HLBLOCK_TNAME"  =>  Array( // Код поля
            "PARENT" => "BASE", //
            "NAME" => GetMessage("MCART_AGENTS_LIST_HLBLOCK_TNAME"), // Название параметра, берется из языкового файла
            "TYPE" => "STRING", // Тип поля
            "DEFAULT" => "", // Значение по дефолту
        ),
        "HLBLOCK_TPAGINATION_ELEMS"  =>  Array( // Код поля
            "PARENT" => "BASE", //
            "NAME" => GetMessage("MCART_AGENTS_LIST_HLBLOCK_TPAGINATION_ELEMS"), // Название параметра, берется из языкового файла
            "TYPE" => "NUMBER", // Тип поля
            "DEFAULT" => 0, // Значение по дефолту
        ),
        "HLBLOCK_TCACHE_TIME"  =>  Array( // Код поля
            "PARENT" => "BASE", //
            "NAME" => GetMessage("MCART_AGENTS_LIST_HLBLOCK_TCACHE_TIME"), // Название параметра, берется из языкового файла
            "TYPE" => "STRING", // Тип поля
            "DEFAULT" => "36000", // Значение по дефолту
        ),
    ),
);

