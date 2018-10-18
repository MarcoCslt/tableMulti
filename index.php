<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table Multiplication</title>
</head>
<body>
    <?php
        for ($i=1; $i < 11; $i++) { 
            echo "<a href='table.php?number=".$i."'> Table de ".$i." </a><br>";
        }
    ?>
</body>
</html>