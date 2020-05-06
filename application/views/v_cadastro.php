<?php
defined('BASEPATH') OR exit('No direct script access allowed');?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $titulo ?> - Teste Seletivo</title>
	<?= link_tag('assets/bootstrap/css/bootstrap.min.css') ?>
	<?= link_tag('assets/bootstrap/css/bootstrap-theme.min.css') ?>	
	
	<style>
		.erro {
			color: #f00;
		}
	</style>
	
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	 <script>
	 	var base_url = '<?=base_url() ?>';
	 	/*function buscaCampos(id_estado){
	 		$.post(base_url+"index.php/cidade/buscaCidadeEstado", {
	 			id_estado : id_estado
	 		}, function(data){
		 		if(data != null){	 			
		 			$("#id_cidade").html(data);
		 		}	 			
	 		});
	 	}*/

		$(function () {
			$('form').on('submit', function (e) {
				e.preventDefault();
				$.ajax({
					type: 'post',
					url: base_url+"index.php/cadastro/store",
					data: $('form').serialize(),
					success: function (data) {
						const { erro: {nome, email, colegio, serie }, success, mensagem ,id} = JSON.parse(data);
						if (!success && (mensagem === '' || mensagem === undefined || mensagem === null)) {
							$(".erroNome").text(nome === undefined || nome === null ? '' : nome);
							$(".erroEmail").text(email === undefined || email === null ? '' : email);
							$(".erroColegio").text(colegio === undefined || colegio === null ? '' : colegio);
							$(".erroSerie").text(serie === undefined || serie === null ? '' : serie);
							
						} else {

							let typeAlert = '';								
								$(".erroNome").text('');
								$(".erroEmail").text('');
								$(".colegio").text('');
								$(".serie").text('');
							if (!success && (mensagem != undefined && mensagem != null)) {
								$("#gravado").addClass("alert alert-danger").text(mensagem);
								typeAlert = 'danger';
								
								//if(id == '') {
							   $(".erroEmail").text('Por favor, insira um email diferente!');
								//}			
								
							} else {

								$("#gravado").addClass("alert alert-success").text(mensagem);
								$("#nome").val('');
								$("#email").val('');
								$("#colegio").val('');
								$("#serie").val('');								
								typeAlert = 'success';
							}							
							setTimeout(function(){
								$("#gravado").removeClass(`alert alert-${typeAlert}`).text('');
							}, 3000);
						}						
					}
				});
			});
		});		

	 </script>	
	
</head>
<body>
	<div class="container">
		<h1 class="text-center"><?= $titulo ?></h1>
		<div class="col-md-6 col-md-offset-3">
			<div class="row">
				<div id="gravado"></div>
				<?= form_open('cadastro/store')  ?>
					<div class="form-group">
						<label for="nome">Nome</label>
						<br>
						<span class="erro erroNome"></span>
						<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome ? $nome : '' ?>" autofocus='true' />
					</div>

					<div class="form-group">
						<label for="email">E-mail</label>
						<br>
						<span class="erro erroEmail"></span>
						<input type="email" name="email" id="email" class="form-control" value="<?php echo $email ? $email : '' ?>" />
					</div>
					
					<div class="form-group">
						<label for="colegio">Colégio de origem</label>
						<br>
						<span class="erro erroColegio"></span>
						<input type="text" name="colegio" id="colegio" class="form-control" value="<?php echo $colegio ? $colegio : '' ?>" />
					</div>					

					<div class="form-group">
						<label for="serie">Série do teste seletivo:</label>
						<br>
						<span class="erro erroSerie"></span>
						<select name="serie"  id="serie" class="form-control">  
							<option value="">Selecione</option>  
							<option value="1 ANO ENSINO MÉDIO" <?=$serie == '1 ANO ENSINO MÉDIO'  ? 'selected' : '' ?>>1 ANO ENSINO MÉDIO</option>         
							<option value="2 ANO ENSINO MÉDIO" <?=$serie == '2 ANO ENSINO MÉDIO'  ? 'selected' : '' ?>>2 ANO ENSINO MÉDIO</option>
							<option value="3 ANO ENSINO MÉDIO" <?=$serie == '3 ANO ENSINO MÉDIO'  ? 'selected' : '' ?>>3 ANO ENSINO MÉDIO</option>
							<option value="PRE VESTIBULAR" <?=$serie == 'PRE VESTIBULAR'  ? 'selected' : '' ?>>PRÉ VESTIBULAR</option>					
						</select>						
					</div> 

					<div class="form-group text-right">
						<input type="submit" value="Salvar" class="btn btn-success" />
					</div>
					<input type='hidden' name="id" value="<?php echo $id ? $id : '' ?>">
				<?= form_close(); ?>
			</div>
			<div class="row"><hr></div>
			<?php if($id != '') {?>
			<div class="row">
				<?= anchor('home/acesso', 'Voltar'); ?>
			</div>
			<?php } else { ?>
				<div class="row">
				<?= anchor('', 'Página Inicial'); ?>
			</div>
			<?php } ?>
		</div>	
	</div>	
</body>
	<div class="container">		
		<div class="footer">
			<p>Copyright © 1996-2020. <a href="">Colégio Objetivo</a>. Todos os Direitos Reservados.</p>
		</div>
	</div>
</html>

<style>
	.footer {
	   position: fixed;
	   left: 0;
	   bottom: 0;
	   width: 100%;
	   background-color: black;
	   color: white;
	   text-align: center;
	}
</style>