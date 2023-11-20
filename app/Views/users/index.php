<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('bootstrap-5.0.2/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('bootstrap-5.0.2/css/tiny-slider.css') ?>" rel="stylesheet">
    <link href="<?= base_url('bootstrap-5.0.2/css/style.css') ?>" rel="stylesheet">
    <title>Pengaduan Masyarakat</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/pengaduan-masyarakat/home') ?>">Pengaduan<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-end" id="navbarsFurni">
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="btn btn-outline-light" href="<?= base_url('/auth/login') ?>" role="button">Sign in</a></a></li>
                    <li><a class="btn btn-outline-light" href="<?= base_url('/auth/register') ?>" role="button">Sign up</a></li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Pengaduan Masyarakat</h1>
                        <p class="mb-4">Pengaduan masyarakat adalah proses atau mekanisme yang memungkinkan individu atau kelompok masyarakat untuk menyampaikan keluhan, masalah, atau permasalahan tertentu kepada pihak yang berwenang atau instansi yang relevan.</p>
                        <p><a href="<?= base_url('/auth/login') ?>" class="btn btn-white-outline">Lapor sekarang</a></p>
                    </div>
                </div>
                <div class="col-lg-7 ">
                    <div class="hero-img-wrap">
                        <img src="<?= base_url('img/bantuan.jpg') ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->



    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">


                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="<?= base_url('img/gambar1.png') ?>" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Bantuan</h2>
                    <p>Memberi pelayanan kepada warga masyarakat memang tiada habisnya, salah satunya dalam melayani pengaduan masyarakat. Terkadang, Anda tidak hanya harus fokus dalam melayani aduan saja, tapi juga diberatkan dengan prosedur untuk kebutuhan laporan. Kini, Anda dapat menggunakan Source Code Aplikasi Pengaduan Masyarakat Berbasis Website untuk meringankan pekerjaan Anda.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimoni</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">

                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Saya sangat puas dengan layanan aplikasi pengaduan ini. Sebagai warga, saya merasa didengar dan direspon dengan baik. Setiap kali saya melaporkan masalah, seperti sampah yang menumpuk di area umum, masalahnya segera diatasi. Bagus!.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="<?= base_url('img/person_1.jpg') ?>" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Ali Fahmi Yusuf</h3>
                                                <span class="position d-block mb-3">Pelajar</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Sangat senang dengan aplikasi pengaduan masyarakat ini! Saya mengajukan laporan tentang lampu jalan yang mati di lingkungan saya, dan dalam waktu kurang dari 24 jam, petugas sudah datang dan memperbaikinya. Prosesnya cepat dan efisien, terima kasih banyak!.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="<?= base_url('img/person_2.jpg') ?>" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Aplikasi ini sungguh memudahkan kita untuk menyampaikan keluhan. Baru saja saya melaporkan lubang di jalan dekat rumah, dan responnya sangat cepat. Seminggu kemudian, lubangnya sudah diperbaiki. Terimakasih, tim pengelola aplikasi pengaduan masyarakat!.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="<?= base_url('img/person_3.jpg') ?>" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Slider -->

    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="<?= base_url('pengaduan-masyarakat/home') ?>" class="footer-logo">Lapor<span>.</span></a></div>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                    </ul>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed by Fahmi <!-- License information: https://untree.co/license/ -->
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->


    <script src="<?= base_url('bootstrap-5.0.2/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap-5.0.2/js/tiny-slider.js') ?>"></script>
    <script src="<?= base_url('bootstrap-5.0.2/js/custom.js') ?>"></script>
</body>

</html>