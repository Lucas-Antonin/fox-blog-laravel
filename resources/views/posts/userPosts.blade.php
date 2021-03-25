@extends('layouts.app')
<head>
    <style>
        body{
            background-color: #6f42c1 !important;
            background-attachment: fixed !important;
        }
        .t{
            background-color: #6f42c1 !important;
            height:1px;
        }
    </style>
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
    <br>
    <center><h2 class="mt-5">{{$user->username}}</h2>
        <h4>Posted: {{$posts->count() }} {{ Str::plural('post', $posts->count()) }}</h4>
    </center>
    <div class="container">

        @if($posts->count())
            @foreach($posts as $post)
                <div class="row margin-posts">
                    <div class="card-columns mx-auto d-flex justify-content-center col-12">
                        <div class="col-sm-6">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h4><a href="{{ route('users.posts', $post->user) }}" class="font-weight-bold"><strong>{{ $post->user->username }}</strong></a></h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{$post->text}}</p>
                                    <img class="card-img-bottom img-post-size" src="{{asset('images')}}/{{$post->postImage}}">
                                </div>
                                <div class="card-footer text-muted">
                                    <div>
                                        {{ $post->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $posts->links() }}
        @else
            <p>nothing to see here</p>
        @endif
        <div class="t"></div>
    </div>
@endsection
