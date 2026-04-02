<?php
/**
 * The front page template file
 *
 * @package Agencia_Figma
 */

get_header(); ?>

<section class="hero min-h-[70vh] flex items-center justify-center bg-gradient-to-br from-indigo-50 to-white">
	<div class="container mx-auto px-4 text-center">
		<h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 drop-shadow-sm">
			¡Hola Mundo!
		</h2>
		<p class="text-xl text-gray-600 max-w-2xl mx-auto mb-10 leading-relaxed">
			<?php esc_html_e( 'Bienvenido a Agencia Figma. Este es un tema personalizado de WordPress construido con Tailwind CSS para una maquetación rápida y potente.', 'agencia-figma' ); ?>
		</p>
		<div class="flex justify-center gap-4">
			<a href="#" class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-semibold hover:bg-indigo-700 transition-all shadow-md hover:shadow-lg">
				<?php esc_html_e( 'Comenzar Proyecto', 'agencia-figma' ); ?>
			</a>
			<a href="#" class="px-8 py-3 bg-white text-indigo-600 border border-indigo-200 rounded-lg font-semibold hover:bg-indigo-50 transition-all shadow-sm">
				<?php esc_html_e( 'Ver Servicios', 'agencia-figma' ); ?>
			</a>
		</div>
	</div>
</section>

<div class="container mx-auto px-4 py-20">
	<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
		<!-- Feature Cards -->
		<div class="p-8 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
			<div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
				<svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
			</div>
			<h3 class="text-xl font-bold mb-3"><?php esc_html_e( 'Diseño Figma', 'agencia-figma' ); ?></h3>
			<p class="text-gray-500"><?php esc_html_e( 'Diseños precisos y modernos listos para ser convertidos en código de alta calidad.', 'agencia-figma' ); ?></p>
		</div>
		
		<div class="p-8 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
			<div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6">
				<svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
			</div>
			<h3 class="text-xl font-bold mb-3"><?php esc_html_e( 'Rápido y Optimizado', 'agencia-figma' ); ?></h3>
			<p class="text-gray-500"><?php esc_html_e( 'Optimizado para SEO y velocidad de carga, garantizando la mejor experiencia de usuario.', 'agencia-figma' ); ?></p>
		</div>

		<div class="p-8 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
			<div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
				<svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04M12 2.944a11.955 11.955 0 01-8.618 3.04"></path></svg>
			</div>
			<h3 class="text-xl font-bold mb-3"><?php esc_html_e( 'WordPress Nativo', 'agencia-figma' ); ?></h3>
			<p class="text-gray-500"><?php esc_html_e( 'Siguiendo todos los estándares de WordPress para una base sólida y escalable.', 'agencia-figma' ); ?></p>
		</div>
	</div>
</div>

<?php
get_footer();
