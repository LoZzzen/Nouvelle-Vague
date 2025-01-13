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

   /* En-tête */
   header {
            background: rgba(37, 85, 217, 0.85);
            color: white;
            padding: 30px 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            border-bottom: 2px solid #fff;
        }

        header h1 {
            margin: 0;
            font-size: 2.8em;
            font-weight: bold;
            letter-spacing: 2px;
            text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.4);
        }

        /* Barre de navigation */
        nav {
            background-color: rgba(139, 148, 202, 0.9);
            display: flex;
            justify-content: center;
            padding: 10px 20px;
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
            color: #fff;
            font-size: 1.2em;
            font-weight: bold;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav a:hover {
            color: #f1f1f1;
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

        .listeEvenement {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }

        .evenement {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .evenement h3 {
            font-size: 1.8em;
            color: #333;
        }

        .evenement p {
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
        <h1>LES TEMPS FORTS</h1>
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
                 echo anchor('MonControleur/lesTF', ' Temp Forts'); 
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
<br><br><br>
        <p>Ne manquez pas les événements incontournables de cette saison ! <br>Partez à la découverte de la ville à travers des visites fascinantes et plongez dans des activités variées pour tous les goûts.</p>
<br><br><br><br><br>
        <div class="listeEvenement">
    <?php foreach ($lesEvenements as $evenement): ?>
        
        <div class="evenement">
            
            <h4><?= esc($evenement['nomEvenement']); ?></h4>
            
            <!-- Affichage de l'image -->
            <a href="<?= esc($evenement['lienPhp']); ?>" target="_blank">
                <img src="<?= base_url($evenement['image']); ?>" alt="<?= esc($evenement['nomEvenement']); ?>" style="width:100%; height:auto;">
            </a>
            
            <!-- <img src="<?= base_url($evenement['image']); ?>" alt="<?= esc($evenement['nomEvenement']); ?>" style="width:100%; height:auto;"> -->
            
            <!-- <p><strong>Date :</strong> <?= esc($evenement['dateEvenement']); ?></p> -->
            <!-- <p><strong>Lieu :</strong> <?= esc($evenement['lieu']); ?></p> -->
            <!-- <p><strong>Description :</strong> <?= esc($evenement['description']); ?></p> -->
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
