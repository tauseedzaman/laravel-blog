@extends('layouts.app')

@section("content")
        <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-md-12 col-sm-12">
                        <div class="main_content">
                            <div class="custom_navbar">
                                <a href="" class="burger-btn" id="open"><button
                                        class="btn btn-primary"><i
                                            class="fas fa-bars"></i></button></a>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-12 col-md-12 col-sm-12
                                        d-flex
                                        justify-content-center
                                        align-items-center mt-3">
                                    <div class="blog_image_single">
                                        <img
                                            src="storage/{{ $post->image  }}"
                                            alt="{{ $post->image  }}">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-12 col-sm-12
                                        mt-5">
                                    <h3 class="px-4">
                                        {{ $post->title  }}
                                    </h3>
                                    <p class="px-4"> {!! $post->content !!} </p>
                                </div>
                                <div class="col-xl-12 col-md-12 col-sm-12
                                        mt-5">
                                    <p class="d-flex
                                            justify-content-around">
                                            <span><i class="fas
                                                    fa-calendar-alt mr-2"></i>
                                                20
                                                June
                                                2021 </span>
                                        <span> <i class="fa fa-folder mr-2"
                                                  aria-hidden="true"></i>
                                                Javascript</span>
                                        <span> <i class="fa fa-comments
                                                    mr-2"
                                                  aria-hidden="true"></i> 27</span>
                                    </p>
                                </div>
                                @livewireStyles
                                @livewireScripts
                                @livewire('comments',['postId'=>$post->id])
                            </div>
                        </div>



                        </div>
                    </div>

@endsection
