<?php

// Интерфейс пользователя
interface User {
    public function getId(): int;              // Получить ID пользователя
    public function getName(): string;         // Получить имя пользователя
    public function getEmail(): string;        // Получить email пользователя
    public function getType(): string;         // Получить тип пользователя
    public function getInfo(): string;         // Получить информацию о пользователе
}

// Администратор
class AdminUser implements User {
    private $id;
    private $name;
    private $email;

    public function __construct(array $data) {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getType(): string {
        return 'admin';                         // Тип пользователя — администратор
    }

    public function getInfo(): string {
        return "ADMIN: {$this->name} (ID: {$this->id}) - {$this->email}";  // Информация о пользователе
    }
}

// Клиент
class CustomerUser implements User {
    private $id;
    private $name;
    private $email;

    public function __construct(array $data) {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getType(): string {
        return 'customer';                      // Тип пользователя — клиент
    }

    public function getInfo(): string {
        return "CUSTOMER: {$this->name} (ID: {$this->id}) - {$this->email}";  // Информация о пользователе
    }
}

// Менеджер
class ManagerUser implements User {
    private $id;
    private $name;
    private $email;

    public function __construct(array $data) {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getType(): string {
        return 'manager';                       // Тип пользователя — менеджер
    }

    public function getInfo(): string {
        return "MANAGER: {$this->name} (ID: {$this->id}) - {$this->email}";  // Информация о пользователе
    }
}