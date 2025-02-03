<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Keyna Cafe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Fixed Wrapper Start -->
<div class="fixed-top">
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://www.facebook.com/profile.php?id=100085545997707">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.instagram.com/keynacafe?igsh=Z3J4M3A1OHJsMDAw">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white px-3" href="https://wa.link/cuoclu" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.tiktok.com/@keynacafe.tanjungmalim?is_from_webapp=1&sender_device=pc" target="_blank">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="#header-carousel" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary">k<span class="text-secondary">E</span>yna</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#header-carousel" class="nav-item nav-link active">Utama</a>
                        <a href="#about" class="nav-item nav-link">Tentang Kami</a>
                        <a href="#menu" class="nav-item nav-link">Menu</a>
                    </div>
                    <a href="#header-carousel" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0">
                            <img src="/img/logo.png" alt="keyna Logo" width="80" height=auto class="img-fluid">
                        </h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="#servis" class="nav-item nav-link">Servis</a>
                        <a href="#gallery" class="nav-item nav-link">Galeri</a>
                        <a href="#footer" class="nav-item nav-link">Hubungi</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
</div>
<!-- Fixed Wrapper End -->

<!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/img/bg1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Temui menu yang menarik di Keyna Cafe Tanjung Malim, Perak</h4>
                            <h1 class="display-3 text-white mb-md-4">Kopi, Croffle, Yogurt & Soft Aiskrim, Minuman yang menyegarkan </h1>
                            <a href="{{ route('register') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Log Masuk</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/keynalatte.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3"> Setiap Rabu, BELI 1 Keyna Latte, PERCUMA 1! Jangan lepaskan peluang istimewa ni.</h4>
                            <h1 class="display-3 text-white mb-md-4">Rabu yang Gembira</h1>
                            <a href="{{ route('register') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Log Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id= "about">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Keyna Cafe – Tempat Santai, Makan Sedap, & Tawaran Hebat! </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Tentang Kami</h4>
                    <h5 class="text-muted mb-3">Sejak tahun 2017, Keyna kafe telah menjadi destinasi kegemaran untuk pencinta makanan dan pencuci mulut.</h5>
                    <p>Jom ke Keyna Cafe – tempat lepak paling best, makanan sedap, dan tawaran menarik untuk anda! #KeynaCafe – Kami tunggu anda! 😍</p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="/img/aboutus.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Menu Terlaris</h4>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Aiskrim Froyo Yogurt yang menyegarkan</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Aiskrim Vanilla yang berkrim</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Frozen Yogurt Kefir yang sihat</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Shake & smoothies yang sejuk dan memuaskan</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Ayam Gepuk pedas kaw</h5>
                    <p>Dan pelbagai menu lain menanti! </p>


                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- Promotion Start -->
<div class="container-fluid my-5 py-5 px-0" >
    <div class="row bg-primary m-0">
        <div class="col-md-6 px-0" style="min-height: 500px;">
            <div class="position-relative h-100">
                <!-- Background Image -->
                <img class="position-absolute w-100 h-100" src="img/promo.jpg" style="object-fit: cover;">
                
                <!-- Play Button to Trigger Modal -->
                <button type="button" class="btn-play" data-toggle="modal" data-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        
        <div class="col-md-6 py-5 py-md-0 px-0">
            <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                
                <!-- Product Name -->
                <h3 class="font-weight-bold text-white mt-3 mb-4">KEYNA Cafe, tempat paling mesra pelajar di Tanjung Malim!</h3>
                
                <!-- Product Description -->
                <p class="text-white mb-4">Suasana selesa lengkap dengan plug soket, Wi-Fi percuma, dan penghawa dingin, 
                    ianya tempat terbaik untuk lepak sambil menikmati pelbagai pilihan makanan seperti ayam gepuk, takoyaki, croffle, waffle, 
                    dan ais krim yogurt yang menyegarkan. Jom, datang dan rasai sendiri pengalaman makan yang berbeza bersama kami!"</p>
                
                <!-- Order Button -->
                <a href="" class="btn btn-secondary py-3 px-5 mt-2">Pesan Sekarang</a>
            </div>
        </div>
    </div>
</div>
<!-- Promotion End -->

<!-- Modal to Display TikTok Video -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Close Button -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- TikTok Embed Block -->
                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@syahirnordin_/video/7451161563211353352" data-video-id="7451161563211353352" data-embed-from="oembed" style="max-width:605px; min-width:325px;">
                    <section>
                        <a target="_blank" title="@syahirnordin_" href="https://www.tiktok.com/@syahirnordin_?refer=embed">@syahirnordin_</a>
                        <p>Replying to @mhd4mir__ Cafe paling mesra student di Tanjung Malim. @KEYNACAFE  Sesuai untuk student nak lepak, ada plug, free wifi dan aircond. Untuk makanan ada ayam gepuk, takoyaki, croffle, waffle dan ais krim yogurt. <a title="keynacafe" target="_blank" href="https://www.tiktok.com/tag/keynacafe?refer=embed">#keynacafe</a></p>
                        <a target="_blank" title="♬ Lil Boo Thang - Paul Russell" href="https://www.tiktok.com/music/Lil-Boo-Thang-7268544136268679170?refer=embed">♬ Lil Boo Thang - Paul Russell</a>
                    </section>
                </blockquote>
                <script async onerror="var a=document.createElement('script');a.src='https://iframely.net/files/tiktok-embed.js';document.body.appendChild(a);" src="https://www.tiktok.com/embed.js"></script>
            </div>
        </div>
    </div>
</div>


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid py-5" id="servis">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Kami juga menyediakan..</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/cerita4.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Tempahan Nasi Briyani</h5>
                                <p>Kami menerima tempahan Nasi Briyani Keyna Cafe yang lazat—sesuai untuk majlis perkahwinan,
                                     parti dan pelbagai lagi.</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/donut.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Tempahan Infaq</h5>
                                <p>Kami menerima tempahan untuk infaq. Pilih daripada menu lazat kami. Setiap hidangan yang anda nikmati membantu menyokong mereka yang memerlukan.</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/aiskrim1.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Tempahan Ais Krim untuk Majlis</h5>
                                <p>Keyna Cafe boleh menyediakan aiskrim yang sedap untuk semua tetamu anda sama ada majlis hari jadi atau perkahwinan.</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Cerita Kami Start -->
    <div class="container-fluid my-5 py-5 px-0" id="gallery">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Cerita Kami</h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/cerita1.jpg" alt="">
                    <a class="portfolio-btn" href="img/cerita1.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/cerita2.jpg" alt="">
                    <a class="portfolio-btn" href="img/cerita2.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/cerita3.jpg" alt="">
                    <a class="portfolio-btn" href="img/cerita3.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/cerita4.jpg" alt="">
                    <a class="portfolio-btn" href="img/cerita4.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/cerita5.jpg" alt="">
                    <a class="portfolio-btn" href="img/cerita5.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/cerita6.jpg" alt="">
                    <a class="portfolio-btn" href="img/cerita6.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cerita Kami End -->




    
    <!-- Products Start -->
    <div class="container-fluid py-5" id="menu">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Best Prices We Offer For Ice Cream Lovers</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-2.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-3.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-4.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-5.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Apa Kata Mereka?</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-1.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" id="footer" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary">
                            <img src="img/logo.png" alt="Logo" style="max-width: 30%; height: auto;">
                        </h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://www.facebook.com/profile.php?id=100085545997707"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="https://www.instagram.com/keynacafe?igsh=Z3J4M3A1OHJsMDAw"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="https://wa.link/cuoclu" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="https://www.tiktok.com/@keynacafe.tanjungmalim?is_from_webapp=1&sender_device=pc" target="_blank">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Hubungi kami</h5>
                            <p class="mb-2">No.27, Jalan U1/1, Taman Universiti, 35900 Tanjung Malim, Perak (Depan Pintu Timur).</p>
                            <p class="mb-0">+60 10-257 4506</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Waktu Beroperasi</h5>
                            <p class="mb-2">Isnin – Sabtu, 11AM – 10PM</p>
                            <p class="mb-0">Ahad: Tutup</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; {{ date('Y') }} Keyna Cafe - Hakcipta Terpelihara.</p>
                </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>