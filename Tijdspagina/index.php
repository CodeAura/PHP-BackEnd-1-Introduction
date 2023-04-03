<?php

date_default_timezone_set("Europe/Amsterdam"); 


$date= date('H');
$time = date('H:i');
if($date < 12) {
  $message = "Good Morning";
  $img = "Images/morning.png";
} else if($date < 17) {
    $message = "Good Afternoon";
    $img = "Images/afternoon.png";
} else if($date <20) {
    $message = "Good Evening";
    $img = "Images/evening.png";
} else {
  $message = "Good Night";
  $img = "Images/night.png";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tijds Pagina</title>
</head>

<body>
    <div id="container-title">
        <h1><? echo $message; ?></h1>
        <p>Current Time: <? echo $time; ?></p>
    </div>
</body>
</html>

<style>
    body {
        background-image: url(<? echo($img)?>);
        background-size: cover;
    }

    h1{
        color: #fff;
        width: fit-content;
        margin: 230px auto auto auto;
    }

    p {
        margin: 0 auto
    }

</style>
<script src="script.js"></script>