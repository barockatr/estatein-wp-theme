<?php
/**
 * The front page template file
 *
 * @package Estatein
 */

get_header(); ?>

<!-- Hero Section -->
<section class="relative bg-[#141414] pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
	<div class="container mx-auto px-6">
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
			
			<!-- Left Column: Content -->
			<div class="relative z-10">
				<?php 
				$hero_title = get_field('hero_title');
				$hero_desc = get_field('hero_description');
				$hero_img = get_field('hero_image');
				?>
				<h2 class="text-5xl lg:text-7xl font-bold leading-tight mb-8 text-white tracking-tight">
					<?php echo $hero_title ?: 'Discover Your <span class="text-white/60 italic">Dream Property</span> <br class="hidden lg:block"> with Estatein'; ?>
				</h2>
				<p class="text-lg lg:text-xl text-gray-400 mb-10 max-w-xl leading-relaxed">
					<?php echo esc_html($hero_desc ?: 'Your journey to finding the perfect home starts here. Explore our curated selection of properties that match your lifestyle and aspirations.'); ?>
				</p>
				
				<div class="flex flex-wrap gap-4 mb-16">
					<a href="#" class="px-8 py-4 bg-[#703BF7] text-white rounded-xl font-semibold hover:bg-[#5B2FD1] transition-all shadow-lg shadow-purple-500/20">
						<?php esc_html_e( 'Browse Properties', 'estatein' ); ?>
					</a>
					<a href="#" class="px-8 py-4 bg-transparent text-white border border-white/10 rounded-xl font-semibold hover:bg-white/5 transition-all">
						<?php esc_html_e( 'Learn More', 'estatein' ); ?>
					</a>
				</div>

				<!-- Stats Row -->
				<div class="grid grid-cols-2 md:grid-cols-3 gap-8 p-8 lg:p-10 bg-[#1A1A1A] rounded-2xl border border-white/5 shadow-2xl">
					<div class="space-y-1">
						<div class="text-3xl font-bold text-white">200+</div>
						<div class="text-sm text-gray-500 uppercase tracking-wider font-semibold"><?php esc_html_e( 'Happy Customers', 'estatein' ); ?></div>
					</div>
					<div class="space-y-1">
						<div class="text-3xl font-bold text-white">10k+</div>
						<div class="text-sm text-gray-500 uppercase tracking-wider font-semibold"><?php esc_html_e( 'Properties Found', 'estatein' ); ?></div>
					</div>
					<div class="space-y-1 hidden md:block">
						<div class="text-3xl font-bold text-white">16+</div>
						<div class="text-sm text-gray-500 uppercase tracking-wider font-semibold"><?php esc_html_e( 'Years of Exp.', 'estatein' ); ?></div>
					</div>
				</div>
			</div>

			<!-- Right Column: Image -->
			<div class="relative group">
				<div class="absolute -inset-4 bg-gradient-to-tr from-[#703BF7]/20 to-transparent blur-3xl opacity-50 group-hover:opacity-75 transition-opacity"></div>
				<div class="relative overflow-hidden rounded-[2.5rem] border-8 border-[#1A1A1A] shadow-2xl aspect-[4/5] lg:aspect-auto">
					<img src="<?php echo esc_url($hero_img ?: 'https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&q=80&w=1200'); ?>" 
						 alt="<?php echo esc_attr($hero_title ?: 'Modern Luxury Property'); ?>" 
						 class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700" />
					<div class="absolute inset-0 bg-gradient-to-t from-[#141414]/60 to-transparent"></div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Features / Services Placeholder -->
<div class="bg-[#141414] py-24 border-t border-white/5">
	<div class="container mx-auto px-6">
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
			<!-- Link to property types -->
			<div class="p-4 bg-[#1A1A1A] border border-white/10 rounded-xl hover:border-[#703BF7]/50 transition-colors cursor-pointer group">
				<div class="w-12 h-12 bg-white/5 rounded-lg flex items-center justify-center mb-4 group-hover:bg-[#703BF7]/10 transition-colors">
					<svg class="w-6 h-6 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
				</div>
				<h3 class="text-lg font-bold text-white mb-2"><?php esc_html_e( 'Find Your Dream Home', 'estatein' ); ?></h3>
			</div>
			
			<div class="p-4 bg-[#1A1A1A] border border-white/10 rounded-xl hover:border-[#703BF7]/50 transition-colors cursor-pointer group">
				<div class="w-12 h-12 bg-white/5 rounded-lg flex items-center justify-center mb-4 group-hover:bg-[#703BF7]/10 transition-colors">
					<svg class="w-6 h-6 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
				</div>
				<h3 class="text-lg font-bold text-white mb-2"><?php esc_html_e( 'Unlock Property Value', 'estatein' ); ?></h3>
			</div>

			<div class="p-4 bg-[#1A1A1A] border border-white/10 rounded-xl hover:border-[#703BF7]/50 transition-colors cursor-pointer group">
				<div class="w-12 h-12 bg-white/5 rounded-lg flex items-center justify-center mb-4 group-hover:bg-[#703BF7]/10 transition-colors">
					<svg class="w-6 h-6 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04"></path></svg>
				</div>
				<h3 class="text-lg font-bold text-white mb-2"><?php esc_html_e( 'Effortless Property Management', 'estatein' ); ?></h3>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
