<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>header</title>
</head>
<body>
    <nav class="navbar navbar-dark fond3 d-none d-md-flex d-lg-flex d-xl-flex  ">
        <div class="container-fluid justify-content-center "> 
           <img src="../img/KABANOS_PIZZERIA-removebg-preview.webp" alt="dada" class=""  style="width: 18rem; margin-right: 2rem;">
          <a class="navbar-brand text-uppercase " href="Paginas/home.html">Inicio</a>
          <a class="navbar-brand  " href="Paginas/productosMenu.html">PROMOCIONES</a>
          <a class="navbar-brand  " href="Paginas/contacto.html">CONTACTO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opciones</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Salir</a>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    
        <div class="container-fluid">
            <ul class="nav justify-content-center d-md-none fixed-bottom  bg-light fixed-center">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="Paginas/home.html"><box-icon name='home-alt-2' type='solid'  ></box-icon></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Paginas/productosMenu.html"><box-icon name='cross' animation='spin' ></box-icon></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Paginas/carritoCompras.html"><box-icon name='cart' type='solid' animation='tada' ></box-icon></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Paginas/productosMenu.html"><box-icon name='shopping-bag' type='solid' ></box-icon></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Paginas/contacto.html"><box-icon name='user' type='solid' ></box-icon></a>
                  </li>
              </ul>
        </div>
</body>
</html>
<script src="js/bootstrap.bundle.min.js"></script>
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
