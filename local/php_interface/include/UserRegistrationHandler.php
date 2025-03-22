<?php

namespace Local\EventHandlers;

use Bitrix\Main\EventManager;
use Bitrix\Main\UserGroupTable;
use CUser;

/**
 * Класс для обработки событий, связанных с регистрацией пользователей
 */
class UserRegistrationHandler
{
    /**
     * ID групп пользователей
     */
    const BUYER_GROUP_ID = 6; // ID группы покупателей
    const SELLER_GROUP_ID = 7; // ID группы продавцов
    
    /**
     * Название пользовательского поля (UF_CHOOSE_USER_TYPE)
     */
    const USER_TYPE_FIELD = 'UF_CHOOSE_USER_TYPE';
    
    /**
     * Регистрация обработчиков событий
     */
    public static function registerHandlers()
    {
        $eventManager = EventManager::getInstance();
        
        // Обработчик события после регистрации пользователя
        $eventManager->addEventHandler(
            'main',
            'OnAfterUserRegister',
            [self::class, 'onAfterUserRegister']
        );
    }
    
    /**
     * Метод, который выполняется после регистрации пользователя
     *
     * @param array $arFields Массив полей пользователя
     * @return void
     */
    public static function onAfterUserRegister($arFields)
    {
        // Проверяем успешность регистрации
        if ($arFields['USER_ID'] > 0) {
            $userId = $arFields['USER_ID'];
            
            // Проверяем значение пользовательского поля UF_CHOOSE_USER_TYPE
            $user = CUser::GetByID($userId)->Fetch();
            
            // Определяем, в какую группу добавлять пользователя
            if (!empty($user[self::USER_TYPE_FIELD]) && $user[self::USER_TYPE_FIELD] == 1) {
                // Если поле установлено в "да" (true/1) - добавляем в группу покупателей
                self::addUserToGroup($userId, self::BUYER_GROUP_ID);
            } else {
                // Если поле не установлено или установлено в "нет" (false/0) - добавляем в группу продавцов
                self::addUserToGroup($userId, self::SELLER_GROUP_ID);
            }
        }
    }
    
    /**
     * Метод для добавления пользователя в группу
     *
     * @param int $userId ID пользователя
     * @param int $groupId ID группы
     * @return void
     */
    private static function addUserToGroup($userId, $groupId)
    {
        // Используем D7 API для добавления пользователя в группу
        UserGroupTable::add([
            'USER_ID' => $userId,
            'GROUP_ID' => $groupId,
        ]);
    }
}

// Регистрируем обработчики событий
UserRegistrationHandler::registerHandlers(); 