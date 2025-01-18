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
            font-family: "Helvetica Neue", Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
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

        /* Formulaire */
        .registre {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
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
        <h1>NOUVELLE VAGUE</h1>
    </header>

    <!-- Barre de navigation -->
    <nav>
        <ul>
            <li>
                <?php echo anchor('MonControleur/index', 'Accueil'); ?>
            </li>
            <li>
                <?php echo anchor('MonControleur/lesTF', 'Temp Forts'); ?>
            </li>
            <li>
                <?php echo anchor('MonControleur/connexion', 'Connexion'); ?>
            </li>
        </ul>
    </nav>

    <!-- Formulaire d'inscription -->
    <div class="registre">

        <div class="conteneur">

            <?= validation_list_errors() ?>

            <?= form_open('/MonControleur/valideFormulaire'); ?>

            <div class="éléments-utilisateur">
                <div class="champ-entrée">
                    <?= form_label('Nom : ') ?>
                    <?php echo form_input('Nom', set_value('Nom')); ?>
            </div>

            <div class="champ-entrée">
                    <?= form_label('Prénom : ') ?>
                    <?php echo form_input('Prenom', set_value('Prenom')); ?>
            <br><br>
                    <?= form_label('Login : ') ?>
                    <?php echo form_input('Login', set_value('Login')); ?>
            <br><br>
                    <?= form_label('Mot de passe : ') ?>
                    <?php echo form_input('password', set_value('password')); ?>
            </div>

            <br><br>

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
