<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(' assets-dashboard-admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="<?= base_url('assets-dashboard-admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets-dashboard-admin/css/style.css') ?>">

    <style>
        .mt-3 {
            margin-top: 3rem;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #525659;
            color: white;
        }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        $pdf = false;
        if (strpos(current_url(), "printpdf")) {
            $pdf = true;
        }
        if ($pdf == false) {
        ?>
            <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Admin</div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/admin') ?>">
                        <i class="fas fa-envelope"></i>
                        <span>Pengaduan</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/admin/petugas') ?>">
                        <i class="fas fa-user"></i>
                        <span>Petugas</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/admin/manajemen_masyarakat') ?>">
                        <i class="fas fa-users"></i>
                        <span>Masyarakat</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/admin/laporan')  ?>">
                        <i class="fas fa-print"></i>
                        <span>Laporan PDF</span></a>
                </li>
            </ul>
        <?php } ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php
                $pdf = false;
                if (strpos(current_url(), "printpdf")) {
                    $pdf = true;
                }
                if ($pdf == false) {
                ?>
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>

                        <!-- Topbar Search -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col d-grid gap-2 d-md-flex justify-content-md-end ">
                                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end col">
                                <a class="btn btn-outline-dark" href="<?= base_url('/auth/logout') ?>" role="button">Log Out</a>
                            </div>
                        </div>

                        <!-- Topbar Navbar -->


                    </nav>
                <?php } ?>
                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-600">Generate Laporan </h1>
                    <?php
                    $pdf = false;
                    if (strpos(current_url(), "printpdf")) {
                        $pdf = true;
                    }
                    if ($pdf == false) {
                    ?>
                        <button type="button" value="print PDF" onclick="window.open('<?php echo site_url('admin/printpdf') ?>','blank')" class="btn btn-primary "><i class="fas fa-print"></i> Laporan</button>
                    <?php } ?>

                    <br>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" id="customers" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id_pengaduan</th>
                                            <th>tanggal_pengaduan</th>
                                            <th>Judul</th>
                                            <th>NIK</th>
                                            <th>Isi Laporan</th>

                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <!-- ... (kode sebelumnya) ... -->
                                    <tbody>
                                        <?php foreach ($pengaduan as $row) : ?>
                                            <tr>
                                                <td><?= $row['id_pengaduan']; ?></td>
                                                <td><?= $row['tanggal_pengaduan']; ?></td>
                                                <td><?= $row['judul']; ?></td>
                                                <td><?= $row['nik']; ?></td>
                                                <td><?= $row['isi_laporan']; ?></td>

                                                <td>
                                                    <?php if ($row['status'] == 0) : ?>
                                                        <div class="alert alert-info" role="alert">Diajukan</div>
                                                    <?php elseif ($row['status'] == 1) : ?>
                                                        <div class="alert alert-warning" role="alert">Diproses</div>
                                                    <?php elseif ($row['status'] == 2) : ?>
                                                        <div class="alert alert-success" role="alert">Selesai</div>
                                                    <?php elseif ($row['status'] == 3) : ?>
                                                        <div class="alert alert-danger" role="alert">Ditolak</div>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php
            $pdf = false;
            if (strpos(current_url(), "printpdf")) {
                $pdf = true;
            }
            if ($pdf == false) {
            ?>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script>. All Rights Reserved. &mdash; Designed by Pengaduan <!-- License information: https://untree.co/license/ -->
                            </p>
                        </div>
                    </div>
                </footer>
            <?php } ?>
            <!-- Footer -->

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(' js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets-dashboard-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(' assets-dashboard-admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(' assets-dashboard-admin/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>