<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторные работы по PHP</title>
    <style>
    :root {
        --pink-primary: #FF69B4;
        --pink-secondary: #FF1493;
        --pink-accent: #FF85C2;
        --gold-effect: linear-gradient(45deg, #FFD700 25%, transparent 25%, transparent 50%, #FFD700 50%, #FFD700 75%, transparent 75%);
        --text-color: #4A235A;
        --light-bg: #FFF0F5;
        --border-color: #FFB6C1;
        --shadow-color: rgba(255,105,180,0.3);
    }

    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        max-width: 800px;
        margin: 0 auto;
        padding: 30px;
        background: var(--light-bg);
        color: var(--text-color);
        line-height: 1.8;
        border: 3px solid var(--pink-primary);
        border-radius: 20px;
        box-shadow: 0 0 30px rgba(255,105,180,0.2);
    }

    header {
        text-align: center;
        margin-bottom: 50px;
        padding: 40px 0;
        background: linear-gradient(135deg, var(--pink-primary), var(--pink-secondary));
        border-radius: 20px;
        box-shadow: 0 10px 20px var(--shadow-color);
        position: relative;
        overflow: hidden;
    }

    header::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--gold-effect);
        background-size: 20px 20px;
        opacity: 0.2;
        pointer-events: none;
    }

    h1 {
        color: white;
        font-size: 2.8rem;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        font-weight: 700;
        letter-spacing: 2px;
        position: relative;
        z-index: 1;
    }

    .main-container {
        display: flex;
        flex-direction: column;
        gap: 25px;
        margin-bottom: 60px;
    }

    .lab-card {
        background: linear-gradient(145deg, #ffffff 0%, #ffe5f0 100%);
        border-radius: 15px;
        box-shadow: 0 5px 15px var(--shadow-color);
        transition: all 0.3s ease;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        border: 2px solid var(--border-color);
    }

    .lab-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(255,20,147,0.4);
    }

    .lab-header {
        color: var(--pink-secondary);
        font-size: 1.5rem;
        font-weight: 600;
        flex: 1;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }

    .lab-link {
        display: inline-flex;
        align-items: center;
        background: linear-gradient(45deg, var(--pink-primary), var(--pink-secondary));
        color: white;
        text-decoration: none;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: bold;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px var(--shadow-color);
        position: relative;
        overflow: hidden;
    }

    .lab-link::after {
        content: "✨";
        position: absolute;
        right: 10px;
        transition: all 0.3s ease;
    }

    .lab-link:hover {
        background: linear-gradient(45deg, var(--pink-secondary), var(--pink-primary));
        transform: scale(1.05);
        box-shadow: 0 5px 20px rgba(255,20,147,0.5);
    }

    .lab-link:hover::after {
        transform: rotate(360deg);
    }

    @media (max-width: 768px) {
        body {
            padding: 20px;
            border-width: 2px;
        }
        
        h1 {
            font-size: 2.2rem;
        }
        
        .lab-card {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
        
        .lab-link {
            width: 100%;
            justify-content: center;
        }
    }
    </style>
</head>
<body>
    <header>
        <h1>Лабораторные работы по PHP</h1>
    </header>

    <div class="main-container">
        <div class="lab-card">
            <div class="lab-header">Лабораторная работа №1</div>
            <a href="users.php" class="lab-link">КЛИК</a>
        </div>

        <div class="lab-card">
            <div class="lab-header">Лабораторная работа №2</div>
            <a href="lab2.php" class="lab-link">КЛИК</a>
        </div>

        <div class="lab-card">
            <div class="lab-header">Лабораторная работа №3</div>
            <a href="lab3.php" class="lab-link">КЛИК</a>
        </div>

        <div class="lab-card">
            <div class="lab-header">Лабораторная работа №4</div>
            <a href="lab4.php" class="lab-link">КЛИК</a>
        </div>

        <div class="lab-card">
            <div class="lab-header">Лабораторная работа №5</div>
            <a href="lab5.php" class="lab-link">КЛИК</a>
        </div>
    </div>
</body>
</html>