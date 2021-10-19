<?php include_once ('cabecera.php'); ?>

<!-- tabla compras registradas -->
<div class="col-md-9 mx-auto">
    <div class="card shadow mb-4 mt-4 border">
        <div class="rounded-top">
            <div class="card-header py-3 text-center bg-dark">
                <h6 class="m-0 fw-bold text-white align-middle">
                    Compras Registradas
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
                            <th>Precio</th>
                            <th>Fecha de Compra</th>
                            <th>Cantidad</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php

include_once("modelo/modelo1.php");
$sql = mysqli_query($conexion, "SELECT * FROM producto");

while($row = mysqli_fetch_assoc($sql)){

  echo '<tr>

<td>' . $row["prod_codigo"] . '</td>
<td>' . $row["prod_nombre"] . '</td>
<td>' . $row["prod_fecha_compra"] . '</td>
<td>' . $row["prod_cantidad_compra"] . '</td>

</tr>'; 
}

  
     

  ?>    
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>



<?php include_once ('footer.php'); ?>