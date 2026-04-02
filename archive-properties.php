<?php
/**
 * The template for displaying property archives
 *
 * @package Estatein
 */

get_header(); ?>

<section class="bg-estatein-dark-900 pt-32 pb-20">
	<div class="container mx-auto px-6 mb-16">
		<span class="text-estatein-purple font-bold tracking-widest uppercase text-sm mb-4 block">Our Portfolio</span>
		<h1 class="text-4xl md:text-6xl font-bold mb-6 text-white tracking-tight">
			Explore Our <span class="text-estatein-grey-60 italic">Properties</span>
		</h1>
		<p class="text-lg text-estatein-grey-60 max-w-2xl leading-relaxed">
			<?php esc_html_e( 'From modern lofts to luxury estates, find the property that perfectly matches your lifestyle and aspirations.', 'estatein' ); ?>
		</p>
	</div>

	<div class="container mx-auto px-6 mb-20">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part('template-parts/content', 'property-card');
				endwhile;
			else :
				for($i=0; $i<6; $i++): ?>
					<div class="bg-estatein-dark-800 border border-estatein-dark-700 rounded-[2rem] p-4 opacity-50">
						<div class="aspect-[4/3] bg-estatein-dark-700 rounded-2xl mb-6"></div>
						<div class="h-6 bg-estatein-dark-700 w-3/4 mb-4 rounded"></div>
						<div class="h-4 bg-estatein-dark-700 w-1/2 rounded"></div>
					</div>
				<?php endfor;
			endif;
			?>
		</div>

		<div class="mt-16">
			<?php the_posts_navigation(array(
				'prev_text' => '<span class="px-6 py-3 bg-estatein-dark-800 border border-estatein-dark-700 rounded-xl text-white hover:bg-white/5 transition-all inline-block">Previous</span>',
				'next_text' => '<span class="px-6 py-3 bg-estatein-dark-800 border border-estatein-dark-700 rounded-xl text-white hover:bg-white/5 transition-all inline-block">Next</span>',
			)); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
