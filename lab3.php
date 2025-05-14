<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №3 | Паттерны проектирования</title>
    <style>
        :root {
            --primary-color: #FF69B4;      /* Ярко-розовый */
            --secondary-color: #FFB6C1;    /* Светло-розовый */
            --accent-color: #FF1493;       /* Глубокий розовый */
            --text-color: #4A4A4A;          /* Тёмно-серый */
            --light-bg: #FFF0F5;           /* Очень светлый розовый */
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--light-bg);
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            flex: 1;
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), #FF6EB4);
            color: white;
            padding: 3rem 0;
            box-shadow: 0 2px 15px rgba(255, 105, 180, 0.2);
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        header::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            height: 100px;
            background: url('data:image/svg+xml,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="40" fill="%23ffffff" opacity="0.1"/></svg>');
            background-size: 60px 60px;
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            font-weight: 600;
            letter-spacing: -0.5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 2rem 0;
        }

        .pattern-section {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(255, 105, 180, 0.1);
            border: 2px solid var(--secondary-color);
            transition: transform 0.3s ease;
        }

        .pattern-section:hover {
            transform: translateY(-5px);
        }

        .pattern-section h1 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin: 0 0 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 3px solid var(--secondary-color);
            position: relative;
        }

        .pattern-section h1::after {
            content: '✦';
            position: absolute;
            right: 0;
            color: var(--accent-color);
        }

        .pattern-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .pattern-link {
            display: inline-flex;
            align-items: center;
            padding: 1rem 2rem;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            color: white;
            text-decoration: none;
            border-radius: 30px;
            transition: all 0.3s ease;
            width: fit-content;
            font-weight: 500;
        }

        .pattern-link:hover {
            box-shadow: 0 5px 15px rgba(255, 20, 147, 0.4);
            transform: scale(1.05);
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            padding: 1rem 2rem;
            background: var(--secondary-color);
            color: var(--text-color);
            text-decoration: none;
            border-radius: 30px;
            margin-top: 2rem;
            transition: all 0.3s ease;
            border: 2px solid var(--primary-color);
        }

        .back-link:hover {
            background: var(--primary-color);
            color: white;
        }

        footer {
            background: var(--primary-color);
            color: white;
            padding: 2rem 0;
            text-align: center;
            margin-top: auto;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 0;
            right: 0;
            height: 40px;
            background: linear-gradient(to bottom, rgba(255,105,180,0.1), transparent);
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            .pattern-section {
                padding: 1.5rem;
            }

            .pattern-link {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            header h1 {
                font-size: 1.8rem;
            }

            .pattern-section h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Лабораторная работа №3<br>Паттерны проектирования</h1>
        </div>
    </header>

    <main class="container">
        <div class="content">
            <div class="pattern-section">
                <h1>Одиночка (Singleton)</h1>
                <ul class="pattern-list">
                    <li><a href="lab3/patterns/singleton/settings_use.php" class="pattern-link">Демонстрация паттерна</a></li>
                </ul>
            </div>

            <div class="pattern-section">
                <h1>Фабричный метод (Factory Method)</h1>
                <ul class="pattern-list">
                    <li><a href="lab3/patterns/factory-method/factory_use.php" class="pattern-link">Демонстрация паттерна</a></li>
                    <li><a href="lab3/patterns/factory-method/factory-method.html" class="pattern-link">Диаграмма Фабричного метода</a></li>
                </ul>
            </div>

            <div class="pattern-section">
                <h1>Модель-Представление-Контроллер</h1>
                <ul class="pattern-list">
                    <li><a href="lab3/patterns/mvc/mvc_use.php" class="pattern-link">Демонстрация MVC</a></li>
                    <li><a href="lab3/patterns/mvc/mvc-pattern.html" class="pattern-link">Диаграмма MVC</a></li>
                </ul>
            </div>

            <a href="index.php" class="back-link">← Назад в главное меню</a>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; Лабораторная работа №3</p>
        </div>
    </footer>
</body>
</html>