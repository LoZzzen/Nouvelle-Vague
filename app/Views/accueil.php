<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NOUVELLE VAGUE</title>
    <style>
       
       /* style global */
        body {
            margin: 0;
            padding: 0;
            font-family: "Arial", sans-serif;
            color: #333;
            min-height: 100vh;
        }

        /* en-tête */
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

        /* barre de navigation */
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
            color:rgb(9, 9, 9);
            transform: scale(1.1);
        }

        /* section principale */
        .main {
            padding: 60px 20px;
            text-align: center;
        }

        .main h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }

        .main p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #555;
        }

        /* pied de page */
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
        <h1>NOUVELLE VAGUE</h1>
    </header>

    <!-- barre de navigation -->
    <nav>
        <ul>
            <li><a href="<?= base_url('MonControleur/index'); ?>">Accueil</a></li>
            <li><a href="<?= base_url('MonControleur/lesTF'); ?>">Temp Fort</a></li>
            <li><a href="<?= base_url('MonControleur/connexion'); ?>">Connexion</a></li>
        </ul>
    </nav>

    <!-- section principale -->
    <div class="main">

    
        <h2>Bienvenue sur le site de NOUVELLE VAGUE</h2>
        <p>
            Découvrez nos activités estivales, explorez de nouvelles aventures, et profitez du meilleur de la saison ! 
            Nous sommes heureux de vous accueillir dans cet espace de détente et de plaisir.
        </p>
    </div>

    <!-- pied de page -->
    <footer>
        <p>&copy; 2025 NOUVELLE VAGUE </p>
    </footer>

</body>
</html>
