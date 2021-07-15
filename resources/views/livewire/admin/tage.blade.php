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
                            <form accept-charset="utf-8" class=" border-2  rounded p-3" wire:submit.prevent="add_tage()">
                            <h3 class="text-capitalize text-info p-2  mb-3 text-center text-lg rounded" >{{ __("Add New Tage") }}</h3>
                            <div class="form-group">
                                <label for="name">Tage Name</label>
                                <input type="text" class="form-control" name="name" wire:model.lazy="name" placeholder="Tage Name">
                                @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>
                                <div class="form-group ">
                                    <input type="submit" class="btn btn-primary " value="{{ $button_text }}">
                                </div>
                            </form><hr>

                            <h3 class="text-capitalize text-lg text-success text-center rounded" >{{ _("All  Tages") }}</h3>
                            <div class="content table-responsive table-full-width">
                            <table  class="table table-hover table-striped"  style="" id="">
                                <thead>
                                    <tr class="text-primary bg-info">
                                        <th>ID</th>
                                        <th>name</th>
                                        <th>Dated</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($Tages as $Tage)
                                        <tr>
                                            <td>{{ $Tage->id }}</td>
                                            <td>{{ $Tage->name }}</td>
                                            <td>{{ $Tage->created_at }}</td>
                                            <td class="text-right">
                                                <button wire:click="edit({{ $Tage->id }})" class="btn " style="background-color:chartreuse;color:blue;border:none;padding:5px 10px;font-size:3rem;border-radius:40px;"><i class="pe-7s-pen"></i></button>
                                                <button wire:click="delete({{ $Tage->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn " style="background-color:rgb(157, 160, 14);color:rgb(255, 0, 0);border:none;padding:5px 10px;font-size:3rem;border-radius:40px;"><i class="pe-7s-trash"></i></button>
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
                             {{ $Tages->links() }}
                            </div>
                        </div>
             </div>
        </div>

        </div>
    </div>
</div>

