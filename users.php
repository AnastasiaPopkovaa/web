<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пользовательская система</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .user-container {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .superuser-container {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
        }

        .user-header {
            color: #2c3e50;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .user-info {
            color: #7f8c8d;
            margin-left: 15px;
        }

        .count-info {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
            font-weight: bold;
        }

        pre {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            overflow-x: auto;
        }
        
        .title_all {
            color: #2c3e50;
            text-align: center;
            font-size: 2rem;
            margin-bottom: 25px;
        }

        .diagram-wrapper {
            position: relative;
            overflow: hidden;
            padding-top: 60%; /* Соотношение сторон 16:9 */
            background: #f8f9fa;
            border-radius: 8px;
        }

        .diagram-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
        }

        /* Добавим параметр scale в URL изображения */
        .diagram-image {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="%23f8f9fa"/></svg>');
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title_all">Диаграмма Классы и интерфейсы</h1>
        <div class="diagram-container">
            <img src="https://www.plantuml.com/plantuml/svg/dL91JiCm4Bpx5Nj00eJQ1-I0YZZrNF40axWXKcfNjaCFWDHKY0i7E28a_b0G5cchy8RrZzX04a502E7RpExEZiSU6CkrpIOfsmQymz8lqFcvlqI7Av-pH5gXnpmKCCgcGXyPeOSjTSQ0pbuix52ErSvk0ASgYTW5gxHkyT7dVk7dkCGrgPR-6bU0QzpWaWevuyV6QXvQ25Dk31pKi5hHA9iJDVj1-hxHWAgPVSn_ckjjIJuH0OoiJcHSKwcA4zdXfZGuKphgq1b97QfCsW3e_d-qqkPJ-sbnQqghLFndqoyXFrJBoOB3Ptp59ugwn08TO04Kl2Ey8Vn2NLTO-1lsxgVNEz__4ZThlDQr3jVl4_Vz-Tb0o8W-pXi0" 
                 alt="Диаграмма классов"
                 loading="lazy">
        </div>
    </div>
<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

$user1 = new User("Вика", "vic", "pass11123");
$user2 = new User("Лёля", "lele", "qwerty333");
$user3 = new User("Нана", "nAnA", "password");

$superUser = new SuperUser("Админ", "admin", "root", "administrator");

echo '<div class="user-container">';
$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
echo '</div>';

echo '<div class="user-container superuser-container">';
$superUser->showInfo();
echo '</div>';

echo '<pre>';
print_r($superUser->getInfo());
echo '</pre>';

echo '<div class="count-info">';
echo "Всего обычных пользователей: " . User::getCount() . "<br>";
echo "Всего супер-пользователей: " . SuperUser::getCount() . "<br>";
echo '</div>';

?>


</body>
</html>