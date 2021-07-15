@extends('admin.layouts.app')
@section('page') Posts @endsection

@section('content')
<div class="content">
    {{-- CKE editor link --}}
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

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
                            <form action="" method="POST" accept="" accept-charset="utf-8" class=" border-2  rounded p-3" >
                            <h3 class="text-capitalize text-info p-2  mb-3 text-center text-lg rounded" >{{ __("Add New category") }}</h3>
                            <div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control" name="Title"  placeholder="Post Title">
                                @error('title') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>


                            <div class="form-group" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"  x-on:livewire-upload-progress="progress = $event.detail.progress">
                                <label class="form-control-label">Post Image</label>
                                    <input type="file"  class="form-control">
                                @error('image') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>  @enderror
                                <br>
                                <div wire:loading wire:target="image">{{ __('Uploading...') }}</div><br>
                              <br>
                              <div x-show="isUploading" style="width: 100%">
                                  <progress class="my-1 progress-bar" role="progressbar" max="100" x-bind:value="progress"></progress>
                              </div>
                              @if ($image)
                              {{ __('Preview: ') }}<br>
                                  <img width="20%" height="20%" src="{{ $image->temporaryUrl() }}">
                              @endif
{{--
                              @if ($c_image)
                              {{ __('Current image Preview: ') }}<br>
                                  <img width="20%" height="20%" src="{{ env('APP_URL')."storage/".$c_image }}">
                              @endif --}}
                            </div>


                            <div class="form-group">
                                <label for="cat">Category</label>
                                <select class="form-control" name="cat" id=""   "category">
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @empty
                                        <option>{{ __('Null') }}</option>
                                    @endforelse
                                </select>
                                @error('category') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="content">Post Content</label>
                                <textarea name="CKEeditor" id="CKEeditor" rows="10" cols="80" class="form-control"  "content"  placeholder="Post Content"></textarea>
                                @error('content') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>
                                <div class="form-group ">
                                    <input type="submit" class="btn btn-primary " value="{{ $button_text }}">
                                </div>
                                <script>
                                    CKEDITOR.replace( 'CKEeditor' );
                                </script>
                            </form>

                            <hr>

                            <h3 class="text-capitalize text-lg text-success text-center rounded" >{{ _("All  categories") }}</h3>
                            <div class="content table-responsive table-full-width">
                            {{-- <table  class="table table-hover table-striped"  style="" id="">
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
                                                <button wire:click="edit({{ $post->id }})" class="btn " style="background-color:chartreuse;color:blue;border:none;padding:5px 10px;font-size:3rem;border-radius:40px;"><i class="pe-7s-pen"></i></button>
                                                <button wire:click="delete({{ $post->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn " style="background-color:rgb(157, 160, 14);color:rgb(255, 0, 0);border:none;padding:5px 10px;font-size:3rem;border-radius:40px;"><i class="pe-7s-trash"></i></button>
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
                             </table> --}}
                            </div>
                        </div>
             </div>
        </div>

        </div>
    </div>

</div>


@endsection
