<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Görev 2 | Dinamik Tablo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontlar -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #2196F3;
            --bg-light: #f4f7f6;
            --card-bg: #ffffff;
            --text-dark: #333;
            --shadow-light: rgba(0,0,0,0.1);
            --shadow-medium: rgba(0,0,0,0.2);
        }

        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #f4f7f6);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: var(--card-bg);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px var(--shadow-medium);
            max-width: 800px;
            width: 95%;
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            color: var(--secondary-color);
            text-align: center;
            margin-bottom: 25px;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            margin-bottom: 30px;
        }

        input[type="number"] {
            padding: 12px;
            width: 180px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #388e3c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
            font-weight: bold;
            background-color: #e3f2fd;
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            background-color: var(--secondary-color);
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .back-link:hover {
            background-color: #1976d2;
        }
    </style>
</head>
<body>

<div class="container">
    <h1><i class="fas fa-th"></i> Görev 2 – Dinamik Tablo</h1>

    <form method="post">
        <input type="number" name="satir" placeholder="Satır sayısı" min="1" required>
        <input type="number" name="sutun" placeholder="Sütun sayısı" min="1" required>
        <button type="submit">Tablo Oluştur</button>
    </form>

    <?php
    if (isset($_POST['satir']) && isset($_POST['sutun'])) {

        $satir = (int)$_POST['satir'];
        $sutun = (int)$_POST['sutun'];

        echo "<table>";

        for ($i = 0; $i < $satir; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $sutun; $j++) {
                echo "<td>" . rand(1, 100) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

    <a class="back-link" href="php-odevi.html">
        ← PHP Ödevlerine Dön
    </a>
</div>

</body>
</html>
