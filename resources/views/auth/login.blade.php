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
                    <div class="card-img-left d-none d-md-flex">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        @if(session('status'))
                            <div class="mt-2 ml-4 text-danger">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('login') }}" method="post" class="form-signin">
                            @csrf

                            <div class="form-label-group">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email')border border-danger @enderror" placeholder="Email address">
                                <label for="email">Email address</label>
                                @error('email')
                                <div class="mt-2 ml-4 text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="password" name="password" class="form-control @error('password')border border-danger @enderror" placeholder="Password">
                                <label for="password">Password</label>
                                @error('password')
                                <div class="mt-2 ml-4 text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="flex align-items-center">
                                <input type="checkbox" name="remember" id="remember" class="ml-2 mr-2A">
                                <label for="remember">Remember me</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





