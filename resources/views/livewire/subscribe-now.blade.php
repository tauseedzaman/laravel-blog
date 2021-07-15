<div class="form-group ">

    <label for="">Subscribe for newslatter</label> <br>
    <form wire:submit.prevent="add_email" >
        <input type="email" class="form-control" wire:model="email"
               placeholder="emaxple@test.com">
    </form>
    @if (session()->has('message'))

        <div class="alert alert-success"  >
            <p  class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </p>
            {{ session('message') }}
        </div>
    @endif
</div>
