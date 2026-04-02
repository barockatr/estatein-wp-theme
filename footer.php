	</main><!-- #primary -->

	<footer id="colophon" class="site-footer bg-[#1A1A1A] py-20 mt-20 border-t border-white/5 relative overflow-hidden">
		<!-- Decorative Background Element -->
		<div class="absolute bottom-0 right-0 w-96 h-96 bg-[#703BF7]/5 blur-3xl rounded-full translate-y-1/2 translate-x-1/2"></div>
		
		<div class="container mx-auto px-6">
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
				<!-- Brand Column -->
				<div class="space-y-6">
					<div class="flex items-center gap-2">
						<span class="w-8 h-8 bg-[#703BF7] rounded flex items-center justify-center text-xs font-bold text-white">E</span>
						<span class="text-xl font-bold tracking-tight text-white"><?php bloginfo( 'name' ); ?></span>
					</div>
					<p class="text-gray-500 text-sm leading-relaxed">
						<?php esc_html_e( 'Tu socio de confianza en bienes raíces de lujo. Encontramos el lugar perfecto para tu próximo capítulo.', 'estatein' ); ?>
					</p>
				</div>

				<!-- Navigation Column -->
				<div class="space-y-6">
					<h4 class="text-white font-bold uppercase tracking-widest text-xs"><?php _e( 'Navegación', 'estatein' ); ?></h4>
					<nav class="footer-navigation" aria-label="Footer Navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'menu_class'     => 'flex flex-col space-y-4 text-sm text-gray-500',
								'container'      => false,
								'depth'          => 1,
							)
						);
						?>
					</nav>
				</div>

				<!-- Newsletter Column -->
				<div class="lg:col-span-2 space-y-6">
					<h4 class="text-white font-bold uppercase tracking-widest text-xs"><?php _e( 'Boletín Semanal', 'estatein' ); ?></h4>
					<p class="text-gray-500 text-sm"><?php _e( 'Suscríbete para recibir las últimas propiedades y noticias del mercado.', 'estatein' ); ?></p>
					<form class="flex gap-4">
						<input type="email" placeholder="Tu correo" class="bg-white/5 border border-white/10 rounded-xl px-5 py-3 focus:outline-none focus:border-[#703BF7] text-white flex-grow">
						<button class="bg-[#703BF7] p-3 rounded-xl hover:bg-[#5B2FD1] transition-all">
							<svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
						</button>
					</form>
				</div>
			</div>

			<div class="pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
				<div class="site-info text-xs text-gray-600">
					&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Todos los derechos reservados.', 'estatein' ); ?>
				</div>
				<div class="flex gap-6 text-xs text-gray-600">
					<a href="#" class="hover:text-white transition-colors"><?php _e( 'Política de Privacidad', 'estatein' ); ?></a>
					<a href="#" class="hover:text-white transition-colors"><?php _e( 'Términos de Servicio', 'estatein' ); ?></a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
