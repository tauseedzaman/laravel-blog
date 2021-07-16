
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
    <style>
        .admins_dashboard{
            padding: 10px;
            border:2px solid cyan;
            border-radius: 10px;
            padding-left: 30px;
        }
    </style>
    <div class="row p-5" style="margin: 10px">
        <div class="col p-5">
            <div class="text-info" wire:loading>Loading..</div>
                <h3 class="text-capitalize text-info p-2  mb-3 text-center text-lg rounded" >{{ config('app.name').' '. __("Dashboard") }}</h3>
            <h1 class="bg-primary text-capitalize text-info  admins_dashboard" >All Admins: <span class="text-success  " >{{ $admins }}</span></h1>
            <h1 class="bg-primary text-capitalize text-info admins_dashboard">All users: <span class="text-success ">{{ $users }}</span></h1>
            <h1 class="bg-primary text-capitalize text-info  admins_dashboard">All Posts: <span class="text-success ">{{ $posts }}</span></h1>
            <h1 class="bg-primary text-capitalize text-info  admins_dashboard">All Comments: <span class="text-success ">{{ $comments }}</span></h1>
            <h1 class="bg-primary text-capitalize text-info  admins_dashboard">All Categories: <span class="text-success ">{{ $categories }}</span></h1>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>

