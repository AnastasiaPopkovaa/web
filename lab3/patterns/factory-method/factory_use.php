<?php

require_once 'UserFactory.php';

// Загрузка данных пользователей
$usersData = require_once 'users.php';

// Создание фабрики пользователей
$userFactory = new ConcreteUserFactory();

// Вывод информации обо всех пользователях
echo '<pre>';
echo "Информация о пользователях:\n";
echo "===========================\n";
echo '</pre>';

foreach ($usersData as $userData) {
    // Создание объекта пользователя с помощью фабрики
    $user = $userFactory->getUser($userData);
    
    // Вывод информации о пользователе
    echo '<pre>';
    echo $user->getInfo() . "\n";
    echo '</pre>';
}

// Демонстрация использования фабрики для конкретного типа пользователя
echo '<pre>';
echo "\nДоступ к свойствам конкретного пользователя:\n";
echo "===========================================\n";
echo '</pre>';

$adminData = $usersData[0]; // Получение данных первого пользователя (администратора)
$admin = $userFactory->getUser($adminData);

echo '<pre>';
echo "ID пользователя: " . $admin->getId() . "\n";
echo "Имя пользователя: " . $admin->getName() . "\n";
echo "Email пользователя: " . $admin->getEmail() . "\n";
echo "Тип пользователя: " . $admin->getType() . "\n"; 
echo '</pre>';
