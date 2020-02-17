<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Insphas_Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>

	</div><!-- .site-wrap -->

	<section class="site-section element-animate" id="contact-section">
		<div class="mb-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 text-center heading-wrap">
						<h2>Entre em Contato</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5">
					<h4 class="">Localização</h4>
					<p>O Insphas fica na Expansão do Setor O, venha nos visitar!</p>
					<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.22558022497!2d-48.13793208514504!3d-15.792055089052688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9ac9b96d5024938!2sInsphas!5e0!3m2!1spt-BR!2sbr!4v1581875704133!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
				</div>

				<div class="col-lg-6 pl-2 pl-lg-5">
						<h4 class="mb-5">Últimas Novidades</h4>
						<?php dynamic_sidebar( 'instagram-widget' ); ?>
				</div>
			</div>
		</div>

	</section>

<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mb-5 mb-lg-0">
				<div class="row">
					<div class="col-12">
						<h3 class="footer-heading mb-4">Seja Voluntário</h3>
						<p>O Insphas sobrevive de doações da comunidade. Não apenas de dinheiro, mas também de amor e de carinho. Faça a diferença você também!</p>
						<p class="text-xs-center"><a href="<?php echo get_contacts('email_url'); ?>" title="Envie um e-mail para contato@insphas.com.br" class="btn btn-primary btn-sm">Quero ser Voluntário</a></p>
					</div>
				</div>

			</div>
			<div class="col-lg-4 mb-lg-0">

				<div class="row mb-5 pt-2 text-center">
					<div class="col-md-12">
						<p>
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-footer.png" alt="Insphas" id="logo-footer" title="Insphas">
						</p>
					</div>
				</div>

			</div>


			<div class="col-lg-4 mb-5 mb-lg-0">

				<div class="row" id="contact-footer">
					<div class="col-md-12">
						<h3 class="footer-heading mb-4">Formas de Contato</h3>
						<p>Falar com a gente é mais fácil do que você imagina! É só escolher a forma de contato que você preferir:</p>
						<div class="social-itens">
						<a target="_blank" href="<?php echo get_contacts('whatsapp_url'); ?>" title="<?php echo get_contacts('whatsapp_title'); ?>" class="d-flex align-items-center mr-auto">
							<span class="<?php echo get_contacts('whatsapp_icon'); ?> mr-2"></span>
							<span class="d-none d-md-inline-block"><?php echo get_contacts('whatsapp_description'); ?></span>
						</a>
						<a target="_blank" href="<?php echo get_contacts('endereco_url'); ?>" title="<?php echo get_contacts('endereco_title'); ?>" class="d-flex align-items-center mr-auto">
							<span class="<?php echo get_contacts('endereco_icon'); ?> mr-2"></span>
							<span class="d-none d-md-inline-block"><?php echo get_contacts('endereco_description'); ?></span>
						</a>
						<a target="_blank" href="<?php echo get_contacts('email_url'); ?>" title="<?php echo get_contacts('email_title'); ?>" class="d-flex align-items-center mr-auto">
							<span class="<?php echo get_contacts('email_icon'); ?> mr-2"></span>
							<span class="d-none d-md-inline-block"><?php echo get_contacts('email_description'); ?></span>
						</a>
						<a target="_blank" href="<?php echo get_contacts('facebook_url'); ?>" title="<?php echo get_contacts('facebook_title'); ?>" class="d-flex align-items-center mr-auto">
							<span class="<?php echo get_contacts('facebook_icon'); ?> mr-2"></span>
							<span class="d-none d-md-inline-block"><?php echo get_contacts('facebook_description'); ?></span>
						</a>
						<a target="_blank" href="<?php echo get_contacts('instagram_url'); ?>" title="<?php echo get_contacts('instagram_title'); ?>" class="d-flex align-items-center mr-auto">
							<span class="<?php echo get_contacts('instagram_icon'); ?> mr-2"></span>
							<span class="d-none d-md-inline-block"><?php echo get_contacts('instagram_description'); ?></span>
						</a>
					</div>

					</div>
				</div>


			</div>

		</div>
		<div class="row text-center">
			<div class="col-md-12">
				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Insphas &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados.<br/>Feito com <i class="icon-heart text-danger" aria-hidden="true"></i> por <a href="https://www.jadypamella.com.br" target="_blank" >Jady Pâmella</a> utilizando <a href="https://colorlib.com" target="_blank" >Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
			</div>

		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
