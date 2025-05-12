<?php
// Лабораторная работа №4 - Работа с файлами и сессиями
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №4 - Работа с файлами и сессиями</title>
    <style>
        :root {
            --primary-color: #ff758c;
            --secondary-color: #ff9a9e;
            --accent-color: #d23669;
            --text-color: #333;
            --light-bg: #fff5f7;
            --card-bg: #ffffff;
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
        }

        header {
            background: linear-gradient(135deg, var(--primary-color), #ff7eb3);
            color: white;
            padding: 3rem 0;
            box-shadow: 0 4px 15px rgba(255, 105, 140, 0.3);
            margin-bottom: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 10px;
            background: linear-gradient(90deg, #ff758c, #ff9a9e, #ff758c);
        }

        .header-content {
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .back-link {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-weight: 500;
        }

        .back-link:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-50%) scale(1.05);
        }

        h1 {
            font-size: 2.8rem;
            margin: 0 0 0.5rem;
            font-weight: 600;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .subtitle {
            font-size: 1.3rem;
            opacity: 0.95;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 300;
        }

        .section-container {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2.5rem;
            margin: 2rem 0;
            box-shadow: 0 8px 25px rgba(255, 105, 140, 0.1);
            border: 1px solid #ffecef;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .section-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(255, 105, 140, 0.15);
        }

        .section-title {
            color: var(--accent-color);
            font-size: 2rem;
            margin: 0 0 1.8rem;
            padding-bottom: 1rem;
            border-bottom: 3px solid var(--primary-color);
            font-weight: 600;
        }

        .description {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2rem;
            color: #555;
        }

        .demo-link {
            display: inline-flex;
            align-items: center;
            padding: 1rem 2.2rem;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(255, 105, 140, 0.25);
            border: none;
            font-size: 1.1rem;
        }

        .demo-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 105, 140, 0.4);
            background: linear-gradient(to right, #ff6b81, #ff8e9e);
        }

        .diagram-container {
            margin: 2.5rem 0;
            padding: 1.5rem;
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(255, 105, 140, 0.1);
            border: 1px solid #ffecef;
        }

        .diagram-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            border: 1px solid #ffd6e0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        footer {
            background: linear-gradient(135deg, var(--primary-color), #ff7eb3);
            color: white;
            margin-top: auto;
            padding: 2.5rem 0;
            text-align: center;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 10px;
            background: linear-gradient(90deg, #ff758c, #ff9a9e, #ff758c);
        }

        .footer p {
            margin: 0;
            opacity: 0.9;
            font-size: 1.1rem;
        }

        code {
            background: #fff5f7;
            padding: 0.3em 0.6em;
            border-radius: 6px;
            font-family: 'Courier New', monospace;
            font-size: 0.95em;
            color: #d23669;
            border: 1px solid #ffd6e0;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.2rem;
                padding-top: 50px;
            }

            .back-link {
                position: static;
                transform: none;
                margin: 0 auto 1.5rem;
                display: inline-flex;
                justify-content: center;
            }

            .section-container {
                padding: 2rem;
            }

            .section-title {
                font-size: 1.7rem;
            }

            header {
                padding: 2.5rem 0;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .demo-link {
                width: 100%;
                justify-content: center;
                padding: 1rem;
            }

            .section-container {
                padding: 1.5rem;
            }

            h1 {
                font-size: 1.8rem;
            }

            .subtitle {
                font-size: 1.1rem;
            }
        }

        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-container {
            animation: fadeIn 0.6s ease forwards;
            opacity: 0;
        }

        .section-container:nth-child(1) { animation-delay: 0.1s; }
        .section-container:nth-child(2) { animation-delay: 0.3s; }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <a href="index.php" class="back-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                На главную
            </a>
            <h1>Лабораторная работа №4</h1>
            <div class="subtitle">Работа с файлами и сессиями</div>
        </div>
    </header>

    <main class="container">
        <div class="section-container">
            <h2 class="section-title">Новостная система</h2>
            <div class="description">
                <p>В рамках данной лабораторной работы реализована система управления новостями с использованием базы данных SQLite.</p>
                <p>Реализован класс NewsDB, который позволяет работать с новостной системой через интерфейс INewsDB.</p>
                <p>Система размещена в каталоге <code>news/</code> и доступна по ссылке:</p>
            </div>
            <a href="lab4/news/news/news.php" class="demo-link" target="_blank">
                Перейти к новостной системе
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16" style="margin-left: 10px;">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                </svg>
            </a>
        </div>

        <div class="section-container">
            <h2 class="section-title">Диаграмма классов</h2>
            <div class="diagram-container">
                <img src="https://www.plantuml.com/plantuml/svg/pP5DQiD038Nt1jz1Ivkcg-wySeEp2BI1qWCCundL38ndZ2GdXDAxT_pJkAGNg9QVzFGUKisYISRUvrcU6Q-PuOGNRlRW-i5ZZq4OZYlwp3D8zM1YO85chqxFhuSAMCY5RkazAjjMyFxsuWIVrl4EfMcByXuhDU-XqKXHtfZ5EyJwZ9D_8Kuy_hZjm6Z1Bj9r8qbgo0tYOjWWnv7CJPP2j35wr67BDYzF3Ksahoksw54MMsShS25v8VrMVqq7cpXzQ8D_JlIVKzSORFhuDm00" 
                     alt="Диаграмма классов новостной системы"
                     loading="lazy">
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>PHP Student Project &copy; <?php echo date('Y'); ?>. Все права защищены.</p>
        </div>
    </footer>
</body>
</html>