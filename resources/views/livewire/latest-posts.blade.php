@if($latestposts)
    <div class="row">
        <div class="col-5 image">
            <a href="single-post.html">
                <img
                    src="storage/{{ $latestposts->image }}"
                    alt="image">
            </a>
        </div>
        <div class="col-7">
            <a href="show-{{ $latestposts->id }}-post">
                <h6>{{ $latestposts->title }}</h6>
            </a>
            <h6>
                                        <span><i class="fas
                                                fa-calendar-alt
                                                mr-2"></i>
                                            {{ $latestposts->created_at->diffForHumans() }} </span>
                <span> <i class="fa fa-user
                                                mr-2 ml-2"
                          aria-hidden="true"></i>
                                            {{$latestposts->auther}} </span>
                <span> <i class="fa
                                                fa-comments
                                                mr-2 ml-2"
                          aria-hidden="true"></i>
                                            {{ $latestposts->comments->count() }}</span>
            </h6>
        </div>

        @else
<h3>No Post Found!</h3>
            @endif
