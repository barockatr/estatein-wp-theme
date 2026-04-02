	</main><!-- #primary -->

	<footer id="colophon" class="site-footer bg-gray-100 py-12 mt-20 border-t border-gray-200">
		<div class="container mx-auto px-4 text-center">
			<div class="site-info text-sm text-gray-500">
				&copy; <?php echo date( 'Y' ); ?> 
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-semibold text-indigo-600 hover:text-indigo-400">
					<?php bloginfo( 'name' ); ?>
				</a>
				. <?php esc_html_e( 'Todos los derechos reservados.', 'agencia-figma' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
