<section class="container-md" >
    @if(!empty($specialities))
        <div class="row justify-content-around">
            @foreach($specialities as $speciality)
                <div class="col-12">
                    <h3 class="text-left">
                        {{$speciality->name}}
                    </h3>
                    <p class="text-justify">
                        {{$speciality->description}}
                    </p>
                </div>
            @endforeach
        </div>
    @endif

    @if(!empty($curses))
        <div class="row justify-content-center">
            @foreach($curses as $curse)
                <div class="col-md-6 col-12">
                    <p class="curse-speciality-title">
                        <a class="btn btn-primary btn-block" data-toggle="collapse" href="#Curse_{{$curse->nick}}" role="button" aria-expanded="false" aria-controls="Curse_{{$curse->nick}}">
                            {{$curse->name}}
                        </a>
                    </p>
                    <div class="collapse" id="Curse_{{$curse->nick}}">
                        <div class="card card-body curse-speciality">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <h6>{{$curse->name}}</h6>
                                    <img src="{{asset($curse->image)}}" alt="{{$curse->nick}}" width="100%">
                                </div>
                                <div class="col-7">
                                    <p class="text-curse-speciality text-sm">{{$curse->description}}</p>
                                    <span class="text-sm text-success">
                                        <i class="{{$curse->icon}}"></i>
                                        {{$curse->tipe}}
                                    </span>|
                                    <span class="text-sm text-success">
                                        <i class="fas fa-clock"></i>
                                        {{$curse->time}} hrs.
                                    </span>|
                                    <span class="text-sm text-success">
                                        <i class="fas fa-money-bill-wave-alt"></i>
                                        S/{{$curse->price}}.
                                    </span>
                                </div>
                                <div class="col-10">
                                    @include('widgets.social')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</section>

