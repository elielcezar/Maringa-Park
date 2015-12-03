<?php
/*
Template Name: Alimentação
*/
?>
<?php get_header(); ?>
<style>


.loja{
	position: relative;	
}

.loja a.info{
	display: block;
	width: 100%;
	height: 100%;	
	background: rgba(255, 142, 43, .85);  
	position: absolute;	
	opacity: 0;
}
.loja:hover a.info{opacity: 1;}
.loja a.info span{
	width: 90%;
	color: #fff;
	text-transform: uppercase;
	padding: 20px 0;
	border: 1px solid #fff;
	text-align: center;
	position: absolute;
	bottom: 45px;
	left: 50%;
	margin-left: -45%;
	font-style: italic;
}

/* modal */
.modal-backdrop {
   background-color: rgba(255, 142, 43, 1);  
}

.modal-dialog {
	width:75%; 
	border: none;
	
}
.modal-content{
	border: none;	
	
}
.modal-body{	
    overflow:auto;
    padding: 0;
    border: none; 
    display: table-row !important;
    overflow:visible !important;
}
.modal .close{
	width: 36px;
	height: 36px;
	color: #fff;
	border-radius: 50%;
	opacity: 1;		
	font-family: 'Gotham', Arial, sans-serif;
	font-weight: 300;
	background-color: rgba(255, 142, 43, 1);  
	position: absolute;
	top: -16px;
	right: -16px;	
}
.modal .fotos{
	background: #f3f3f3;	
	margin: 0;	
	padding: 25px;
	float:none;
    display:table-cell;    
}
.modal .descricao{
	float:none;
    display:table-cell;
    padding: 25px 25px 50px 25px;
}

.modal .descricao .logo{
	width: 100%;
	text-align: center;
}



@media (max-width: 992px){
	.mp-slider {
		margin-top: 100px;
	}
}
</style>

<div class="container-fluid mp-slider"></div>
<div class="container-fluid bg-alimentacao bg-alimentacao-interna">
		<div class="container">
			<h3>ALIMENTAÇÃO <br><small>Só aqui você encontra as melhores opções</small></h3>
		</div>
		<div class="container position-relative">
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
			
			<div class="col-md-12 orange">
				
				<div class="col-sm-12 col-md-9">
					<p>AQUI NO MARINgÁ PARK VOCÊ ENCONTRA UMA GRANDE VARIEDADE DE RESTAURANTES PRONTOS PARA ATENDER OS MAIS EXIGENTES CLIENTES. Nossa praça de alimentação está aberta das 09:00H as 20:00h todos os dias da semana venha e disfrute das nossas delicias com a sua familia.</p>
				</div>
			</div>
			
		</div>
		<div class="int-bg-full"></div>
</div>
<div class="bg-alimentacao-interna">
	<div class="container">
		<div class="row ali-top-recu">


				<?php
				    $args = array(
				      'post_type' => 'alimentacao'				      
				    );
				    $alimentacao = new WP_Query( $args );
				    if( $alimentacao->have_posts() ) {
				      while( $alimentacao->have_posts() ) {
				        $alimentacao->the_post();				        				        
				        ?>
				          <div class="col-sm-4 col-md-3 img-ali-int">
				          	<?php 
								$images = get_field('imagens');	
								if( $images ): 							       
							        $i=0;
							        foreach( $images as $image ): 
								?>
									<div class="loja">							           
						                <a class="info" href="#modal-<?php the_ID(); ?>" data-toggle="modal"><span>Ver Informações</span></a>
						                 <a href="#modal-<?php the_ID(); ?>" data-toggle="modal"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
					                </div>
						        <?php 
							        $i++;
									if($i==1) break;
							        endforeach;
						       	endif; 
					       	?>						  		
								<div class="hover-owl">									
									<img src="<?php the_field( 'logotipo' ); ?>" alt="<?php the_title() ?>"/>									
								</div>

								<!-- modal -->
					  			<div class="modal fade" id="modal-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							    <div class="modal-dialog">
							      <div class="modal-content">						        
							        <div class="modal-body">							        	
							          	<div class="col-sm-7 fotos">
							          		<?php 
												$images = get_field('imagens');	
												if( $images ): 							       										        
											        foreach( $images as $image ): 
												?>												
										            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />								                
										        <?php 
											        endforeach;
										       	endif; 
									       	?>		
							          	</div>
							          	<div class="col-sm-5 descricao">
							          		<div class="logo"><img src="<?php the_field( 'logotipo' ); ?>" alt="<?php the_title() ?>"/></div>
							          		<?php echo the_content(); ?>
							          	</div>
							          	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
								        </div>						        
								      </div><!-- /.modal-content -->
								    </div><!-- /.modal-dialog -->
								  </div><!-- /.modal -->

						  	</div><!-- item -->
							
				        <?php
				      }
				    }
				    else {
				      echo 'Não foi encontrada a loja';
				    }
				?>



			  	<div class="col-sm-4 col-md-3 img-ali-int">
			  		<div class="loja">			  			
			  			<img src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
			  		</div>
					<div class="hover-owl">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
					</div>
			  	</div>
			  	<div class="col-sm-4 col-md-3 img-ali-int">
			  		<img src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
					<div class="hover-owl">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
					</div>
			  	</div>
			  	<!--div class="col-sm-4 col-md-3 img-ali-int">
			  		<img src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
					<div class="hover-owl">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
					</div>
			  	</div>
			  	<div class="col-sm-4 col-md-3 img-ali-int">
			  		<img src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
					<div class="hover-owl">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
					</div>
			  	</div>
			  	<div class="col-sm-4 col-md-3 img-ali-int">
			  		<img src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
					<div class="hover-owl">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
					</div>
			  	</div>
			  	<div class="col-sm-4 col-md-3 img-ali-int">
			  		<img src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
					<div class="hover-owl">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
					</div>
			  	</div>
			  	<div class="col-sm-4 col-md-3 img-ali-int">
			  		<img src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
					<div class="hover-owl">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
					</div>
			  	</div>
			  	<div class="col-sm-4 col-md-3 img-ali-int">
			  		<img src="<?php bloginfo( 'template_url' ); ?>/images/cheddar.jpg" alt="">
					<div class="hover-owl">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/mcdon.jpg" alt="">
					</div>
			  	</div-->
			</div>
	</div>
</div>

<script type="text/javascript">
	jQuery('.modal.fade').appendTo('body');
</script>

<?php get_footer(); ?>
