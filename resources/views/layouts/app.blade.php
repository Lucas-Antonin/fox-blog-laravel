<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Fox Blog</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templatemo-art-factory.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">Fox Blog</a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('home') }}" class="active">Home</a></li>
                        <li class=""><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="mr-3"><a href="{{ route('posts') }}">Posts</a></li>
                        @guest
                            <li class=""><a href="{{ route('login') }}">Login</a></li>
                            <li class=""><a href="{{ route('register') }}">Register</a></li>
                        @endguest

                       @auth
                           <form action="{{ route('logout') }}" method="post">
                               @csrf
                                <button class="logout-button">Logout</button>
                           </form>
                        @endauth
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
@yield("content")




<!-- jQuery -->
<script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('js/owl-carousel.js') }}"></script>
<script src="{{ asset('js/scrollreveal.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/imgfix.min.js') }}"></script>

<script src="https://kit.fontawesome.com/2f43138473.js" crossorigin="anonymous"></script>
<!-- Global Init -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
