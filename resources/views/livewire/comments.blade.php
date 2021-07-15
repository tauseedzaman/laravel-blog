<div class="col-xl-12 shadow py-2 mt-5 border-top pt-5 col-md-12 col-sm-12">
    @if (session()->has('message'))

        <div class="alert alert-success"  >
            <p  class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </p>
            {{ session('message') }}
        </div>
@endif
<form wire:submit.prevent="add_comment()" id="replay-form">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="form-group">
                    <label for="">Enter your
                        Name</label>
                    <input type="text"
                           class="form-control @error('name') is-invalid @enderror"
                           name="name" wire:model="name"
                           id="name">
                    @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                </div>
            </div>
            </div>


<div class="row">
    <div class="col-xl-12 col-md-12
                                                    col-sm-12">
        <div class="form-group">
            <label for="comment">Enter
                your
                Comment</label>
            <textarea
                class="form-control @error('comment_content') is-invalid @enderror "
                name="comment"
                id="comment"
                wire:model.lazy="comment_content"
                rows="3"></textarea>
            @error('comment_content') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
<button type="submit" class="btn  btn-primary">Comment</button>
</form>
        </div>

<!-- show comments -->
<div class="col col-12 ">
    <div class="comments my-5">
        <h4>Comments ({{ $comments->count() }})</h4>
    </div><br>

    @forelse($comments as $comment)
    <div class="col-12 my-1 pt-1 rounded shadow border   mb-3">
            <h4 class="text-info">{{ $comment->auther }}</h4>
        <hr>
            <p class="pl-3">
                {{ $comment->comment_content  }}
            </p>
{{--        <button class="text-danger shadow rounded border-0 px-2 bg-warning" onclick="return confirm('Are You Sure?')" wire:click="delete_comment({{ $comment->id }})"> X</button>--}}
        <p class=" text-info text-right">{{ $comment->created_at->diffForHumans() }}</p>
    </div>
@empty

@endforelse


