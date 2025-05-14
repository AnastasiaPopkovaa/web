<?php
declare(strict_types=1);
namespace MyProject\Classes;

class User extends AbstractUser{ 

    public $name; 
    public $login; 
    public $password;
    public static $userCount = 0;
    
    function showInfo(){
         echo "<p><b>name:</b> {$this->name} <b>login:</b> {$this->login} <b>password:</b> {$this->password}</p>";
        
     }

    function __construct($name, $login, $password){  //Конструктор
      $this->name = $name;
      $this->login = $login;
      $this->password = $password;
      self::$userCount++;
    }
  
    function __destruct(){  // Деструктор
      echo "<p>Пользователь <b>{$this->login}</b> удален </p>";
    }
}
