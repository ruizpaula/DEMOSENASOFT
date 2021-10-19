<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="stylesheet" href="public/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <title>SGIF</title>
    <link rel="icon" href="public/img/productos.png">
</head>

<body>

    <!-- Header - navbar -->

    <header>
        <nav class="navbar navbar-expand-md navbar-light sticky-top fondo shadow-lg ">
            <div class="container-fluid">
                <div class="nav btn btn-default shadow-lg texto">
                    <div class="nav px-3 mx-2">
                        <img class="img-fluid rounded-circle bg-white" src="public/img/productos.png" width="100">
                        <div class="ms-2 me-1">
                            <h1 class="fs-1 text-white text-center my-4">SGIF</h1>
                        </div>
                    </div>
                </div>



                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <ul class="navbar-nav ms-auto me-3">

                        <li class="nav-item dropdown me-4">
                            <a class="nav-link fw-bold text-white" href="#" id="notificacion"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-bell-fill"></i> 
                                <span
                                    class="position-absolute top-75 end-25 translate-middle-x p-1 bg-warning border border-light rounded-circle">
                                </span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu dropdown-menu-lg-end"
                                aria-labelledby="notificacion">
                                <li><a class="dropdown-item " href="">
                                    <i class="bi bi-circle-fill text-danger"></i> Notificaciones</a>
                                    
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold text-white shadow-lg rounded border" href="#"
                                id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-person-fill"></i> PERFIL
                            </a>
                            <ul class="dropdown-menu dropdown-menu dropdown-menu-lg-end border border-dark"
                                aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item " href=""><i
                                            class="bi bi-box-arrow-right me-2"></i>Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
            </div>
        </nav>
    </header>




    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu"
                class="col-md-3 col-sm-4 col-xl-2 pb-3 d-md-block border border-3 fondo shadow-lg sidebar rounded-bottom min-vh-75">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item btn btn-light rounded-pill my-1">
                            <a class="text-dark nav-link fw-bold" href="indexpanel.php">
                                <i class="bi bi-house h5"></i>
                                PANEL
                            </a>
                        </li>

                        <hr class="dropdown-divider bg-dark">

                        <li class="nav-item btn btn-light  text-start">
                            <a class="text-dark nav-link fw-bold" href="indexcompras.php">
                                <i class="bi bi-cart3 h5"></i>
                                COMPRAS
                            </a>
                        </li>

                        <hr class="dropdown-divider bg-dark">

                        <li class="nav-item btn btn-light text-start">
                            <a class="text-dark nav-link fw-bold" href="indexcomprasre.php">
                                <i class="bi bi-cart-plus h5"></i>
                                COMPRAS REALIZADAS
                            </a>
                        </li>

                        <hr class="dropdown-divider bg-dark">

                        <li class="nav-item btn btn-light text-start">
                            <a class="text-dark nav-link fw-bold" href="indexinventario.php">
                                <i class="bi bi-archive h5"></i>
                                INVENTARIO
                            </a>
                        </li>

                        <hr class="dropdown-divider bg-dark">

                        <li class="nav-item btn btn-light text-start">
                            <a class="text-dark nav-link fw-bold" href="indexproveedores.php">
                                <i class="bi bi-person-workspace h5"></i>
                                PROVEEDORES | CLIENTES
                            </a>
                        </li>



                    </ul>
                </div>
            </nav>