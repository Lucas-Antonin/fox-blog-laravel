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
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card card-signin flex-row my-5">
                        <div class="card-img-left d-none d-md-flex">
                            <!-- Background image for card set in CSS! -->
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Register</h5>
                            <form action="{{ route('register') }}" method="post" class="form-signin mb-5">
                                @csrf
                                <div class="form-label-group">
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name')border border-danger @enderror" placeholder="Name" autocomplete="off" autofocus>
                                    <label for="name">Name</label>

                                    @error('name')
                                    <div class="mt-2 ml-4 text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="text" id="username" name="username" value="{{ old('username') }}" class="form-control @error('username')border border-danger @enderror" placeholder="Username" autocomplete="off" autofocus>
                                    <label for="username">Username</label>
                                    @error('username')
                                    <div class="mt-2 ml-4 text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

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

                                <div class="form-label-group">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm password">
                                    <label for="password_confirmation">Confirm password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection





