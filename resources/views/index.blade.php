@extends('layouts.app')

    <!-- Page Header-->
    @section('header')
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-mainContentheading">
                            <h1>{{ $name }}</h1>
                            <span class="subheading">{{ $section }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    @endsection
    <!-- Main Content-->
    @section('mainContent')
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        @if (count($posts) > 0)
                            @foreach($posts as $allpost)
                                <a href="{{ $post }}">
                                    <h2 class="post-title">{{ $allpost->title }}</h2>
                                    <h3 class="post-subtitle">{{ $allpost->subtitle }}</h3>
                                </a>
                                <p class="post-meta">
                                    Posted by
                                    <a href="#!">Start Bootstrap</a>
                                    on {{ $allpost->meta }}
                                </p>
                                @if (isset($allpost->comments) && count($allpost->comments) > 0)
                                    <div style="margin-left: 25px; margin-right: 100px; ">
                                        <h4>Comments:</h4>
                                        <div class="list-group">
                                            @foreach($allpost->comments as $comment)
                                                <div class="list-group-item">
                                                    <h5 class="list-group-item-heading">{{ $comment->user }}</h5>
                                                    <p class="list-group-item-text">{{ $comment->text }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div style="margin-left: 25px; margin-right: 100px; ">
                                        <p>No comments for this post.</p>
                                    </div>
                                @endif
                                <!-- Divider-->
                                <hr class="my-4"/>
                            @endforeach
                            <!-- Pager-->
                            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                        @else
                            <h2 class="list-group-item-text">You Don't have any Posts now</h2>
                            <!-- Divider-->
                            <br/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection