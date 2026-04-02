<?php
/**
 * The template for displaying the footer
 *
 * @package Estatein
 */
?>

	</main><!-- #primary -->

	<footer id="colophon" class="site-footer bg-estatein-dark-900 pt-24 pb-12 border-t border-estatein-dark-700">
		<div class="container mx-auto px-6">
			<!-- Main Footer Grid -->
			<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-12 mb-20">
				
				<!-- Brand & Newsletter -->
				<div class="col-span-2 lg:col-span-2">
					<div class="flex items-center gap-2 mb-8">
						<span class="w-8 h-8 bg-estatein-purple rounded flex items-center justify-center text-xs font-bold text-white">E</span>
						<span class="text-xl font-bold text-white tracking-tight">Estatein</span>
					</div>
					
					<div class="relative max-w-sm mb-8">
						<input type="email" placeholder="Enter Your Email" class="w-full bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl px-6 py-4 focus:border-estatein-purple outline-none text-sm transition-all">
						<button class="absolute right-2 top-2 p-3 bg-estatein-purple rounded-lg text-white hover:bg-[#5B2FD1] transition-all">
							<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
						</button>
					</div>

					<div class="flex gap-4">
						<a href="#" class="w-10 h-10 bg-estatein-dark-800 border border-estatein-dark-700 rounded-full flex items-center justify-center hover:bg-estatein-purple transition-all text-gray-400 hover:text-white">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
						</a>
						<a href="#" class="w-10 h-10 bg-estatein-dark-800 border border-estatein-dark-700 rounded-full flex items-center justify-center hover:bg-estatein-purple transition-all text-gray-400 hover:text-white">
							<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.058-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
						</a>
					</div>
				</div>

				<!-- Nav Columns -->
				<div>
					<h4 class="text-white font-bold mb-6 text-sm uppercase tracking-widest"><?php _e('Home', 'estatein'); ?></h4>
					<ul class="space-y-4 text-sm text- estatein-grey-60 font-medium">
						<li><a href="<?php echo home_url('/'); ?>" class="hover:text-white transition-colors">Hero Section</a></li>
						<li><a href="<?php echo home_url('/#features'); ?>" class="hover:text-white transition-colors">Features</a></li>
						<li><a href="<?php echo home_url('/#properties'); ?>" class="hover:text-white transition-colors">Properties</a></li>
						<li><a href="<?php echo home_url('/#testimonials'); ?>" class="hover:text-white transition-colors">Testimonials</a></li>
						<li><a href="<?php echo home_url('/#faq'); ?>" class="hover:text-white transition-colors">FAQ’s</a></li>
					</ul>
				</div>

				<div>
					<h4 class="text-white font-bold mb-6 text-sm uppercase tracking-widest"><?php _e('About Us', 'estatein'); ?></h4>
					<ul class="space-y-4 text-sm text-estatein-grey-60 font-medium">
						<li><a href="<?php echo home_url('/about'); ?>" class="hover:text-white transition-colors">Our Story</a></li>
						<li><a href="<?php echo home_url('/about#works'); ?>" class="hover:text-white transition-colors">Our Works</a></li>
						<li><a href="<?php echo home_url('/about#team'); ?>" class="hover:text-white transition-colors">Our Team</a></li>
						<li><a href="<?php echo home_url('/about#clients'); ?>" class="hover:text-white transition-colors">Our Clients</a></li>
					</ul>
				</div>

				<div>
					<h4 class="text-white font-bold mb-6 text-sm uppercase tracking-widest"><?php _e('Properties', 'estatein'); ?></h4>
					<ul class="space-y-4 text-sm text-estatein-grey-60 font-medium">
						<li><a href="<?php echo get_post_type_archive_link('properties'); ?>" class="hover:text-white transition-colors">Portfolio</a></li>
						<li><a href="<?php echo get_post_type_archive_link('properties'); ?>" class="hover:text-white transition-colors">Categories</a></li>
					</ul>
				</div>

				<div>
					<h4 class="text-white font-bold mb-6 text-sm uppercase tracking-widest"><?php _e('Services', 'estatein'); ?></h4>
					<ul class="space-y-4 text-sm text-estatein-grey-60 font-medium">
						<li><a href="<?php echo home_url('/services'); ?>" class="hover:text-white transition-colors">Valuation</a></li>
						<li><a href="<?php echo home_url('/services#management'); ?>" class="hover:text-white transition-colors">Management</a></li>
						<li><a href="<?php echo home_url('/services#investments'); ?>" class="hover:text-white transition-colors">Investments</a></li>
					</ul>
				</div>

				<div>
					<h4 class="text-white font-bold mb-6 text-sm uppercase tracking-widest"><?php _e('Contact Us', 'estatein'); ?></h4>
					<ul class="space-y-4 text-sm text-estatein-grey-60 font-medium">
						<li><a href="<?php echo home_url('/contacto'); ?>" class="hover:text-white transition-colors">Contact Form</a></li>
						<li><a href="<?php echo home_url('/contacto#offices'); ?>" class="hover:text-white transition-colors">Our Offices</a></li>
					</ul>
				</div>

			</div>

			<!-- Bottom Bar -->
			<div class="pt-8 border-t border-estatein-dark-700 flex flex-col md:flex-row justify-between items-center gap-6">
				<div class="text-sm text-estatein-grey-60 font-medium">
					&copy; <?php echo date('Y'); ?> Estatein. All Rights Reserved.
				</div>
				<div class="flex gap-8 text-sm text-estatein-grey-60 font-medium">
					<a href="#" class="hover:text-white transition-colors">Terms & Conditions</a>
					<a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
