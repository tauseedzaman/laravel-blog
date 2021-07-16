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

            <h3 class="text-capitalize text-lg text-success text-center rounded" >{{config('app.name').' '. __("Users") }}</h3>
            <div class="content table-responsive table-full-width">
                <table  class="table table-hover table-striped"  style="" id="">
                    <thead>
                    <tr class="text-primary bg-info">
                        <th>ID</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('d / m / y') }}</td>
                            <td>{{ $user->is_admin ? "admin" : "client" }}</td>
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
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>

