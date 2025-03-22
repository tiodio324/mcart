<?php
// Подключаем все обработчики событий из папки include
$eventHandlersDir = __DIR__ . '/include';
if (file_exists($eventHandlersDir) && is_dir($eventHandlersDir)) {
    $files = scandir($eventHandlersDir);
    foreach ($files as $file) {
        $filePath = $eventHandlersDir . '/' . $file;
        if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
            require_once($filePath);
        }
    }
} 
