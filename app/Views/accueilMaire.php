<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOUVELLE VAGUE</title>
    <style>
        /* Style global */
        body {
            margin: 0;
            padding: 0;
            font-family: "Arial", sans-serif;
            color: #333;
            background: url('https://example.com/background.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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


        /* Section principale */
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 60px 50px;
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            margin: 40px auto;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 900px;
        }

        .main h2 {
            font-size: 2.2em;
            margin-bottom: 15px;
            color: #333;
            font-weight: 600;
        }

        .main p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #555;
            margin-bottom: 25px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Pied de page */
        footer {
            background: linear-gradient(to right, rgb(144, 184, 238), rgb(69, 110, 221));
            color: white;
            text-align: center;
            padding: 12px 0;
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

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            header h1 {
                font-size: 2.4em;
            }

            nav ul {
                flex-direction: column;
            }

            .main {
                padding: 30px 20px;
                width: 90%;
            }

            .cta-button {
                font-size: 1em;
                padding: 10px 25px;
            }
        }
    </style>
</head>
<body>

    <!-- En-tête -->
    <header>
        <h1>NOUVELLE VAGUE SERVICE DU MAIRE</h1>
    </header>

    <!-- Barre de navigation -->
    <nav>
        <ul>
            <li>
                <?php
                    echo anchor('MonControleur/index', 'Accueil');
                ?>
            </li>
            <li>
                <?php
                    echo anchor('MonControleur/lesTF', 'Temp Forts');
                ?>
            </li>
            <li>
                <?php
                    echo anchor('MonControleur/connexion', 'Connexion');
                ?>
            </li>
            <li>
                <?php $session = \Config\Services::session(); 
                    if($session->get('login')){
                        echo anchor('MonControleur/reserv', ' Réservation');
                ?> 
            </li>
            <li>
            <?php
                echo anchor('MonControleur/deconnexion', ' Déconnexion');
                }
                ?> 
            </li>
        </ul>
    </nav>


    <!-- Pied de page -->
    <footer>
        <p>&copy; 2025 NOUVELLE VAGUE MAIRE</p>
    </footer>

</body>
</html>
