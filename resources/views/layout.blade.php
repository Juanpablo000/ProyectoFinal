<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="/css/main.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/css/lightbox.css">
	<!-- Custom Theme files -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

	<!-- header -->
<div class="banner banner2">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
					<ul>
						<li><a href="mailto:@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info(at)example.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+1)000 123 456789</li>
					</ul>
			  </div>
		 </div>
		 <div class="banner_head_top">
			  <div class="logo">
					<h1><a href="index.html">Portal  <span>de </span>Ciencia</a></h1>
			 </div>	
			 <div class="top-menu">	 
			     <div class="content white">
					 <nav class="navbar navbar-default">
						 <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				
						 </div>
						 <!--/navbar header-->		
						 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav">
								 <li><a href="/">Home</a></li>
								 <li><a href="/acerca">Acerca de</a></li>				
								 <li><a href="/autor">Autor</a></li>
								 <li><a href="/contacto">Contacto</a></li>
							 </ul>
							</div>
						  <!--/navbar collapse-->
					 </nav>
					  <!--/navbar-->
				 </div>
					 <div class="clearfix"></div>
			  </div>
				 <div class="clearfix"></div>
		  </div>
	 </div>	 
</div>
@yield('contenido')


<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-6 news-ltr">
				 <h4>Suscribete</h4>
				 <p>Ingresa tu email para obtener las ultimas noticias</p>
				 <form action="#" method="post">					 
					<input type="text" class="text" name="email" placeholder="Enter Email" required="" />
					 <input type="submit" value="Suscribirse">
					 <div class="clearfix"></div>
				 </form>			 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Categorias</h3>
				 <ul class="ftr-list">
					 <li><a href="#">BIOLOGÍA</a></li>
					 <li><a href="#">CEREBRO</a></li>
					 <li><a href="#">ESPACIO</a></li>
					 <li><a href="#">FÍSICA</a></li>
					 <li><a href="#">MEDIO AMBIENTE</a></li>
				 </ul>							 
			 </div>	
			 <div class="col-md-3 ftr-grid">
				 <h3>Siguenos</h3>
				 <ul class="ftr-list">
					 <li><a href="https://www.youtube.com/">youtube</a></li>
					 <li><a href="https://twitter.com/home">twitter</a></li>
					 <li><a href="https://facebook.com/">facebook</a></li>
				 </ul>				 
			 </div>			 	
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>

<!---->
<div class="copywrite">
	 <div class="container">
		 <p> © 2020 Portal de Ciencia. Todos los derechos reservados</p>
	 </div>
</div>
<!---->
@yield('footer')
</body>
</html>