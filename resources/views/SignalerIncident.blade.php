<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signaler un incident - Gilla</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: linear-gradient(to right, #005bff, #00bfff);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            color: #333;
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #005bff;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin: 12px 0 6px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        button {
            background-color: #005bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0041cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Signaler un incident</h1>
        <form action="traitement_incident.php" method="POST">
            <!-- <label for="date_ouverture">Date et heure d'ouverture</label> -->
            <!-- <input type="datetime-local" id="date_ouverture" name="date_ouverture" required> -->

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <!-- <label for="date_fermeture">Date et heure de fermeture (facultatif)</label> -->
            <!-- <input type="datetime-local" id="date_fermeture" name="date_fermeture"> -->

            <label for="salle">Salle</label>
            <input type="text" id="salle" name="salle" required>

            <label for="poste">Poste</label>
            <input type="text" id="poste" name="poste" required>
            <label for="poste">Batiment</label>
            <input type="text" id="Batiment" name="Batiment" required>

            <label for="materiel">Matériel concerné</label>
            <select id="materiel" name="materiel" required>
                <optgroup label="Bâtiment">
                    <option value="aeration">Aération</option>
                    <option value="eclairage">Éclairage</option>
                    <option value="chauffage">Chauffage</option>
                    <option value="fenetre">Fenêtre</option>
                    <option value="mur">Mur</option>
                    <option value="plafond">Plafond</option>
                    <option value="porte">Porte</option>
                    <option value="prise_courant">Prise de courant</option>
                    <option value="prise_reseau">Prise réseau</option>
                    <option value="sol">Sol</option>
                </optgroup>
                <optgroup label="Informatique">
                    <option value="clavier">Clavier</option>
                    <option value="ecran">Écran</option>
                    <option value="pc_portable">PC Portable</option>
                    <option value="souris">Souris</option>
                    <option value="unite_centrale">Unité centrale</option>
                    <option value="videoprojecteur">Vidéoprojecteur</option>
                </optgroup>
                <optgroup label="Mobilier">
                    <option value="armoire">Armoire</option>
                    <option value="chaise">Chaise</option>
                    <option value="table">Table</option>
                </optgroup>
            </select>

            <label for="priorite">Priorité</label>
            <select id="priorite" name="priorite" required>
                <option value="1">1 - Haute</option>
                <option value="2">2 - Moyenne</option>
                <option value="3">3 - Basse</option>
            </select>


            <!-- <label for="etat">État</label> -->
            <!-- <select id="etat" name="etat" required> -->
                <!-- <option value="1">1 - Ouvert</option> -->
                <!-- <option value="2">2 - Pris en charge</option> -->
                <!-- <option value="3">3 - Fermé</option> -->
            <!-- </select> */ -->
            <button type="submit">Signaler l'incident</button>
        </form>
    </div>
</body>
</html>
