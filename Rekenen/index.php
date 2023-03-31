<?php 

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$numberLengths = count($numbers);
$table = 6;

$format = "6 *";

for ($i = 0; $i < count($numbers); $i++) {
    $awnser = $numbers[$i] * $table;
    $mainawnser = $numbers[$i] . " * " . $table . " = " . $awnser;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rekenen</title>
</head>
<body>
    <p><b> Tafel van 6:</b><br>
    <?php
    for ($i = 0; $i < count($numbers); $i++) {
        $awnser = $numbers[$i] * $table;
        $mainawnser = $numbers[$i] . " * " . $table . " = " . $awnser;
        echo $mainawnser . "<br>";
    } ?>
    </p>
</body>
</html>