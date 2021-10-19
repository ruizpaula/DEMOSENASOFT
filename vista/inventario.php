<?php include_once('cabecera.php') ?>

<!-- tabla inventario -->
<div class="col-md-9 mx-auto">
    <div class="card shadow mb-4 mt-4 border">
        <div class="rounded-top">
            <div class="card-header py-3 text-center bg-dark">
                <h6 class="m-0 fw-bold text-white align-middle">
                   Inventario
                </h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="TablaProductos" width="100%">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Producto</th>
                            <th>Tipo</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Bodega</th>

                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>02</td>
                            <td>Drone</td>
                            <td>Tecnologia</td>
                            <td>20</td>
                            <td>800000</td>
                            <td>Bodega 04</td>

                            <td>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#InventarioModal">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </button>

                                <button class="btn btn-danger" type="submit" name="accion" value="Borrar" /><i
                                    class="bi bi-x-square"></i> Eliminar</button>

                            </td>
                        </tr>
                    </tbody>
                </table>

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#InventarioModal">
                    <i class="bi bi-plus-circle"></i> Registrar Inventario
                </button>
            </div>
        </div>
    </div>


    <!-- Tabla Bodegas-->
    <div class="col-md-12 mx-auto">
        <div class="card shadow mb-4 mt-4">
            <div class="rounded-top">
                <div class="card-header py-3 text-center bg-dark">
                    <h6 class="m-0 fw-bold text-white align-middle">
                        Bodegas
                    </h6>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="TablaProductos" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Bodega</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Ubicacion</th>
                                <th>Valor Entrada</th>
                                <th>Fecha</th>
                                <th>Proveedor</th>

                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Bodega 04</td>
                                <td>Drone</td>
                                <td>20</td>
                                <td>Cr 33</td>
                                <td>600000</td>
                                <td>2021-08-22</td>
                                <td>L</td>

                                <td>

                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#bodegaModal">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </button>

                                    <button class="btn btn-danger" type="submit" name="accion" value="Borrar" /><i
                                        class="bi bi-x-square"></i> Eliminar</button>



                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bodegaModal">
                    <i class="bi bi-plus-circle"></i> Registrar Bodega
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Inventario -->
<div class="modal fade" id="InventarioModal" tabindex="-1" aria-labelledby="InventarioModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title fw-bold" id="InventarioModalLabel">Gestionar Inventario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="">
                    <div class="form-group">
                        <label for="id_inv">ID:</label>
                        <input class="form-control" disabled="" type="number" name="id_inventario" id="id_inv">
                    </div>

                    <div class="form-group">
                        <label for="inv_codigo_pro">Codigo Producto:</label>
                        <input class="form-control" type="text" name="inv_cod_prod" id="inv_codigo_pro">
                    </div>

                    <div class="form-group">
                        <label for="pro_nombre">Producto:</label>
                        <input class="form-control" type="text" name="inv_nombre_prod" id="pro_nombre">
                    </div>

                    <div class="form-group">
                        <label for="pro_tipo">Tipo:</label>
                        <input class="form-control" type="text" name="inv_tipo_prod" id="pro_tipo">
                    </div>

                    <div class="form-group">
                        <label for="pro_precio">Precio:</label>
                        <input class="form-control" type="text" name="inv_precio_prod" id="pro_precio">
                    </div>

                    <label>Bodega:</label>
                    <div class="form-group py-2">
                        <select class="form-select fs-6" value="" name="inv_id_bod">
                            <option selected>Selecciona la Bodega</option>
                        </select>
                    </div>

                    <label>Producto:</label>
                    <div class="form-group py-2">
                        <select class="form-select fs-6" value="" name="inv_id_prod">
                            <option selected>Selecciona el Producto</option>
                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i>
                    Cancelar</button>
                <button type="button" class="btn btn-success"><i class="bi bi-check-lg"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>





<!-- Modal Bodega -->
<div class="modal fade" id="bodegaModal" tabindex="-1" aria-labelledby="BodegaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title fw-bold" id="BodegaModalLabel">Gestionar Bodega</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="">
                    <div class="form-group">
                        <label for="id_bod">ID:</label>
                        <input class="form-control" disabled="" type="number" name="id_bodega" id="id_bod">
                    </div>

                    <div class="form-group">
                        <label for="bod_nombre">Bodega:</label>
                        <input class="form-control" type="text" name="bod_nombre_bodega" id="bod_nombre">
                    </div>

                    <label>Producto:</label>
                    <div class="form-group py-2">
                        <select class="form-select fs-6" value="" name="bod_nombre_prod">
                            <option selected>Selecciona el Producto</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="bod_prod_cant">Cantidad:</label>
                        <input class="form-control" type="number" name="bod_cantidad_prod" id="bod_prod_cant">
                    </div>

                    <div class="form-group">
                        <label for="bod_ubicacion">Ubicacion:</label>
                        <input class="form-control" type="text" name="bod_ubicacion" id="bod_ubicacion_bodega">
                    </div>

                    <div class="form-group">
                        <label for="valor_entrada">Valor Entrada:</label>
                        <input class="form-control" type="number" name="bod_valor_entrada" id="valor_entrada">
                    </div>

                    <div class="form-group">
                        <label for="fecha_entrada">Fecha Entrada:</label>
                        <input class="form-control" type="date" name="bod_fecha_entrada" id="fecha_entrada">
                    </div>

                    <label>Proveedor:</label>
                    <div class="form-group py-2">
                        <select class="form-select fs-6" value="" name="bod_id_prov">
                            <option selected>Selecciona el Proveedor</option>
                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i>
                    Cancelar</button>
                <button type="button" class="btn btn-success"><i class="bi bi-check-lg"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>


<?php include_once('footer.php') ?>