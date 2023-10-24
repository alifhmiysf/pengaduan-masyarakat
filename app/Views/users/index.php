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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tanggapan</a>
                        </li>
                    </ul>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-outline-light" href="<?= base_url('/auth/login') ?>" role="button">Sign in</a>
                    <a class="btn btn-outline-light" href="<?= base_url('/auth/register') ?>" role="button">Sign up</a>
                </div>
            </div>
        </nav>

        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h4 class="text-white text-center">Layanan Aspirasi dan Pengaduan Online Rakyat</h4>
                        <h6 class="text-center">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h6>
                    </div>
                </div>
            </div>
        </section>


        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <form action="">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">NIK</label>
                                    <input type="NIK" class="form-control" id="exampleFormControlInput1" placeholder="NIK">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pilih tanggal kejadian</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="kejadian">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Isi laporan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="faq-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Bantuan</h2>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-5 col-12">
                        <img src="<?= base_url('img/gambar.jpg') ?>" class="img-fluid" alt="FAQs">
                    </div>

                    <div class="col-lg-6 col-12 m-auto">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Memberi pelayanan kepada warga masyarakat memang tiada habisnya, salah satunya dalam melayani pengaduan masyarakat. Terkadang, Anda tidak hanya harus fokus dalam melayani aduan saja, tapi juga diberatkan dengan prosedur untuk kebutuhan laporan. Kini, Anda dapat menggunakan Source Code Aplikasi Pengaduan Masyarakat Berbasis Website untuk meringankan pekerjaan Anda.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="53" viewBox="0 0 54 53" fill="none">
                        <circle cx="27" cy="26.5" r="26.5" fill="#243747" />
                        <path d="M20.7 12H33.3C38.1 12 42 15.9 42 20.7V33.3C42 35.6074 41.0834 37.8203 39.4518 39.4518C37.8203 41.0834 35.6074 42 33.3 42H20.7C15.9 42 12 38.1 12 33.3V20.7C12 18.3926 12.9166 16.1797 14.5482 14.5482C16.1797 12.9166 18.3926 12 20.7 12ZM20.4 15C18.9678 15 17.5943 15.5689 16.5816 16.5816C15.5689 17.5943 15 18.9678 15 20.4V33.6C15 36.585 17.415 39 20.4 39H33.6C35.0322 39 36.4057 38.4311 37.4184 37.4184C38.4311 36.4057 39 35.0322 39 33.6V20.4C39 17.415 36.585 15 33.6 15H20.4ZM34.875 17.25C35.3723 17.25 35.8492 17.4475 36.2008 17.7992C36.5525 18.1508 36.75 18.6277 36.75 19.125C36.75 19.6223 36.5525 20.0992 36.2008 20.4508C35.8492 20.8025 35.3723 21 34.875 21C34.3777 21 33.9008 20.8025 33.5492 20.4508C33.1975 20.0992 33 19.6223 33 19.125C33 18.6277 33.1975 18.1508 33.5492 17.7992C33.9008 17.4475 34.3777 17.25 34.875 17.25ZM27 19.5C28.9891 19.5 30.8968 20.2902 32.3033 21.6967C33.7098 23.1032 34.5 25.0109 34.5 27C34.5 28.9891 33.7098 30.8968 32.3033 32.3033C30.8968 33.7098 28.9891 34.5 27 34.5C25.0109 34.5 23.1032 33.7098 21.6967 32.3033C20.2902 30.8968 19.5 28.9891 19.5 27C19.5 25.0109 20.2902 23.1032 21.6967 21.6967C23.1032 20.2902 25.0109 19.5 27 19.5ZM27 22.5C25.8065 22.5 24.6619 22.9741 23.818 23.818C22.9741 24.6619 22.5 25.8065 22.5 27C22.5 28.1935 22.9741 29.3381 23.818 30.182C24.6619 31.0259 25.8065 31.5 27 31.5C28.1935 31.5 29.3381 31.0259 30.182 30.182C31.0259 29.3381 31.5 28.1935 31.5 27C31.5 25.8065 31.0259 24.6619 30.182 23.818C29.3381 22.9741 28.1935 22.5 27 22.5Z" fill="white" />
                    </svg>
                </div>
                <div class="col-md-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="53" viewBox="0 0 54 53" fill="none">
                        <circle cx="27" cy="26.5" r="26.5" fill="#243747" />
                        <path d="M39.3367 14.6561C37.8624 13.1744 36.1064 11.9996 34.1711 11.2002C32.2357 10.4008 30.1598 9.99283 28.0643 10.0001C19.2844 10.0001 12.1286 17.1201 12.1286 25.856C12.1286 28.656 12.8683 31.376 14.2513 33.776L12 42L20.4422 39.792C22.7739 41.056 25.395 41.728 28.0643 41.728C36.8442 41.728 44 34.608 44 25.872C44 21.6321 42.3437 17.6481 39.3367 14.6561ZM28.0643 39.04C25.6844 39.04 23.3528 38.4 21.3106 37.2L20.8281 36.912L15.8111 38.224L17.1457 33.36L16.8241 32.864C15.5019 30.7632 14.7998 28.3348 14.798 25.856C14.798 18.5921 20.7477 12.6721 28.0482 12.6721C31.5859 12.6721 34.9146 14.0481 37.407 16.5441C38.6412 17.7664 39.6192 19.2203 40.2845 20.8215C40.9497 22.4228 41.2889 24.1394 41.2824 25.872C41.3146 33.136 35.3648 39.04 28.0643 39.04ZM35.3327 29.184C34.9307 28.992 32.9688 28.032 32.6151 27.888C32.2452 27.76 31.9879 27.696 31.7146 28.08C31.4412 28.48 30.6854 29.376 30.4603 29.632C30.2352 29.904 29.994 29.936 29.592 29.728C29.1899 29.536 27.9035 29.104 26.392 27.76C25.202 26.704 24.4141 25.408 24.1729 25.008C23.9477 24.6081 24.1407 24.4001 24.3497 24.1921C24.5266 24.0161 24.7518 23.7281 24.9447 23.5041C25.1377 23.2801 25.2181 23.1041 25.3467 22.8481C25.4754 22.5761 25.4111 22.3521 25.3146 22.1601C25.2181 21.9681 24.4141 20.0161 24.0925 19.2161C23.7709 18.4481 23.4332 18.5441 23.192 18.5281H22.4201C22.1467 18.5281 21.7286 18.6241 21.3588 19.0241C21.005 19.4241 19.9759 20.3841 19.9759 22.3361C19.9759 24.2881 21.407 26.176 21.6 26.432C21.793 26.704 24.4141 30.704 28.402 32.416C29.3508 32.832 30.0905 33.072 30.6693 33.248C31.6181 33.552 32.4864 33.504 33.1779 33.408C33.9497 33.296 35.5417 32.448 35.8633 31.52C36.201 30.592 36.201 29.808 36.0884 29.632C35.9759 29.456 35.7347 29.376 35.3327 29.184Z" fill="white" />
                    </svg>
                </div>
                <div class="col-md-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="53" viewBox="0 0 54 53" fill="none">
                        <circle cx="27" cy="26.5" r="26.5" fill="#243747" />
                        <path d="M42 18C42 16.35 40.65 15 39 15H15C13.35 15 12 16.35 12 18V36C12 37.65 13.35 39 15 39H39C40.65 39 42 37.65 42 36V18ZM39 18L27 25.5L15 18H39ZM39 36H15V21L27 28.5L39 21V36Z" fill="white" />
                    </svg>
                </div>
            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>