@if (!empty($specialities))
<div id="sliders" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @if(!empty($speciality_count))
            @for ($i = 0; $i < $speciality_count; $i++)
                <li data-target="#sliders" data-slide-to="{{ $i }}" @if($i ==0) class="active" @endif ></li>
            @endfor
        @endif
    </ol>
    <div class="carousel-inner bg-banner">
        {{$active=0}}
        @foreach($specialities as $speciality)
            {{$active++}}
            <div class="carousel-item @if ($active==1) active @endif ">
                <div class="container">
                    <div class="row justify-content-around align-items-center space-ned">
                        <div class="col-lg-5 col-md-7 col-sm-12">
                            <h5 class="text-warning"> {{$speciality->name}}</h5>
                            <h6 class="text-warning"><i class="fas fa-graduation-cap"></i> {{$speciality->number}} cursos</h6>
                            <h6 class="text-success"><i class="fas fa-money-bill-wave-alt"></i> <span class="tached">S/{{$speciality->price}}</span> - S/{{$speciality->price-($speciality->price*0.15)}}</h6>
                            <a href="{{$speciality->url}}" class="btn btn-light btn-sm" target="blank"> Inscribirse</a>
                        </div>
                        <div class="col-lg-6 col-md-7 col-sm-12">
                            <img src="{{asset($speciality->image)}}" class="d-block w-100 slider-image" alt="{{$speciality->nick}}">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#sliders" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#sliders" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endif
