<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Диаграмма Классов и интерфейсов</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px; /* Уменьшил максимальную ширину */
            margin: 0 auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
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
</body>
</html>