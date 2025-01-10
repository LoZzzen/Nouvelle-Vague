<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>NOUVELLE VAGUE</title>
</head>
<body>

<style>
    body{
        margin: 0px;
        padding: 0px;
    }
    
    nav {
        background-color:aqua;
        display: flex;
        align-items: center;
        padding: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: auto;
    }

    nav ul {
        list-style: none;
        display: flex;
        margin: auto;
        padding: 0;
    }
    
    nav li {
        margin-right: 200px;
    }
    </style>
    
        <center><h1>NOUVELLE VAGUE</h1></center>

    
    <nav>
        <ul>
            <li><?php echo anchor("MonControleur/index", "Acceuil"); ?></li>
            <li><?php echo anchor("MonControleur/lesTF", "Temp Fort"); ?></li>
            <li><?php echo anchor("MonControleur/connexion", "Connexion"); ?></li>
        </ul>
    </nav>  


</body>
</html>


