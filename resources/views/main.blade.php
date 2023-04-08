
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Portfolio Daniar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    {{-- CSS --}}
    @include('layouts.css')
    @include('layouts.animasi')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            @include('layouts.navbar')
        </nav>
        <!-- end navbar -->
        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>

        <!-- start hero section -->
        <section class="section pb-0 hero-section" id="hero" style="background: #3A4750">
            @include('menu.home')
        </section>
        <!-- end hero section -->

        <!-- start about -->
        <section class="section" id="about">
            @include('menu.about')
        </section>
        <!-- end about -->

        <!-- start experiences -->
        <section class="section bg-light" id="experiences">
            @include('menu.experience')
        </section>
        <!-- end experiences -->

        <!-- start portfolio -->
        <section class="section" id="portfolio">
            @include('menu.portfolio')
        </section>
        <!-- end portfolio -->

        <!-- start certificate -->
        <section class="section bg-light" id="certificate">
            @include('menu.certificate')
        </section>
        <!-- end certificate -->

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            @include('layouts.footer')
        </footer>
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->

    {{-- Javascript Js --}}
    @include('layouts.js')
    
</body>

</html>