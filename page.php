<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package Estatein
 */

get_header();
?>

<section class="bg-[#141414] pt-32 pb-20 min-h-[60vh]">
	<div class="container mx-auto px-6">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header mb-12">
					<h1 class="text-4xl md:text-6xl font-bold text-white tracking-tight"><?php the_title(); ?></h1>
				</header>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="mb-12 rounded-3xl overflow-hidden border border-white/5 shadow-2xl">
						<?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-auto object-cover' ) ); ?>
					</div>
				<?php endif; ?>

				<div class="entry-content prose prose-invert prose-purple max-w-none text-gray-400">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		endwhile;
		?>
	</div>
</section>

<?php
get_footer();
