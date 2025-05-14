<?php

require_once 'Controller.php';

// Создание контроллера пользователей
$controller = new UserController();

// Вывод данных пользователей в различных форматах
echo '<pre>';
echo "Вывод данных пользователей в разных форматах\n";
echo "===========================================\n\n";
echo '</pre>';

echo '<pre>';
echo "HTML-ПРЕДСТАВЛЕНИЕ:\n";
echo "-------------------\n";
echo $controller->displayHtml();
echo "\n\n";
echo '</pre>';

echo '<pre>';
echo "JSON-ПРЕДСТАВЛЕНИЕ:\n";
echo "-------------------\n";
echo $controller->displayJson();
echo "\n\n";
echo '</pre>';

echo '<pre>';
echo "ТЕКСТОВОЕ ПРЕДСТАВЛЕНИЕ:\n";
echo "-------------------------\n";
echo $controller->displayText();
echo "\n\n";
echo '</pre>';

echo '<pre>';
echo "MARKDOWN-ПРЕДСТАВЛЕНИЕ (новая реализация):\n";
echo "------------------------------------------\n";
echo $controller->displayMarkdown();
echo "\n\n";
echo '</pre>';

// Также можно сохранить Markdown-вывод в файл при необходимости
$markdownOutput = $controller->displayMarkdown();
file_put_contents(__DIR__ . '/users.md', $markdownOutput);
