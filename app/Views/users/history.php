<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengaduan Masyarakat</title>

    <!-- CSS FILES -->
    <link href="<?= base_url('bootstrap-5.0.2/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?= base_url('bootstrap-5.0.2/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('bootstrap-5.0.2/css/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/templatemo-topic-listing.css') ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body id="top">
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #243D54;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pengaduan</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/pengaduan-masyarakat/afterlogin') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('/pengaduan-masyarakat/history') ?>">History</a>
                        </li>
                    </ul>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-outline-light" href="<?= base_url('/auth/logout') ?>" role="button">Log Out</a>
                </div>
            </div>
        </nav>
        <div class="card border-0  w-50 mx-auto my-5 d-grid gap-2 d-md-flex justify">
            <h3>History</h3>
            <hr>
        </div>

        <?php foreach ($pengaduan as $row) : ?>
            <div class="container">
                <div class="card border-0 shadow w-50 mx-auto my-5 d-grid gap-2 d-md-flex justify-content-md-end " style="padding: 20px;">
                    <div class="row justify-content-between">
                        <div class="col-6 col-sm-1" style="height: auto;">
                            <!-- Konten kolom kiri -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                                <path d="M36.5625 26.7188V21.7969C36.5625 20.1186 35.8958 18.509 34.709 17.3222C33.5223 16.1355 31.9127 15.4688 30.2344 15.4688H27.4219C26.8624 15.4688 26.3259 15.2465 25.9303 14.8509C25.5347 14.4553 25.3125 13.9188 25.3125 13.3594V10.5469C25.3125 8.86855 24.6458 7.25897 23.459 6.07221C22.2723 4.88546 20.6627 4.21875 18.9844 4.21875H15.4688M15.4688 28.125H29.5312M15.4688 33.75H22.5M19.6875 4.21875H10.5469C9.3825 4.21875 8.4375 5.16375 8.4375 6.32812V38.6719C8.4375 39.8362 9.3825 40.7812 10.5469 40.7812H34.4531C35.6175 40.7812 36.5625 39.8362 36.5625 38.6719V21.0938C36.5625 16.6182 34.7846 12.326 31.6199 9.16132C28.4552 5.99665 24.163 4.21875 19.6875 4.21875Z" stroke="#243747" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="col judul " style="margin-left: 20px; margin-top:15px;">
                            <!-- Judul  -->
                            <h5 style="font-weight: normal;"><?= $row['judul']; ?></h5>
                        </div>

                        <div class="col d-flex justify-content-end ">




                            <!-- Button trigger modal -->
                            <?php if ($row['status'] == 0) : ?>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a type="button" class="btn " style="height: 40px;" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row['id_pengaduan']; ?>" data-bs-whatever="@mdo">Lihat detail</a>
                                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" style="height: 40px;">Edit</button>
                                    <a href="<?= base_url('/pengaduan/delete') ?>" class="btn btn-danger">Delete</a>
                                </div>



                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="mb-5" method="post" action="<?= site_url('pengaduan/update'); ?>" enctype="multipart/form-data">
                                                    <input type="text" name="id_pengaduan" value="<?= $row['id_pengaduan']; ?>">



                                                    <div class="mb-3">
                                                        <label for="judul" class="form-label">Judul</label>
                                                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="<?= $row['judul']; ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="isi_laporan" class="form-label">Isi Pengaduan</label>
                                                        <textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="3"><?= $row['isi_laporan']; ?></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary">Update Pengaduan</button>
                                                        <a href="<?= site_url('/pengaduan-masyarakat/history'); ?>" class="btn btn-secondary">Kembali</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="modal fade" id="exampleModal<?= $row['id_pengaduan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?= $row['judul']; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?= base_url('uploads/') . $row['foto']; ?>" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col">
                                            <ul>
                                                <h2>Identitas</h2>
                                            </ul>
                                            <ul>
                                                id masyarakat : <?= $row['id_masyarakat']; ?>
                                            </ul>
                                            <ul>
                                                id pengaduan : <?= $row['id_pengaduan']; ?>
                                            </ul>
                                            <ul>
                                                tanggal pengaduan : <?= $row['tanggal_pengaduan']; ?>
                                            </ul>
                                            <ul>
                                                nik : <?= $row['nik']; ?>
                                            </ul>
                                            <ul>
                                                status :
                                                <?php if ($row['status'] == 0) : ?>
                                                    <div class="alert alert-info" role="alert">Diajukan</div>
                                                <?php elseif ($row['status'] == 1) : ?>
                                                    <div class="alert alert-warning" role="alert">Diproses</div>
                                                <?php elseif ($row['status'] == 2) : ?>
                                                    <div class="alert alert-success" role="alert">Selesai</div>
                                                <?php elseif ($row['status'] == 3) : ?>
                                                    <div class="alert alert-danger" role="alert">Ditolak</div>
                                                <?php endif; ?>
                                            </ul>
                                            <ul>
                                                <h2>Isi laporan</h2>
                                            </ul>
                                            <ul>
                                                <?= $row['isi_laporan']; ?>
                                            </ul>
                                            <ul>
                                                <h2>Tanggapan</h2>
                                            </ul>
                                            <?php foreach ($tanggapann as $t) : ?>
                                                <?php if ($t['id_pengaduan'] == $row['id_pengaduan']) : ?>
                                                    <ul>
                                                        <?= $t['tanggapan']; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>