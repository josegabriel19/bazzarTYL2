<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..//bootstrap-5.0.1-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1>Calcular el Area de un Triangulo</h1>

    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Escribir Base del Triangulo</label>
    base: <input type="text" class="form-control" id="base" aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Escribir Alrura del Triangulo</label>
   altura: <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  Calcular<button type="submit" class="btn btn-primary">Calcular</button>
</form>
    </div>
    
    <?php

    $Base = $_POST("base");
    $Altura = $_POST("altura");


    $Calcular = $_POST($Base * $Altura /2);

  echo $Base;
  echo $Altura;
  echo $Calcular;

  echo "<h3>$Calcular</h3>";





    ?>


</body>
</html>