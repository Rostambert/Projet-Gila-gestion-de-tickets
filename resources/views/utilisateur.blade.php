<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gilla</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(to right, #005bff, #00bfff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .container {
            background-color: white;
            color: #333;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        .logo {
            font-size: 36px;
            font-weight: 700;
            color: #005bff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .logo span {
            background-color: #005bff;
            color: #fff;
            font-size: 24px;
            padding: 8px 12px;
            border-radius: 50%;
            margin-right: 10px;
        }

        h1 {
            font-size: 22px;
            margin-bottom: 30px;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn {
            background-color: #005bff;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0041cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <span>G</span> Gilla
        </div>
        <h1>
            Bienvenue Mr/Mme 
            <?php 
                // Remplace cette ligne par la récupération depuis ta session ou ta base de données
                session_start();
                echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Utilisateur';
            ?>
        </h1>

        <div class="btn-group">
            <a href="signaler_incident.php" class="btn">Signaler un incident</a>
            <a href="mes_incidents.php" class="btn">Consulter mes incidents</a>
        </div>
    </div>
</body>
</html>