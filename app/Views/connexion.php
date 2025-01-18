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
            background: linear-gradient(135deg,#aed8f380, #02074a);
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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

.container {
    max-width: 700px;
    width: 100%;
    background: white;
    padding: 25px 30px;
    border-radius: 5px;
    background: linear-gradient(135deg,#aed8f380, #02074a);
}
.registre {
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: linear-gradient(135deg,#aed8f380, #02074a);
}

.user-elements {
    display: flex;
    flex-wrap: wrap-reverse;
    justify-content: space-between;
}

.input-boite {
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
    
}

.detail{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}
.input-boite input {
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px outset;
    padding-left: 15px;
    font-size: 15px;
    border-top-width: 3px;
    border-left-width: 3px;
    
}
    center{
        text-decoration: none;
        color: #fff;
        background-color: rgba(139, 148, 202, 0.9);    
    }
.boutton {
    height: 50px;
    margin: 50px 0;
}

.boutton input {
    height: 100%;
    width: 100%;
    background:linear-gradient(135deg,#4491c580, #02074a); ;
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
        <h1>NOUVELLE VAGUE</h1>
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
        </ul>
    </nav>
    
    <div class="registre">
        <div class="container">
            <?=validation_list_errors() ?>
                <?= form_open('/MonControleur/validConnexion'); ?>
                <div class="user-elements">
                    <div class="input-boite">    
                        <?= form_label('Login : '); ?>
                                <?php echo form_input('Login', set_value('Login')); ?> <br /><br />
                    </div>
                    <div class="input-boite">
                        
                            <?= form_label('Password : '); ?>
                                <?php echo form_input('password', set_value('password')); ?> <br /><br />
                    </div>
                </div>
                <div class="boutton">
                    <?php echo form_submit('mysubmit', 'Valider'); ?>
                </div>
            <?= form_close(); ?>
            <center>
            <?php
                echo anchor('/MonControleur/inscription', 'Crée votre compte');
            ?>
            </center>
        </div>
    </div>
</body>
</html>
