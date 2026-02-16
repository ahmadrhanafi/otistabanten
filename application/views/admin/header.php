<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-7">
    <meta name="viewport" content="width=device-width, initial-scale=2">
    <title><?= $Title ?></title>

    <link rel="shortcut icon" href="<?= base_url('assets/images/Logo-otista.png') ?>" type="image/x-icon">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:301,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("assets_admin/plugins/fontawesome-free/css/all.min.css") ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="assets_admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="assets_admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets_admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="assets_admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="assets_admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
</head>

<style>
    html,
    body {
        overflow-x: hidden !important;
        width: 100%;
        position: relative;
    }

    .wrapper {
        width: 100%;
        overflow-x: hidden !important;
    }

    .table-responsive {
        margin-bottom: 0;
        border: none;
    }

    @media (max-width: 576px) {
        .main-header .navbar-nav .nav-link {
            padding-left: .5rem;
            padding-right: .5rem;
        }

        .content-wrapper {
            padding: 0 5px;
        }
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed accent-primary">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center" style="background-color: #271e92;">
            <div class="position-relative">
                <img class="animation__wobble"
                    src="<?= base_url('assets/images/Logo-otista.png') ?>"
                    alt="STIT Otista Logo"
                    height="100" width="100">
            </div>
            <p class="mt-3 font-weight-bold text-secondary">Memuat Dashboard...</p>
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom-0 shadow-sm">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars" style="color: #271e92;"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-md-inline-block ml-2">
                    <span class="nav-link text-muted">
                        SIAKAD <strong>STIT Otista</strong>
                    </span>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-1">
                    <a href="<?= base_url('/') ?>" target="_blank" class="nav-link btn-outline-primary rounded-pill px-3 d-none d-sm-block">
                        <i class="fas fa-globe mr-1"></i> Lihat Situs
                    </a>
                    <a href="<?= base_url('/') ?>" target="_blank" class="nav-link d-block d-sm-none text-primary">
                        <i class="fas fa-globe"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?= base_url('admin/Auth/logout') ?>">
                        <i class="fas fa-power-off"></i>
                    </a>
                </li>
            </ul>
        </nav>