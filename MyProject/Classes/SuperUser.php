<?php
declare(strict_types=1);
namespace MyProject\Classes;

class SuperUser extends User implements SuperUserInterface{
   public $role;
   public static $superUserCount = 0;
   
   function __construct($name, $login, $password, $role) {
      $this->name = $name;
      $this->login = $login;
      $this->password = $password;
      $this->role = $role;
      self::$superUserCount++;
   }
   
   function showInfo(){
        echo "<p><b>name:</b> {$this->name} <b>login:</b> {$this->login} <b>password:</b> {$this->password} <b>role:</b> {$this->role} </p>";
   }  
	
   function getInfo()
   {
       return print_r(['name' => $this->name,
               'login' => $this->login,
               'password' => $this->password,
               'role' => $this->role ]);

   }
}
