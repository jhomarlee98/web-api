@if(!empty ($curses))
<section id="curses" class="curses container-md">
	<div class="row justify-content-center">
		<h4>ESPECIALIDADES</h4>
	</div>
	<div class="row justify-content-center align-items-center">
		@foreach($curses as $curse)
			<div class="col-12 col-sm-12 col-md-8 col-lg-4 col-xl-3 curse-content">
				<div class="card text-left">
					<img src="{{$curse->image}}" class="card-img-top curse-img w-100" alt="{{$curse->nick}}">
  					<div class="card-body">
    					<h6 class="card-title text-uppercase">{{$curse->name}}</h6>
    					<p class="card-text curse-text"> {{$curse->description}} </p>
    					<a href="{{$curse->pdf}}" class="btn btn-danger" target="_blank" >Temario</a>
  					</div>
  					<div class="card-footer text-muted">
                        <h6 class="text-danger ">
                            <span class="tached"> S/{{$curse->price}}</span> - S/{{$curse->price-($curse->price*0.2)}}

                        </h6>
                        <h6 class="text-blue" ><i class="{{$curse->icon}}"></i> {{$curse->tipe}} | <i class="fas fa-hourglass-start"></i> {{$curse->time}} hrs. </h6>
  					</div>
				</div>
			</div>
		@endforeach
	</div>
</section>
@endif
