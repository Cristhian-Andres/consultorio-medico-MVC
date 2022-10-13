<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="views/assets/css/styleAdm.css"/>
    <title>Vida Natural</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class='fas fa-hospital-user'></i>Vida Natural
            </div>

            <div class="list-group list-group-flush my-3">

                <a href="?c=inicio" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-hospital-alt me-2"></i>Inico</a>

                <a href="?c=pacientes" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class='fa fa-address-book me-2'></i>Pacientes</a>

                <a href="?c=citas" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa fa-address-card me-2"></i>Citas</a>

                <a href="?c=medicos" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa fa-user-md me-2"></i>Médico</a>

                <a href="?c=consultorios" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa fa-home me-2"></i>Consultorio</a>

                <a href="?c=roles" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-users me-2"></i>Roles</a>

                <a href="?c=usuarios" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fa fa-address-card me-2"></i>Usuarios</a>

                <a href="index.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Salir</a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">

                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Login
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login.html">Ingresar</a></li>
                                <li><a class="dropdown-item" href="#">Configuración</a></li>
                                <li><a class="dropdown-item" href="#">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>