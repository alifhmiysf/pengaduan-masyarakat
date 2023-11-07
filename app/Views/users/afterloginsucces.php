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
                            <a class="nav-link active" aria-current="page" href="<?= base_url('/pengaduan-masyarakat/home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/pengaduan-masyarakat/tanggapan_after_login') ?>">Tanggapan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/pengaduan-masyarakat/tanggapan_after_login') ?>">History</a>
                        </li>
                    </ul>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-outline-light" href="<?= base_url('/auth/login') ?>" role="button">Log Out</a>
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
                            <form method="post" action="<?= site_url('PengirimanData/simpanData'); ?>">
                                <div class="mb-3">
                                    <label for="NIK" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="NIK" name="NIK" placeholder="NIK">
                                </div>

                                <div class="mb-3">
                                    <label for="kejadian" class="form-label">Pilih tanggal kejadian</label>
                                    <input type="text" class="form-control" id="kejadian" name="kejadian" placeholder="kejadian">
                                </div>

                                <div class="mb-3">
                                    <label for="isi_laporan" class="form-label">Isi laporan</label>
                                    <textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="file">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>


                            <!-- <form action="">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIK">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pilih tanggal kejadian</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="kejadian">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Isi laporan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                </div>
                            </form> -->
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
                            <div class="">
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
                <svg width="793" height="18" viewBox="0 0 793 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M361.662 4.66V13H360.294V9.352H356.37V13H355.002V4.66H356.37V8.236H360.294V4.66H361.662ZM369.451 6.388V13H368.083V12.22C367.867 12.492 367.583 12.708 367.231 12.868C366.887 13.02 366.519 13.096 366.127 13.096C365.607 13.096 365.139 12.988 364.723 12.772C364.315 12.556 363.991 12.236 363.751 11.812C363.519 11.388 363.403 10.876 363.403 10.276V6.388H364.759V10.072C364.759 10.664 364.907 11.12 365.203 11.44C365.499 11.752 365.903 11.908 366.415 11.908C366.927 11.908 367.331 11.752 367.627 11.44C367.931 11.12 368.083 10.664 368.083 10.072V6.388H369.451ZM372.623 7.372C372.855 7.052 373.171 6.792 373.571 6.592C373.979 6.384 374.431 6.28 374.927 6.28C375.511 6.28 376.039 6.42 376.511 6.7C376.983 6.98 377.355 7.38 377.627 7.9C377.899 8.412 378.035 9 378.035 9.664C378.035 10.328 377.899 10.924 377.627 11.452C377.355 11.972 376.979 12.38 376.499 12.676C376.027 12.964 375.503 13.108 374.927 13.108C374.415 13.108 373.959 13.008 373.559 12.808C373.167 12.608 372.855 12.352 372.623 12.04V13H371.255V4.12H372.623V7.372ZM376.643 9.664C376.643 9.208 376.547 8.816 376.355 8.488C376.171 8.152 375.923 7.9 375.611 7.732C375.307 7.556 374.979 7.468 374.627 7.468C374.283 7.468 373.955 7.556 373.643 7.732C373.339 7.908 373.091 8.164 372.899 8.5C372.715 8.836 372.623 9.232 372.623 9.688C372.623 10.144 372.715 10.544 372.899 10.888C373.091 11.224 373.339 11.48 373.643 11.656C373.955 11.832 374.283 11.92 374.627 11.92C374.979 11.92 375.307 11.832 375.611 11.656C375.923 11.472 376.171 11.208 376.355 10.864C376.547 10.52 376.643 10.12 376.643 9.664ZM385.376 6.388V13H384.008V12.22C383.792 12.492 383.508 12.708 383.156 12.868C382.812 13.02 382.444 13.096 382.052 13.096C381.532 13.096 381.064 12.988 380.648 12.772C380.24 12.556 379.916 12.236 379.676 11.812C379.444 11.388 379.328 10.876 379.328 10.276V6.388H380.684V10.072C380.684 10.664 380.832 11.12 381.128 11.44C381.424 11.752 381.828 11.908 382.34 11.908C382.852 11.908 383.256 11.752 383.552 11.44C383.856 11.12 384.008 10.664 384.008 10.072V6.388H385.376ZM390.517 6.28C391.037 6.28 391.501 6.388 391.909 6.604C392.325 6.82 392.649 7.14 392.881 7.564C393.113 7.988 393.229 8.5 393.229 9.1V13H391.873V9.304C391.873 8.712 391.725 8.26 391.429 7.948C391.133 7.628 390.729 7.468 390.217 7.468C389.705 7.468 389.297 7.628 388.993 7.948C388.697 8.26 388.549 8.712 388.549 9.304V13H387.181V6.388H388.549V7.144C388.773 6.872 389.057 6.66 389.401 6.508C389.753 6.356 390.125 6.28 390.517 6.28ZM397.638 6.28C398.15 6.28 398.602 6.384 398.994 6.592C399.394 6.792 399.706 7.044 399.93 7.348V6.388H401.31V13.108C401.31 13.716 401.182 14.256 400.926 14.728C400.67 15.208 400.298 15.584 399.81 15.856C399.33 16.128 398.754 16.264 398.082 16.264C397.186 16.264 396.442 16.052 395.85 15.628C395.258 15.212 394.922 14.644 394.842 13.924H396.198C396.302 14.268 396.522 14.544 396.858 14.752C397.202 14.968 397.61 15.076 398.082 15.076C398.634 15.076 399.078 14.908 399.414 14.572C399.758 14.236 399.93 13.748 399.93 13.108V12.004C399.698 12.316 399.382 12.58 398.982 12.796C398.59 13.004 398.142 13.108 397.638 13.108C397.062 13.108 396.534 12.964 396.054 12.676C395.582 12.38 395.206 11.972 394.926 11.452C394.654 10.924 394.518 10.328 394.518 9.664C394.518 9 394.654 8.412 394.926 7.9C395.206 7.388 395.582 6.992 396.054 6.712C396.534 6.424 397.062 6.28 397.638 6.28ZM399.93 9.688C399.93 9.232 399.834 8.836 399.642 8.5C399.458 8.164 399.214 7.908 398.91 7.732C398.606 7.556 398.278 7.468 397.926 7.468C397.574 7.468 397.246 7.556 396.942 7.732C396.638 7.9 396.39 8.152 396.198 8.488C396.014 8.816 395.922 9.208 395.922 9.664C395.922 10.12 396.014 10.52 396.198 10.864C396.39 11.208 396.638 11.472 396.942 11.656C397.254 11.832 397.582 11.92 397.926 11.92C398.278 11.92 398.606 11.832 398.91 11.656C399.214 11.48 399.458 11.224 399.642 10.888C399.834 10.544 399.93 10.144 399.93 9.688ZM403.803 5.512C403.555 5.512 403.347 5.428 403.179 5.26C403.011 5.092 402.927 4.884 402.927 4.636C402.927 4.388 403.011 4.18 403.179 4.012C403.347 3.844 403.555 3.76 403.803 3.76C404.043 3.76 404.247 3.844 404.415 4.012C404.583 4.18 404.667 4.388 404.667 4.636C404.667 4.884 404.583 5.092 404.415 5.26C404.247 5.428 404.043 5.512 403.803 5.512ZM404.475 6.388V13H403.107V6.388H404.475ZM412.004 9.7L415.052 13H413.204L410.756 10.156V13H409.388V4.12H410.756V9.28L413.156 6.388H415.052L412.004 9.7ZM415.577 9.664C415.577 9 415.713 8.412 415.985 7.9C416.265 7.388 416.641 6.992 417.113 6.712C417.593 6.424 418.121 6.28 418.697 6.28C419.217 6.28 419.669 6.384 420.053 6.592C420.445 6.792 420.757 7.044 420.989 7.348V6.388H422.369V13H420.989V12.016C420.757 12.328 420.441 12.588 420.041 12.796C419.641 13.004 419.185 13.108 418.673 13.108C418.105 13.108 417.585 12.964 417.113 12.676C416.641 12.38 416.265 11.972 415.985 11.452C415.713 10.924 415.577 10.328 415.577 9.664ZM420.989 9.688C420.989 9.232 420.893 8.836 420.701 8.5C420.517 8.164 420.273 7.908 419.969 7.732C419.665 7.556 419.337 7.468 418.985 7.468C418.633 7.468 418.305 7.556 418.001 7.732C417.697 7.9 417.449 8.152 417.257 8.488C417.073 8.816 416.981 9.208 416.981 9.664C416.981 10.12 417.073 10.52 417.257 10.864C417.449 11.208 417.697 11.472 418.001 11.656C418.313 11.832 418.641 11.92 418.985 11.92C419.337 11.92 419.665 11.832 419.969 11.656C420.273 11.48 420.517 11.224 420.701 10.888C420.893 10.544 420.989 10.144 420.989 9.688ZM432.17 6.28C432.69 6.28 433.154 6.388 433.562 6.604C433.978 6.82 434.302 7.14 434.534 7.564C434.774 7.988 434.894 8.5 434.894 9.1V13H433.538V9.304C433.538 8.712 433.39 8.26 433.094 7.948C432.798 7.628 432.394 7.468 431.882 7.468C431.37 7.468 430.962 7.628 430.658 7.948C430.362 8.26 430.214 8.712 430.214 9.304V13H428.858V9.304C428.858 8.712 428.71 8.26 428.414 7.948C428.118 7.628 427.714 7.468 427.202 7.468C426.69 7.468 426.282 7.628 425.978 7.948C425.682 8.26 425.534 8.712 425.534 9.304V13H424.166V6.388H425.534V7.144C425.758 6.872 426.042 6.66 426.386 6.508C426.73 6.356 427.098 6.28 427.49 6.28C428.018 6.28 428.49 6.392 428.906 6.616C429.322 6.84 429.642 7.164 429.866 7.588C430.066 7.188 430.378 6.872 430.802 6.64C431.226 6.4 431.682 6.28 432.17 6.28ZM437.33 5.512C437.082 5.512 436.874 5.428 436.706 5.26C436.538 5.092 436.454 4.884 436.454 4.636C436.454 4.388 436.538 4.18 436.706 4.012C436.874 3.844 437.082 3.76 437.33 3.76C437.57 3.76 437.774 3.844 437.942 4.012C438.11 4.18 438.194 4.388 438.194 4.636C438.194 4.884 438.11 5.092 437.942 5.26C437.774 5.428 437.57 5.512 437.33 5.512ZM438.002 6.388V13H436.634V6.388H438.002Z" fill="#243747" />
                    <path d="M0 10H346" stroke="black" />
                    <path d="M447 10H793" stroke="black" />
                </svg>
            </div>
            <br>
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="53" viewBox="0 0 54 53" fill="none">
                        <circle cx="27" cy="26.5" r="26.5" fill="#243747" />
                        <path d="M20.7 12H33.3C38.1 12 42 15.9 42 20.7V33.3C42 35.6074 41.0834 37.8203 39.4518 39.4518C37.8203 41.0834 35.6074 42 33.3 42H20.7C15.9 42 12 38.1 12 33.3V20.7C12 18.3926 12.9166 16.1797 14.5482 14.5482C16.1797 12.9166 18.3926 12 20.7 12ZM20.4 15C18.9678 15 17.5943 15.5689 16.5816 16.5816C15.5689 17.5943 15 18.9678 15 20.4V33.6C15 36.585 17.415 39 20.4 39H33.6C35.0322 39 36.4057 38.4311 37.4184 37.4184C38.4311 36.4057 39 35.0322 39 33.6V20.4C39 17.415 36.585 15 33.6 15H20.4ZM34.875 17.25C35.3723 17.25 35.8492 17.4475 36.2008 17.7992C36.5525 18.1508 36.75 18.6277 36.75 19.125C36.75 19.6223 36.5525 20.0992 36.2008 20.4508C35.8492 20.8025 35.3723 21 34.875 21C34.3777 21 33.9008 20.8025 33.5492 20.4508C33.1975 20.0992 33 19.6223 33 19.125C33 18.6277 33.1975 18.1508 33.5492 17.7992C33.9008 17.4475 34.3777 17.25 34.875 17.25ZM27 19.5C28.9891 19.5 30.8968 20.2902 32.3033 21.6967C33.7098 23.1032 34.5 25.0109 34.5 27C34.5 28.9891 33.7098 30.8968 32.3033 32.3033C30.8968 33.7098 28.9891 34.5 27 34.5C25.0109 34.5 23.1032 33.7098 21.6967 32.3033C20.2902 30.8968 19.5 28.9891 19.5 27C19.5 25.0109 20.2902 23.1032 21.6967 21.6967C23.1032 20.2902 25.0109 19.5 27 19.5ZM27 22.5C25.8065 22.5 24.6619 22.9741 23.818 23.818C22.9741 24.6619 22.5 25.8065 22.5 27C22.5 28.1935 22.9741 29.3381 23.818 30.182C24.6619 31.0259 25.8065 31.5 27 31.5C28.1935 31.5 29.3381 31.0259 30.182 30.182C31.0259 29.3381 31.5 28.1935 31.5 27C31.5 25.8065 31.0259 24.6619 30.182 23.818C29.3381 22.9741 28.1935 22.5 27 22.5Z" fill="white" />
                    </svg>
                </div>
                <div class="col-md-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="53" viewBox="0 0 54 53" fill="none">
                        <a href="https://wa.me/087723400208">
                            <circle cx="27" cy="26.5" r="26.5" fill="#243747" />
                            <path d="M39.3367 14.6561C37.8624 13.1744 36.1064 11.9996 34.1711 11.2002C32.2357 10.4008 30.1598 9.99283 28.0643 10.0001C19.2844 10.0001 12.1286 17.1201 12.1286 25.856C12.1286 28.656 12.8683 31.376 14.2513 33.776L12 42L20.4422 39.792C22.7739 41.056 25.395 41.728 28.0643 41.728C36.8442 41.728 44 34.608 44 25.872C44 21.6321 42.3437 17.6481 39.3367 14.6561ZM28.0643 39.04C25.6844 39.04 23.3528 38.4 21.3106 37.2L20.8281 36.912L15.8111 38.224L17.1457 33.36L16.8241 32.864C15.5019 30.7632 14.7998 28.3348 14.798 25.856C14.798 18.5921 20.7477 12.6721 28.0482 12.6721C31.5859 12.6721 34.9146 14.0481 37.407 16.5441C38.6412 17.7664 39.6192 19.2203 40.2845 20.8215C40.9497 22.4228 41.2889 24.1394 41.2824 25.872C41.3146 33.136 35.3648 39.04 28.0643 39.04ZM35.3327 29.184C34.9307 28.992 32.9688 28.032 32.6151 27.888C32.2452 27.76 31.9879 27.696 31.7146 28.08C31.4412 28.48 30.6854 29.376 30.4603 29.632C30.2352 29.904 29.994 29.936 29.592 29.728C29.1899 29.536 27.9035 29.104 26.392 27.76C25.202 26.704 24.4141 25.408 24.1729 25.008C23.9477 24.6081 24.1407 24.4001 24.3497 24.1921C24.5266 24.0161 24.7518 23.7281 24.9447 23.5041C25.1377 23.2801 25.2181 23.1041 25.3467 22.8481C25.4754 22.5761 25.4111 22.3521 25.3146 22.1601C25.2181 21.9681 24.4141 20.0161 24.0925 19.2161C23.7709 18.4481 23.4332 18.5441 23.192 18.5281H22.4201C22.1467 18.5281 21.7286 18.6241 21.3588 19.0241C21.005 19.4241 19.9759 20.3841 19.9759 22.3361C19.9759 24.2881 21.407 26.176 21.6 26.432C21.793 26.704 24.4141 30.704 28.402 32.416C29.3508 32.832 30.0905 33.072 30.6693 33.248C31.6181 33.552 32.4864 33.504 33.1779 33.408C33.9497 33.296 35.5417 32.448 35.8633 31.52C36.201 30.592 36.201 29.808 36.0884 29.632C35.9759 29.456 35.7347 29.376 35.3327 29.184Z" fill="white" />
                        </a>
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