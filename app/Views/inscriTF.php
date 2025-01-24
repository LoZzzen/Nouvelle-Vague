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
        <li>
            <?php $session = \Config\Services::session(); 
             if($session->get('login')){
                echo anchor('MonControleur/reserv', ' Réservation');
                }
                ?> 
        </li>
        </ul>
    </nav>

</div>

        <!-- Formulaire d'inscription -->
    <div class="registre">

        <div class="conteneur">
        <!-- menu deroulant pour les evenements -->
        <label for="evenement">Choisissez un événement :</label>
            <select name="evenement" id="evenement">
                <?php foreach ($lesEvenements as $evenement): ?>
                <option value="<?= esc($evenement['idEvenement']); ?>">
                <?= esc($evenement['nomEvenement']); ?>
                </option>
                <?php endforeach; ?>
            </select>

            <?= validation_list_errors() ?>
            <?= form_open('/MonControleur/validTF'); ?>
            <div class="éléments-utilisateur">
                <div class="champ-entrée">
                    <?= form_label('Nom : ') ?>
                    <?php echo form_input('Nom', set_value('Nom')); ?>
            </div>

            <div class="champ-entrée">
                    <?= form_label('Prénom : ') ?>
                    <?php echo form_input('Prenom', set_value('Prenom')); ?>
                <!-- menu deroulant pour le nombre de place-->
            </div>
                <label for="places">Nombre de places :</label>
                <select name="places" id="places">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                <option value="<?= $i; ?>"><?= $i; ?></option>
                <?php endfor; ?>
                </select>
            <br><br>
            <div class="bouton">
                <?php echo form_submit('mysubmit', 'Valider'); ?>
            </div>

            <?= form_close(); ?>
        </div>
    </div>

    </div>
    <!-- pied de page -->
    <footer>
        <p> &copy; 2025 NOUVELLE VAGUE </p>
    </footer>
</body>
</html>
