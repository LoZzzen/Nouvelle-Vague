<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>NOUVELLE VAGUE</title>
</head>
<body>
        <center><h1>NOUVELLE VAGUE</h1></center>

    
    <nav>
        <ul class = "menu">
            <li><?php echo anchor("MonControleur/index", "Acceuil"); ?></li>
            <li><?php echo anchor("MonControleur/lesTF", "Temp Fort"); ?></li>
            <li><?php echo anchor("MonControleur/connexion", "Connexion"); ?></li>
        </ul>
        </nav>
        
</body>
</html>


