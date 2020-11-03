@extends('layout')

@section('contenido')	
@section('titulo','Acerca')


<div class="about"> 
		<div class="container">
			<h2>Acerca</h2>
			<div class="about-text">
				<div class="col-md-6 about-text-left">
					<img src="img/g9.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-6 about-text-right">
					<h4>PORTAL DE CIENCIA</h4>
					<p>Las noticias más destacadas del mundo de la ciencia</p>
					<p>El portal publica noticias científicas fiables y rigurosas con el fin de informar y entretener a cientos de miles de lectores cada mes. Nuestros experimentados redactores informan con su estilo sobre temas científicos de la actualidad, así como sobre nuevos descubrimientos, misterios y respuestas a las más diversas preguntas.</p>
					<p>Así mismo, los invitamos también a visitar el canal de Youtube para un resumen semanal en formato noticiario.</p>
					<ul>
						<li><a href="https://www.youtube.com/">youtube</a></li>
						<li><a href="https://twitter.com/home">twitter</a></li>
						<li><a href="https://facebook.com/">facebook</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
	    </div>
</div>
@endsection('contenido')
@section('footer')	
@endsection('footer')