<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Insphas_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="site-section" >
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-7 text-left heading-wrap mb-5">
					<h2 class="mt-0">Página não encontrada.</h2>
					<p>Que tal voltar para o <a href="<?php echo get_home_url() ?>">início</a>?</p>
				</div>

			</div>
		</div>
</section>

<?php
get_footer();
