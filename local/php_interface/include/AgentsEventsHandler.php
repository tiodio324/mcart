<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader,
    Bitrix\Highloadblock as HL,
    Bitrix\Main\Entity,
    Bitrix\Main\EventManager,
    Bitrix\Main\Application;
use Bitrix\Highloadblock\HighloadBlockTable;

// Проверяем, подключен ли модуль highloadblock
if (Loader::includeModule('highloadblock')) {
    $eventManager = EventManager::getInstance();

    // Обработчик события добавления элемента HL-блока
    $eventManager->addEventHandler(
        'highloadblock',
        'OnAfterAdd',
        function ($event) {
            $tableName = $event->getParameter('TABLE_NAME'); // Получаем имя таблицы из события
            cleanHighloadBlockCache($tableName);
        }
    );

    // Обработчик события обновления элемента HL-блока
    $eventManager->addEventHandler(
        'highloadblock',
        'OnAfterUpdate',
        function ($event) {
            $tableName = $event->getParameter('TABLE_NAME'); // Получаем имя таблицы из события
            cleanHighloadBlockCache($tableName);
        }
    );

    // Обработчик события удаления элемента HL-блока
    $eventManager->addEventHandler(
        'highloadblock',
        'OnAfterDelete',
        function ($event) {
            $tableName = $event->getParameter('TABLE_NAME'); // Получаем имя таблицы из события
            cleanHighloadBlockCache($tableName);
        }
    );

    /**
     * Функция очистки кеша по тегу HL-блока
     * @param string $tableName - имя таблицы HL-блока
     */
    function cleanHighloadBlockCache($tableName)
    {
        // Получаем тегированный кеш
        $taggedCache = Application::getInstance()->getTaggedCache();
        
        // Сбрасываем кеш по тегу
        $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
    }

    $agentsHlblockId = 3; // ID HL-блока агентов
    
    // Регистрируем дополнительные обработчики для конкретного HL-блока
    $eventManager->addEventHandler(
        'main',
        'OnEpilog',
        function () use ($agentsHlblockId) {
            // Проверяем, был ли запрос на добавление/изменение/удаление
            $request = Application::getInstance()->getContext()->getRequest();
            $isAdmin = (strpos($request->getRequestedPage(), '/bitrix/admin/') !== false);
            
            if ($isAdmin && $request->isPost() && 
                (strpos($request->getRequestedPage(), 'highloadblock') !== false)) {
                // Очищаем кеш
                cleanHighloadBlockCache($agentsHlblockId);
            }
        }
    );
} 