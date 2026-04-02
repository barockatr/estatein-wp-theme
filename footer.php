	</main><!-- #primary -->

	<footer id="colophon" class="site-footer bg-gray-100 py-12 mt-20 border-t border-gray-200">
		<div class="container mx-auto px-4">
			<div class="flex flex-col md:flex-row justify-between items-center gap-8">
				<div class="site-info text-sm text-gray-500 order-2 md:order-1">
					&copy; <?php echo date( 'Y' ); ?> 
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-semibold text-indigo-600 hover:text-indigo-400">
						<?php bloginfo( 'name' ); ?>
					</a>
					. <?php esc_html_e( 'Todos los derechos reservados.', 'estatein' ); ?>
				</div><!-- .site-info -->

				<nav class="footer-navigation order-1 md:order-2">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu_class'     => 'flex space-x-6 text-sm text-gray-600',
							'container'      => false,
							'depth'          => 1,
						)
					);
					?>
				</nav>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
