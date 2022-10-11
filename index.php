<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    $nombres = ["Raul",
                "Nico",
                "Leonardo",
                "Luciano"];

    ?>


    <meta charset="UTF-8">
    <title>ESTO ES UN TITULO</title>
</head>
<body>
Hola <?php print $nombres[rand(0, count($nombres) - 1)] ?>
</body>
</html>