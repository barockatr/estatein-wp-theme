<?php
/**
 * Template Name: About Us
 *
 * @package Estatein
 */

get_header(); ?>

<!-- Hero Section: Our Journey -->
<section class="bg-estatein-dark-900 pt-32 pb-20 border-b border-estatein-dark-700">
	<div class="container mx-auto px-6 mb-24">
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
			<div>
				<h1 class="text-4xl md:text-6xl font-bold mb-8 text-white tracking-tight uppercase">
					Our <span class="text-estatein-grey-60 italic">Journey</span>
				</h1>
				<p class="text-lg text-estatein-grey-60 max-w-xl leading-relaxed mb-12">
					<?php esc_html_e( 'Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate experience that prioritizes our clients above all else.', 'estatein' ); ?>
				</p>
				
				<!-- Stats Grid -->
				<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
					<div class="p-6 bg-estatein-dark-800 border border-estatein-dark-700 rounded-2xl">
						<div class="text-3xl font-bold text-white mb-1">200+</div>
						<div class="text-xs text-estatein-grey-60 uppercase tracking-widest font-bold">Happy Customers</div>
					</div>
					<div class="p-6 bg-estatein-dark-800 border border-estatein-dark-700 rounded-2xl">
						<div class="text-3xl font-bold text-white mb-1">10k+</div>
						<div class="text-xs text-estatein-grey-60 uppercase tracking-widest font-bold">Properties Found</div>
					</div>
					<div class="p-6 bg-estatein-dark-800 border border-estatein-dark-700 rounded-2xl md:col-span-1 col-span-2">
						<div class="text-3xl font-bold text-white mb-1">16+</div>
						<div class="text-xs text-estatein-grey-60 uppercase tracking-widest font-bold">Years of Exp.</div>
					</div>
				</div>
			</div>
			
			<div class="relative">
				<div class="relative overflow-hidden rounded-[2.5rem] border-[12px] border-estatein-dark-800 bg-estatein-dark-800 shadow-2xl h-[500px]">
					<img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80&w=1000" 
						 alt="Our Journey" 
						 class="w-full h-full object-cover">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Values Section -->
<section class="bg-estatein-dark-900 py-24 border-b border-estatein-dark-700">
	<div class="container mx-auto px-6">
		<div class="max-w-2xl mb-16">
			<h2 class="text-4xl font-bold text-white mb-6">Our Values</h2>
			<p class="text-estatein-grey-60">Our core values guide everything we do, ensuring that we provide the best possible service to our clients.</p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
			<?php 
			$values = [
				['title' => 'Trust', 'desc' => 'Trust is the cornerstone of every successful real estate transaction.', 'icon' => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z'],
				['title' => 'Excellence', 'desc' => 'We strive for excellence in every detail of our work, from marketing to negotiation.', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-7.714 2.143L11 21l-2.286-6.857L1 12l7.714-2.143L11 3z'],
				['title' => 'Client-Centric', 'desc' => 'Your needs and goals are our top priority. We listen and tailor our approach.', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
				['title' => 'Commitment', 'desc' => 'We are committed to helping you achieve your real estate dreams.', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
			];
			foreach ($values as $v): ?>
			<div class="p-10 bg-estatein-dark-800 border border-estatein-dark-700 rounded-3xl relative overflow-hidden group">
				<div class="flex items-center gap-4 mb-6">
					<div class="w-14 h-14 bg-estatein-dark-900 border border-estatein-dark-700 rounded-full flex items-center justify-center text-estatein-purple group-hover:bg-estatein-purple group-hover:text-white transition-all">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $v['icon']; ?>"></path></svg>
					</div>
					<h3 class="text-2xl font-bold text-white"><?php echo $v['title']; ?></h3>
				</div>
				<p class="text-estatein-grey-60 leading-relaxed"><?php echo $v['desc']; ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Team Section -->
<section class="bg-estatein-dark-900 py-24" id="team">
	<div class="container mx-auto px-6">
		<div class="max-w-2xl mb-16">
			<h2 class="text-4xl font-bold text-white mb-6">Meet the Estatein Team</h2>
			<p class="text-estatein-grey-60">At Estatein, our success is driven by the dedication and expertise of our team. Get to know the people behind our exceptional service.</p>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
			<?php
			$team_query = new WP_Query(['post_type' => 'team', 'posts_per_page' => 4]);
			if ($team_query->have_posts()):
				while ($team_query->have_posts()): $team_query->the_post();
					?>
					<div class="bg-estatein-dark-800 border border-estatein-dark-700 rounded-[2rem] p-6 text-center group hover:border-estatein-purple/50 transition-all">
						<div class="relative overflow-hidden rounded-2xl mb-6 aspect-square bg-estatein-dark-900">
							<?php if (has_post_thumbnail()): the_post_thumbnail('medium', ['class' => 'w-full h-full object-cover']); else: ?>
								<div class="w-full h-full flex items-center justify-center text-gray-700">No Photo</div>
							<?php endif; ?>
							<a href="#" class="absolute bottom-4 left-1/2 -translate-x-1/2 w-12 h-12 bg-estatein-purple text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all transform translate-y-4 group-hover:translate-y-0">
								<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
							</a>
						</div>
						<h3 class="text-xl font-bold text-white mb-1"><?php the_title(); ?></h3>
						<p class="text-estatein-grey-60 text-sm mb-6">Real Estate Agent</p>
						<a href="#" class="inline-block w-full py-3 bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl text-white text-sm font-bold hover:bg-estatein-purple transition-all">Say Hello</a>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else:
				echo '<p class="text-gray-500 italic md:col-span-4 text-center">Add team members in the WP Admin.</p>';
			endif;
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
