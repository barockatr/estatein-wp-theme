<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<style>
		body { font-family: 'Outfit', sans-serif; }
		.header-menu-container ul { display: flex; gap: 2rem; }
		.header-menu-container li a { color: #A0A0A0; transition: color 0.3s; font-size: 0.875rem; font-weight: 500; }
		.header-menu-container li a:hover { color: #FFFFFF; }
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
			<nav id="site-navigation" class="main-navigation hidden lg:block header-menu-container">
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
				<button type="button" class="lg:hidden text-white hover:text-[#703BF7] focus:outline-none p-2 rounded-lg bg-white/5">
					<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
					</svg>
				</button>
			</div>

		</div>
	</header><!-- #masthead -->

	<main id="primary" class="site-main flex-grow pt-20">
