<?php
/**
 * The template for displaying single property posts
 *
 * @package Estatein
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();
	$price = get_field( 'property_price' );
	$location = get_field( 'property_location' );
	$beds = get_field( 'property_bedrooms' );
	$baths = get_field( 'property_bathrooms' );
	$size = get_field( 'property_size' );
	?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-[#141414] pt-32 pb-20' ); ?>>
		
		<div class="container mx-auto px-6 mb-12 flex flex-col md:flex-row justify-between items-start md:items-end gap-6 text-white text-center md:text-left">
			<div class="space-y-4">
				<h1 class="text-4xl md:text-6xl font-bold tracking-tight"><?php the_title(); ?></h1>
				<div class="flex items-center gap-2 text-gray-500 text-lg uppercase tracking-wider font-semibold">
					<svg class="w-5 h-5 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
					<?php echo esc_html( $location ); ?>
				</div>
			</div>
			<div class="space-y-2">
				<div class="text-sm text-gray-500 uppercase font-semibold"><?php _e( 'Price', 'estatein' ); ?></div>
				<div class="text-3xl font-bold text-white"><?php echo esc_html( $price ); ?></div>
			</div>
		</div>

		<!-- Gallery Placeholder / Thumbnail -->
		<div class="container mx-auto px-6 mb-20 relative">
			<div class="absolute -inset-4 bg-gradient-to-tr from-[#703BF7]/10 to-transparent blur-3xl opacity-50"></div>
			<div class="relative overflow-hidden rounded-[2.5rem] border-8 border-[#1A1A1A] shadow-2xl aspect-[21/9]">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-full object-cover' ) ); ?>
				<?php endif; ?>
			</div>
		</div>

		<!-- Specs Grid -->
		<div class="container mx-auto px-6 mb-20 grid grid-cols-2 md:grid-cols-4 gap-6">
			<div class="p-8 bg-[#1A1A1A] rounded-2xl border border-white/5 space-y-2 group hover:border-[#703BF7]/50 transition-all">
				<div class="text-sm text-gray-500 uppercase font-semibold"><?php _e( 'Bedrooms', 'estatein' ); ?></div>
				<div class="text-2xl font-bold text-white flex items-center gap-3">
					<svg class="w-6 h-6 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
					<?php echo esc_html( $beds ); ?>
				</div>
			</div>
			<div class="p-8 bg-[#1A1A1A] rounded-2xl border border-white/5 space-y-2 group hover:border-[#703BF7]/50 transition-all">
				<div class="text-sm text-gray-500 uppercase font-semibold"><?php _e( 'Bathrooms', 'estatein' ); ?></div>
				<div class="text-2xl font-bold text-white flex items-center gap-3">
					<svg class="w-6 h-6 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
					<?php echo esc_html( $baths ); ?>
				</div>
			</div>
			<div class="p-8 bg-[#1A1A1A] rounded-2xl border border-white/5 space-y-2 group hover:border-[#703BF7]/50 transition-all">
				<div class="text-sm text-gray-500 uppercase font-semibold"><?php _e( 'Surface', 'estatein' ); ?></div>
				<div class="text-2xl font-bold text-white flex items-center gap-3">
					<svg class="w-6 h-6 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V5z"></path></svg>
					<?php echo esc_html( $size ); ?> sqft
				</div>
			</div>
			<div class="p-8 bg-[#1A1A1A] rounded-2xl border border-white/5 space-y-2 transition-all">
				<a href="#contact" class="flex items-center justify-center h-full w-full bg-[#703BF7] text-white font-bold rounded-xl hover:bg-[#5B2FD1] transition-all">
					<?php _e( 'Consult Now', 'estatein' ); ?>
				</a>
			</div>
		</div>

		<!-- Description -->
		<div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-3 gap-12">
			<div class="lg:col-span-2 prose prose-invert prose-purple max-w-none">
				<h2 class="text-2xl font-bold text-white mb-6 uppercase tracking-wider"><?php _e( 'About this Property', 'estatein' ); ?></h2>
				<?php the_content(); ?>
			</div>
			
			<div class="space-y-8">
				<div class="p-8 bg-[#1A1A1A] rounded-2xl border border-white/5">
					<h3 class="text-xl font-bold text-white mb-6"><?php _e( 'Featured Property', 'estatein' ); ?></h3>
					<p class="text-gray-400 text-sm leading-relaxed mb-6">
						<?php _e( 'This property has been verified by our experts and meets Estatein\'s highest quality standards.', 'estatein' ); ?>
					</p>
					<div class="flex items-center gap-4 p-4 bg-white/5 rounded-xl border border-white/10">
						<div class="w-10 h-10 bg-[#703BF7] rounded flex items-center justify-center">
							<svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04"></path></svg>
						</div>
						<div class="text-sm font-semibold"><?php _e( 'Verified by Estatein', 'estatein' ); ?></div>
					</div>
				</div>
			</div>
		</div>

	</article>

<?php
endwhile;
get_footer(); ?>
