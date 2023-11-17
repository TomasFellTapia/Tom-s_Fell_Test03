<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
  <body>
    
  <div class="containerfluid">
    <div class="col">
        <div class="row-3">
            <div class="imagen"><img src="Imagenes\sodimac.png" alt=""></div>
            <div class="opciones">
                <nav class="nav flex-column nav-pills">
                    <a class="nav-link active" aria-current="page" href="#">OBS</a>
                    <a class="nav-link" href="#">Terciado</a>
                    <a class="nav-link" href="#">Paneles Sip</a>
                    
                </nav>
            </div>
                <div class="row-9">
                    <div class="muestras"><img src="Imagenes\osb.jpg" alt=""></div>
                   
                   <?php 
                   require "Modulos/Mostrar.php";
                   ?>
                </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>