<?php
// Lab 2 - Design Patterns Implementation
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №2 - Паттерны проектирования</title>
    <style>
        /* Основные стили */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fff5f7;
            margin: 0;
            padding: 0;
        }

        /* Шапка */
        header {
            background: linear-gradient(135deg, #ff758c, #ff7eb3);
            color: white;
            padding: 2.5rem 1rem;
            text-align: center;
            margin-bottom: 2.5rem;
            box-shadow: 0 4px 12px rgba(255, 105, 140, 0.3);
        }

        header h1 {
            margin: 0;
            font-size: 2.8rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .subtitle {
            font-size: 1.3rem;
            opacity: 0.95;
            margin-top: 0.7rem;
            font-weight: 300;
        }

        .back-link {
            position: absolute;
            left: 1.5rem;
            top: 1.5rem;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            padding: 0.6rem 1.2rem;
            border-radius: 30px;
            background-color: rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .back-link:hover {
            background-color: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        /* Секции */
        .section-title {
            text-align: center;
            margin: 3rem 0 2rem;
            color: #d23669;
            font-size: 2.1rem;
            border-bottom: 3px solid #ff758c;
            padding-bottom: 0.7rem;
            display: inline-block;
            margin-left: 50%;
            transform: translateX(-50%);
            font-weight: 600;
        }

        /* Контейнер паттернов */
        .pattern-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
            margin-bottom: 4rem;
        }

        /* Карточка паттерна */
        .pattern-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(255, 105, 140, 0.15);
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            border: 1px solid #ffecef;
        }

        .pattern-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 30px rgba(255, 105, 140, 0.25);
        }

        .pattern-header {
            background: linear-gradient(to right, #ff758c, #ff9a9e);
            color: white;
            padding: 1.2rem;
            font-size: 1.3rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .pattern-content {
            padding: 1.8rem;
        }

        .pattern-description {
            margin-bottom: 1.8rem;
            color: #555;
            line-height: 1.7;
        }

        .pattern-description p {
            margin: 0 0 1.2rem 0;
        }

        .pattern-links {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .pattern-link {
            display: inline-block;
            padding: 0.8rem 1.2rem;
            background-color: #fff5f7;
            color: #ff758c;
            text-decoration: none;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #ffb3c1;
            font-weight: 500;
        }

        .pattern-link:hover {
            background: linear-gradient(to right, #ff758c, #ff9a9e);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(255, 105, 140, 0.2);
        }

        /* Подвал */
        .footer {
            text-align: center;
            padding: 2.5rem;
            background: linear-gradient(135deg, #ff758c, #ff7eb3);
            color: white;
            margin-top: 3rem;
        }

        .footer p {
            margin: 0;
            font-size: 1.1rem;
        }

        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .pattern-card {
            animation: fadeIn 0.6s ease forwards;
            opacity: 0;
        }

        .pattern-card:nth-child(1) { animation-delay: 0.1s; }
        .pattern-card:nth-child(2) { animation-delay: 0.2s; }
        .pattern-card:nth-child(3) { animation-delay: 0.3s; }
        .pattern-card:nth-child(4) { animation-delay: 0.4s; }
        .pattern-card:nth-child(5) { animation-delay: 0.5s; }
        .pattern-card:nth-child(6) { animation-delay: 0.6s; }

        /* Адаптивность */
        @media (max-width: 900px) {
            .pattern-container {
                grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
                gap: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .back-link {
                position: static;
                display: inline-block;
                margin-bottom: 1.2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 480px) {
            .pattern-container {
                grid-template-columns: 1fr;
                padding: 0 1rem;
            }
            
            header {
                padding: 2rem 1rem;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            .pattern-card {
                margin: 0 0.2rem;
            }
            
            .pattern-content {
                padding: 1.3rem;
            }
            
            .pattern-header {
                font-size: 1.2rem;
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="back-link">← Вернуться на главную</a>
        <h1>Лабораторная работа №2</h1>
        <div class="subtitle">Паттерны проектирования</div>
    </header>

    <h2 class="section-title">Порождающие паттерны</h2>
    <div class="pattern-container">
        <div class="pattern-card">
            <div class="pattern-header">
                Фабричный метод (Factory Method)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/FactoryMethod/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/FactoryMethod/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Абстрактная фабрика (Abstract Factory)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/AbstractFactory/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/AbstractFactory/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Строитель (Builder)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Builder/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Builder/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Прототип (Prototype)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Prototype/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Prototype/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Одиночка (Singleton)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Singleton/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Singleton/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title">Структурные паттерны</h2>
    <div class="pattern-container">
        <div class="pattern-card">
            <div class="pattern-header">
                Адаптер (Adapter)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Adapter/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Adapter/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Мост (Bridge)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Bridge/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Bridge/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Компоновщик (Composite)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Composite/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Composite/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Декоратор (Decorator)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Decorator/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Decorator/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Фасад (Facade)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Facade/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Facade/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Легковес (Flyweight)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Flyweight/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Flyweight/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Заместитель (Proxy)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Proxy/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Proxy/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title">Поведенческие паттерны</h2>
    <div class="pattern-container">
        <div class="pattern-card">
            <div class="pattern-header">
                Цепочка обязанностей (Chain of Responsibility)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/ChainOfResponsibility/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/ChainOfResponsibility/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Команда (Command)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Command/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Command/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Итератор (Iterator)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Iterator/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Iterator/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Посредник (Mediator)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Mediator/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Mediator/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Снимок (Memento)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Memento/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Memento/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Наблюдатель (Observer)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Observer/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Observer/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Состояние (State)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/State/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/State/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Стратегия (Strategy)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Strategy/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Strategy/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Шаблонный метод (Template Method)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/TemplateMethod/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/TemplateMethod/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Посетитель (Visitor)
            </div>
            <div class="pattern-content">
                <div class="pattern-links">
                    <a href="lab2/src/RefactoringGuru/Visitor/RealWorld/index.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab2/src/RefactoringGuru/Visitor/Conceptual/index.php" class="pattern-link" target="_blank">Концептуальный пример</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>© 2023 Лабораторная работа по паттернам проектирования</p>
    </footer>
</body>
</html>