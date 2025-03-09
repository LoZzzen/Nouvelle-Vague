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

/* Section principale */
.main {
    text-align: center;
    background: white;
    padding: 60px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 900px;
    width: 90%;
    margin-top: 40px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.main:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.main h2 {
    font-size: 2.2em;
    margin-bottom: 15px;
    color: #007bff;
    font-weight: 600;
}

.main p {
    font-size: 1.1em;
    line-height: 1.6;
    color: #555;
}

/* Boutons dynamiques */
.button {
    display: inline-block;
    padding: 12px 25px;
    font-size: 1.1em;
    color: white;
    background: #007bff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.button:hover {
    background: #0056b3;
    transform: translateY(-3px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
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

/* Responsive Design */
@media screen and (max-width: 768px) {
    header h1 {
        font-size: 2em;
    }

    nav ul {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }

    .main {
        padding: 40px 20px;
        width: 95%;
    }

    .button {
        font-size: 1em;
        padding: 10px 20px;
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
                <?php
                    echo anchor('MonControleur/accueilMaire', 'Accueil');
                ?>
            </li>
            <li>
                <?php
                    echo anchor('MonControleur/topTF', 'Top Temp Forts');
                ?>
            </li>
            <li>
                <?php
                    echo anchor('MonControleur/consultReserv', 'Consultation des reservations');
                ?>
            </li>
            <li>
                <?php
                    echo anchor('MonControleur/formTF', 'Ajouter un Temp Fort');
                ?>
            </li>
            <li>
                <?php 
                echo anchor('MonControleur/deconnexion', ' Déconnexion');
                ?> 
            </li>
        </ul>
    </nav>

    <!-- Section principale -->
    <div class="main">
        <h2>Bienvenue sur votre page monsieur le maire </h2>
        <p>
            Bonjour monsieur RoSteph
        </p>
        
    </div>

    <!-- Pied de page -->
    <footer>
        <p>&copy; 2025 NOUVELLE VAGUE MAIRE</p>
    </footer>

</body>
</html>
