<?php
/**
 * Template Name: Contact Us
 *
 * @package Estatein
 */

get_header(); ?>

<section class="bg-[#141414] pt-32 pb-20">
	<div class="container mx-auto px-6 mb-24 grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
		
		<!-- Contact Form Section -->
		<div class="p-8 lg:p-12 bg-[#1A1A1A] rounded-[2.5rem] border border-white/5 shadow-2xl relative overflow-hidden">
			<div class="absolute -top-24 -right-24 w-64 h-64 bg-[#703BF7]/10 blur-3xl rounded-full"></div>
			
			<h1 class="text-3xl md:text-5xl font-bold mb-8 text-white tracking-tight">
				Hablemos de tu <br><span class="text-white/60 italic">Próximo Inmueble</span>
			</h1>
			
			<form action="#" class="space-y-6 relative z-10">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
					<div class="space-y-2">
						<label class="text-sm font-semibold text-gray-500 uppercase tracking-wider"><?php _e( 'Nombre Completo', 'estatein' ); ?></label>
						<input type="text" class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 focus:outline-none focus:border-[#703BF7] transition-all text-white" placeholder="Ej: John Doe">
					</div>
					<div class="space-y-2">
						<label class="text-sm font-semibold text-gray-500 uppercase tracking-wider"><?php _e( 'Correo Electrónico', 'estatein' ); ?></label>
						<input type="email" class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 focus:outline-none focus:border-[#703BF7] transition-all text-white" placeholder="ejemplo@correo.com">
					</div>
				</div>
				<div class="space-y-2">
					<label class="text-sm font-semibold text-gray-500 uppercase tracking-wider"><?php _e( 'Asunto', 'estatein' ); ?></label>
					<input type="text" class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 focus:outline-none focus:border-[#703BF7] transition-all text-white" placeholder="Solicitud de información">
				</div>
				<div class="space-y-2">
					<label class="text-sm font-semibold text-gray-500 uppercase tracking-wider"><?php _e( 'Mensaje', 'estatein' ); ?></label>
					<textarea class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 focus:outline-none focus:border-[#703BF7] transition-all text-white h-40" placeholder="¿Cómo podemos ayudarte?"></textarea>
				</div>
				<button type="submit" class="w-full py-5 bg-[#703BF7] text-white font-bold rounded-xl hover:bg-[#5B2FD1] transition-all shadow-lg shadow-purple-500/20 uppercase tracking-widest text-sm">
					<?php _e( 'Enviar Mensaje', 'estatein' ); ?>
				</button>
			</form>
		</div>

		<!-- Office & Info Section -->
		<div class="space-y-12">
			<div>
				<h2 class="text-2xl font-bold text-white mb-8 border-b border-white/5 pb-4"><?php _e( 'Nuestras Oficinas', 'estatein' ); ?></h2>
				<div class="space-y-8">
					<div class="flex gap-6">
						<div class="w-12 h-12 bg-[#1A1A1A] rounded-xl flex items-center justify-center border border-white/5 group-hover:bg-[#703BF7]/10 transition-colors">
							<svg class="w-6 h-6 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
						</div>
						<div>
							<h3 class="text-lg font-bold text-white mb-2"><?php _e( 'Sede Central', 'estatein' ); ?></h3>
							<p class="text-gray-500 leading-relaxed"><?php _e( '123 Real Estate Ave, Suite 500<br>Malibu, CA 90265', 'estatein' ); ?></p>
						</div>
					</div>
					<div class="flex gap-6">
						<div class="w-12 h-12 bg-[#1A1A1A] rounded-xl flex items-center justify-center border border-white/5 group-hover:bg-[#703BF7]/10 transition-colors">
							<svg class="w-6 h-6 text-[#703BF7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
						</div>
						<div>
							<h3 class="text-lg font-bold text-white mb-2"><?php _e( 'Contacto Directo', 'estatein' ); ?></h3>
							<p class="text-gray-500 leading-relaxed"><?php _e( 'info@estatein.com<br>+1 (555) 123-4567', 'estatein' ); ?></p>
						</div>
					</div>
				</div>
			</div>

			<!-- Social Links -->
			<div class="p-8 bg-[#1A1A1A] rounded-2xl border border-white/5">
				<h3 class="text-xl font-bold text-white mb-6"><?php _e( 'Síguenos en redes', 'estatein' ); ?></h3>
				<div class="flex gap-4">
					<a href="#" class="w-12 h-12 bg-white/5 rounded-xl flex items-center justify-center hover:bg-[#703BF7] transition-all text-gray-400 hover:text-white">
						<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
					</a>
				</div>
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>
