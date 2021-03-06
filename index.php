<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tnuá Israel Hatzeirá</title>
   <!-- Meta tags -->
   <meta name="description" content="Página web de la tnuá Israel Hatzeirá">
   <meta name="author" content="Matías Pereyra Ini, Julián Swerdlin">
   <meta name="keywords" content="tnuá, tnua, israel hatzeira, Israel Hatzeirá">
   <!-- Favicon -->
   <link rel="shortcut icon" href="/assets/" type="image/x-icon">
   
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   
   <!-- CSS -->
   <link rel="stylesheet" href="css/index/index.css">
   
   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/3b93b417c8.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container-fluid">
      <!-- HEADER -->
      <header class="row">
         <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
               <img class="navbar-brand" src="assets/icons/semel.png" height="150">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="iton.php">Itón</a>
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
                        <a class="nav-link <?php if(!session_start()){echo "disabled";} ?>" href="post.php" tabindex="-1" aria-disabled="true">Postear</a>
                     </li>
                  </ul>
                  <a href="signin.php" class="d-flex">Iniciar sesión</a>
               </div>
            </div>
         </nav>
      </header>
      
      <!-- BANNER -->
      <div id="banner" class="row">
         <h1 id="banner--title">Tnuá Israel Hatzeirá</h1>
         <h2 id="banner--subtitle">תנועה ישראל הצעירה</h2>
         <div id="banner--skew"></div>
      </div>
      
      <!-- WHO ARE -->
      <main id="whoAre" class="row">
         <h2>¿Quiénes somos?</h2>
         
         <section class="text-container">
            <p>
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur natus non cumque deserunt voluptatibus laboriosam adipisci, optio commodi, sapiente assumenda voluptatem beatae eum. Sapiente vero soluta laborum delectus autem. Animi!
            </p>
            <p>
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim cum dolorem magnam? Cumque, harum veniam libero blanditiis reprehenderit sit accusantium dolor earum! 
               <img src="assets/img/theodorHertzl.jpg" alt="Theodor Hertzl" title="Theodor Hertzl, nuestro ideólogo">
               Quibusdam nam voluptatem, quaerat voluptas repellat exercitationem dolor inventore excepturi eius unde culpa dignissimos facilis neque explicabo? Inventore laborum suscipit nemo ipsa ipsum in aut pariatur omnis animi!
            </p>
            <p>
               Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero fugit architecto quaerat expedita soluta, nesciunt adipisci sint, numquam magnam unde dolores quasi iusto doloribus sunt natus omnis, facilis aspernatur corporis dolore dolorem dolor quibusdam! Iusto quas placeat at nobis in modi fugit obcaecati inventore. In, blanditiis officiis pariatur deserunt sint, culpa quas, dolor voluptas quia exercitationem architecto amet ratione sapiente.
            </p>
         </section>
         
         <div id="whoAre-vermas">
            <span>Ver más</span>
            <i class="fas fa-arrow-circle-down"></i>
         </div>
         
      </main>
      
      <!-- NEWS -->
      <section id="news" class="row container-fluid">
         <div class="row row-cols-md-2 row-cols-sm-1">
            <!-- Article #1 -->
            <article class="post">
               <a href="">
                  <div class="card mb-3">
                     <img src="assets/img/theodorHertzl.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">· 3 mins ago</small></p>
                     </div>
                  </div>
               </a>
            </article>
            <!-- Article #2 -->
            <article class="post">
               <a href="">
                  <div class="card mb-3">
                     <img src="assets/img/theodorHertzl.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">·3 mins ago</small></p>
                     </div>
                  </div>  
               </a>
            </article>
         </div>
      </section> 
      
      <!-- FOOTER -->
      <footer id="footer" class="row">
         <ul class="container">
            <div class="row row-cols-md-3 row-cols-sm-2">
               <li class="red col-lg-2 col-md-4 col-sm-6">
                  <i class="fab fa-instagram row"></i>
                  <a href="https://instagram.com/tnua.israel.hatzeira" class="row" target="_blank">@tnua.israel.hatzeira</a>
               </li>
               <li class="red col-lg-2 col-md-4 col-sm-6">
                  <i class="fab fa-instagram row"></i>
                  <a href="https://instagram.com/kenjanaszenes" class="row" target="_blank">@kenjanaszenes</a>
               </li>
               <li class="red col-lg-2 col-md-4 col-sm-6">
                  <i class="fab fa-instagram row"></i>
                  <a href="https://instagram.com/kenatid" class="row" target="_blank">@kenatid</a>
               </li>
               <li class="red col-lg-2 col-md-4 col-sm-6">
                  <i class="fab fa-instagram row"></i>
                  <a href="https/instagram.com/hafsaka_tih" class="row" target="_blank">@hafsaka_tih</a>
               </li>
               <li class="red col-lg-2 col-md-4 col-sm-6">
                  <i class="fab fa-facebook-f row"></i>
                  <a href="https://www.facebook.com/israelhatzeira/" class="row" target="_blank">israelhatzeira</a>
               </li>
               <li class="red col-lg-2 col-md-6 col-sm-6">
                  <i class="fas fa-envelope row"></i>
                  <a href="mailto:tih@gmail.com" class="row" target="_blank">tih@gmail.com</a>
               </li>
            </div>
         </ul>
      </footer>
      <!-- JQuery -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   </body>
   </html>