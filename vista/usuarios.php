<?php include_once ('cabecera.php'); ?>

<!-- tabla proveedores -->
<div class="col-md-9 mx-auto">
    <div class="card shadow mb-4 mt-4 border">
        <div class="rounded-top">
            <div class="card-header py-3 text-center bg-dark">
                <h6 class="m-0 fw-bold text-white align-middle">
                    Cliente
                </h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="TablaProductos" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>telefono</th>
                            <th>Cedula</th>
                            <th>Direccion</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php

include_once("modelo/modelo1.php");
$sql = mysqli_query($conexion, "SELECT * FROM cliente");

while($row = mysqli_fetch_assoc($sql)){

  echo '<tr>

<td>' . $row["id_cliente"] . '</td>
<td>' . $row["cli_nombre_cliente"] . '</td>
<td>' . $row["cli_telefono_cliente"] . '</td>
<td>' . $row["cli_cedula_cliente"] . '</td>
<td>' . $row["cli_direccion_cliente"] . '</td>

</tr>'; 
}   

  ?>    
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Tabla Bodegas-->
    <div class="col-md-12 mx-auto">
        <div class="card shadow mb-4 mt-4">
            <div class="rounded-top">
                <div class="card-header py-3 text-center bg-dark">
                    <h6 class="m-0 fw-bold text-white align-middle">
                       Proveedores
                    </h6>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="TablaProductos" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Proveedor</th>
                                <th>Empresa</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Ubicación</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php

include_once("modelo/modelo1.php");
$sql = mysqli_query($conexion, "SELECT * FROM proveedor");

while($row = mysqli_fetch_assoc($sql)){

  echo '<tr>

<td>' . $row["id_prov"] . '</td>
<td>' . $row["prov_nombre_prov"] . '</td>
<td>' . $row["prov_nombre_empresa"] . '</td>
<td>' . $row["prov_correo_empresa"] . '</td>
<td>' . $row["prov_telefono_prov"] . '</td>
<td>' . $row["prov_ubicacion"] . '</td>

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
</div>

<?php include_once ('footer.php'); ?>