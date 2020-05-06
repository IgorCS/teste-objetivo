<?php defined('BASEPATH') OR exit('No direct script access allowed');?><!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Colégio Objetivo - Teste Seletivo 2020</title> 
  <link href="assets/initial/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  
  <link href="assets/initial/css/scrolling-nav.css" rel="stylesheet">
</head>

<body id="page-top">
  
<nav style="" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      	<a class="navbar-brand js-scroll-trigger" href="#page-top">
	      	<span class="d-none d-lg-block">
	        	<img class="img-fluid img-profile rounded mx-auto mb-2" src="assets/initial/img/icon/images.png" alt="">
	      	</span>
      	</a>
      	<span class="d-none d-lg-block">
        	<img class="img-fluid img-profile mx-auto mb-2" src="#" alt="">
      	</span>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
     	</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
	        <ul class="navbar-nav ml-auto">
	         	<li class="nav-item">
	            	<a style="font-size: 22px; color: white;" class="nav-link js-scroll-trigger" href="#about">Sobre</a>
	          	</li>
	          	<li class="nav-item">
	            	<a style="font-size: 22px; color: white;" class="nav-link js-scroll-trigger" href="#teste-seletivo">Teste Seletivo</a>
	          	</li>
	          	<li class="nav-item">
	            	<a style="font-size: 22px; color: white;" class="nav-link js-scroll-trigger" href="#contact">Contact</a>
	          	</li>
	        </ul>
	    </div>
    </div>
</nav>
  
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
		<div class="carousel-item active">
		  	<img class="d-block w-100" src="" alt="slide one">
		</div>
		<div class="carousel-item">
		  	<img class="d-block w-100" src="" alt="slide two">
		</div>
		<div class="carousel-item">
		  	<img class="d-block w-100" src="." alt="slide tree">
		</div>
    </div>
  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
    </a>
</div>

<header class="">
    
    <div id="demo" class="carousel slide" data-ride="carousel">		 
	  	<ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		</ul>		  
		 
		<div class="carousel-inner">
		    <div class="carousel-item active">
		    	<img src="assets/initial/img/objetivo-1.jpg" alt="Los Angeles" width="1100" height="500">
		    </div>
		    <div class="carousel-item">
		    	<img src="assets/initial/img/objetivo-2.jpg" alt="Chicago" width="1100" height="500">
		    </div>
		    <div class="carousel-item">
		    	<img src="assets/initial/img/objetivo-3.jpg" alt="New York" width="1100" height="500">
		    </div>
		</div>		  
		  
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		</a>

		<a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		</a>
	</div>
</header>

<section id="about">
	<div class="container">
  		<div class="row">
    		<div class="col-lg-8 mx-auto">
	      		<h2>Sobre o colégio objetivo</h2>
	      		<p class="lead">Centro Educacional Objetivo, Colégio Objetivo ou Curso Objetivo é uma instituição de ensino brasileira idealizada, criada e implementada pelos estudantes de Medicina João Carlos Di Genio e Dráuzio Varella e os médicos Roger Patti e Tadasi Itto. O Colégio Objetivo, teve origem na Cidade de São Paulo, em 1971.</p>		     
    		</div>
  		</div>
	</div>
</section>

<section id="teste-seletivo" class="bg-light">
	<div class="container">
	  	<div class="row">
	    	<div class="col-lg-4 mx-auto">	    		
	    		<div class="alert alert-success">
					<strong>Ensino infantil</strong><br>											
					<?= anchor('cadastro/create', 'Cadastrar'); ?>					
				</div>												
			</div>
			<div class="col-lg-4 mx-auto">	    		
	    		<div class="alert alert-success">
					<strong>Ensino fundamental</strong><br>										
					<?= anchor('cadastro/create', 'Cadastrar'); ?>					
				</div>												
			</div>
			<div class="col-lg-4 mx-auto">	    		
	    		<div class="alert alert-success">
					<strong>Ensino médio</strong><br>										
					<?= anchor('cadastro/create', 'Cadastrar'); ?>					
				</div>												
			</div>			    			    
	  	</div>
  	</div>
  	<div class="container">
  		<div class="row">
		  	<div class="col-lg-12 mx-auto">	    	
				<div class="alert alert-info">
					<strong>Área administrativa - Colégio Objetivo </strong><br>
					<?= anchor('home/acesso', 'Acessar'); ?>					
				</div>	
			</div>
		</div>	
	</div>
</section>

<section id="contact">
	<div class="container">
	  <div class="row">
	    <div class="col-lg-8 mx-auto">
	      	<h2>Contact us</h2>
	      	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
	    </div>
	  </div>
	</div>
</section>


<footer class="py-5 bg-dark">  	
    <div class="container">
       <p class="m-0 text-center text-white"><strong>Faça download do aplicativo oficial do Objetivo</strong><br>
            <a href="" title="Aplicativo oficial do Objetivo na Play Store do Google" target="_blank" rel="noreferrer"><img src="assets/initial/img/icon/icone_google_play.png" alt="Aplicativo oficial do Objetivo na Play Store do Google"></a> <a href="" title="Aplicativo oficial do Objetivo na App Store da Apple" target="_blank" rel="noreferrer"><img src="assets/initial/img/icon/icone_app_store.png" alt="Aplicativo oficial do Objetivo na App Store da Apple">
            </a>
        </p>    
	    <div class="container">
			<p class="m-0 text-center text-white">Copyright © 1997-2020 Colégio Objetivo. Todos os direitos reservados.</p>
		</div>	    
    </div> 
</footer>
<style>
.carousel-inner img {
  width: 100%;
  height: 100%;
}
</style>
<script src="assets/initial/vendor/jquery/jquery.min.js"></script>
<script src="assets/initial/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="assets/initial/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="assets/initial/js/scrolling-nav.js"></script> 

</body>
</html>
