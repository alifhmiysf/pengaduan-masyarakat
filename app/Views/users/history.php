<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengaduan Masyarakat</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('css/bootstrap-icons.css') ?>" rel="stylesheet">

    <link href="<?= base_url('css/templatemo-topic-listing.css') ?>" rel="stylesheet">

    <link href="<?= base_url('css/history.css') ?>" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
</head>

<body id="top">
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #243D54;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pengaduan</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/pengaduan-masyarakat/home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/pengaduan-masyarakat/tanggapan_after_login') ?>">Tanggapan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('/pengaduan-masyarakat/history') ?>">History</a>
                        </li>
                    </ul>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-outline-light" href="<?= base_url('/auth/login') ?>" role="button">Log Out</a>
                </div>
            </div>
        </nav>


        

        <div class="card border-0  w-50 mx-auto my-5 d-grid gap-2 d-md-flex justify">
            <h3>History</h3>
            <hr>
        </div>

        <div class="card border-0 shadow w-50 mx-auto my-5 d-grid gap-2 d-md-flex justify-content-md-end " style="padding: 20px;">
            <div class="row g-0">
                <div class="col-6 col-sm-1" style="height: auto;">
                    <!-- Konten kolom kiri -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                        <path d="M36.5625 26.7188V21.7969C36.5625 20.1186 35.8958 18.509 34.709 17.3222C33.5223 16.1355 31.9127 15.4688 30.2344 15.4688H27.4219C26.8624 15.4688 26.3259 15.2465 25.9303 14.8509C25.5347 14.4553 25.3125 13.9188 25.3125 13.3594V10.5469C25.3125 8.86855 24.6458 7.25897 23.459 6.07221C22.2723 4.88546 20.6627 4.21875 18.9844 4.21875H15.4688M15.4688 28.125H29.5312M15.4688 33.75H22.5M19.6875 4.21875H10.5469C9.3825 4.21875 8.4375 5.16375 8.4375 6.32812V38.6719C8.4375 39.8362 9.3825 40.7812 10.5469 40.7812H34.4531C35.6175 40.7812 36.5625 39.8362 36.5625 38.6719V21.0938C36.5625 16.6182 34.7846 12.326 31.6199 9.16132C28.4552 5.99665 24.163 4.21875 19.6875 4.21875Z" stroke="#243747" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="col" style="height: auto;">
                    <!-- Konten  -->
                    di isi judul laporan
                </div>

                <div class="col d-flex justify-content-end ">
                    <!-- Konten kolom kanan -->
                    <a type="button" class=" " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Lihat detail</a>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class=" modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Judul history</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <img src="<?= base_url('img/forest.jpg') ?>" alt="" class="img-fluid w-100">
                                </div>
                                <div class="col">
                                    <ul>
                                        <h2>Identitas</h2>
                                    </ul>
                                    <ul>
                                        id masyarakat :
                                    </ul>
                                    <ul>
                                        id pengaduan :
                                    </ul>
                                    <ul>
                                        tanggal pengaduan :
                                    </ul>
                                    <ul>
                                        nik :
                                    </ul>
                                    <ul>
                                        status :
                                    </ul>
                                    <ul>
                                        <h2>Isi laporan</h2>
                                    </ul>
                                    <ul>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt accusamus perferendis odio tempora distinctio possimus veniam nulla inventore. Tempora expedita obcaecati iste architecto repellat earum rem impedit dolorum ipsam cumque.
                                    </ul>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Selesai</button>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>