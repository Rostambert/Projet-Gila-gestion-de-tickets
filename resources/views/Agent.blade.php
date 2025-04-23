<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Agent</title>
    <link rel="stylesheet" href="styles.css"> <!-- Suppose que le CSS est dans styles.css -->
    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #ffffff);
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 15px;
        }
        h1 {
            text-align: center;
            color: #0d47a1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #1976d2;
            color: white;
        }
        .etat-btn, .prio-btn {
            border: none;
            padding: 6px 12px;
            border-radius: 8px;
            color: white;
            font-weight: bold;
        }
        .etat-1 { background-color: #1976d2; }     /* Ouvert */
        .etat-2 { background-color: #f9a825; }     /* Pris en charge */
        .etat-3 { background-color: #2e7d32; }     /* Fermé */

        .prio-1 { background-color: #d32f2f; }      /* Haute */
        .prio-2 { background-color: #fbc02d; color: #000; } /* Moyenne */
        .prio-3 { background-color: #388e3c; }      /* Basse */

        .btn-prendre {
            background-color: #1565c0;
            border: none;
            padding: 8px 14px;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-prendre:hover {
            background-color: #0d47a1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tableau de bord Agent - Incidents Signalés</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Salle</th>
                    <th>Poste</th>
                    <th>Matériel</th>
                    <th>Priorité</th>
                    <th>État</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemple de ligne. A remplacer dynamiquement avec du PHP -->
                <tr>
                    <td>12</td>
                    <td>Problème de vidéoprojecteur</td>
                    <td>Salle 104</td>
                    <td>Poste 2</td>
                    <td>Vidéoprojecteur</td>
                    <td><span class="prio-btn prio-1">Haute</span></td>
                    <td><span class="etat-btn etat-1">Ouvert</span></td>
                    <td>
                        <form method="POST" action="prendre_en_charge.php">
                            <input type="hidden" name="incident_id" value="12">
                            <button class="btn-prendre" type="submit">Prendre en charge</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Problème de vidéoprojecteur</td>
                    <td>Salle 104</td>
                    <td>Poste 2</td>
                    <td>Vidéoprojecteur</td>
                    <td><span class="prio-btn prio-1">Haute</span></td>
                    <td><span class="etat-btn etat-1">Pris en charge</span></td>
                    <td>
                        <form method="POST" action="prendre_en_charge.php">
                            <input type="hidden" name="incident_id" value="12">
                            <button class="btn-prendre" type="submit">Prendre en charge</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Problème de vidéoprojecteur</td>
                    <td>Salle 104</td>
                    <td>Poste 2</td>
                    <td>Vidéoprojecteur</td>
                    <td><span class="prio-btn prio-1">Haute</span></td>
                    <td><span class="etat-btn etat-1">fermé</span></td>
                    <td>
                        <form method="POST" action="prendre_en_charge.php">
                            <input type="hidden" name="incident_id" value="12">
                            <button class="btn-prendre" type="submit">Prendre en charge</button>
                        </form>
                    </td>
                </tr>
                <!-- Fin exemple -->
            </tbody>
        </table>
    </div>
</body>
</html>
