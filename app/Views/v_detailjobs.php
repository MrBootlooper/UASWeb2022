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
    <link rel="icon" type="image/png" href="<?= base_url()?>/assets/logo/logoweb.png" />

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/assets/public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

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

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="<?= base_url() ?>/home">TANGSEL JOBS</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/home">Home</a></li>
                    <li><a class="nav-link scrollto active" href="<?= base_url() ?>/jobs_detail">Board</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>/auth/login">Edit</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="https://www.instagram.com/tangseljobs/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="<?= base_url() ?>/Jobs_detail/index">Back</a></li>
                    <li>Detail Loker</li>
                </ol>
                <h2>Detail Loker</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Detail Loker Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">
                    <div class="col-sm-5">
                        <div class="portfolio-info">
                            <h3>
                                <?= $jobs['Judul'] ?>
                                <p><?= $jobs['perusahaan'] ?></p>
                            </h3>
                            <ul>
                                <li><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M7,15H9C9,16.08 10.37,17 12,17C13.63,17 15,16.08 15,15C15,13.9 13.96,13.5 11.76,12.97C9.64,12.44 7,11.78 7,9C7,7.21 8.47,5.69 10.5,5.18V3H13.5V5.18C15.53,5.69 17,7.21 17,9H15C15,7.92 13.63,7 12,7C10.37,7 9,7.92 9,9C9,10.1 10.04,10.5 12.24,11.03C14.36,11.56 17,12.22 17,15C17,16.79 15.53,18.31 13.5,18.82V21H10.5V18.82C8.47,18.31 7,16.79 7,15Z" />
                                    </svg><?= $jobs['salary'] ?></li>
                                <li><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M6,2H18V8H18V8L14,12L18,16V16H18V22H6V16H6V16L10,12L6,8V8H6V2M16,16.5L12,12.5L8,16.5V20H16V16.5M12,11.5L16,7.5V4H8V7.5L12,11.5M10,6H14V6.75L12,8.75L10,6.75V6Z" />
                                    </svg><?= $jobs['TipeWaktu'] ?></li>
                                <li><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M10 16V15H3L3 19C3 20.11 3.89 21 5 21H19C20.11 21 21 20.11 21 19V15H14V16H10M20 7H16V5L14 3H10L8 5V7H4C2.9 7 2 7.9 2 9V12C2 13.11 2.89 14 4 14H10V12H14V14H20C21.1 14 22 13.1 22 12V9C22 7.9 21.1 7 20 7M14 7H10V5H14V7Z" />
                                    </svg><?= $jobs['Pengalaman'] ?></li>
                                <li><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M6,17C6,15 10,13.9 12,13.9C14,13.9 18,15 18,17V18H6M15,9A3,3 0 0,1 12,12A3,3 0 0,1 9,9A3,3 0 0,1 12,6A3,3 0 0,1 15,9M3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3H5C3.89,3 3,3.9 3,5Z" />
                                    </svg><a href="mailto:<?= $jobs['kontak'] ?>"><?= $jobs['kontak'] ?></a></li>
                            </ul>
                            <h3></h3>
                            <p style="font-weight:bold;">Skills :</p>
                            <p><?= $jobs['Tags'] ?></p>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="portfolio-description" style="text-align: justify;">
                            <h3>Deskripsi <?= $jobs['Judul'] ?> <?= $jobs['perusahaan'] ?></h3>
                            <ul>
                                <li>
                                    <?= $jobs['Deskripsi'] ?>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Detail Loker Section -->
    </main>
</body>

</html>