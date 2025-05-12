<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Документация</title>
    <style>
        /* Базовые стили */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        body {
            background: #fff5f7;
            color: #333;
            line-height: 1.6;
            padding: 2rem;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            animation: fadeIn 0.5s ease-out;
        }

        h1 {
            font-size: 2.5rem;
            color: #d23669;
            text-align: center;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 3px solid #ff9a9e;
            display: inline-block;
            margin-left: 50%;
            transform: translateX(-50%);
        }

        /* Стили для сетки блоков */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        /* Общие стили блоков */
        .card {
            background: #fff;
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 8px 25px rgba(255, 105, 140, 0.15);
            min-height: 280px;
            display: flex;
            flex-direction: column;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            border: 1px solid #ffecef;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(255, 105, 140, 0.25);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #ff758c, #ff9a9e);
        }

        .card-header {
            border-bottom: 2px solid #ffd6e0;
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .card-title {
            font-size: 1.6rem;
            font-weight: 600;
            color: #d23669;
        }

        .card-content {
            flex: 1;
            margin-bottom: 2rem;
            color: #555;
            line-height: 1.8;
        }

        .card-link {
            display: inline-flex;
            align-items: center;
            padding: 1rem 2rem;
            background: linear-gradient(to right, #ff758c, #ff9a9e);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            align-self: flex-start;
            font-weight: 500;
            box-shadow: 0 4px 15px rgba(255, 105, 140, 0.3);
            border: none;
        }

        .card-link:hover {
            background: linear-gradient(to right, #ff6b81, #ff8e9e);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 105, 140, 0.4);
        }

        .card-link svg {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .card-link:hover svg {
            transform: translateX(3px);
        }

        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            opacity: 0;
            animation: fadeIn 0.6s ease forwards;
        }

        .card:nth-child(1) { animation-delay: 0.1s; }
        .card:nth-child(2) { animation-delay: 0.3s; }
        .card:nth-child(3) { animation-delay: 0.5s; }

        /* Адаптивность */
        @media (max-width: 900px) {
            .grid {
                gap: 2rem;
            }
            
            .card {
                padding: 2rem;
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 1.5rem;
            }
            
            h1 {
                font-size: 2rem;
                width: 100%;
                text-align: center;
                padding-bottom: 0.8rem;
            }
            
            .grid {
                grid-template-columns: 1fr;
                margin-top: 3rem;
                gap: 2rem;
            }
            
            .card {
                min-height: auto;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 1rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .card {
                padding: 1.8rem;
            }
            
            .card-title {
                font-size: 1.4rem;
            }
            
            .card-link {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Документация системы</h1>
        
        <div class="grid">
            <!-- Блок 1 - Итератор -->
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Применение Итератора</h2>
                </div>
                <div class="card-content">
                    <!-- Место для контента -->
                </div>
                <a href="lab5/NumbersSquared.php" class="card-link">
                    Подробнее
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </a>
            </div>

            <!-- Блок 2 - Новости -->
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Новости</h2>
                </div>
                <div class="card-content">
                    <!-- Место для контента -->
                </div>
                <a href="lab5/news.php" class="card-link">
                    Читать
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                </a>
            </div>

            <!-- Блок 3 - Диаграмма -->
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Диаграмма классов</h2>
                </div>
                <div class="card-content">
                    <!-- Место для контента -->
                </div>
                <a href="https://www.plantuml.com/plantuml/svg/jP11JaCX48Rtd8A5YJLg3-32TEl6ZGTeA8m9aGTn6Af6JThg8OodwER56kCTXXk93-lJbxYK5VF1mFVF9992IeqJObVo4x_d5RTvaH-vvTUyb2S4g2YWiBxipfM6RoHlXInh7-7AUZFQEvBpO4rbS-LiXsOXk8eyNDFlInTmymcifrhhX0YUjko-KthcDrxdPL4vJSqCC9vT9eLWP5vmo-jokk6N_52aLv8tV_jhfs8Slb4J7EvqGwY_LW3U_2o_p2ggijEf3ZuI9asZllr0RZlxfFyxea6YyVZkk0yj9aKdDUu3" class="card-link">
                    Смотреть
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</body>
</html>