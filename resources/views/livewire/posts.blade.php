@forelse($posts as $post)
    <div class="col-xl-3 col-md-12 col-sm-12
                                    d-flex
                                    justify-content-center
                                    align-items-center mt-3">
                                    <div class="blog_image">
                                        <a href="show-{{$post->id  }}-post">
                                            <img
                                                src="storage/{{ $post->image  }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-md-12 col-sm-12
                                    mt-5">
                                    <a href="show-{{$post->id  }}-post">
                                        <h3 class="px-4">
                                           {{ $post->title }}
                                        </h3>
                                    </a>
                                    <div class="mx-4 ">
                                       <span >{!! substr($post->content, 0, 150) !!} </span>
                                        <a class="text-capitalize text-info" href="show-{{ $post->id  }}-post">Read More</a>

                                    </div>
                                    <p class="d-flex
                                        justify-content-around">
                                        <span><i class="fas
                                                fa-calendar-alt mr-2"></i>
                                            {{ $post->created_at->format('d') }} /
                                            {{ $post->created_at->format('m') }} /
                                            {{ $post->created_at->format('y') }}
 </span>
                                        <span> <i class="fa fa-folder mr-2"
                                                aria-hidden="true"></i>
                                            {{ $post->category->name  }}</span>
                                        <span> <i class="fa fa-comments
                                                mr-2"
                                                aria-hidden="true"></i>{{ $post->comments->count() }}</span>
                                    </p>
                                </div>
    {{ $posts->links() }}

@empty
<h1 class="text-info text-capitalize">no post found!</h1>
@endforelse
