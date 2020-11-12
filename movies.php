<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>
<!--Creando las cabeceras de las tablas-->
<body>
    <table cellpadding="15">
        <tr>
            <th>Título</th>
            <th>Protagonista</th>
            <th>Año</th>
            <th>Director</th>
        </tr>
    <?php
    //Creando el array asociativo con todos los datos de cada pelicula
    $peliculas = [
        ["titulo" => "ToyStory3", "protagonista" => "Woody", "año" => "2010", "director" => "Lee Unkrich"],
        ["titulo" => "Avengers", "protagonista" => "Los Vengadores", "año" => "2012", "director" => "Joss Whedon"],
        ["titulo" => "Interstellar", "protagonista" => "Mathew McConaughey", "año" => "2014", "director" => "Christopher Nolan"]
    ];
    //Creando variables para poder printar los datos
    $tituloelegido = $_GET["titulo"];
    $tablapeliculas = "";
    $espacio = "";
    //Esto es para que separe cada dato de cada pelicula y lo ponga en una casilla de la tabla
    foreach ($peliculas as $peliculaactual) {
        if ($peliculaactual["titulo"] === $tituloelegido) {
            foreach ($peliculaactual as $index => $valor) {
                $tablapeliculas .= "<td>" . $valor . "</td>";
            }
            echo "<tr>" . $tablapeliculas . "</tr>";
        }
    }
    ?>
    </table>
</body>

</html>