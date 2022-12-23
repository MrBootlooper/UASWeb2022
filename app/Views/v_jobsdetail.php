<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WEB | TANGSEL JOBS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/logo/logoweb.png" />

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/assets/public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/css/user.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/assets/public/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Scaffold - v4.7.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Awal Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="<?= base_url() ?>/home">TANGSEL JOBS</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <!-- Awal Navbar -->
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/home">Home</a></li>
                    <li><a class="nav-link scrollto active" href="<?= base_url() ?>/jobs_detail">Board</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/auth/login">Edit</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- Akhir Navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="https://www.instagram.com/tangseljobs/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

        </div>
    </header>
    <!-- Akhir Header -->

    <!-- ======= Portfolio Section ======= -->
    <section id='hero'>
        <!-- <div class="fcontainer"> -->
        <div class="row">
            <div class="section-title" data-aos="fade-up">
                <h2>Job List</h2>
            </div>
            <div class="container" style="padding: 0px 100px 0px 130px;">
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <?php $id = 0;
                    foreach ($jobs as $i) :
                        $id++;
                        $judul = $i['Judul'];
                        $perusahaan = $i['perusahaan'];
                        $salary = $i['salary'];
                        $tipewaktu = $i['TipeWaktu'];
                        $pengalaman = $i['Pengalaman'];
                        $deskripsi = $i['Deskripsi'];
                        $tags = $i['Tags'];
                        $kontak = $i['kontak'];
                    ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <div class="col-sm6">
                                    <div class="portfolio-info">
                                        <h4><?= $judul ?></h4>
                                        <p><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M15.19 21C14.12 19.43 13 17.36 13 15.5C13 13.67 13.96 12 15.4 11H15V9H17V10.23C17.5 10.09 18 10 18.5 10C18.67 10 18.84 10 19 10.03V3H5V21H11V17.5H13V21H15.19M15 5H17V7H15V5M9 19H7V17H9V19M9 15H7V13H9V15M9 11H7V9H9V11M9 7H7V5H9V7M11 5H13V7H11V5M11 9H13V11H11V9M11 15V13H13V15H11M18.5 12C16.6 12 15 13.61 15 15.5C15 18.11 18.5 22 18.5 22S22 18.11 22 15.5C22 13.61 20.4 12 18.5 12M18.5 16.81C17.8 16.81 17.3 16.21 17.3 15.61C17.3 14.91 17.9 14.41 18.5 14.41S19.7 15 19.7 15.61C19.8 16.21 19.2 16.81 18.5 16.81Z" />
                                            </svg><?= $perusahaan ?></p>
                                        <p><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                                            </svg>South Tangerang</p>
                                        <p><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z" />
                                            </svg><?= $salary ?></p>
                                        <div class="portfolio-links">
                                            <a href="<?= base_url('Jobs_detail/jobs_detail/' . $id) ?>" title="More Details">More Details</a>
                                        </div>

                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="footer-info">
                            <h3>TANGSEL JOBS</h3>
                            <p>
                                South Tangerang<br><br>
                                <strong>Instagram:</strong> @tangseljobs<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.instagram.com/tangseljobs/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>/home">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Board</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>/auth/login">Edit</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright 2022 | <a href='https://www.instagram.com/tangseljobs/' target='_blank'>Tangsel Jobs</a>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/assets/public/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/assets/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/assets/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/public/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/assets/public/assets/js/main.js"></script>

</body>

</html>