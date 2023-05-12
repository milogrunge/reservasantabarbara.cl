<?php
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$version = $dotenv->required('VERSION');

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Roboto+Flex:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/app.css">

  <title>Document</title>
</head>

<body>

  <div class="wrapper">
    <header>
      
    </header>
    <main>
      <h1>Reserva Santa Bárbara</h1>
      <p>Pronto todo los detalles de este nuevo proyecto, en el corazón del Maule</p>
    </main>
    <footer>
      <h2>Un proyecto de <br><a href="https://www.propiedadeschaitenmaule.cl">Propiedades Chaiten</a></h2>
    </footer>
  </div>


  <script src="assets/app.js"></script>
</body>

</html>