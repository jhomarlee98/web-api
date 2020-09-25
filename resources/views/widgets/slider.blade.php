@if (!empty($sliders))
<div id="sliders" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @if(!empty($sliders_count))
  	  @for ($i = 0; $i < $sliders_count; $i++)
        <li data-target="#sliders" data-slide-to="{{ $i }}" @if($i ==0) class="active" @endif ></li>
      @endfor
    @endif
  </ol>
  <div class="carousel-inner bg-banner">
    @foreach($sliders as $slider)
          @if($slider->state=='active')
              <div class="carousel-item d-flex  @if($slider->position=='1') active @endif">
                  <div class="container">
                      <div class="row justify-content-around align-items-center space-ned">
                          <div class="col-lg-5 col-md-7 col-sm-12">
                              <h5 class="text-warning"> {{$slider->title}}</h5>
                              <p class="text-pink"> {{$slider->description}} </p>
                              <a href="{{$slider->url}}" class="btn btn-light btn-sm" target="blank"> {{$slider->btn_title}} </a>
                          </div>
                          <div class="col-lg-6 col-md-7 col-sm-12">
                              <img src="{{asset($slider->image)}}" class="d-block w-100 slider-image" alt="{{$slider->nick}}">
                          </div>
                      </div>
                  </div>
              </div>
          @endif
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
