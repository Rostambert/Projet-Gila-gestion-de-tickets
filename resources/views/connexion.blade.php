<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Gilla</title>
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
            max-width: 400px;
            text-align: center;
        }

        .logo {
            font-size: 40px;
            font-weight: 700;
            color: #005bff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .logo span {
            background-color: #005bff;
            color: #fff;
            font-size: 28px;
            padding: 8px 12px;
            border-radius: 50%;
            margin-right: 10px;
        }

        h1 {
            font-size: 22px;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            background-color: #005bff;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: #0041cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <span>G</span> Gilla
        </div>
        <h1>Un incident? Bienvenue sur notre site Gilla, connectez-vous</h1>

        <form method="POST" action="connexion.php">
            <label>Email</label>
            <input type="email" name="email" required>

            <label>Mot de passe</label>
            <input type="password" name="password" required>

            <button type="submit" name="connexion">Se connecter</button>
        </form>
    </div>
</body>
</html>