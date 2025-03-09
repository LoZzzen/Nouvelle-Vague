<!-- ROKHIYA -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp Fort</title>
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
    background: #007bff;
    color: white;
    text-align: center;
    padding: 15px 0;
    width: 100%;
    margin-top: auto;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
}

footer p {
    margin: 0;
    font-size: 1em;
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
        <li>
                <?php $session = \Config\Services::session(); 
                    if($session->get('login')){
                        echo anchor('MonControleur/reserv', ' Réservation');
                ?> 
        </li>
        <li>
            <?php
                echo anchor('MonControleur/connexion', ' Connexion'); 
            ?>
        </li>
            <li>
            <?php
                echo anchor('MonControleur/deconnexion', ' Déconnexion');
                
                ?> 
            </li>
            <li>
            <?php
                  echo anchor('MonControleur/profil', 'Bienvenue'.'  '.$session->get('login').'!');
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
