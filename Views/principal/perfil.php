<?php include_once 'Views/template-principal/header.php';

?>
<div class="container-fluid  ">
        <div class="col-md-6 m-auto text-center ">
            <h1 class=" fw-bolder"> Carrito de compras<i class="fa fa-shopping-cart" aria-hidden="true"></i></h1>
        </div>
</div>
<!-- Start Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle" id="tableListaProductos">
                            <thead>
                                <tr>
                                    <th class="text-center">Imagen</th>
                                    <th class="text-center">Producto</th>
                                    <th class="text-center">Precio</th>
                                    <th class="text-center">Cantidad</th>
                                    <th class="text-center">Subtotal</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <h3 id="totalProducto"></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-body text-center">
                    <img class="img-thumbnail rounded-circle" src="<?php echo BASE_URL .  'assets/img/KABANOS PIZZERIA.png'; ?>" alt="" width="150">
                    <hr>
                    <p> Leonardo</p>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Efectivo
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Yape
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Plin
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary py-1 mt-2">Realizar el pago</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->


<?php include_once 'Views/template-principal/footer.php'; ?>
<script src="<?php echo BASE_URL . 'assets/js/clientes.js'; ?>"></script>

<!-- End Script -->
</body>

</html>