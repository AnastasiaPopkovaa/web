<?php

namespace MyProject\Classes;

abstract class AbstractUser{
    
    public $name, $login;
    private $password; 
    
    abstract public function showInfo();
    
    public function __construct($name, $login, $password) {
        
      $this->name = $name;
      $this->login = $login;
      $this->password = $password;
     
    }
    
        public function __destruct(){
       echo "<pre> Пользователь {$this->login} удален.<br></pre>";
    }
}   

?>