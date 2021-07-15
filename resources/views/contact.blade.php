@extends('layouts.app')
@section('content')
<div class="col-xl-6 col-md-12  col-sm-12">
                            <h1 class="text-primary mx-3 text-center text-capitalize py-3 shadow rounded bg-light"><b> contact {{ config('app.name')  }} webmaster</b></h1>
                          <form action="" class="mx-3">
                                <div class="form-group">
                                    <label for="name">Enter your Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="name">Enter your Email</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>

                                <div class="form-group">
                                    <label for="">Enter your Message</label>
                                    <textarea class="form-control"
                                        name="message"
                                        id="message"
                                        rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn
                                        btn-primary">Message</button>
                                </div>
                            </form>
                    </div>
        {{-- 
          <form action="">
                                <div class="form-group">
                                    <label for="name">Enter your Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="name">Enter your Email</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>

                                <div class="form-group">
                                    <label for="">Enter your Message</label>
                                    <textarea class="form-control"
                                        name="message"
                                        id="message"
                                        rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn
                                        btn-primary">Message</button>
                                </div>
                            </form> --}}
@endsection