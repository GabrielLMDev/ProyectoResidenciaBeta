<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ING. GABRIEL LUENGAS">
    <title>Cetis 153</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/styles.css?v=1.15" rel="stylesheet">
    <script src="js/navBar_Data.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.js"></script>


</head>


<body id="page-top">
    <div id="wrapper">
        <!-- BARRA LATERAL -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- BARRA LATERAL - NOMBRE -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CETIS 153</div>
            </a>

            <!-- LINEA DIVISORA -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - INICIO -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-house-user"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- LINEA DIVISORA -->
            <hr class="sidebar-divider">

            <!-- ENCABEZADO -->
            <div class="sidebar-heading">
                INSCRIPCIONES
            </div>

            <!-- Nav Item -  MENU INSCRIPCIONES-->
            <li class="nav-item">
                <a class="nav-link" href="reinscripcion.html">
                    <i class="fas fa-fw fa-solid fa-scroll"></i>
                    <span>Reinscripcion</span>
                </a>
            </li>

            <!-- LINEA DIVISORA -->
            <hr class="sidebar-divider">

            <!-- ENCABEZADO -->
            <div class="sidebar-heading">
                Herramientas
            </div>

            <!-- Nav Item - MENU HERRAMIENTAS -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-search fa-sm"></i>
                    <span>Consultas</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Disponibles:</h6>
                        <a class="collapse-item" href="parcial.php">Boleta Parcial</a>
                        <a class="collapse-item" href="historia.php">Historial Academico</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-file"></i>
                    <span>Constancias</span>
                </a>
            </li>

            <!-- Nav Item - MENU SITIOS -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Sitios</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Disponibles:</h6>
                        <a class="collapse-item" href="https://www.cetis153.edu.mx/" target="_blank">Sitio Oficial Cetis
                            153</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - HORARIOS -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Horarios</span></a>
            </li>

            <!-- LINEA DIVISORA -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (BARRA LATERAL) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- FIN BARRA LATERAL -->

        <!-- CONTENIDO -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- CONTENIDO PRINCIPAL DERECHA -->
            <div id="content">
                <!-- BARRA SUPERIOR -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- BARRA LATERAL ALTERNAR (BARRA SUPERIOR) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- BARRA SUPERIOR LOGO -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <img style="height: 50px;" src="https://th.bing.com/th/id/R.a0e516cbfe5c3bf15274b2cfb83258b8?rik=41%2f9Xv83gMrfbQ&riu=http%3a%2f%2fidcontrol.com.mx%2fcetis10%2fimagenes%2flogo_dgeti_2021.png&ehk=bVe%2frdw1zxSzqoYgK65vBFtDRwIh8Rg3XXPJ17ygQ2s%3d&risl=&pid=ImgRaw&r=0" alt="DGETI">
                        </div>
                    </form>
                    <!-- BARRA SUPERIOR NAV -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - MENU DESPLEGABLE (Visible solo en MOVILES) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="input-group">
                                    <img style="height: 50px;" src="https://th.bing.com/th/id/R.a0e516cbfe5c3bf15274b2cfb83258b8?rik=41%2f9Xv83gMrfbQ&riu=http%3a%2f%2fidcontrol.com.mx%2fcetis10%2fimagenes%2flogo_dgeti_2021.png&ehk=bVe%2frdw1zxSzqoYgK65vBFtDRwIh8Rg3XXPJ17ygQ2s%3d&risl=&pid=ImgRaw&r=0" alt="DGETI">
                                </div>
                            </a>
                        </li>

                        <!-- NOTIFICACIONES -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Contador de Mensaje -->
                                <span class="badge badge-danger badge-counter" id="cont_mensaje"></span>
                            </a>
                            <!-- MENU DESPLEGABLE - NOTIFICACIONES -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Mensajes
                                </h6>

                                <div id="container-mensaje">
                                </div>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - ALUMNO -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" id="name_user">
                                </span>
                                <span class="img-profile rounded-circle"><img class="img-profile rounded-circle" src="./assets/img/img_perfil.svg"></span>
                            </a>
                            <!-- MENU DESPLEGABLE - ALUMNO -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- FIN BARRA SUPERIOR -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Titulo Pagina -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">Historia Academica</h1>
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="btn_pdf"><i class="fas fa-download fa-sm text-white-50"></i> Generar PDF</button>
                    </div>

                    <!-- Tabla -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Resultado</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Numero de control</th>
                                            <th>Materia</th>
                                            <th>Semestre</th>
                                            <th>1er Parcial</th>
                                            <th>2do Parcial</th>
                                            <th>3er Parcial</th>
                                            <th>Calificacion</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Numero de control</th>
                                            <th>Materia</th>
                                            <th>Semestre</th>
                                            <th>1er Parcial</th>
                                            <th>2do Parcial</th>
                                            <th>3er Parcial</th>
                                            <th>Calificacion</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        require 'assets/php/database.php';
                                        $cont;
                                        if (isset($_SESSION['user_id'])) {
                                            $records = $conn->prepare('SELECT COUNT(n_control) AS n_control
                                      FROM historia
                                      WHERE n_control=' . $_SESSION['user_id']);
                                            $records->execute();
                                            $contador = $records->fetch(PDO::FETCH_ASSOC);

                                            if ($contador > 0) {
                                                $registros = $contador;
                                            } else {
                                                $registros = 0;
                                            }
                                        }
                                        ?>
                                        <?php
                                        require 'assets/php/database-mensajes.php';
                                        $query = "SELECT * FROM historia WHERE n_control =" . $_SESSION['user_id'];
                                        if ($result = $mysqli->query($query)) {
                                            $calificaciones = [];
                                            while ($row = $result->fetch_assoc()) {
                                                $numero_control = $row["n_control"];
                                                $semestre = $row["semestre"];
                                                $materia = $row["materia"];
                                                $calificacion_parcial = $row["calificacion"];
                                                $parcial = $row["parcial"];
                                                $calificaciones[$materia][$semestre][$parcial] = $calificacion_parcial;
                                            }
                                        }
                                        ?>

                                        <?php
                                        foreach ($calificaciones as $materia => $semestres) {
                                        ?>
                                            <tr>
                                                <td><?php echo $numero_control; ?></td>
                                                <td><?php echo $materia; ?></td>
                                                <?php
                                                foreach ($semestres as $semestre => $parciales) {
                                                ?>
                                                    <td><?php echo $semestre; ?></td>
                                                    <?php
                                                    $suma = 0;
                                                    foreach ($parciales as $parcial => $calificacion) {
                                                        $suma += $calificacion;
                                                    ?>
                                                        <td><?php echo $calificacion; ?></td>
                                                <?php
                                                    }
                                                } ?>
                                                <td style="color: black; font-weight: bold;"><?php echo $resultado = number_format($suma / 3, 1);; ?></td>
                                            <?php
                                        }
                                            ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <button id="btn_pdf_big" class="btn btn-primary btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                            <i class="fas fa-download"></i>
                        </span>
                        <span class="text">Generar PDF</span>
                    </button>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- FIN CONTENIDO DERECHA -->

            <!-- FOOTER -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2023 Desarrollado por el Ing. Gabriel Luengas</span>
                    </div>
                </div>
            </footer>
            <!-- FIN FOOTER -->

        </div>
        <!-- FIN CONTENIDO -->
    </div>
    <!-- BOTON SCROLL ARRIBA-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- CERRAR SESION MODAL-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Seguro que deseas cerrar sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Da click en "Cerrar Sesión" para confirmar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="button" id="btn_logout">Cerrar sesión</button>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.js?v=<?php echo (rand()); ?>"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js?v=<?php echo (rand()); ?>"></script>
    <script src="vendor/jquery-easing/jquery.easing.js?v=<?php echo (rand()); ?>"></script>
    <script src="js/funciones.js?V3.01548748"></script>
    <script src="js/logout.js?v=1.111.14545"></script>
    <script src="js/mensajes.js?v=12487784854558"></script>
    <script src="js/historial_pdf.js?<?php echo (rand()); ?>"></script>
    <script src="vendor/datatables/jquery.dataTables.js?v=<?php echo (rand()); ?>"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js?v=<?php echo (rand()); ?>"></script>
    <script src="js/demo/datatables-demo.js?v=<?php echo (rand()); ?>"></script>

</body>

</html>