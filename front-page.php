<?php
/**
 * The front page template file
 *
 * @package Estatein
 */

get_header(); ?>

<!-- Hero Section -->
<section class="relative bg-estatein-dark-900 pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
	<!-- Background Pattern -->
	<div class="absolute inset-0 opacity-10 pointer-events-none">
		<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-estatein-purple blur-[120px] rounded-full -translate-y-1/2 translate-x-1/2"></div>
	</div>

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
					<?php echo $hero_title ?: 'Discover Your <span class="text-white/60 italic font-medium">Dream Property</span> with Estatein'; ?>
				</h2>
				<p class="text-lg lg:text-xl text-estatein-grey-60 mb-10 max-w-xl leading-relaxed lg:pr-10">
					<?php echo esc_html($hero_desc ?: 'Your journey to finding the perfect home starts here. Explore our curated selection of properties that match your lifestyle and aspirations.'); ?>
				</p>
				
				<div class="flex flex-wrap gap-4 mb-16">
					<a href="<?php echo get_post_type_archive_link('properties'); ?>" class="px-8 py-4 bg-estatein-purple text-white rounded-xl font-bold hover:bg-[#5B2FD1] transition-all shadow-lg shadow-purple-500/20 transform hover:-translate-y-1">
						<?php esc_html_e( 'Browse Properties', 'estatein' ); ?>
					</a>
					<a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="px-8 py-4 bg-transparent text-white border border-estatein-dark-700 rounded-xl font-bold hover:bg-white/5 transition-all transform hover:-translate-y-1">
						<?php esc_html_e( 'Learn More', 'estatein' ); ?>
					</a>
				</div>

				<!-- Stats Row -->
				<div class="grid grid-cols-2 md:grid-cols-3 gap-0 bg-estatein-dark-800 rounded-2xl border border-estatein-dark-700 overflow-hidden shadow-2xl">
					<div class="p-8 border-r border-estatein-dark-700">
						<div class="text-4xl font-bold text-white mb-2">200+</div>
						<div class="text-xs text-estatein-grey-60 uppercase tracking-widest font-bold"><?php esc_html_e( 'Happy Customers', 'estatein' ); ?></div>
					</div>
					<div class="p-8 border-r border-estatein-dark-700">
						<div class="text-4xl font-bold text-white mb-2">10k+</div>
						<div class="text-xs text-estatein-grey-60 uppercase tracking-widest font-bold"><?php esc_html_e( 'Properties Found', 'estatein' ); ?></div>
					</div>
					<div class="p-8 hidden md:block">
						<div class="text-4xl font-bold text-white mb-2">16+</div>
						<div class="text-xs text-estatein-grey-60 uppercase tracking-widest font-bold"><?php esc_html_e( 'Years of Exp.', 'estatein' ); ?></div>
					</div>
				</div>
			</div>

			<!-- Right Column: Image with Figma-style frame -->
			<div class="relative flex justify-center lg:justify-end">
				<div class="relative w-full max-w-[550px]">
					<!-- Decorative elements -->
					<div class="absolute -top-6 -right-6 w-24 h-24 border-t-2 border-r-2 border-estatein-purple/30 rounded-tr-3xl animate-pulse"></div>
					<div class="absolute -bottom-6 -left-6 w-24 h-24 border-b-2 border-l-2 border-estatein-purple/30 rounded-bl-3xl animate-pulse"></div>
					
					<div class="relative overflow-hidden rounded-[2.5rem] border-[12px] border-estatein-dark-800 bg-estatein-dark-800 shadow-2xl">
						<img src="<?php echo esc_url($hero_img ?: 'https://images.unsplash.com/photo-1613490493576-7fde63acd811?auto=format&fit=crop&q=80&w=1200'); ?>" 
							 alt="Modern Mansion" 
							 class="w-full h-[550px] object-cover transition-transform duration-1000 group-hover:scale-105" />
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Quick Navigation Categories -->
<section class="bg-estatein-dark-900 border-y border-estatein-dark-700">
	<div class="container mx-auto p-4 md:p-8">
		<div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
			<?php 
			$features = [
				['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'title' => 'Find Your Dream Home', 'link' => get_post_type_archive_link('properties')],
				['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Unlock Property Value', 'link' => home_url('/contacto')],
				['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'Effortless Management', 'link' => home_url('/services')],
				['icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z', 'title' => 'Smart Investments', 'link' => home_url('/services')],
			];
			foreach ($features as $f): ?>
			<a href="<?php echo esc_url($f['link']); ?>" class="bg-estatein-dark-800 border border-estatein-dark-700 rounded-xl p-8 flex flex-col items-center text-center group hover:border-estatein-purple/50 transition-all duration-300">
				<div class="mb-5 p-3 bg-estatein-dark-900 border border-estatein-dark-700 rounded-lg text-estatein-purple group-hover:bg-estatein-purple group-hover:text-white transition-all">
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $f['icon']; ?>"></path></svg>
				</div>
				<h3 class="text-white font-medium text-sm"><?php echo $f['title']; ?></h3>
			</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Featured Properties -->
<section class="bg-estatein-dark-900 py-24">
	<div class="container mx-auto px-6">
		<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
			<div class="max-w-2xl">
				<span class="text-estatein-purple font-bold tracking-widest uppercase text-sm mb-4 block">Featured Properties</span>
				<h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Discover Our Handpicked Properties</h2>
				<p class="text-estatein-grey-60 leading-relaxed">Each property in our portfolio is selected for its excellence. From modern lofts to luxury estates, find what moves you.</p>
			</div>
			<a href="<?php echo get_post_type_archive_link('properties'); ?>" class="px-10 py-4 bg-estatein-dark-800 border border-estatein-dark-700 rounded-xl text-white font-bold hover:bg-white/5 transition-all">
				View All Properties
			</a>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php
			$props = new WP_Query(['post_type' => 'properties', 'posts_per_page' => 3]);
			if ($props->have_posts()):
				while ($props->have_posts()): $props->the_post();
					get_template_part('template-parts/content', 'property-card');
				endwhile;
				wp_reset_postdata();
			else:
				for($i=0; $i<3; $i++): ?>
					<div class="bg-estatein-dark-800 border border-estatein-dark-700 rounded-[2rem] p-4 opacity-50">
						<div class="aspect-video bg-estatein-dark-700 rounded-2xl mb-6"></div>
						<div class="h-6 bg-estatein-dark-700 w-3/4 mb-4 rounded"></div>
						<div class="h-4 bg-estatein-dark-700 w-1/2 rounded"></div>
					</div>
				<?php endfor;
			endif;
			?>
		</div>
	</div>
</section>

<!-- CTA Banner -->
<section class="bg-estatein-dark-900 pb-24">
	<div class="container mx-auto px-6">
		<div class="relative p-12 lg:p-24 bg-gradient-to-br from-estatein-dark-800 to-estatein-dark-900 rounded-[3rem] border border-estatein-dark-700 overflow-hidden group">
			<!-- Decorative Background -->
			<div class="absolute top-0 right-0 w-1/2 h-full opacity-10 pointer-events-none transform translate-x-1/4">
				<svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
					<path d="M0,200 C0,100 100,0 200,0 C300,0 400,100 400,200 C400,300 300,400 200,400 C100,400 0,300 0,200" fill="#703BF7" />
				</svg>
			</div>

			<div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center">
				<div>
					<h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Start Your Real Estate Journey Today</h2>
					<p class="text-estatein-grey-60 text-lg">Your dream property is only a few clicks away. Whether you're looking for a new home, a smart investment, or professional management services, Estatein is here to help you every step of the way.</p>
				</div>
				<div class="lg:text-right">
					<a href="<?php echo home_url('/contacto'); ?>" class="inline-block px-10 py-5 bg-estatein-purple text-white font-bold rounded-xl hover:bg-[#5B2FD1] transition-all shadow-xl shadow-purple-500/20 transform hover:scale-105">
						Explore Properties
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
