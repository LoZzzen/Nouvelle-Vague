<!-- ROKHIYA -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visite en Bateau de la Ville</title>
    <style>
        /* Style global */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Conteneur de l'événement */
        .event-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* En-tête de l'événement */
        .event-header {
            text-align: center;
        }

        .event-header h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .image {
            width: 100%;
            max-width: 900px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Description de l'événement */
        .event-details {
            margin-top: 20px;
        }

        .event-description {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            text-align: justify;
        }

        /* Informations sur l'événement */
        .event-info {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .event-info div {
            font-size: 18px;
            color: #2c3e50;
        }

        .event-info span {
            font-weight: bold;
        }

        .event-info .event-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .event-info .event-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <section class="event-container">
        <div class="event-header">
            <h1>Visite en Bateau de la Ville</h1>
            <img src="image/visiteBateau.jpg" alt="Visite en bateau de la ville" class="image">
        </div>

            <?php foreach ($lesEvenements as $evenement): ?>

                <div class="evenement">
                    <h4><?= esc($evenement['nomEvenement']); ?></h4>

                    <!-- Lien vers la page de l'événement -->
                    <a href="<?= base_url($evenement['lienPhp']); ?>">
                        <img src="<?= base_url($evenement['image']); ?>" alt="<?= esc($evenement['nomEvenement']); ?>" style="width:100%; height:auto;">
                    </a>

                    <p><strong>Date :</strong> <?= esc($evenement['dateEvenement']); ?></p>
                    <p><strong>Lieu :</strong> <?= esc($evenement['lieu']); ?></p>
                    <p><strong>Description :</strong> <?= esc($evenement['description']); ?></p>
                </div>
                
            <?php endforeach; ?>

    </section>
</body>
</html>
