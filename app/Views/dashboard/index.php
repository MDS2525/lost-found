<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'LOFO' ?></title>
    <link rel="stylesheet" href="<?= base_url('template/vendor/fontawesome-free/css/all.min.css') ?>">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('template/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('template/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('beranda') ?>">
                <div>
                </div>
                <div class="sidebar-brand-text mx-3">LOFO</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('beranda') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('temuan') ?>">
                    <i class="fas fa-check"></i>
                    <span>Laporkan Temuan</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kehilangan') ?>">
                    <i class="fas fa-search"></i>
                    <span>Laporkan Kehilangan</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pengguna</span>
                                <img class="img-profile rounded-circle" src="<?= base_url('template/img/undraw_profile.svg') ?>">
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
    </div>
    <!-- End of Page Wrapper -->


    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('template/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('template/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('template/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('template/js/sb-admin-2.min.js') ?>"></script>
    <script src="<?= base_url('template/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('template/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('template/js/demo/datatables-demo.js') ?>"></script>
</body>

</html>