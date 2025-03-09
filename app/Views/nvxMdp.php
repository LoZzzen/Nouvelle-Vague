<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOUVELLE VAGUE</title>
    <style>

      /* Importation d'une police moderne */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

/* Style global */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Poppins", sans-serif;
    background: #ffffff;
    color: #333;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* En-tête */
header {
    background: #007bff;
    color: white;
    padding: 20px 0;
    text-align: center;
    width: 100%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 100;
    transition: all 0.3s ease;
}

header h1 {
    margin: 0;
    font-size: 2.5em;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Barre de navigation */
nav {
    display: flex;
    justify-content: center;
    background: #ffffff;
    width: 100%;
    padding: 15px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav li {
    margin: 0;
}

nav a {
    text-decoration: none;
    color: #007bff;
    font-size: 1.1em;
    font-weight: 500;
    padding: 10px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
    position: relative;
}

nav a::after {
    content: "";
    width: 100%;
    height: 3px;
    background: #007bff;
    position: absolute;
    bottom: -5px;
    left: 0;
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

nav a:hover::after {
    transform: scaleX(1);
}

        /* Formulaire */
        .registre {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
            background-color: #fafafa;
        }

        .conteneur {
            max-width: 500px;
            width: 100%;
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .champ-entrée {
            margin-bottom: 20px;
            width: 100%;
        }

        .détail {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 1.1em;
        }

        .champ-entrée input {
            height: 45px;
            width: 100%;
            outline: none;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding-left: 15px;
            font-size: 15px;
            transition: border-color 0.3s ease;
        }

        .champ-entrée input:focus {
            border-color: #1a73e8;
        }

        .bouton {
            height: 50px;
            margin: 30px 0;
        }

        .bouton input {
            height: 100%;
            width: 100%;
            background-color: #1a73e8;
            border: none;
            color: white;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 5px;
        }

        .bouton input:hover {
            background-color: #155db3;
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
                font-size: 2.2em;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            .conteneur {
                width: 90%;
                padding: 25px;
            }

            .champ-entrée input {
                font-size: 14px;
            }

            .bouton input {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>
    <!-- En-tête -->
    <header>
        <h1>PROFIL</h1>
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
                <?php $session = \Config\Services::session(); 
                    if($session->get('login')){
                        echo anchor('MonControleur/reserv', ' Réservation');
                ?> 
            </li>
            <li>
                <?php
                    echo anchor('MonControleur/connexion', 'Connexion');
                ?>
            </li>
            <li>
            <?php
                echo anchor('MonControleur/deconnexion', ' Déconnexion');
                
                ?> 
            </li>
            <li>
            <?php
                  echo anchor('MonControleur/profile', 'Bienvenue'.'  '.$session->get('login').'!');
                }
                ?> 
            </li>
        </ul>
    </nav>

    <!-- Formulaire de connexion -->
    <div class="registre">

        <div class="conteneur">

            <?= validation_list_errors() ?>

            <?= form_open('/MonControleur/modifMdp'); ?>

            <div class="éléments-utilisateur">

                <div class="champ-entrée">
                    <?= form_label('Ancien Mot de Passe : ') ?>
                    <?php echo form_input('aMdp', set_value('aMdp')); ?>

            <br><br>

                    <?= form_label('Nouveau Mot de Passe : ') ?>
                    <?php echo form_input('nMdp', set_value('nMdp')); ?>
                </div>

            </div>

            <div class="bouton">
                <?php echo form_submit('mysubmit', 'Valider'); ?>
            </div>

            <?= form_close(); ?>

        </div>
    </div>
            <!-- Pied de page -->
            <footer>
                <p>&copy; 2025 NOUVELLE VAGUE</p>
            </footer>
</body>

</html>
