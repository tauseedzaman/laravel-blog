@extends('admin.layouts.create_post_master')
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
                            <form action="{{ route('admin.update_post',$post->id    ) }}" method="POST" enctype="multipart/form-data" accept-charset="utf-8" class=" border-2  rounded p-3" >
                            @csrf
                                <h3 class="text-capitalize text-info p-2  mb-3 text-center text-lg rounded" >{{ __("Edit Post") }}</h3>
                            <div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}" placeholder="Post Title">
                                @error('title') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>
                            <input type="hidden" name="id" value="{{ $post->id }}" id="">


                            <div class="form-group" >
                                <label class="form-control-label">Post Image</label>
                                    <input type="file" name="image"  value="{{ $post->image }}"  class="form-control">
                                @error('image') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>  @enderror
                                <br>
                                Current Image <br>
                                <img src="{{ config('app.url').'storage/'.$post->image }}" alt="">
                              <br>
                            </div>

                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" name="category" id="" value="{{ old('category') }}"  >
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}" @if($post->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                    @empty
                                        <option>{{ __('Null') }}</option>
                                    @endforelse
                                </select>
                                @error('category') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="Published">Publish</label><br>
                                <select class="form-control" name="publish" id="" value="{{ old('publish') }}"  >
                                    <option  @if ($post->published) selected @endif value="publish">Publish</option>
                                    <option @if(!$post->published) selected @endif value="Draped">Draped</option>
                                </select>
                                @error('publish') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>
{{--
                            <div class="form-group">
                                <label for="category">Tages</label>
                                <select class="form-control" name="category" id="" value="{{ old('category') }}"  >
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @empty
                                        <option>{{ __('Null') }}</option>
                                    @endforelse
                                </select>
                                @error('category') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div> --}}

                            <div class="form-group">
                                <label for="content">Post Content</label>
                                <textarea name="content" id="CKEeditor" rows="10" cols="80" value="{{ old('content') }}" class="form-control"   placeholder="Post Content">{{ $post->content }}</textarea>
                                @error('content') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                            </div>
                                <div class="form-group ">
                                    <input type="submit" class="btn btn-primary " value="{{ __("Submit") }}">
                                </div>
                                <script>
                                    // CKEDITOR.replace( '' );
                                    CKEDITOR.replace('CKEeditor', {
                                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                        filebrowserUploadMethod: 'form'
                                    });
                                </script>
                            </form>
                        </div>
             </div>
        </div>

        </div>
    </div>

</div>


@endsection
