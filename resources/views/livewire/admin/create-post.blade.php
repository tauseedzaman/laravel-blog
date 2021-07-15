    <div class="content">
        {{-- CKE editor link --}}
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <p class="close" data-dismiss="alert" aria-label="Close">
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
                <a href="{{ route('create_post') }}" class="btn btn-primary ">Add Post</a>
                <h3 class="text-capitalize text-lg text-success text-center rounded">{{ _('All  Posts') }}</h3>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped" style="" id="">
                        <thead>
                            <tr class="text-primary bg-info">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Dated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td class="text-right">
                                        <button class="btn " wire:click.prevent="delete({{ $post->id }})"
                                            onclick="return confirm('Are You Sure')"
                                            style="background-color:rgb(157, 160, 14);color:rgb(255, 0, 0);border:none;padding:5px 10px;font-size:3rem;border-radius:40px;"><i
                                                class="pe-7s-trash"></i></button>
                                        <a href="{{ route('admin.edit_post',$post->id) }}" class="btn "
                                            style="background-color:chartreuse;color:blue;border:none;padding:5px 10px;font-size:3rem;border-radius:40px;"><i
                                                class="pe-7s-pen"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    </div>
