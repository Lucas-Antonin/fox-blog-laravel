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
                        @if(Session::has('post_added'))
                            <div class="alert alert-success">
                                {{ Session::get('post_added') }}
                            </div>
                            @endif
                        <form action="{{ route('makepost') }}" method="post" enctype="multipart/form-data">
                            @csrf
                        <textarea class="form-control mb-2" placeholder="Post somefoxthing" name="text" id="floatingTextarea2" style="height: 150px"></textarea>
                        @error('text')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                            @enderror
                        <input type="file" name="file" class="form-control mb-2" onchange="previewFile(this)">
                        <img class="preview-img-post mb-2" id="previewImg" alt="your img">
                            @error('file')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewFile(input){
            var file=$("input[type=file]").get(0).files[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src", reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection





