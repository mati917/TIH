<?php
   $pdo = new PDO("mysql:host=localhost;dbname=tih","root", "");
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Itón</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="assets/" type="image/x-icon">
   
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   
   <!-- CSS -->
   <link rel="stylesheet" href="/css/">
   
   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/3b93b417c8.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
      <!-- HEADER -->
      <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
               <img class="navbar-brand" src="assets/icons/semel.png" height="150">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Inicio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="iton.php">Itón</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="merkaz.html">Merkaz</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contacto.html">Contacto</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="aboutUs.html">Sobre nosotros</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Más
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#">Action</a></li>
                           <li><a class="dropdown-item" href="#">Another action</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Postear</a>
                     </li>
                  </ul>
                  <a class="d-flex">Iniciar sesión</a>
               </div>
            </div>
         </nav>
      </header>

      <?php
         $post = $pdo->query("SELECT * FROM Post")->fetch();

         echo $post["Nombre"];   
         echo $post["Cuerpo"];
      ?>
      
      <!-- FOOTER -->
      <footer id="footer">
         <ul class="container">
            <div class="row row-cols-sm-2">
               <li class="red col-lg-2 col-sm-4">
                  <i></i>
                  <a href="">@red.tnua#1</a>
               </li>
               <li class="red col-lg-2 col-sm-4">
                  <i></i>
                  <a href="">@red.tnua#1</a>
               </li>
               <li class="red col-lg-2 col-sm-4">
                  <i></i>
                  <a href="">@red.tnua#1</a>
               </li>
               <li class="red col-lg-2 col-sm-4">
                  <i></i>
                  <a href="">@red.tnua#1</a>
               </li>
               <li class="red col-lg-2 col-sm-4">
                  <i></i>
                  <a href="">@red.tnua#1</a>
               </li>
               <li class="red col-lg-2 col-sm-4">
                  <i></i>
                  <a href="">@red.tnua#1</a>
               </li>
            </div>
         </ul>
      </footer>
   </div>

   <!-- JQuery -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
