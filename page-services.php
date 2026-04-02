<?php
/**
 * Template Name: Our Services
 *
 * @package Estatein
 */

get_header(); ?>

<!-- Hero Section -->
<section class="bg-estatein-dark-900 pt-32 pb-20 border-b border-estatein-dark-700">
	<div class="container mx-auto px-6 mb-24">
		<h1 class="text-4xl md:text-6xl font-bold mb-8 text-white tracking-tight uppercase">
			Elevate Your <span class="text-estatein-grey-60 italic">Real Estate</span> <br>Experience
		</h1>
		<p class="text-lg text-estatein-grey-60 max-w-3xl leading-relaxed">
			<?php esc_html_e( 'Welcome to Estatein, where your property aspirations meet expertise. Our suite of services is designed to guide you through every step of your real estate journey.', 'estatein' ); ?>
		</p>
	</div>

	<!-- Main Services Grid -->
	<div class="container mx-auto px-6 mb-24">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php
			$services_query = new WP_Query( array(
				'post_type' => 'services',
				'posts_per_page' => -1,
			) );

			if ( $services_query->have_posts() ) :
				while ( $services_query->have_posts() ) : $services_query->the_post();
					?>
					<article class="p-10 bg-estatein-dark-800 border border-estatein-dark-700 rounded-[2.5rem] group hover:border-estatein-purple/50 transition-all flex flex-col h-full">
						<div class="flex items-center gap-4 mb-8">
							<div class="w-16 h-16 bg-estatein-dark-900 border border-estatein-dark-700 rounded-2xl flex items-center justify-center group-hover:bg-estatein-purple transition-all text-estatein-purple group-hover:text-white">
								<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
							</div>
							<h3 class="text-2xl font-bold text-white"><?php the_title(); ?></h3>
						</div>
						<div class="text-estatein-grey-60 leading-relaxed mb-10 flex-grow">
							<?php the_content(); ?>
						</div>
						<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>" class="w-full py-4 bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl text-white font-bold text-center hover:bg-estatein-purple transition-all">
							<?php _e( 'Learn More', 'estatein' ); ?>
						</a>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				// Fallback generic services
				$fallback_services = [
					['Property Valuation', 'Our expert appraisers provide accurate property valuations to help you make informed decisions.'],
					['Property Management', 'We take the stress out of property ownership by managing everything from maintenance to tenant relations.'],
					['Investment Advisory', 'Maximize your returns with our strategic investment advice tailored to your goals.'],
				];
				foreach ($fallback_services as $s) :
					?>
					<article class="p-10 bg-estatein-dark-800 border border-estatein-dark-700 rounded-[2.5rem] group hover:border-estatein-purple/50 transition-all flex flex-col h-full">
						<div class="flex items-center gap-4 mb-8">
							<div class="w-16 h-16 bg-estatein-dark-900 border border-estatein-dark-700 rounded-2xl flex items-center justify-center group-hover:bg-estatein-purple transition-all text-estatein-purple group-hover:text-white">
								<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04"></path></svg>
							</div>
							<h3 class="text-2xl font-bold text-white"><?php echo $s[0]; ?></h3>
						</div>
						<p class="text-estatein-grey-60 leading-relaxed mb-10 flex-grow"><?php echo $s[1]; ?></p>
						<a href="#" class="w-full py-4 bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl text-white font-bold text-center hover:bg-estatein-purple transition-all">
							<?php _e( 'Learn More', 'estatein' ); ?>
						</a>
					</article>
					<?php
				endforeach;
			endif;
			?>
		</div>
	</div>

	<!-- Unlock Property Value Section -->
	<div class="container mx-auto px-6 py-24 border-t border-estatein-dark-700">
		<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
			<div class="max-w-2xl">
				<h2 class="text-4xl font-bold text-white mb-6">Unlock Property Value</h2>
				<p class="text-estatein-grey-60">Listing your property with Estatein ensures that your asset reaches the right audience and achieves the highest market value.</p>
			</div>
			<a href="#" class="px-10 py-4 bg-estatein-dark-800 border border-estatein-dark-700 rounded-xl text-white font-bold hover:bg-white/5 transition-all">
				Learn More
			</a>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
			<?php for($i=0; $i<3; $i++): ?>
				<div class="p-8 bg-estatein-dark-800 border border-estatein-dark-700 rounded-2xl relative overflow-hidden group">
					<div class="absolute -top-10 -right-10 w-32 h-32 bg-estatein-purple/5 blur-2xl rounded-full group-hover:bg-estatein-purple/10 transition-all"></div>
					<div class="flex items-center gap-3 mb-6">
						<div class="w-10 h-10 bg-estatein-dark-900 border border-estatein-dark-700 rounded-lg flex items-center justify-center text-estatein-purple">
							<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
						</div>
						<h4 class="text-white font-bold text-lg">Market Insight</h4>
					</div>
					<p class="text-estatein-grey-60 text-sm leading-relaxed">Stay ahead of the curve with our in-depth market analysis and data-driven insights.</p>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
