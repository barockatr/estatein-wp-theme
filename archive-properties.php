<?php
/**
 * The template for displaying property archives
 *
 * @package Estatein
 */

get_header(); ?>

<section class="bg-[#141414] pt-32 pb-20">
	<div class="container mx-auto px-6 text-center mb-16">
		<h1 class="text-4xl md:text-6xl font-bold mb-6 text-white tracking-tight">
			Explora Nuestros <span class="text-white/60 italic">Inmuebles</span>
		</h1>
		<p class="text-lg text-gray-400 max-w-2xl mx-auto">
			<?php esc_html_e( 'Desde apartamentos modernos hasta villas de lujo, encuentra la propiedad que mejor se adapte a tu estilo de vida.', 'estatein' ); ?>
		</p>
	</div>

	<div class="container mx-auto px-6 mb-20">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					$price = get_field( 'property_price' );
					$location = get_field( 'property_location' );
					$beds = get_field( 'property_bedrooms' );
					$baths = get_field( 'property_bathrooms' );
					?>
					<article class="bg-[#1A1A1A] border border-white/5 rounded-3xl overflow-hidden group hover:border-[#703BF7]/50 transition-all">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="block overflow-hidden aspect-[4/3]">
								<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-700' ) ); ?>
							</a>
						<?php endif; ?>
						
						<div class="p-8">
							<h3 class="text-xl font-bold mb-2">
								<a href="<?php the_permalink(); ?>" class="text-white hover:text-[#703BF7] transition-colors">
									<?php the_title(); ?>
								</a>
							</h3>
							
							<div class="flex items-center gap-2 text-gray-500 text-sm mb-6">
								<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
								<?php echo esc_html( $location ); ?>
							</div>
							
							<!-- Property Specs -->
							<div class="flex justify-between items-center py-6 border-y border-white/5 mb-6 text-sm text-gray-400">
								<div class="flex items-center gap-2">
									<svg class="w-4 h-4 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
									<span><?php echo esc_html( $beds ); ?> Hab.</span>
								</div>
								<div class="flex items-center gap-2">
									<svg class="w-4 h-4 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
									<span><?php echo esc_html( $baths ); ?> Baños</span>
								</div>
							</div>
							
							<div class="flex justify-between items-center">
								<div>
									<div class="text-xs text-gray-500 uppercase font-semibold"><?php _e( 'Precio', 'estatein' ); ?></div>
									<div class="text-xl font-bold text-white"><?php echo esc_html( $price ); ?></div>
								</div>
								<a href="<?php the_permalink(); ?>" class="px-5 py-2.5 bg-[#703BF7] text-white text-sm font-semibold rounded-lg hover:bg-[#5B2FD1] transition-all">
									<?php _e( 'Ver Detalles', 'estatein' ); ?>
								</a>
							</div>
						</div>
					</article>
					<?php
				endwhile;
				the_posts_navigation();
			else :
				echo '<p class="text-center text-gray-500">' . esc_html__( 'No se encontraron inmuebles.', 'estatein' ) . '</p>';
			endif;
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
