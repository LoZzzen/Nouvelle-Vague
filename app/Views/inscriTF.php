<!-- ROKHIYA -->

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
            background-color: #1a73e8;
            color: white;
            padding: 40px 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Barre de navigation */
        nav {
            background-color:rgb(224, 240, 238);
            display: flex;
            justify-content: center;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
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
            font-size: 1.1em;
            font-weight: 500;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav a:hover {
            color: #1a73e8;
            transform: scale(1.1);
        }


        .main {
            padding: 80px 80px;
            text-align: center;
        }

        .main p {
            font-size : 17px;
        }

        .main h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #333;
        }

        .listeEvenement {
            display: grid;
            grid-template-columns: 1fr 1fr; 
            gap: 30px; 
            margin-top: 30px;
        }

        .evenement {
            background-color:rgb(247, 246, 211);
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .evenement h3 {
            font-size: 1.8em;
            color: #333;
        }

        .evenement p {
            padding: 10px;
            text-align: center;
            font-size: 1.1em;
            color: #555;
            text-align : justify;
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

        /* bouton */
        .inscription-bouton {
            text-align: center; 
            margin-top: 20px; /
        }

       
        .btn-inscrire {
            background-color:rgb(147, 185, 236); 
            color: rgb(251, 252, 253);
            padding: 12px 25px; 
            font-size: 1.1em; 
            text-decoration: none;
            border-radius: 5px; 

        }
    </style>
</head>
<body>
    <!-- en-tête -->
    <header>
        <h1>INSCRIPTION AUX TEMPS FORTS</h1>
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

</div>

    </div>
    <!-- pied de page -->
    <footer>
        <p> &copy; 2025 NOUVELLE VAGUE </p>
    </footer>
</body>
</html>
