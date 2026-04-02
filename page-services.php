<?php
/**
 * Template Name: Our Services
 *
 * @package Estatein
 */

get_header(); ?>

<section class="bg-[#141414] pt-32 pb-20">
	<div class="container mx-auto px-6 mb-24 text-center">
		<h1 class="text-4xl md:text-6xl font-bold mb-8 text-white tracking-tight">
			Nuestros <span class="text-white/60 italic">Servicios</span>
		</h1>
		<p class="text-lg text-gray-400 max-w-2xl mx-auto">
			<?php esc_html_e( 'Ofrecemos una gama completa de servicios inmobiliarios diseñados para simplificar tu experiencia y maximizar tus resultados.', 'estatein' ); ?>
		</p>
	</div>

	<!-- Main Services Grid -->
	<div class="container mx-auto px-6 mb-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
		<?php
		$services_query = new WP_Query( array(
			'post_type' => 'services',
			'posts_per_page' => -1,
		) );

		if ( $services_query->have_posts() ) :
			while ( $services_query->have_posts() ) : $services_query->the_post();
				?>
				<article class="p-10 bg-[#1A1A1A] border border-white/5 rounded-[2.5rem] group hover:border-[#703BF7]/50 transition-all">
					<div class="w-16 h-16 bg-white/5 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-[#703BF7] transition-all">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'w-8 h-8 object-contain' ) ); ?>
						<?php else : ?>
							<svg class="w-8 h-8 text-[#703BF7] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
						<?php endif; ?>
					</div>
					<h3 class="text-2xl font-bold text-white mb-4"><?php the_title(); ?></h3>
					<div class="text-gray-400 leading-relaxed mb-8">
						<?php the_content(); ?>
					</div>
					<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="inline-flex items-center gap-2 text-sm font-bold text-white uppercase tracking-widest hover:text-[#703BF7] transition-colors">
						<?php _e( 'Saber Más', 'estatein' ); ?>
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
					</a>
				</article>
				<?php
			endwhile;
			wp_reset_postdata();
		else :
			// Fallback generic services
			$fallback_services = [
				['Valoración de Propiedades', 'Obtén un informe detallado del valor de tu mercado actual.'],
				['Gestión de Alquileres', 'Nos encargamos de todo el proceso para que no tengas que preocuparte.'],
				['Asesoría Legal', 'Expertos listos para asegurar que cada transacción sea segura.'],
			];
			foreach ($fallback_services as $s) :
				?>
				<article class="p-10 bg-[#1A1A1A] border border-white/5 rounded-[2.5rem]">
					<div class="w-16 h-16 bg-white/5 rounded-2xl flex items-center justify-center mb-8">
						<svg class="w-8 h-8 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04"></path></svg>
					</div>
					<h3 class="text-2xl font-bold text-white mb-4"><?php echo $s[0]; ?></h3>
					<p class="text-gray-400 leading-relaxed mb-8"><?php echo $s[1]; ?></p>
				</article>
				<?php
			endforeach;
		endif;
		?>
	</div>

	<!-- CTA Section -->
	<div class="container mx-auto px-6">
		<div class="p-12 lg:p-20 bg-gradient-to-r from-[#1A1A1A] to-[#141414] rounded-[3rem] border border-white/5 text-center relative overflow-hidden">
			<div class="absolute -top-24 -left-24 w-64 h-64 bg-[#703BF7]/10 blur-3xl rounded-full"></div>
			<h2 class="text-3xl md:text-5xl font-bold text-white mb-8 relative z-10"><?php _e( '¿Listo para empezar tu búsqueda?', 'estatein' ); ?></h2>
			<p class="text-gray-400 mb-10 max-w-xl mx-auto relative z-10"><?php _e( 'Estamos aquí para ayudarte a encontrar la propiedad de tus sueños con la mayor facilidad y rapidez posible.', 'estatein' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="inline-block px-10 py-5 bg-[#703BF7] text-white font-bold rounded-xl hover:bg-[#5B2FD1] transition-all shadow-lg shadow-purple-500/20 relative z-10">
				<?php _e( 'Contactar ahora', 'estatein' ); ?>
			</a>
		</div>
	</div>

</section>

<?php get_footer(); ?>
