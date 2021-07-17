@extends('layouts.app')
@section('content')

    @if($data)
        <div class="col-xl-6 col-md-12 w-full col-sm-12">
            <h1 class="text-primary text-center text-capitalize py-3 shadow rounded bg-light"><b> About Us</b></h1>
            <div class="about_image">
                <img
                    src="storage/{{ $data->logo_path }}"
                    alt="">
            </div>
            <h2>{{ $data->title  }}</h2>
            <p>
                {{ $data->about  }}</p>
            <br>
            <h3>WebMaster : <br>Mail {{ $data->business_email    }} <br><br> Phone {{ $data->business_phone }}</h3>
        </div>
    @else

        <div class="col-xl-6 col-md-12 w-full col-sm-12">
            <h1 class="text-primary text-center text-capitalize py-3 shadow rounded bg-light"><b> About Us</b></h1>
            <div class="about_image">
                <img
                    src="images/h1-single-img-2.png"
                    alt="">
            </div>
            <p>
                Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Non accusamus, eaque odio cum
                voluptatibus id excepturi est, culpa minima
                alias dolor, tempora hic quia explicabo fuga
                corrupti voluptas doloremque praesentium?
                Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Non accusamus, eaque odio cum
                voluptatibus id excepturi est, culpa minima
                alias dolor, tempora hic quia explicabo fuga
                corrupti voluptas doloremque praesentium?
                Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Non accusamus, eaque odio cum
                voluptatibus id excepturi est, culpa minima
                alias dolor, tempora hic quia explicabo fuga
                corrupti voluptas doloremque praesentium?
                Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Non accusamus, eaque odio cum
                voluptatibus id excepturi est, culpa minima
                alias dolor, tempora hic quia explicabo fuga
                corrupti voluptas doloremque praesentium?
                Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Non accusamus, eaque odio cum
                voluptatibus id excepturi est, culpa minima
                alias dolor, tempora hic quia explicabo fuga
                corrupti voluptas doloremque praesentium?
                Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Non accusamus, eaque odio cum
                voluptatibus id excepturi est, culpa minima
                alias dolor, tempora hic quia explicabo fuga
                corrupti voluptas doloremque praesentium?
            </p>
        </div>

    @endif
@endsection
