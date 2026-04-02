<?php
/**
 * Template part for displaying property cards
 *
 * @package Estatein
 */

$price = get_field('property_price');
$location = get_field('property_location');
$beds = get_field('property_bedrooms');
$baths = get_field('property_bathrooms');
$size = get_field('property_size');
?>

<div class="bg-[#1A1A1A] border border-white/5 rounded-[2rem] overflow-hidden group hover:border-[#703BF7]/30 transition-all flex flex-col h-full">
	<!-- Image Container -->
	<div class="relative overflow-hidden aspect-[4/3]">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700' ) ); ?>
		<?php else : ?>
			<img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover">
		<?php endif; ?>
		<div class="absolute top-4 left-4">
			<span class="px-4 py-2 bg-[#141414]/80 backdrop-blur-md rounded-full text-xs font-bold text-white border border-white/10 uppercase tracking-widest">
				<?php _e('Featured', 'estatein'); ?>
			</span>
		</div>
	</div>

	<!-- Content -->
	<div class="p-8 flex flex-col flex-grow">
		<h3 class="text-xl font-bold text-white mb-2 group-hover:text-[#703BF7] transition-colors"><?php the_title(); ?></h3>
		<p class="text-gray-500 text-sm mb-6 flex items-center gap-2">
			<svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
			<?php echo esc_html($location ?: 'Location not available'); ?>
		</p>

		<!-- Features Row -->
		<div class="grid grid-cols-3 gap-2 mb-8">
			<div class="bg-[#141414] rounded-lg p-3 text-center border border-white/5">
				<div class="text-white font-bold text-sm"><?php echo $beds ?: '0'; ?></div>
				<div class="text-[10px] text-gray-600 uppercase tracking-tighter"><?php _e('Beds', 'estatein'); ?></div>
			</div>
			<div class="bg-[#141414] rounded-lg p-3 text-center border border-white/5">
				<div class="text-white font-bold text-sm"><?php echo $baths ?: '0'; ?></div>
				<div class="text-[10px] text-gray-600 uppercase tracking-tighter"><?php _e('Baths', 'estatein'); ?></div>
			</div>
			<div class="bg-[#141414] rounded-lg p-3 text-center border border-white/5">
				<div class="text-white font-bold text-sm"><?php echo $size ?: '0'; ?></div>
				<div class="text-[10px] text-gray-600 uppercase tracking-tighter"><?php _e('Sqft', 'estatein'); ?></div>
			</div>
		</div>

		<!-- Price & Action -->
		<div class="mt-auto flex justify-between items-center pt-6 border-t border-white/5">
			<div>
				<div class="text-xs text-gray-600 uppercase tracking-widest font-bold mb-1"><?php _e('Price', 'estatein'); ?></div>
				<div class="text-xl font-black text-white"><?php echo $price ?: '$0.00'; ?></div>
			</div>
			<a href="<?php the_permalink(); ?>" class="px-6 py-3 bg-[#703BF7] text-white text-sm font-bold rounded-xl hover:bg-[#5B2FD1] transition-all">
				<?php _e('View Details', 'estatein'); ?>
			</a>
		</div>
	</div>
</div>
