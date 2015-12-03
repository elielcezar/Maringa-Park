		<div class="container-fluid bg-news">
		<div class="container">
			<div class="col-md-4">
				<h5>CADASTRE-SE<small> <br>E RECEBA EM SEU EMAIL TODAS NOSSAS NOVIDADES EPROMOÇÕES</small></h5>
			</div>
			<div class="col-md-8">
				<form action="">
					<input type="text" placeholder="seu nome">
					<input type="text" placeholder="seu email">
					<input type="submit" value="cadastrar">
				</form>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-info">
		<div class="container">
			<div class="col-md-4 atendimento">
				<h4>
					ATENDIMENTO <br>MARINGÁ PARK
				</h4>
				<p>(44) 3366.2000 <br>marketing@maringapark.com.br</p>
			</div>
			<div class="col-md-4 onde-estamos">
				<h4>
					ONDE <br>ESTAMOS
				</h4>
				<p>Avenida São Paulo, 1099 | Centro <br>Cep: 87013-931 - Maringá - Paraná</p>
				<p><a href="">- VER MAPA</a></p>
			</div>
			<div class="col-md-4 estacionamento">
				<h4>ESTACIONAMENTO</h4>
				<div class="valor">VALOR DA TARIFA</div>
				<div class="hor">
					<p>
						1ª hora - R$ 8,00 <br>2ª e a 3ª - gratuitas <br>4ª hora e demais - R$1,50 a cada <br>15 minutos.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-horario">
		<div class="container">
			<div class="col-md-4">
				<h5>
					CONFIRA NOSSO <span style="color:#e50e50">HORÁRIO</span><br> 
					DE <span style="color:#e50e50">FUNCIONAMENTO</span>
				</h5>
			</div>
			<div class="col-md-4">
				<p>
					<span style="color:#e50e50">De Segunda a Sábado</span><br>
					Shopping: Das 10:00hs às 22:30hs<br>
					Lojas: Das 10:00hs às 22:00hs<br>
					Praça de Alimentação: Das 10:30hs às 22:30hs
				</p>
			</div>
			<div class="col-md-4">
				<p>
					<span style="color:#e50e50">Domingos e Feriados</span><br>
					Shopping: Das 12:00hs às 22:30hs<br>
					Lojas: Das 14:00hs às 20:00hs<br>
					Praça de Alimentação: Das 12:00hs às 22:30hs
				</p>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-rodape">
		<div class="container">
			<div class="col-md-6 col-sm-8">
				<span>2015 Maringá Park © Todos os direitos reservados</span>
			</div>
			<div class="col-md-6 col-sm-4">
				<a href="http://studiospirit.com.br" target="_"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo-studio.png" alt="Studio Spirit"></a>
			</div>
		</div>
	</div>
    </div>


    
	<?php wp_footer(); ?>
	<script>
		var abr_menu = false;
	    jQuery('body').click(function(event) {
	    	if(event.target.className != 'altera-menu'){
	    		jQuery('.menu-list').removeClass("aberto");
	    	}else{
	    		jQuery('.menu-list').toggleClass("aberto");
	    	}
		});
	</script>

</body>
</html>