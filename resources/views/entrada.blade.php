@extends('layout')

@section('contenido')
@section('titulo','Entrada')	

<style>
  h2,p {
  padding-bottom: 70px;
}
 img{
  padding-bottom: 50px;
 }
</style>
<div class="contact">
		<div class="container">
				<h2>{{$noticia->descripcion}}</h2>
				<p>{{$noticia->contenido}}</p>
				<img src="{{$noticia->imagen}}" />

				<div class="clearfix"></div>
				<a href="/">Volver</a>
		</div>
</div>

@endsection('contenido')
@section('footer')	
@endsection('footer')