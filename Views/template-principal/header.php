<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo TITLE . ' - ' . $data['title']; ?></title>
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo BASE_URL; ?>assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL; ?>assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo BASE_URL; ?>assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo BASE_URL; ?>assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="<?php echo BASE_URL . 'assets/img/apple-icon.png'; ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL . 'assets/img/favicon.ico'; ?>">

  <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/bootstrap.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/templatemo.css'; ?>">
  <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/temas2.css'; ?>">

  <!-- Load fonts style after rendering the layout styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
  <!-- Slick -->
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick/slick.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/css/slick/slick-theme.css'; ?>">

</head>

<body>
  <!-- NAV INFERIOR PARA CELULARES -->
  <div class="container-fluid">
      <ul class="nav justify-content-center d-md-none fixed-bottom  bg-warning fixed-center ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="<?php echo BASE_URL; ?>"><box-icon name='home-alt-2' type='solid'  ></box-icon></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . 'principal/about' ?>"><box-icon name='cross' animation='spin' ></box-icon></a>
          </li>
          <li class="nav-item">          
         
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . 'principal/shop' ?>"><box-icon name='shopping-bag' type='solid' ></box-icon></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  data-bs-toggle="modal" data-bs-target="#modalLogin" ><box-icon name='user' type='solid' ></box-icon></a>
          </li>
      </ul>
  </div>
  <!-- Fin de Nav de celulares -->
  <nav class="navbar navbar-dark fond5 d-none d-md-flex d-lg-flex d-xl-flex  bg-dark">
        <div class="container-fluid justify-content-beetwen "> 
          <a class="navbar-brand text-util logo h3 align-self-start" href="<?php echo BASE_URL; ?>">
          <?php echo TITLE; ?>
          </a>
         
          <a class="navbar-brand text-uppercase  " href="<?php echo BASE_URL . 'principal/shop' ?>">Tienda</a>
          <a class="navbar-brand text-uppercase " href="<?php echo BASE_URL . 'principal/about' ?>">Acerca de nosotros</a>
          <a class="navbar-brand  " href="<?php echo BASE_URL . 'principal/contactos' ?>">CONTACTO</a>
            <div class="">
             <a class="nav-icon position-relative text-decoration-none mx-3"  href="<?php echo BASE_URL . 'clientes'; ?>" id="verCarrito">
              <i class="fas fa-fw fa-cart-arrow-down text-warning mr-1"></i>
                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-util text-white" id="btnCantidadCarrito">0</span>
             </a>
             
             <a class="nav-icon position-relative text-decoration-none mx-3" href="<?php echo BASE_URL . 'principal/deseo'?>">
              <i class="fas fa-fw fa-heart text-warning mr-1"></i>
                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-util text-white" id="btnCantidadDeseo">0</span>
             </a>
             <a class="nav-icon position-relative text-decoration-none mx-3" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">
              <i class="fas fa-fw fa-user text-warning mr-3"></i>
                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-util text-white"></span>
             </a>
            </div>
          <!-- BARRA LATERAL INICIO -->
          
          <!-- BARRA LATERAL fin -->
        </div>
  </nav>
  <!-- Buscador -->
  <nav class="navbar navbar-dark   d-none d-md-flex d-lg-flex d-xl-flex ">
        <div class="container-fluid justify-content-center "> 
          <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" >
            <form class="d-flex tm-search-form buscador">
             <button class="btn btn-primary tm-search-btn rounded-circle" type="submit">
            <i class="fas fa-search"></i>
            </button> 
            <input class="form-control tm-search-input" type="search" placeholder="Buscar producto" aria-label="Buscar">
            
            </form>
          </div>
        </div>
  </nav>
   <!-- Fin Buscador -->