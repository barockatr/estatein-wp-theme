<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						'estatein-purple': '#703BF7',
						'estatein-dark-900': '#141414',
						'estatein-dark-800': '#1A1A1A',
						'estatein-dark-700': '#262626',
						'estatein-grey-60': '#999999',
					}
				}
			}
		}
	</script>
	<style>
		html { scroll-behavior: smooth; }
		body { font-family: 'Outfit', sans-serif; }
		.header-menu-container ul { display: flex; gap: 2rem; }
		.header-menu-container li a { color: #999999; transition: color 0.3s; font-size: 0.875rem; font-weight: 500; }
		.header-menu-container li a:hover, .header-menu-container li.current-menu-item a { color: #FFFFFF; background: #141414; padding: 12px 20px; border-radius: 10px; border: 1px solid #262626; }
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-[#141414] text-white overflow-x-hidden' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site min-h-screen flex flex-col">
	<header id="masthead" class="site-header fixed top-0 w-full z-50 bg-[#1A1A1A]/95 backdrop-blur-md border-b border-white/5 transition-all duration-300">
		<div class="container mx-auto px-6 py-4 flex justify-between items-center">
			
			<!-- Logo -->
			<div class="site-branding flex items-center">
				<?php
				if ( has_custom_logo() ) :
					the_custom_logo();
				else :
					if ( is_front_page() ) : ?>
						<h1 class="site-title text-xl font-bold tracking-tight text-white flex items-center gap-2">
							<span class="w-8 h-8 bg-[#703BF7] rounded flex items-center justify-center text-xs">E</span>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</h1>
					<?php else : ?>
						<p class="site-title text-xl font-bold tracking-tight text-white flex items-center gap-2">
							<span class="w-8 h-8 bg-[#703BF7] rounded flex items-center justify-center text-xs">E</span>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</p>
					<?php endif;
				endif;
				?>
			</div>

			<!-- Navigation Centered -->
			<nav id="site-navigation" class="main-navigation hidden lg:block header-menu-container" aria-label="Main Navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						'menu_id'        => 'primary-menu',
						'container'      => false,
					)
				);
				?>
			</nav>

			<!-- Right Section: Button -->
			<div class="flex items-center gap-4">
				<a href="#" class="hidden md:block px-6 py-3 rounded-lg border border-white/10 bg-[#1A1A1A] hover:bg-white/5 transition-all text-sm font-medium">
					<?php esc_html_e( 'Contact Us', 'estatein' ); ?>
				</a>
				
				<!-- Mobile Menu Toggle -->
				<button type="button" class="lg:hidden text-white hover:text-[#703BF7] focus:outline-none p-2 rounded-lg bg-white/5" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
					<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
					</svg>
				</button>
			</div>

		</div>
	</header><!-- #masthead -->

	<main id="primary" class="site-main flex-grow pt-20">
