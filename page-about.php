<?php
/**
 * Template Name: About Us
 *
 * @package Estatein
 */

get_header(); ?>

<section class="bg-[#141414] pt-32 pb-20">
	<div class="container mx-auto px-6 mb-24 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
		<div>
			<h1 class="text-4xl md:text-6xl font-bold mb-8 text-white tracking-tight">
				Nuestra <span class="text-white/60 italic">Historia</span>
			</h1>
			<div class="prose prose-invert prose-purple max-w-none text-gray-400">
				<?php the_content(); ?>
				<p>
					<?php _e( 'Desde nuestra fundación, nos hemos dedicado a transformar la industria inmobiliaria mediante la innovación, la transparencia y un enfoque centrado en el cliente. En Estatein, no solo vendemos casas; construimos sueños y creamos comunidades.', 'estatein' ); ?>
				</p>
			</div>
		</div>
		<div class="relative group">
			<div class="absolute -inset-4 bg-gradient-to-tr from-[#703BF7]/10 to-transparent blur-3xl opacity-50"></div>
			<div class="relative overflow-hidden rounded-[2.5rem] border-8 border-[#1A1A1A] shadow-2xl">
				<img src="https://images.unsplash.com/photo-1577412647305-991150c7d163?auto=format&fit=crop&q=80&w=1200" 
					 alt="Estatein Office" 
					 class="w-full h-full object-cover" />
			</div>
		</div>
	</div>

	<!-- Team Section -->
	<div class="container mx-auto px-6 mb-24">
		<div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-16">
			<div>
				<h2 class="text-3xl md:text-5xl font-bold text-white mb-4"><?php _e( 'Conoce a nuestro equipo', 'estatein' ); ?></h2>
				<p class="text-gray-400 max-w-xl"><?php _e( 'Contamos con expertos de clase mundial listos para guiarte en cada paso de tu camino inmobiliario.', 'estatein' ); ?></p>
			</div>
			<a href="/contacto" class="px-8 py-4 bg-white/5 text-white border border-white/10 rounded-xl font-semibold hover:bg-white/10 transition-all">
				<?php _e( 'Únete al Equipo', 'estatein' ); ?>
			</a>
		</div>

		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
			<?php
			$team_query = new WP_Query( array(
				'post_type' => 'team',
				'posts_per_page' => 4,
			) );

			if ( $team_query->have_posts() ) :
				while ( $team_query->have_posts() ) : $team_query->the_post();
					?>
					<article class="p-6 bg-[#1A1A1A] border border-white/5 rounded-3xl text-center group hover:border-[#703BF7]/50 transition-all">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="w-24 h-24 mx-auto mb-6 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all duration-500">
								<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'w-full h-full object-cover' ) ); ?>
							</div>
						<?php endif; ?>
						<h3 class="text-xl font-bold text-white mb-2"><?php the_title(); ?></h3>
						<div class="text-sm text-[#703BF7] uppercase font-semibold mb-4"><?php the_content(); ?></div>
						
						<div class="flex justify-center gap-3">
							<a href="#" class="w-8 h-8 flex items-center justify-center bg-white/5 rounded-lg hover:bg-[#703BF7] transition-all text-gray-400 hover:text-white">
								<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
							</a>
						</div>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				// Fallback generic items for assessment if no team posts exist
				for ($i=1; $i<=4; $i++) :
					?>
					<article class="p-6 bg-[#1A1A1A] border border-white/5 rounded-3xl text-center">
						<div class="w-24 h-24 mx-auto mb-6 bg-white/5 rounded-2xl flex items-center justify-center">
							<svg class="w-12 h-12 text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
						</div>
						<h3 class="text-xl font-bold text-white mb-2"><?php _e( 'Nombre del Experto', 'estatein' ); ?></h3>
						<div class="text-sm text-[#703BF7] uppercase font-semibold mb-4"><?php _e( 'Agente Comercial', 'estatein' ); ?></div>
					</article>
					<?php
				endfor;
			endif;
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
