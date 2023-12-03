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
    <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/style-register.css') ?>"> -->
    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="<?= base_url('assets-dashboard-admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets-dashboard-admin/css/style.css') ?>">
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
                <a class="nav-link" href="">
                    <i class="fas fa-print"></i>
                    <span>Laporan PDF</span></a>
            </li>
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
                            <a class="btn btn-outline-dark" href="<?= base_url('/auth/logout') ?>" role="button">Log Out</a>
                        </div>
                    </div>

                    <!-- Topbar Navbar -->


                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <h1 class="h3 mb-2 text-gray-800 col align-self-start">Manajemen Petugas</h1>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah +
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas/Administrator</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="<?= base_url('/tambahpetugas') ?>" method="post">
                                                <div class="mb-3">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" id="nama_petugas" name="nama_petugas" class="form-control" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="username">Username</label>
                                                    <input type="text" id="username" name="username" class="form-control" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="password">Password</label>
                                                    <input type="password" id="password" name="password" class="form-control" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="no_telepon">No Telepon</label>
                                                    <input type="text" id="telepon" name="telepon" class="form-control" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="level">Role</label>
                                                    <select class="form-select form-select-lg mb-3" name="level" aria-label=".form-select-lg example">
                                                        <option value="1">Administrator</option>
                                                        <option value="2">Petugas</option>
                                                    </select>
                                                </div>


                                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table caption-top">

                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama petugas</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Telepon</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($petugas as $row) : ?>
                                        <tr>
                                            <td><?= $row['id_petugas']; ?></td>
                                            <td><?= $row['nama_petugas']; ?></td>
                                            <td><?= $row['username']; ?></td>
                                            <td><?= $row['telepon']; ?></td>
                                            <td>

                                                <?php if ($row['level'] == 1) : ?>
                                                    <div class="alert alert-info" role="alert">Administrator</div>
                                                <?php elseif ($row['level'] == 2) : ?>
                                                    <div class="alert alert-warning" role="alert">Petugas</div>
                                                <?php endif; ?>

                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $row['id_petugas'] ?>">
                                                    Ubah Password
                                                </button>

                                                <!-- Modal Ubah Password -->
                                                <div class="modal fade" id="staticBackdrop<?= $row['id_petugas'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Reset password</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- isi form  -->
                                                                <form method="post" action="<?= base_url('/petugas/reset-password-petugas/' . $row['id_petugas']); ?>">
                                                                    <div class="row g-3 align-items-center">
                                                                        <div class="mb-3">
                                                                            <label for="new_password" class="col-form-label">New Password:</label>
                                                                            <input type="password" name="new_password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" required>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row g-3 align-items-center">
                                                                        <div class="mb-3">
                                                                            <label for="confirm_password" class="col-form-label">Confirm Password:</label>
                                                                            <input type="password" name="confirm_password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" required>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <button class="btn btn-primary" type="submit">Reset Password</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                    Edit
                                                </button>

                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel1">Edit</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- isi form  -->
                                                                <form method="post" action="">
                                                                    <div class="mb-3">
                                                                        <label for="nama">Nama</label>
                                                                        <input type="text" id="nama_petugas" name="nama_petugas" class="form-control" required>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="username">Username</label>
                                                                        <input type="text" id="username" name="username" class="form-control" required>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="password">Password</label>
                                                                        <input type="password" id="password" name="password" class="form-control" required>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="no_telepon">No Telepon</label>
                                                                        <input type="text" id="telepon" name="telepon" class="form-control" required>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="level">Role</label>
                                                                        <select class="form-select form-select-lg mb-3" name="level" aria-label=".form-select-lg example">
                                                                            <option value="1">Administrator</option>
                                                                            <option value="2">Petugas</option>
                                                                        </select>
                                                                    </div>


                                                                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                    </td>
                                    </tr>
                                    </tbody>
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
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed by Pengaduan <!-- License information: https://untree.co/license/ -->
                        </p>
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
                        <span aria-hidden="true">×</span>
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
    <script src="<?= base_url(' assets-dashboard-admin/vendor/jquery/jquery.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(' assets-dashboard-admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(' assets-dashboard-admin/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>