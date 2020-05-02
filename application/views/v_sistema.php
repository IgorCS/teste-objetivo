
<?php defined('BASEPATH') OR exit('No direct script access allowed');?><!DOCTYPE html>
<html lang="pt-br">

<head>

<title>Teste Seletivo - Objetivo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content=""> 

<!-- Bootstrap core CSS -->
<link href="assets/initial/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
<link href="assets/initial/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/initial/css/resume.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Igor Carvalho Soares</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/initial/img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
      	<li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#cadastro">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#manual">Manual do teste</a>
        </li>        
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

  	<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="cadastro">  
	  	<div class="w-100">
		  	<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">      
		        <div class="resume-content">
		        <h3 class="mb-0">Teste Seletivo</h3>												
					<div class="alert alert-success">
						<strong>Teste seletivo de 2021.</strong> <br>
						Seu cadastro para o teste seletivo do Colégio Objetivo está disponível. Realize o cadastro através do link abaixo:
						<br>						
						<?= anchor('cadastro/create', 'Cadastrar'); ?>					
					</div>				
					<div class="alert alert-info">
						<strong>Área administrativa - Colégio Objetivo </strong> <br>
						<?= anchor('home/acesso', 'Acessar'); ?>					
					</div>				
			    </div>
			</div>
	 	</div>     
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="manual">
	    <div class="w-100">        
	        <div class="subheading mb-5">IgorCS - 
	            <a href="mailto:igorweb08@gmail.com">igorweb08@gmail.com - </a>
	            <i class="fab fa-whatsapp"></i>
	            <i class="fas fa-phone"></i> (86) 98874-4745
	        </div>
	        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
	         	<div class="resume-content">
		    		<h3 class="mb-0">Opção de cadastro do candidato e acesso administrativo</h3>	          
		            <div class="subheading mb-3"></div>
		            <p>• Na aba cadastrar do sistema possui dois links o primeiro é referente ao candidato para se increver no teste, já na outra aba é para o acesso administrativo da instituição com as opções de listar, alterar e excluir.</p> 	           

		            <h3 class="mb-0">Validações</h3>
		            <p>• No cadastro referente ao candidato ,caso o mesmo insira um email inválido ou email já cadastrado o sistema irá alerta-lo ,caso seja um administrador ele poderá alterar mesmo já com e-mail existente.</p>   
		            <p>• No formulário todos os campos são obrigatórios</p>             
	          	</div>
	            <div class="resume-date text-md-right">
		            <span class="text-primary"></span>
	            </div>
	        </div>
	        <div class="social-icons">
	          	<a href="https://www.linkedin.com/in/igor-carvalho-51686551/" target="blank">
	            	<i class="fab fa-linkedin-in"></i>
	          	</a>
	          	<a href="https://github.com/IgorCS" target="blank">
	           	 	<i class="fab fa-github"></i>
	          	</a>          
	        </div>
        </div>
    </section>
    
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/initial/vendor/jquery/jquery.min.js"></script>
  <script src="assets/initial/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/initial/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="assets/initial/js/resume.min.js"></script>

</body>

</html>
