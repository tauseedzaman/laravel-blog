{{-- @extends('admin.layouts.app') --}}
{{-- @section('content') --}}
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                @if (session()->has('message'))

                    <div class="alert alert-success"  >
                        <p  class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </p>
                        {{ session('message') }}
                    </div>
            </div>
            @endif
        </div>
    </div>
    <div class="row p-5" style="margin: 10px">
        <div class="col p-5">
            <div class="text-info" wire:loading>Loading..</div>
            <hr>

            <h3 class="text-capitalize text-lg text-success text-center rounded" >{{config('app.name').' '. __("Posts Comments") }}</h3>
            <div class="content table-responsive table-full-width">
                <table  class="table table-hover table-striped"  style="" id="">
                    <thead>
                    <tr class="text-primary bg-info">
                        <th>ID</th>
                        <th>comment</th>
                        <th>post id</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->comment_content }}</td>
                            <td>{{ $comment->posts_id  }}</td>
                            <td>{{ $comment->created_at->format('d / m / y') }}</td>
                            <td class="text-right">
                                <button wire:click="delete({{ $comment->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn " style="background-color:rgb(157, 160, 14);color:rgb(255, 0, 0);border:none;padding:5px 10px;font-size:3rem;border-radius:40px;"><i class="pe-7s-trash"></i></button>
                            </td>
                        </tr>
                    @empty
                        <td class="text-warning">{{ __('Null') }}</td>
                        <td class="text-warning">{{ __('Null') }}</td>
                        <td class="text-warning">{{ __('Null') }}</td>
                        <td class="text-warning">{{ __('Null') }}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $comments->links() }}
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>

