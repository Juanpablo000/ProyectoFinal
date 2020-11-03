@extends('layout')

@section('contenido')	
@section('titulo','Home')
<!---->
<div class="welcome">
	 <div class="container">
		 <div class="welcome-info">
				<h3>Bienvenido</h3>
				<h4>Conocimiento sin limites</h4>
				<p>Aquí encontrarás todas las noticias y las últimas novedades en ciencia. En Portal de Ciencia recopilamos cada día y minuto a minuto toda la actualidad del mundo de la ciencia para que siempre estés al corriente de la última actualización o contenido relacionado con multiples temas de interes.</p>
	     </div>
	 </div>
</div>

<!---->  
<div class="content">
	 <div class="container">


	 	@foreach ($noticias as $noticia)
		  <div class="col-md-8 content-left">
			 <div class="information">
				 <h4>{{$noticia->titulo}}</h4>
				 <div class="information_grids">
					 <div class="info">					 
						 <p>{{$noticia->descripcion}}</p>
						 <a href="/entrada/{{$noticia->id}}">Leer más</a>
					 </div>
					 <div class="info-pic">	
						 <img src="{{$noticia->imagen}}" class="img-responsive" alt=""/>
					 </div>
					 <div class="clearfix"></div>
			      </div>				 
			 </div>
			 <div class="clearfix"></div>
		   </div>
		  @endforeach
		  
	 </div>
</div>
@endsection('contenido')
@section('footer')	
@endsection('footer')