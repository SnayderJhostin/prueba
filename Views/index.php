<?php include_once 'Views/template-principal/header.php'; ?>

  <!-- Inicio del banner con carrusel--> 
  <div id="template-mo-zay-hero-carousel" class="carousel slide  " data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner bg-dark text-white  fondo4">
      <div class="carousel-item active">
        <div class="container ">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="https://elcomercio.pe/resizer/Vamb4Rv-5iyJpIH3hMZjqaNbKTo=/580x330/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/KCXBE3XWNRCMHGJA4Y5PRKD7AM.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center ">
              <div class="text-align-left align-self-center">
                <h1 class="h1 text-util"><b>KABANOS</b> PIZZA</h1>
                <h3 class="h2">Lorem ipsum dolor sit amet.</h3>
                <p class="">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis cum iste beatae itaque impedit dolorem distinctio repudiandae quae harum, molestias officiis numquam optio, corrupti in ea voluptate? Aliquid, recusandae. Quis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="https://elcomercio.pe/resizer/Vamb4Rv-5iyJpIH3hMZjqaNbKTo=/580x330/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/KCXBE3XWNRCMHGJA4Y5PRKD7AM.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left  align-self-center">
                <h1 class="h1">SEDE ICA</h1>
                <h3 class="h2">loREM</h3>
                <p class="">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis cum iste beatae itaque impedit dolorem distinctio repudiandae quae harum, molestias officiis numquam optio, corrupti in ea voluptate? Aliquid, recusandae. Quis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container ">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src="https://elcomercio.pe/resizer/Vamb4Rv-5iyJpIH3hMZjqaNbKTo=/580x330/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/KCXBE3XWNRCMHGJA4Y5PRKD7AM.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left">
                <h1 class="h1">Repr in voluptate</h1>
                <h3 class="h2">Ullamco laboris nisi ut </h3>
                <p>
                  We bring you 100% free CSS templates for your websites.
                  If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends
                  about our website. Thank you.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
      role="button" data-bs-slide="prev">
      <i class="fa fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
      role="button" data-bs-slide="next">
      <i class="fa fa-chevron-right"></i>
    </a>
  </div>
  
  <!-- FIN DEL  banner con carrusel -->


  <!-- INICIO DE SECTION PARA CATEGORIAS-->
  <section class="container-fluid bg-light">
    <section class="container py-5 ">
      <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
        <h1 class="h1 ">Categorias </h1>
        </div>
      </div>
      <div class="row">
      <?php foreach ($data['categorias'] as $categoria) { ?>
        <div class="col col-xs-8 col-sm-6 col-md-4 col-lg-6 col-xl-3 col-12 text-center py-4" >
          <a href="<?php echo BASE_URL . 'principal/categorias/' .$categoria['id']; ?>"><img src="<?php  echo $categoria['imagen'];?>" class="rounded-circle col-8 border bg-dark" style="height: 10rem;"></a>
          <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
        </div>
      <?php } ?>
      </div>
    </section>
  </section>
  
     <!-- fIN DE SECTION PARA LAS CATEGORIAS -->


      <!-- INICIO DE LA SECTION DE PRODUCTOS -->
      <section class="bg-light container-fluid ">
        <div class="container py-5">
          <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
              <h1 class="h1">Nuestros Productos </h1>
            </div>
          </div>
          <!--CAPTURA DE ELEMENTOS DE LOS PRODUCTOS-->
         <div class="row ">
            <?php foreach ($data['nuevoProductos'] as $producto) {?>
            <div class="col col-xs-8 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-12 text-center mb-4 container" >
              <div class="card h-100 bg-dark text-white col-12 " >
                <a  class="text-black"href="<?php echo BASE_URL . 'principal/detail/' .$producto['id']; ?>">
                <div class="card rounded-0">
                  <img src="<?php  echo $producto['imagen'];?>" class="card-img-top  " style="height: 18rem; "  alt="<?php  echo $producto['nombre'];?>">
                    <style>
                      .card .product-overlay {
                      background: rgba(0,0,0,.2);
                      visibility: hidden;
                      opacity: 0;
                      transition: .3s;
                      }
                      .card:hover .card .product-overlay {
                      visibility: visible;
                      opacity: 1;
                      }


                    </style>
                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center ">
                      <ul class="list-unstyled">
                        <li>
                          <a class="btn btn-primary text-white mt-2 btnAddDeseo" href="#" prod="<?php  echo $producto['id'];?>">
                            <i class="fas fa-heart"></i>
                          </a>
                        </li>
                        <li>
                          <a class="btn btn-primary text-white mt-2" href="<?php  echo BASE_URL . 'principal/detail/' . $producto['id'];?>">
                            <i class="fas fa-eye"></i>
                          </a>
                        </li>
                        <li>
                          <a class="btn btn-primary text-white mt-2 btnAddcarrito" href="#" prod="<?php  echo $producto['id'];?>">
                            <i class="fas fa-cart-plus"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>
                </a>
                  <div class="card-body ">
                    <ul class="list-unstyled d-flex justify-content-between">
                      <li>
                        <i class="text-warning fa fa-star"></i>
                        <i class="text-warning fa fa-star"></i>
                        <i class="text-warning fa fa-star"></i>
                        <i class="text-muted fa fa-star"></i>
                        <i class="text-muted fa fa-star"></i>
                      </li>
                      <li class="text-ligth text-right"><?php echo MONEDA . ' ' . $producto['precio'];?></li>
                    </ul>
                <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h2 text-decoration-none text-white"><?php echo $producto['nombre'];?></a>
                <p class="card-text">
                  <?php echo $producto['descripcion'];?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <!--FIN DE ELEMENTOS DE LSO PRODUCTOS-->
  </section>
  <!-- Fin de la seccion de productos -->

  <?php include_once 'Views/template-principal/footer.php'; ?>

</body>

</html>