<?php 
    require_once __DIR__ . '/utilities/variables.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Hotels!</title>
</head>
<body>
    <main>
        <h1>
            Hotel:
        </h1>
        <ul>
            <?php foreach ($hotels as $key => $hotel) { ?>
                <li>
                    <h2 class="text-primary">
                        Nome : <?php echo $hotel['name'] ?>
                    </h2>
                    <h3>
                        Voto : <?php echo $hotel['vote'] ?> su 5
                    </h3>
                    <h4>
                        Parcheggio : <?php echo $hotel['parking'] ?>
                    </h4>
                    <h4>
                        Distanza dal centro : <?php echo $hotel['distance_to_center'] ?> km
                    </h4>
                    <p>
                        Descrizione : <?php echo $hotel['description'] ?> 
                    </p>
                </li>
            <?php } ?> 
        </ul>
    </main>
    
    <!--Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>