<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A: Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">

    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/js/loader.js') }} "></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('main.index') }}"><img style="width: 50px" src="{{ asset('assets/images/logo.svg') }}" alt="logi"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('main.index') }}">Habarlar<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('category.index') }}" id="pagesDropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Kategoriýalar</a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                            @foreach($categories as $category)
                                <a class="dropdown-item" href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a>
                            @endforeach
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span
                                class="flag-icon flag-icon-squared rounded-circle flag-icon-tm "></span> tm</a>
                    </li>
                    <li class="nav-item">
                        @auth()
                            <a class="nav-link" href="{{ route('personal.main.index') }}">Şahsy otag</a>
                        @endauth
                        @guest()
                                <a class="nav-link" href="{{ route('personal.main.index') }}">Girmek</a>
                        @endguest
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Ýüklemek</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"><img src="{{ asset('assets/images/apple@1x.svg') }} " alt="ios"
                                                     class="mr-2"> App Store
                </button>
                <button class="btn btn-success"><img src="{{ asset('assets/images/android@1x.svg') }} " alt="android"
                                                     class="mr-2"> Google Play
                </button>
            </div>
            <p class="banner-text">Gelejekde IOS we Android telefonlar üçin mobil priloženiýe.<br>Ilkinji bolup ulanmak isleseňiz ulgamda boluň!</p>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-4">
                <a href="index.html" class="footer-brand-wrapper">
                    <img src="{{ asset('assets/images/logo.svg') }} " alt="edica logo">
                </a>
                <p class="contact-details">meret@gmail.com</p>
                <p class="contact-details">+993 61 ** ** **</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-instagram"></i></a>
                    <a href="#!"><i class="fab fa-github"></i></a>
                    <a href="#!"><i class="fab fa-telegram"></i></a>
                </nav>
            </div>
            <div class="col-md-4">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">Android App</a>
                    <a href="#!" class="nav-link">ios App</a>
                    <a href="#!" class="nav-link">FAQ</a>
                </nav>
            </div>
            <div class="col-md-4">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-tm flag-icon-squared"></span> Türkmen <i
                            class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-ru flag-icon-squared"></span> Rus
                        </button>
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> Iňlis
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }} "></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }} "></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }} "></script>
<script src="{{ asset('assets/js/main.js') }} "></script>
<script>
    AOS.init({
        duration: 1000
    });
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Select options",
            allowClear: true
        });
    });
</script>
</body>

</html>
