<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes incidents - Gilla</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: linear-gradient(to right, #005bff, #00bfff);
            padding: 40px;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            max-width: 1000px;
            margin: auto;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #005bff;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f0f0f0;
        }

        .etat-btn, .prio-btn {
            padding: 6px 12px;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            cursor: default;
        }

        .etat-1 { background-color: #007bff; } /* Ouvert */
        .etat-2 { background-color: #ffc107; } /* Pris en charge */
        .etat-3 { background-color: #28a745; } /* Fermé */

        .prio-1 { background-color: #dc3545; } /* Haute */
        .prio-2 { background-color: #fd7e14; } /* Moyenne */
        .prio-3 { background-color: #6c757d; } /* Basse */
    </style>
</head>
<body>
    <div class="container">
        <h1>Mes incidents signalés</h1>
        <table>
            <thead>
                <tr>
                    <th>Date ouverture</th>
                    <th>Description</th>
                    <th>Matériel</th>
                    <th>Salle</th>
                    <th>Poste</th>
                    <th>Priorité</th>
                    <th>État</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Exemple de récupération des incidents (à remplacer par ta BDD réelle)
                // Supposons que tu as une connexion active à ta BDD ici
                session_start();
                $userId = $_SESSION['user_id']; // à adapter selon ta session

                try {
                    $pdo = new PDO('mysql:host=localhost;dbname=ta_base;charset=utf8', 'root', '');
                    $stmt = $pdo->prepare("SELECT * FROM incident WHERE utilisateur_id = ?");
                    $stmt->execute([$userId]);
                    $incidents = $stmt->fetchAll();

                    foreach ($incidents as $incident) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($incident['dateHeureOuverture']) . "</td>";
                        echo "<td>" . htmlspecialchars($incident['description']) . "</td>";
                        echo "<td>" . htmlspecialchars($incident['materiel']) . "</td>";
                        echo "<td>" . htmlspecialchars($incident['salle']) . "</td>";
                        echo "<td>" . htmlspecialchars($incident['poste']) . "</td>";

                        // Priorité
                        $prioriteClass = "prio-" . intval($incident['priorite']);
                        $prioriteText = match ($incident['priorite']) {
                            1 => "Haute",
                            2 => "Moyenne",
                            3 => "Basse",
                            default => "Inconnue"
                        };
                        echo "<td><button class='prio-btn $prioriteClass'>$prioriteText</button></td>";

                        // État
                        $etatClass = "etat-" . intval($incident['etat']);
                        $etatText = match ($incident['etat']) {
                            1 => "Ouvert",
                            2 => "Pris en charge",
                            3 => "Fermé",
                            default => "Inconnu"
                        };
                        echo "<td><button class='etat-btn $etatClass'>$etatText</button></td>";

                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "<tr><td colspan='7'>Erreur : " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
