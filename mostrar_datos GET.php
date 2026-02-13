<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponentes Charlas</title>
    <!--<link rel="stylesheet" href="./css.css">-->
</head>
<body>
    <?php
    echo "<h2>Hola</h2>";

    $algo = "probar formulario";
    echo "<p>$algo</p>";

    echo "<h2>DATOS DEL PONENTE</h2>";
    /* todas las variables empiezan por $_ */
    /* el . en php concatena */
    /* no se crean variables independientes */
    /* Una variable dentro de comillas simples ('') siempre tiene que concatenar, con las dobles ("") no tiene porque */
    echo '<p>'.$_GET["nombre"].'</p>';
    echo '<p>'.$_GET["info"].'</p>';
    echo '<p>'.$_GET["correo"].'</p>';
    echo '<p>'.$_GET["tema"].'</p>';
    ?>
</body>
</html>