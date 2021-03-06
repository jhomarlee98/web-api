@if(!empty($specialities))
    <section id="specialities" class="specialities container-md">
        <div class="row justify-content-around align-self-stretch">
            @foreach($specialities as $speciality)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-11 ">
                    <div class="speciality-container">
                        <div class="container-img-speciality ">
                            <img class="image-speciality" src="{{asset($speciality->image)}}" alt="{{$speciality->nick}}">
                        </div>
                        <div class="speciality-body ">
                            <h6 class="title-speciality ">{{$speciality->name}}</h6>
                            <p class="text-content text-left">
                                {{$speciality->description}}
                            </p>
                            <a href="{{route('specialities.list',$speciality->nick)}}" class="btn btn-sm btn-outline-danger" role="button">Ver detalle</a>
                        </div>
                        <div class="card-footer speciality-footer text-muted ">
                            <h6 class="text-danger text-sm">
                                <span class="tached">S/{{$speciality->price}}</span> - S/{{$speciality->price-($speciality->price*0.15)}}
                            </h6>
                            <h6 class="text-blue text-sm">
                                <i class="{{$speciality->icon}}"></i> especialidad - {{$speciality->number}} cursos
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12">
                <a class="text-center" href="{{route('specialities.list',null)}}">
                    <h6>
                        Ver todas las especialidades
                    </h6>
                    <h6><i class="fas fa-angle-double-down"></i></h6>
                </a>
            </div>
        </div>
    </section>
@endif
