@extends('layouts.app')


<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register-form.css') }}">
</head>
@section('content')
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <br>
    <div class="container login-margin">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row my-5">
                    <div class="choice-img d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body">

                        <h5 class="card-title text-center">What do you want to post?</h5>
                        <textarea class="form-control mb-2" placeholder="Post somefoxthing" id="floatingTextarea2" style="height: 150px"></textarea>

                        <ul>
                            <div class="row">
                            <div class="col-lg-1 col-md-12 col-sm-12">
                            <a href="#"><li><i class="far fa-images fa-2x purple-icon"></i></li></a>
                            </div>
                            <div class="col-lg-1 col-md-12 col-sm-12">
                            <a href="#"><li><i class="fab fa-youtube fa-2x purple-icon"></i> </li></a>
                            </div>
                            </div>
                        </ul>


                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





