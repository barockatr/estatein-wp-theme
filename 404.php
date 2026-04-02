<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Estatein
 */

get_header();
?>

<section class="bg-[#141414] min-h-[70vh] flex items-center justify-center text-center px-6">
	<div class="max-w-xl">
		<div class="relative inline-block mb-8">
			<div class="absolute -inset-4 bg-[#703BF7]/20 blur-3xl rounded-full"></div>
			<h1 class="text-9xl font-black text-white/10 relative">404</h1>
			<div class="absolute inset-0 flex items-center justify-center">
				<p class="text-4xl font-bold text-white tracking-widest uppercase"><?php esc_html_e( 'Perdido', 'estatein' ); ?></p>
			</div>
		</div>
		
		<h2 class="text-2xl md:text-3xl font-bold text-white mb-6">
			<?php esc_html_e( 'Parece que esta página no existe.', 'estatein' ); ?>
		</h2>
		<p class="text-gray-400 mb-10 leading-relaxed">
			<?php esc_html_e( 'Lo sentimos, pero la página que buscas no se pudo encontrar. Tal vez puedas encontrar lo que buscas en nuestra página de inicio.', 'estatein' ); ?>
		</p>
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block px-10 py-5 bg-[#703BF7] text-white font-bold rounded-xl hover:bg-[#5B2FD1] transition-all shadow-lg shadow-purple-500/20 uppercase tracking-widest text-sm">
			<?php esc_html_e( 'Volver al Inicio', 'estatein' ); ?>
		</a>
	</div>
</section>

<?php
get_footer();
