<?php include_once 'Views/template-principal/header.php'; ?>
<div class="container-fluid  ">
        <div class="col-md-6 m-auto text-center ">
            <h1 class=" fw-bolder">Detalle Producto</h1>
        </div>
</div>
    <!-- Open Content -->
    <section class="">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card  mb-3 ">
                        <img class="card-img  " style="height: 25rem;" src="<?php echo $data['producto']['imagen'];?>" alt="Card image cap"
                            id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-6 mt-5">
                    <div class="card">
                        <div class="card-body">
                        <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                            <h1 class="h2 fw-bold"><?php echo $data['producto']['nombre']?></h1>
                                            <li class="list-inline-item mx-2 px-1"><span class="badge btn-primary rounded-circle   fs-4" id="btn-minus">-</span></li>
                                            <li class="list-inline-item "><span class="badge text-black rounded-circle fs-4 fw-bold" id="var-value">1</span></li>
                                            <li class="list-inline-item px-1"><span class="badge btn-primary rounded-circle fs-4"  id="btn-plus">+</span></li>
			                                <p class="h3 py-2 text-danger bolder fw-bold"><?php echo MONEDA . ' ' . $data['producto']['precio']?></p>
                                                <input type="hidden" id="product-quanity" value="1">
                                                <p><?php echo $data['producto']['descripcion']?> </p>
                                            
                                        </ul>
                                    </div>
                                </div>
                            <!-- <h6>DESCRIPCION:</h6>
                            <p><?php echo $data['producto']['descripcion']?> </p> -->

                            <form action="" method="GET">
                                <input type="hidden" id="idProducto" value="<?php echo $data['producto']['id']?>">
                                
                                <div class="row pb-3">
                                    <!-- <div class="col d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg" name="submit"
                                            value="buy">COMPRAR</button>
                                    </div> -->
                                    <div class="col d-grid">
                                        <button type="button" class="btn btn-primary btn-lg" id="btnAddCart">AÑADIR AL CARRITO</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4> Productos relacionados</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">
                <?php foreach ($data['relacionados'] as $relacion) { ?>
                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php  echo $relacion['imagen'];?>">
                                <div
                                    class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-primary text-white" href="#" prod="<?php  echo $producto['id']; ?>"><i
                                                    class="fas fa-heart btnAddDeseo"></i></a></li>
                                        <li><a class="btn btn-primary text-white mt-2" href="<?php  echo BASE_URL . 'principal/detail/' . $relacion['id'];?>"><i
                                                    class="fas fa-eye"></i></a></li>
                                        <li><a class="btn btn-primary text-white mt-2 btnAddcarrito" href="#" prod="<?php  echo $producto['id']; ?>"><i
                                                    class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="<?php  echo BASE_URL . 'principal/detail/' . $relacion['id'];?>" class="h3 text-decoration-none"><?php  echo $relacion['nombre'];?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span
                                            class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0"><?php  echo MONEDA . ' ' . $relacion['precio'];?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Article -->


    <!-- Start Footer -->
    <?php include_once 'Views/template-principal/footer.php'; ?>


    <script src="<?php echo BASE_URL; ?>assets/js/modulos/detail.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="<?php echo BASE_URL; ?>assets/css/slick/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>