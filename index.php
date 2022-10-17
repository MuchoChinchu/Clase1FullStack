<!DOCTYPE html>
<html lang="en">
<head>

    <?php
     $peliculas =[

             [
             "nombre" =>  "Star Wars",
              "director" => "George Lucas"],

                    ["nombre" => "Lord of the rings",
                    "director" => "Peter Jackson"],

                    ["nombre" => "Dragon ball",
                     "director" => "Akira Toriyama"],

                    ["nombre" => "Top Gun",
                     "director" => "Tony Scott"],


                    [ "nombre" => "1917",
                        "director" => "Sam Mendez"],


                    ["nombre" => "Dunkerk",
                            "director" => "Nolan"]

     ]
    ?>


    <title>LISTA DE PELICULAS</title>
</head>
<body>

<ul>
    <?php FiltrarporDirector($peliculas,  "George Lucas");

    ?>
</ul>

<ul>

    <?php
    function FiltrarPorDirector ($peliculas, $nombredelDirector)
    {
        foreach ($peliculas as $pelicula){

            if ($pelicula ["director"] == $nombredelDirector) {

            }
            print "<li>" . $pelicula["director"];
        }
    }


    ?>
    </ul>
