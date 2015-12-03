<?php
/*
Template Name: Cinema
*/
?>
<?php get_header(); ?>
<style>
	@media (max-width: 992px){
	.mp-slider {
        margin-top: 100px;
    }
}
</style>
<div class="container-fluid mp-slider"></div>
<div class="container-fluid bg-cinema-int">
	<div class="container">
		<h3>Cinema <br><small>OS MELHORES LANÇAMENTOS.</small></h3>
	</div>
	<div class="container position-relative">
		<div class="col-md-12 cinema-full-bg">
			<h4>PROXIMA <br>SESSÃO <br></h4>
			<small>Confira ao lado nossas proximas <br>sessões.</small>
			<div class="col-sm-5 col-md-4 cine-now">
				<div class="col-md-12 border-cinenow">
					<h4>SALA 1</h4>
					<div class="cover">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
					</div>
					<div>
						<span class="name">A TRAVESSIA</span>
						<span class="horario">Horário: <strong style="color:#4ac53d;">13h00</strong></span>
					</div>
				</div>
			</div>
			<div class="col-sm-5 col-md-4 cine-now cine-now-right">
				<div class="col-md-12 border-cinenow">
					<h4>SALA 1</h4>
					<div class="cover">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
					</div>
					<div>
						<span class="name">A TRAVESSIA</span>
						<span class="horario">Horário: <strong style="color:#4ac53d;">13h00</strong></span>
					</div>
				</div>
			</div>
		</div>
		

	</div>
	<div class="container">
		<div class="col-md-12">
			<h4 style="margin-top: 20px;color: #4ac53d;text-align: center;font-size: 24px;margin-bottom: 30px;font-weight: 100;">TODOS OS FILMES EM CARTAZ</h4>
		</div>
		<div class="col-sm-12 col-md-6 cinema-desc">
			<div class="col-md-12 border-cinema">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="col-md-6">
					<h5>A TRAVESSIA</h5>
					<p>Ao chegar ao novo país, o executivo Jack Dwyer, acompanhado de sua família, é pego em meio a um recente e violento Golpe de Estado, em que toda e qualquer comunicação é suspensa, e os estrangeiros são...</p>
					<span class="sala-c">Sala 1</span>
					<span class="horario-c">15:30 - 20:00 - 22:15</span>
					<span class="trailer-c"><a class="various fancybox.iframe" href="https://www.youtube.com/embed/Tra7otLWtQ8?autoplay=1">TRAILER</a></span>
					<span class="indicacao-c">12</span>
					<span class="legenda-c">LEG</span>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 cinema-desc">
			<div class="col-md-12 border-cinema">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="col-md-6">
					<h5>A TRAVESSIA</h5>
					<p>Ao chegar ao novo país, o executivo Jack Dwyer, acompanhado de sua família, é pego em meio a um recente e violento Golpe de Estado, em que toda e qualquer comunicação é suspensa, e os estrangeiros são...</p>
					<span class="sala-c">Sala 1</span>
					<span class="horario-c">15:30 - 20:00 - 22:15</span>
					<span class="trailer-c"><a class="various fancybox.iframe" href="https://www.youtube.com/embed/Tra7otLWtQ8?autoplay=1">TRAILER</a></span>
					<span class="indicacao-c">12</span>
					<span class="legenda-c">LEG</span>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 cinema-desc">
			<div class="col-md-12 border-cinema">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
				<div class="col-md-6">
					<h5>A TRAVESSIA</h5>
					<p>Ao chegar ao novo país, o executivo Jack Dwyer, acompanhado de sua família, é pego em meio a um recente e violento Golpe de Estado, em que toda e qualquer comunicação é suspensa, e os estrangeiros são...</p>
					<span class="sala-c">Sala 1</span>
					<span class="horario-c">15:30 - 20:00 - 22:15</span>
					<span class="trailer-c"><a class="various fancybox.iframe" href="https://www.youtube.com/embed/Tra7otLWtQ8?autoplay=1">TRAILER</a></span>
					<span class="indicacao-c">12</span>
					<span class="legenda-c">LEG</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bg-cinema cinema-int-new">
	<div class="container">
			<h4>PRÓXIMOS FILMES</h4>
	  		<img src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
	  		<img src="<?php bloginfo( 'template_url' ); ?>/images/banner.jpg" alt="">
	  	</div>
	</div>
</div>
<?php get_footer(); ?>
