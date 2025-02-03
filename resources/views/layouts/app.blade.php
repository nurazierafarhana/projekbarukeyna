<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Keyna Cafe</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link href="/img/logo.png" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}


        
    </head>


    <body>        
    <!-- Include the navigation -->
    @include('layouts.navigation')


        <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" id="footer" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 8rem;height: auto;" >
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


<!-- Bootstrap JS Bundle (including Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
