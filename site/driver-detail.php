<?php

// Dit is het startpunt van je applicatie.

require 'database.php';

$id = $_GET['driverId'];

$sql = "SELECT * FROM drivers WHERE driverId = $id";

$result = mysqli_query($conn, $sql);

$driver = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <?php echo $driver['forename'] ?></h1>
    <h2> <?php echo $driver['surname'] ?></h2>
    <h3> <?php echo $driver['dob'] ?></h3>
    <h4> <?php echo $driver['nationality'] ?></h4>
</body>

</html>