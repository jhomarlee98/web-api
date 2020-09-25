@if(!empty($services))
    <section id="servicios" class="servicios container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 ">
                <div id="ServicesIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @if(!empty($services_count))
                            @for ($i = 0; $i < $services_count; $i++)
                                <li data-target="#ServicesIndicators" data-slide-to="{{ $i }}" @if($i ==0) class="active" @endif ></li>
                            @endfor
                        @endif
                    </ol>
                    <div class="carousel-inner">
                        @foreach($services as $service)
                            <div class="carousel-item @if($service->position=='1') active @endif">
                                <div class="row justify-content-center align-items-center ">
                                    <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                                        <div class="jumbotron jumbo-serv bg-banner">
                                            <div class="">
                                                <img class="image-service" src="{{ asset($service->image) }}" alt="{{$service->nick}}}">
                                            </div>
                                            <div class="content-jumbo">
                                                <h2 class="text-white-50">{{$service->name}}</h2>
                                                <p class="lead text-white">{{$service->description}}</p>
                                                <hr class="my-4 bg-light">
                                                <h6 class="text-white-50"><i class="{{$service->icon}}"></i></h6>
                                                <a class="btn btn-outline-light btn-sm" href="{{$service->url}}" target="_blank" role="button">Ver Detalle</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
