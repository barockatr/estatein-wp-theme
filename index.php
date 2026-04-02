<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Agencia_Figma
 */

get_header(); ?>

<div class="container mx-auto px-4 py-20">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
	else :
		echo '<p>' . esc_html__( 'No hay contenido para mostrar.', 'agencia-figma' ) . '</p>';
	endif;
	?>
</div>

<?php
get_footer();
