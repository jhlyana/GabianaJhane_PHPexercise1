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
    <link rel="stylesheet" href="WEATHERstyles.css">
</head>
<body>
    <h1>What's the weather?</h1>
    <p class="weather-text">
        We've seen all kinds of weather this month.<br>
        At the beginning of the month, we had <?php echo $weather_icons["snow"]; ?> and <?php echo $weather_icons["wind"]; ?>.<br>
        Then came <?php echo $weather_icons["sunshine"]; ?> with a few <?php echo $weather_icons["clouds"]; ?> and some <?php echo $weather_icons["rain"]; ?>.<br>
        At least we didn't get any <?php echo $weather_icons["hail"]; ?> or <?php echo $weather_icons["sleet"]; ?>.<br>
    </p>
    <div class="weather-key">
        <p>rain = <?php echo $weather_icons["rain"]; ?> | sunshine = <?php echo $weather_icons["sunshine"]; ?> | clouds = <?php echo $weather_icons["clouds"]; ?> | hail = <?php echo $weather_icons["hail"]; ?> | sleet = <?php echo $weather_icons["sleet"]; ?> | snow = <?php echo $weather_icons["snow"]; ?> | wind = <?php echo $weather_icons["wind"]; ?></p>
    </div>
</body>
</html>
