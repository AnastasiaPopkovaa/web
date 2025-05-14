<?php

// Базовый класс представления (View)
abstract class View {
    protected $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    // Абстрактный метод отображения
    abstract public function render();
}

// Реализация представления в формате HTML
class HtmlView extends View {
    public function render() {
        $data = $this->model->getData();
        $output = "<h1>Список пользователей</h1>\n";
        $output .= "<table border='1'>\n";
        $output .= "<tr><th>ID</th><th>Имя</th><th>Email</th><th>Тип</th></tr>\n";
        
        foreach ($data as $user) {
            $output .= "<tr>";
            $output .= "<td>" . htmlspecialchars($user['id']) . "</td>";
            $output .= "<td>" . htmlspecialchars($user['name']) . "</td>";
            $output .= "<td>" . htmlspecialchars($user['email']) . "</td>";
            $output .= "<td>" . htmlspecialchars($user['type']) . "</td>";
            $output .= "</tr>\n";
        }
        
        $output .= "</table>";
        return $output;
    }
}

// Реализация представления в формате JSON
class JsonView extends View {
    public function render() {
        return json_encode($this->model->getData(), JSON_PRETTY_PRINT);
    }
}

// Реализация представления в текстовом формате
class TextView extends View {
    public function render() {
        $data = $this->model->getData();
        $output = "СПИСОК ПОЛЬЗОВАТЕЛЕЙ\n";
        $output .= "====================\n\n";
        
        foreach ($data as $user) {
            $output .= "ID: " . $user['id'] . "\n";
            $output .= "Имя: " . $user['name'] . "\n";
            $output .= "Email: " . $user['email'] . "\n";
            $output .= "Тип: " . $user['type'] . "\n";
            $output .= "------------------------\n";
        }
        
        return $output;
    }
}

// Реализация представления в формате Markdown (новое для лабораторной работы)
class MarkdownView extends View {
    public function render() {
        $data = $this->model->getData();
        $output = "# Список пользователей\n\n";
        
        // Заголовок таблицы
        $output .= "| ID | Имя | Email | Тип |\n";
        $output .= "|:---|:----|:------|:-----|\n";
        
        // Строки таблицы
        foreach ($data as $user) {
            $output .= "| " . $user['id'] . " | ";
            $output .= $user['name'] . " | ";
            $output .= $user['email'] . " | ";
            $output .= $user['type'] . " |\n";
        }
        
        // Дополнительная информация в формате Markdown
        $output .= "\n## Сводка\n\n";
        $output .= "Всего пользователей: **" . count($data) . "**\n\n";
        
        // Подсчёт количества пользователей по типу
        $types = array_count_values(array_column($data, 'type'));
        $output .= "### Типы пользователей:\n\n";
        
        foreach ($types as $type => $count) {
            $output .= "* **" . ucfirst($type) . "**: " . $count . "\n";
        }
        
        return $output;
    }
}
