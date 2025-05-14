<?php

require_once 'User.php';

// Абстрактная фабрика пользователей
abstract class UserFactory {
    // Абстрактный метод создания пользователя
    abstract public function createUser(array $data): User;

    // Метод получения пользователя (использует createUser)
    public function getUser(array $data): User {
        return $this->createUser($data);
    }
}

// Конкретная фабрика для создания пользователей на основе типа
class ConcreteUserFactory extends UserFactory {
    public function createUser(array $data): User {
        // Выбор типа пользователя и создание соответствующего экземпляра
        switch ($data['type']) {
            case 'admin':
                return new AdminUser($data);
            case 'manager':
                return new ManagerUser($data);
            case 'customer':
            default:
                return new CustomerUser($data);
        }
    }
}
