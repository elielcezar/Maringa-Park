<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<div class="buscar-mobile">
	<?php get_search_form(); ?>
</div>
<div class="container-fluid mp-slider">
	<?php 	while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile;?>
</div>

	<div class="container-fluid lista-busca">
		<div class="container" style="position:relative;">
			<div class="row">
				<div class="col-md-12 bar-pt-top">
					
					<div class="float-search col-md-4">
						<div class="busca-loja">
							<h3>Busca <br><small>por loja</small></h3>
							<form action="">
								<label for="">...</label>
								<input type="text" placeholder="pelo nome da loja">

								<label for="" style="margin-top:20px;">...</label>
								<select name="" id="">
									<option value="">por segmento</option>
								</select>
								<input type="submit" value="buscar">
							</form>
							<a href="" class="first">-  VER TODOS OS LOGISTAS</a>
							<a href="" class="second">-  ACESSO AO LOGISTA</a>
						</div>
					</div>

					<div class="col-md-3 box-pequeno display-none">
						
					</div>

					<div class="col-md-4 col-sm-6 box-maior margin-box-lojas" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/image1.jpg) no-repeat 0 0 /cover transparent;">
						<div class="padding-box">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/adidas.png" alt="">
							<div class="cont-box">
								<h5>Farm</h5>
								<p>ljs. 301 e 302</p>
								<p>PISO: MARINGÁ</p>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-6 box-medio margin-box-lojas" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/image2.jpg) no-repeat 0 0 /cover transparent;">
						<div class="padding-box">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/lacoste.png" alt="">
							<div class="cont-box">
								<h5>Farm</h5>
								<p>ljs. 301 e 302</p>
								<p>PISO: MARINGÁ</p>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-6 box-medio" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/image3.jpg) no-repeat 0 0 /cover transparent;">
						<div class="padding-box">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/levis.png" alt="">
							<div class="cont-box">
								<h5>Farm</h5>
								<p>ljs. 301 e 302</p>
								<p>PISO: MARINGÁ</p>
							</div>
						</div>
					</div>

					<div class="col-md-3 box-pequeno display-none">
						
					</div>

					<div class="col-md-4 col-sm-6 box-medio" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/image4.jpg) no-repeat 0 0 /cover transparent;">
						<div class="padding-box">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/cea.png" alt="">
							<div class="cont-box">
								<h5>Farm</h5>
								<p>ljs. 301 e 302</p>
								<p>PISO: MARINGÁ</p>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-6 box-medio" style="background: url(<?php bloginfo( 'template_url' ); ?>/images/image5.jpg) no-repeat 0 0 /cover transparent;">
						<div class="padding-box">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/farm.png" alt="">
							<div class="cont-box">
								<h5>Farm</h5>
								<p>ljs. 301 e 302</p>
								<p>PISO: MARINGÁ</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
		
	</div> <!-- /END IP-MAIN -->
	
	<div class="container-fluid bg-cinema">
		<div class="container cinema-legenda">
			<h3>Cinema <br><small>confira nossos filmes EM CARTAZ</small></h3>
		</div>
		<div id="car" class="owl-carousel">
		  	<div class="col-md-12">
		  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="hover-owl">
					<h4>A Travessia <br><small>aventura</small></h4>
					<a href="">Trailer</a>
					<a href="">Ver horários</a>
				</div>
		  	</div>
		  	<div class="col-md-12">
		  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="hover-owl">
					<h4>A Travessia <br><small>aventura</small></h4>
					<a href="">Trailer</a>
					<a href="">Ver horários</a>
				</div>
		  	</div>
		  	<div class="col-md-12">
		  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="hover-owl">
					<h4>A Travessia <br><small>aventura</small></h4>
					<a href="">Trailer</a>
					<a href="">Ver horários</a>
				</div>
		  	</div>
		  	<div class="col-md-12">
		  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="hover-owl">
					<h4>A Travessia <br><small>aventura</small></h4>
					<a href="">Trailer</a>
					<a href="">Ver horários</a>
				</div>
		  	</div>
		  	<div class="col-md-12">
		  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="hover-owl">
					<h4>A Travessia <br><small>aventura</small></h4>
					<a href="">Trailer</a>
					<a href="">Ver horários</a>
				</div>
		  	</div>
		  	<div class="col-md-12">
		  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="hover-owl">
					<h4>A Travessia <br><small>aventura</small></h4>
					<a href="">Trailer</a>
					<a href="">Ver horários</a>
				</div>
		  	</div>
		  	<div class="col-md-12">
		  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="hover-owl">
					<h4>A Travessia <br><small>aventura</small></h4>
					<a href="">Trailer</a>
					<a href="">Ver horários</a>
				</div>
		  	</div>
		  	<div class="col-md-12">
		  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="hover-owl">
					<h4>A Travessia <br><small>aventura</small></h4>
					<a href="">Trailer</a>
					<a href="">Ver horários</a>
				</div>
		  	</div>
		</div>
		<div class="container">
			<a href="" class="btn btn-success"> ver todos os filmes</a>
		</div>
	</div>

	<div class="container-fluid bg-servicos">
		<div class="container">
			<h3>PRAZER EM SERVIR BEM!<br><small>Para o Maringá Park, alta qualidade e cuidado no atendimento são partes indissociáveis de uma experiência. Temos serviços exclusivos em Maringá, para que você se sinta sempre bem acolhido aqui.</small></h3>
		</div>

		<div class="container">
			<div id="car2" class="owl-carousel">
			  	<div class="col-md-12">
					<div class="servicos-int">
						<small>SERVIÇO DE WI-FI</small>
					</div>
			  	</div>
			  	<div class="col-md-12">
					<div class="servicos-int">
						<small>CANTINHO MARINGÁ PARK</small>
					</div>
			  	</div>
			  	<div class="col-md-12">
					<div class="servicos-int">
						<small>RECARREGUE SEU CELULAR</small>
					</div>
			  	</div>
			  	<div class="col-md-12">
					<div class="servicos-int">
						<small>CUIDAMOS DO SEU BICHINHO - PET SHOP</small>
					</div>
			  	</div>
			  	<div class="col-md-12">
					<div class="servicos-int">
						<small>AQUI TEMOS CASA DE CAMBIO</small>
					</div>
			  	</div>
			  	<div class="col-md-12">
					<div class="servicos-int">
						<small>SERVIÇO DE ESTACIONAMENTO</small>
					</div>
			  	</div>
			  	<div class="col-md-12">
					<div class="servicos-int">
						<small>SERVIÇO DE ESTACIONAMENTO</small>
					</div>
			  	</div>
			  	<div class="col-md-12">
					<div class="servicos-int">
						<small>SERVIÇO DE ESTACIONAMENTO</small>
					</div>
			  	</div>
			</div>
		</div>

		<div class="container link-serv">
			<a href="" class="btn btn-success"> ver todos os serviços</a>
		</div>

	</div>

	<div class="container-fluid bg-alimentacao">
		<div class="container">
			<h3>ALIMENTAÇÃO <br><small>Só aqui você encontra as melhores opções</small></h3>
		</div>
		<div class="container">
			<div class="box-optin-orange">
				<h4>VOCÊ SABIA?</h4>
				<p>
					QUE TODOS OS DIAS 
					NA HORA DO ALMOÇO 
					NO MARINGÁ PARK 
					VOCÊ NAO PAGA O 
					ESTACIONAMENTO
				</p>
			</div>
			
			<div class="col-md-2"></div>
			<div class="col-md-10 orange">
				<div id="car3" class="owl-carousel">
				  	<div class="col-md-12">
				  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
						<div class="hover-owl">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
						</div>
				  	</div>
				  	<div class="col-md-12">
				  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
						<div class="hover-owl">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
						</div>
				  	</div>
				  	<div class="col-md-12">
				  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
						<div class="hover-owl">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
						</div>
				  	</div>
				  	<div class="col-md-12">
				  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
						<div class="hover-owl">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
						</div>
				  	</div>
				  	<div class="col-md-12">
				  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
						<div class="hover-owl">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
						</div>
				  	</div>
				  	<div class="col-md-12">
				  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
						<div class="hover-owl">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
						</div>
				  	</div>
				  	<div class="col-md-12">
				  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
						<div class="hover-owl">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
						</div>
				  	</div>
				  	<div class="col-md-12">
				  		<img class="lazyOwl" data-src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
						<div class="hover-owl">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
						</div>
				  	</div>
				</div>
				<a href="" class="btn btn-success">ver todos os restaurantes</a>
			</div>

		</div>
		<div class="int-bg-full"></div>
	</div>

	<div class="container-fluid bg-noticias">
		<div class="container">
			<div class="col-md-4">
				<div class="col-md-12 sustentabilidade">
					<h3>
						Sus <br>
						tenta <br>
						bili <br>
						dade
					</h3>
					<div class="box-white">
						<span>O Maringá Park dispoe de estação permanente de coleta de recicláveis</span>
					</div>
					<div class="recicle"></div>
					<a href="" class="btn btn-success">VEJA TUDO QUE COLETAMOS</a>
				</div>
			</div>
			<div class="col-md-8">
				<h4>NOTICIAS / EVENTOS <br><small>SAIBA MAIS SOBRE O MARINGÁ PARK</small></h4>
			</div>
			<div class="col-md-4 col-sm-6 noticias">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/not1.jpg" alt="">
				<div class="date"></div>
				<h5>Ronaldo Fraga participa de bate-papo e noite de autógrafos em Maringá</h5>
				<p>O estilista mineiro Ronaldo Fraga estará na Livrarias Curitiba do Maringá Park, na noite de segunda-feira (5), para o lançamento do livro Ronaldo Fraga: caderno de roupas, memórias e croquis - edição revista e ampliada. Quem estiver presente poderá bater papo com o autor e pedir autógrafo.</p>
				<div class="d-social">
					<a href="">>> VER MAIS</a>
					<span>COMPARTILHAR</span>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 noticias">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/not1.jpg" alt="">
				<div class="date"></div>
				<h5>Ronaldo Fraga participa de bate-papo e noite de autógrafos em Maringá</h5>
				<p>O estilista mineiro Ronaldo Fraga estará na Livrarias Curitiba do Maringá Park, na noite de segunda-feira (5), para o lançamento do livro Ronaldo Fraga: caderno de roupas, memórias e croquis - edição revista e ampliada. Quem estiver presente poderá bater papo com o autor e pedir autógrafo.</p>
				<div class="d-social">
					<a href="">>> VER MAIS</a>
					<span>COMPARTILHAR</span>
				</div>
			</div>
			<div class="col-md-8" style="text-align:center;">
				<a href="" class="btn btn-success ver-noticias">VER TODOS AS NOTICIAS E EVENTOS</a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
