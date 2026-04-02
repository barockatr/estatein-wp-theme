<?php
/**
 * Template Name: Contact Us
 *
 * @package Estatein
 */

get_header(); ?>

<!-- Hero Section -->
<section class="bg-estatein-dark-900 pt-32 pb-20 border-b border-estatein-dark-700">
	<div class="container mx-auto px-6 mb-24">
		<h1 class="text-4xl md:text-6xl font-bold mb-8 text-white tracking-tight uppercase">
			Get in Touch with <br><span class="text-estatein-grey-60 italic">Estatein</span>
		</h1>
		<p class="text-lg text-estatein-grey-60 max-w-3xl leading-relaxed">
			<?php esc_html_e( 'Connect with us today to start your real estate journey. Whether you have questions about buying, selling, or our services, our team in Malibu is ready to assist you.', 'estatein' ); ?>
		</p>
	</div>

	<!-- Contact Info Cards -->
	<div class="container mx-auto px-6 mb-24">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
			<?php 
			$info = [
				['label' => 'Email', 'value' => 'info@estatein.com', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
				['label' => 'Phone', 'value' => '+1 (555) 123-4567', 'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z'],
				['label' => 'Office', 'value' => 'Malibu, California', 'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z'],
				['label' => 'Socials', 'value' => 'LinkedIn, Twitter', 'icon' => 'M7 20l4-16m2 16l4-16M6 9h14M4 15h14'],
			];
			foreach ($info as $i): ?>
				<div class="p-8 bg-estatein-dark-800 border border-estatein-dark-700 rounded-2xl text-center group hover:border-estatein-purple/50 transition-all">
					<div class="w-12 h-12 bg-estatein-dark-900 border border-estatein-dark-700 rounded-lg flex items-center justify-center mx-auto mb-6 text-estatein-purple group-hover:bg-estatein-purple group-hover:text-white transition-all">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $i['icon']; ?>"></path></svg>
					</div>
					<div class="text-white font-bold mb-1"><?php echo $i['value']; ?></div>
					<div class="text-xs text-estatein-grey-60 uppercase tracking-widest"><?php echo $i['label']; ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<!-- Contact Form Section -->
	<div class="container mx-auto px-6 py-24 border-t border-estatein-dark-700">
		<div class="bg-estatein-dark-800 border border-estatein-dark-700 rounded-[3rem] p-8 lg:p-20 shadow-2xl relative overflow-hidden">
			<div class="absolute -top-24 -right-24 w-96 h-96 bg-estatein-purple/5 blur-3xl rounded-full"></div>
			
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-start relative z-10">
				<div>
					<h2 class="text-4xl font-bold text-white mb-6 italic">Let's Connect</h2>
					<p class="text-estatein-grey-60 text-lg leading-relaxed mb-12">We're here to answer any questions you may have about our real estate services. Fill out the form, and a member of our team will get back to you shortly.</p>
					
					<!-- Offices Detail -->
					<div class="space-y-8">
						<div class="flex gap-6">
							<div class="w-10 h-10 bg-estatein-dark-900 border border-estatein-dark-700 rounded-lg flex items-center justify-center text-white font-bold">1</div>
							<div>
								<h4 class="text-white font-bold mb-2">Main Headquarters</h4>
								<p class="text-estatein-grey-60 text-sm">123 Real Estate Ave, Suite 500, Malibu, CA 90265</p>
							</div>
						</div>
						<div class="flex gap-6">
							<div class="w-10 h-10 bg-estatein-dark-900 border border-estatein-dark-700 rounded-lg flex items-center justify-center text-white font-bold">2</div>
							<div>
								<h4 class="text-white font-bold mb-2">Global Operations</h4>
								<p class="text-estatein-grey-60 text-sm">info@estatein.com | +1 (555) 123-4567</p>
							</div>
						</div>
					</div>
				</div>

				<!-- The Form -->
				<form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-6">
					<div class="space-y-2">
						<label class="text-xs font-bold text-white uppercase tracking-widest pl-1">First Name</label>
						<input type="text" class="w-full bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl px-6 py-4 focus:ring-2 focus:ring-estatein-purple focus:border-transparent outline-none transition-all placeholder-gray-700" placeholder="Enter First Name">
					</div>
					<div class="space-y-2">
						<label class="text-xs font-bold text-white uppercase tracking-widest pl-1">Last Name</label>
						<input type="text" class="w-full bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl px-6 py-4 focus:ring-2 focus:ring-estatein-purple focus:border-transparent outline-none transition-all placeholder-gray-700" placeholder="Enter Last Name">
					</div>
					<div class="space-y-2">
						<label class="text-xs font-bold text-white uppercase tracking-widest pl-1">Email</label>
						<input type="email" class="w-full bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl px-6 py-4 focus:ring-2 focus:ring-estatein-purple focus:border-transparent outline-none transition-all placeholder-gray-700" placeholder="Enter your Email">
					</div>
					<div class="space-y-2">
						<label class="text-xs font-bold text-white uppercase tracking-widest pl-1">Phone</label>
						<input type="tel" class="w-full bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl px-6 py-4 focus:ring-2 focus:ring-estatein-purple focus:border-transparent outline-none transition-all placeholder-gray-700" placeholder="Enter Phone Number">
					</div>
					<div class="md:col-span-2 space-y-2">
						<label class="text-xs font-bold text-white uppercase tracking-widest pl-1">Inquiry Type</label>
						<select class="w-full bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl px-6 py-4 focus:ring-2 focus:ring-estatein-purple focus:border-transparent outline-none appearance-none transition-all">
							<option>Select Inquiry Type</option>
							<option>Buying</option>
							<option>Selling</option>
							<option>Investment</option>
						</select>
					</div>
					<div class="md:col-span-2 space-y-2">
						<label class="text-xs font-bold text-white uppercase tracking-widest pl-1">Message</label>
						<textarea class="w-full bg-estatein-dark-900 border border-estatein-dark-700 rounded-xl px-6 py-4 h-32 focus:ring-2 focus:ring-estatein-purple focus:border-transparent outline-none transition-all placeholder-gray-700" placeholder="Enter your Message here..."></textarea>
					</div>
					<div class="md:col-span-2 flex items-center justify-between mt-4">
						<div class="flex items-center gap-3">
							<input type="checkbox" id="terms" class="w-5 h-5 accent-estatein-purple bg-estatein-dark-900 border-estatein-dark-700 rounded">
							<label for="terms" class="text-sm text-estatein-grey-60 font-medium cursor-pointer">I agree with Terms of Use and Privacy Policy</label>
						</div>
						<button type="submit" class="px-10 py-4 bg-estatein-purple text-white font-bold rounded-xl hover:bg-[#5B2FD1] transition-all shadow-xl shadow-purple-500/20">
							Send Message
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
