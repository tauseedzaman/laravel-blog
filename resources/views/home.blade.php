@extends('layouts.app')

@section('content')

        <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-md-12 col-sm-12">
                        <div class="main_content">
                            <div class="custom_navbar">
                                <a href="" class="burger-btn" id="open"><button
                                        class="btn btn-primary"><i
                                            class="fas fa-bars"></i></button></a>
                            </div>
                            <div class="row mt-3">

                            @livewire('posts')
                            </div>
                        </div>
                    </div>
                  @endsection
