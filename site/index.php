<?php

// Dit is het startpunt van je applicatie.

require 'database.php';

$sql = "SELECT * FROM drivers";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$all_drivers = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <h1>Welkom bij Dé Formule 1 Database</h1>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>voornaam</th>
                <th>achternaam</th>
                <th>nationaliteit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_drivers as $driver) : ?>
                <tr>
                    <td><?php echo $driver['driverId'] ?></td>
                    <td><?php echo $driver['forename'] ?></td>
                    <td><?php echo $driver['surname'] ?></td>
                    <td><?php echo $driver['nationality'] ?></td>
                    <td> <a href="driver-detail.php?driverId=<?php echo $driver['driverId'] ?>">Bekijk Driver</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>