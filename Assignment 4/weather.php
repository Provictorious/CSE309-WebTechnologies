<?php
$city = $_GET['city'];
$url = "https://api.openweathermap.org/data/2.5/forecast?q=$city&appid=0faf346972ab061589375d2f01890994&units=metric";

$apiData = file_get_contents($url);
$cli = json_decode($apiData);

$temperature = $cli->list[0]->main->temp;
if ($temperature < 10) {
    $backgroundImage = "./Image/img3.jpg";
} else if ($temperature > 20) {
    $backgroundImage = "./Image/img6.jpg";
} else {
    $backgroundImage = "./Image/img4.jpg";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
            background-image: url('<?php echo $backgroundImage ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .weather-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
        }

        .weather-info {
            margin-bottom: 20px;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container weather-container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Weather Forecast for <?php echo $city; ?></h2>
            </div>
        </div>

        <?php
        $dayCount = 0;
        for ($i = 0; $i < 40; $i += 8) {
            $dayCount++;
        ?>
            <div class="row weather-info">
                <div class="col-md-12">
                    <h4>Day <?php echo $dayCount; ?>:</h4>
                    <p>Date: <?php echo $cli->list[$i]->dt_txt; ?></p>
                    <p>Temperature: <?php echo $cli->list[$i]->main->temp; ?>&#8451;</p>
                    <p>Max Temperature: <?php echo $cli->list[$i]->main->temp_max; ?>&#8451;</p>
                    <p>Min Temperature: <?php echo $cli->list[$i]->main->temp_min; ?>&#8451;</p>
                    <p>Wind Speed: <?php echo $cli->list[$i]->wind->speed; ?></p>
                    <p>Wind Degree: <?php echo $cli->list[$i]->wind->deg; ?></p>
                    <p>Pressure: <?php echo $cli->list[$i]->main->pressure; ?></p>
                    <p>Humidity: <?php echo $cli->list[$i]->main->humidity; ?></p>
                    <hr>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="row btn-back">
            <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="index.php" role="button">Back</a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
