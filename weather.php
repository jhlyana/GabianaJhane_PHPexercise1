<?php
$weather_conditions = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

$weather_icons = array(
    "rain" => "☔️",
    "sunshine" => "☀️",
    "clouds" => "☁️",
    "hail" => "🌨️",
    "sleet" => "🌧️",
    "snow" => "❄️",
    "wind" => "🌬️"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather?</title>
    <style>
        body {
            background: url('1WEATHER.png') no-repeat center center/cover;
            font-family: Arial, sans-serif;
            color: #000;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        h1 {
            font-size: 40px;
            font-weight: bold;
            margin: 10px 0;
        }
        .weather-text {
            font-size: 20px;
            font-weight: bold;
            width: 80%;
            margin: 10px 0;
        }
        .weather-key {
            background: black;
            color: white;
            font-size: 16px;
            padding: 5px;
            margin-top: 10px;
            width: 60%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1>What's the weather?</h1>
    <p class="weather-text">
        We've seen all kinds of weather this month.<br>
        At the beginning of the month, we had <?php echo $weather_icons["snow"]; ?> and <?php echo $weather_icons["wind"]; ?>.<br>
        Then came <?php echo $weather_icons["sunshine"]; ?> with a few <?php echo $weather_icons["clouds"]; ?> and some <?php echo $weather_icons["rain"]; ?>.<br>
        At least we didn't get any <?php echo $weather_icons["hail"]; ?> or <?php echo $weather_icons["sleet"]; ?>.<br></br>
    </p>
    <div class="weather-key">
        <p>rain = <?php echo $weather_icons["rain"]; ?> | sunshine = <?php echo $weather_icons["sunshine"]; ?> | clouds = <?php echo $weather_icons["clouds"]; ?> | hail = <?php echo $weather_icons["hail"]; ?> | sleet = <?php echo $weather_icons["sleet"]; ?> | snow = <?php echo $weather_icons["snow"]; ?> | wind = <?php echo $weather_icons["wind"]; ?></p>
    </div>
</body>
</html>