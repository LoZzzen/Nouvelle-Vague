<!DOCTYPE html>
<html lang="fr">

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

/* Section principale */
.main {
    padding: 60px 10%;
    text-align: center;
}

.main p {
    font-size: 1.2em;
    color: #555;
}

.main h2 {
    font-size: 2.8em;
    margin-bottom: 20px;
    color: #1a73e8;
}

/* Liste des événements */
.listeEvenement {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

/* Card des événements */
.evenement {
    background-color: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
}

.evenement:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.evenement h3 {
    font-size: 1.8em;
    color: #003d99;
}

.evenement p {
    padding: 10px;
    font-size: 1.1em;
    color: #555;
}

.evenement img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 15px 0;
}

/* Pied de page */
footer {
    background: linear-gradient(to right, #1a73e8, #003d99);
    color: white;
    text-align: center;
    padding: 20px 0;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    position: relative;
    bottom: 0;
    width: 100%;
}

footer p {
    margin: 0;
    font-size: 1em;
    letter-spacing: 0.5px;
}

/* Bouton d'inscription */
.inscription-bouton {
    margin-top: 20px;
}

.btn-inscrire {
    background: #1a73e8;
    color: white;
    padding: 12px 25px;
    font-size: 1.1em;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s ease, transform 0.2s ease;
    display: inline-block;
}

.btn-inscrire:hover {
    background: #003d99;
    transform: scale(1.05);
}

    </style>
</head>

<body>
    <!-- En-tête -->
    <header>
        <h1>LES TEMPS FORTS</h1>
    </header>

    <!-- Barre de navigation -->
    <nav>
        <ul>
            <li><?php echo anchor('MonControleur/index', ' Accueil'); ?></li>
            <li><?php echo anchor('MonControleur/lesTF', ' Temp Forts'); ?></li>
            <li><?php echo anchor('MonControleur/connexion', ' Connexion'); ?></li>
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

    <!-- Section principale -->
    <div class="main">
        <h2>Nos Temps Forts</h2>
        
        <br>

        <p>Ne manquez pas les événements incontournables de cette saison ! <br> Partez à la découverte de la ville à travers des visites fascinantes et plongez dans des activités variées pour tous les goûts.</p>
    <br><br><br>
        <div class="listeEvenement">
            <?php foreach ($lesEvenements as $evenement): ?>
            <div class="evenement">
                <h4><?= esc($evenement['nomEvenement']); ?></h4>

                <!-- Affichage de l'image -->
                <img src="<?= base_url($evenement['image']); ?>" alt="<?= esc($evenement['nomEvenement']); ?>" style="width:65%; height:auto;">

                <p><strong>Date :</strong> <?= esc($evenement['dateEvenement']); ?></p>
                <p><strong>Lieu :</strong> <?= esc($evenement['lieu']); ?></p>
                <p><strong>Description :</strong> <?= esc($evenement['description']); ?></p>
                <?php $session = \Config\Services::session(); 
                    if($session->get('login')){
                ?>
                <!-- Bouton "S'inscrire" -->
                <div class="inscription-bouton">
                    <?php echo anchor('/MonControleur/inscriTF', 'S\'inscrire', ['class' => 'btn-inscrire']); ?>
                </div>
                <?php }else{
                    echo"<p>Connectez-vous pour vous inscrire à cet événement.</p>";
                } ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Pied de page -->
    <footer>
        <p>&copy; 2025 NOUVELLE VAGUE</p>
    </footer>
</body>

</html>
