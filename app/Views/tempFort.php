<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp Fort</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Arial", sans-serif;
            color: #333;
            min-height: 100vh;
        }

        header {
            background: linear-gradient(to right,rgb(164, 197, 240),rgb(37, 85, 217));
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.8em;
            font-weight: bold;
            letter-spacing: 2px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
        }

        nav {
            background-color: rgba(139, 148, 202, 0.9);
            display: flex;
            justify-content: center;
            padding: 15px 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav li {
            margin: 0 20px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-size: 1.2em;
            font-weight: bold;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav a:hover {
            color: rgb(9, 9, 9);
            transform: scale(1.1);
        }

        .main {
            padding: 60px 20px;
            text-align: center;
        }

        .main h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }

        .event-list {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }

        .event-card {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .event-card h3 {
            font-size: 1.8em;
            color: #333;
        }

        .event-card p {
            font-size: 1.1em;
            color: #555;
        }

        footer {
            background: linear-gradient(to right,rgb(144, 184, 238),rgb(69, 110, 221));
            color: white;
            text-align: center;
            padding: 15px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <!-- en-tête -->
    <header>
        <h1>LES TEMPS FORT</h1>
    </header>
    <!-- barre de navigation -->
    <nav>
        <ul>
        <li>
        <?php
            echo anchor('MonControleur/index', ' Accueil'); 
        ?>
        </li>
        <br> <br>
        <li>
            <?php
                 echo anchor('MonControleur/lesTF', ' Temp Fort'); 
            ?>
        </li>
        <br> <br>
        <li>
            <?php
                echo anchor('MonControleur/connexion', ' Connexion'); 
            ?>
        </li>
        </ul>
    </nav>
    <!-- section principale -->
    <div class="main">

        <h2>Nos Temps Forts</h2>

        <p>Découvrez les événements à ne pas manquer cette saison !</p>

      <div class="event-list">
    <?php foreach ($lesEvenements as $evenements): ?>
        <div class="event-card">
            <h3><?= esc($evenements['nomEvenement']); ?></h3>
            <img src=   ($evenements['image']); ?>" alt="<?= esc($evenements['nomEvenement']); ?>">
            <p><strong>Date :</strong> <?= esc($evenements['dateEvenement']); ?></p>
            <p><strong>Lieu :</strong> <?= esc($evenements['lieu']); ?></p>
            <p><strong>Description :</strong> <?= esc($evenements['description']); ?></p>
        </div>
    <?php endforeach; ?>
</div> 
    </div>
    <!-- pied de page -->
    <footer>
        <p> &copy; 2025 NOUVELLE VAGUE </p>
    </footer>
</body>
</html>
