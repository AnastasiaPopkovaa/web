<?php

// mvc_use.php (Main File - MVC Execution)
require_once 'User.php';
require_once 'UserController.php';
require_once 'MarkdownView.php';

// 1. Model (Data)
$users = [
    new User('Александр', 'Admin', 'alexander@example.com'),
    new User('Алиса', 'Manager', 'alice@example.com'),
    new User('Максим', 'Visitor', 'maxim@example.com'),
    new User('София', 'Editor', 'sophia@example.com'),
    new User('Кирилл', 'Subscriber', 'kirill@example.com'),
];

// 2. Controller (Logic)
$userController = new UserController($users);
$usersFromController = $userController->getUsers();

// 3. View (Presentation)
$markdownView = new MarkdownView();
$markdownOutput = $markdownView->render($usersFromController);

// Output the Markdown
echo $markdownOutput;
