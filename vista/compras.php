<?php include_once('cabecera.php') ?>

<!-- Formulario -->

<div class="col-sm-8 col-md-9 mx-auto">
    <div class="card shadow-lg mt-4 py-3 mx-3 border my-4">
        <div class="row g-2 text-center">

            <div class="col-md-5 col-lg-5 py-2">
                <img class="img-fluid py-5 rounded" src="public/img/shop.png" alt="" width="260">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-sm-5 py-3 rounded px-3 fs-5 shadow-lg">
                <div class="card-header fondo py-3  shadow-lg">
                    <h6 class="m-0 fw-bold fs-5 text-white  align-middle"><i class="fas fa-calendar-check"></i>
                        Realiza una Compra</h6>
                </div>
                <form action="php/guardardatos.php" method="POST" enctype="multipart/form-data">
                    <div class="text-start py-2 fs-5">

                        <div class="form-group">
                            <label for="id_prod">ID:</label>
                            <input disabled="" type="number" class="form-control" value="" name="id_prod" id="id_prod">
                        </div>

                        <label for="nombre_prod">Producto:</label>
                        <div class="form-group py-2">
                            <select class="form-select fs-6" value="" name="prod_nombre">
                                <option selected>Selecciona el Producto</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="cant_prod">Cantidad:</label>
                            <input type="number" class="form-control" value="" name="prod_cantidad_compra"
                                id="cant_prod" required="">
                        </div>

                        <div class="form-group">
                            <label for="precio_pro">Precio:</label>
                            <input type="number" class="form-control" value="" name="prod_precio" id="precio_pro"
                                required="">
                        </div>

                        <div class="form-group">
                            <label for="fecha_pro">Fecha:</label>
                            <input type="date" class="form-control" value="" name="prod_fecha_compra" id="fecha_pro"
                                required="">
                        </div>

                        <div class="btn-group d-flex justify-content-center mt-3" role="group" aria-label="">
                            <button type="submit" class="btn btn-success"><i
                                    class="far fa-check-circle me-2"></i>Confirmar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>





<?php include_once('footer.php') ?>