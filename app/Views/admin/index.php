<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(' assets-dashboard-admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="<?= base_url('assets-dashboard-admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets-dashboard-admin/css/style.css') ?>">


    <!-- Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
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
                <a class="nav-link" href=" <?= base_url('/admin/verifikasi/') ?>">
                    <i class="fas fa-bell"></i>
                    <span>Verifikasi</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/admin') ?>">
                    <i class="fas fa-envelope"></i>
                    <span>Pengaduan</span></a>
            </li>

            <hr class="sidebar-divider">
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
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
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
                            <a class="btn btn-outline-dark" href="<?= base_url('/auth/login') ?>" role="button">Log Out</a>
                        </div>
                    </div>

                    <!-- Topbar Navbar -->


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pengaduan Masyarakat</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id_pengaduan</th>
                                            <th>tanggal_pengaduan</th>
                                            <th>Judul</th>
                                            <th>NIK</th>
                                            <th>Isi Laporan</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                            <th>Action</th>
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
                                                <td><img src="<?= base_url('uploads/') . $row['foto']; ?>" alt="" class="img-fluid w-100"></td>
                                                <td>
                                                    <?php if ($row['status'] == 0) : ?>
                                                        <div class="alert alert-info" role="alert">Diajukan</div>
                                                    <?php elseif ($row['status'] == 1) : ?>
                                                        <div class="alert alert-success" role="alert">Diterima</div>
                                                    <?php elseif ($row['status'] == 2) : ?>
                                                        <div class="alert alert-warning" role="alert">Diproses</div>
                                                    <?php elseif ($row['status'] == 3) : ?>
                                                        <div class="alert alert-success" role="alert">Selesai</div>
                                                    <?php elseif ($row['status'] == 4) : ?>
                                                        <div class="alert alert-danger" role="alert">Ditolak</div>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <!-- Tambahkan logika di sini untuk tombol aksi sesuai kebutuhan -->
                                                    <?php if ($row['status'] == 2) : ?>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            Tanggapan
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" action="<?= base_url('admincontroller/tanggapan') ?>">

                                                                            <div class="mb-3">
                                                                                <label for="tanggal_tanggapan" class="form-label">Tanggal Tanggapan</label>
                                                                                <input type="date" class="form-control" id="tanggal_tanggapan" name="tanggal_tanggapan">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="tanggapan" class="form-label">Tanggapan</label>
                                                                                <textarea class="form-control" id="tanggapan" name="tanggapan"></textarea>
                                                                            </div>


                                                                            <div class="mb-3">
                                                                                <label for="id_petugas" class="form-label">id_petugas</label>
                                                                                <input type="text" class="form-control" id="id_petugas" name="id_petugas">
                                                                            </div>


                                                                            <button type="submit" class="btn btn-primary">Kirim Tanggapan</button>

                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <!-- ... (kode setelahnya) ... -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
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