<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Görev 1 | 1-100 Arası Tek Sayılar</title>

    <!-- Fontlar -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #2196F3;
            --bg-light: #f4f7f6;
            --card-bg: #ffffff;
            --text-dark: #333;
        }

        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, #e8f5e9, #f4f7f6);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: var(--card-bg);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            max-width: 600px;
            width: 90%;
            text-align: center;
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
            margin-bottom: 25px;
        }

        .numbers {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
            gap: 10px;
        }

        .number-box {
            background-color: var(--secondary-color);
            color: white;
            padding: 12px 0;
            border-radius: 8px;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .back-link {
            margin-top: 30px;
            display: inline-block;
            text-decoration: none;
            background-color: var(--primary-color);
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .back-link:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>1 - 100 Arası Tek Sayılar</h1>

    <div class="numbers">
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 1) {
                echo "<div class='number-box'>$i</div>";
            }
        }
        ?>
    </div>

    <a class="back-link" href="index.html">← Ana Sayfaya Dön</a>
</div>

</body>
</html>
