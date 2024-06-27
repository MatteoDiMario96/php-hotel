<?php 
    require_once __DIR__ . '/utilities/variables.php';
    $haveParkHotel = $_GET['haveParkHotel'] ?? '';

    if($haveParkHotel === 'on'){
        $parcheggioHotels = [];
        foreach ($hotels as $key => $hotel) {
            if($hotel['parking'] === true){
                $parcheggioHotels[] = $hotel;
            }
        }
        $hotels = $parcheggioHotels;
    }
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
            Filtra gli hotel:
        </h1>
        <form action="./index.php" method="get">
            <label for="thereIsPark">Parcheggio</label>
            <input type="checkbox" name="haveParkHotel" id="haveParkHotel">
            <button type="submit">
                Filtra i risultati
            </button>
        </form>

        <h1>
            Hotel:
        </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza in Km</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($hotels as $key => $hotel) { ?>
                    <tr>
                        <th scope="row"><?php echo $hotel['name'] ?></th>
                        <td> <?php echo $hotel['description'] ?> </td>
                        <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td>
                        <td> <?php echo $hotel['vote'] ?> / 5</td>
                        <td> <?php echo $hotel['distance_to_center'] ?> Km</td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </main>
    
    <!--Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
