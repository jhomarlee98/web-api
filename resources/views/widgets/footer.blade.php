<footer class="container-fluid bg-institucional text-light ">
	<div class="row ">
		<hr class="footer-divider col-lg-10"/>
	</div>
	<div class="row justify-content-between align-items-center">
		<div class="col-lg-3 col-12  text-center">
			<a class="col-12 " href="{{asset('')}}" >
				<img class="logo logo-sistemasuni logo-footer" src="{{ asset('resources/images/sistemasuniblanco.png') }}" alt="logo sistemasuni color blanco fondo transparente">
			</a>
			<div class="col-12 icon-social">
				@include('widgets.social')
			</div>
		</div>
		<div class="col-lg-6 col-12 text-center">
			<span>Av. Túpac Amaru 1000 - Rimac Alt. Puerta 5 UNI</span>
			<p>Paradero honorio delgado del metropolitano.</p>
		</div>
		<div class="col-lg-3 col-12 text-left">
            <ul>
                <li>
                    <i class="fas fa-envelope-open-text"></i> informes@sistemasuni.edu.pe
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i> 200-90-60
                    <ol>
                        <li>Informes</li>
                        <li>Certificados</li>
                        <li>Administración</li>
                    </ol>
                </li>
                <li>
                    <i class="fas fa-mobile-alt"></i> 939-364-947  |  <i class="fas fa-mobile-alt"></i> 939-364-979
                </li>
            </ul>
		</div>
	</div>
	<div class="row justify-content-center align-items-center">
		<div class="col-10 text-center">
			<hr class="footer-divider col-11 col-md-5"/>
			<p class="copy">
				Sistemas UNI {{date("Y")}} &copy; Todos los derechos reservados.
			</p>
		</div>
	</div>
</footer>
