<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CINE</title>
</head>
<body>
    <?php
        require_once 'espectador.php';
        require_once 'butacas.php';
        require_once 'cine.php';
        require_once 'pelicula.php';

        $peli = new Pelicula("Uno mas uno son dos",190,40,"Anne");
        echo $peli->getInfo();

        $cine = new Cine(3,3,22,$peli);
        var_dump($cine);

    ?>
</body>
</html>