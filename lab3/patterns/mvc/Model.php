<?php

class Model {
    protected $data;
    
    public function __construct() {
        // Инициализация с некоторыми данными по умолчанию
        $this->data = [];
    }
    
    public function loadData(array $data) {
        // Загрузка данных в модель
        $this->data = $data;
    }
    
    public function getData() {
        // Получение всех данных
        return $this->data;
    }
}

class UserModel extends Model {
    public function __construct() {
        parent::__construct();
        
        // Загрузка данных пользователей из файла
        $this->loadData(require_once __DIR__ . '/../factory-method/users.php');
    }
    
    public function getUserById($id) {
        // Поиск пользователя по ID
        foreach ($this->data as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }
    
    public function getUsersByType($type) {
        // Получение всех пользователей заданного типа
        return array_filter($this->data, function($user) use ($type) {
            return $user['type'] == $type;
        });
    }
}
