<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-gray-50 text-gray-900 overflow-x-hidden' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site min-h-screen flex flex-col">
	<header id="masthead" class="site-header fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
		<div class="container mx-auto px-4 py-4 flex justify-between items-center">
			<div class="site-branding">
				<?php if ( is_front_page() ) : ?>
					<h1 class="site-title text-2xl font-extrabold tracking-tight text-indigo-600">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</h1>
				<?php else : ?>
					<p class="site-title text-2xl font-extrabold tracking-tight text-indigo-600">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation hidden md:block">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'menu_class'     => 'flex space-x-8 text-sm font-medium hover:text-indigo-500 transition-colors',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			
			<div class="md:hidden">
				<!-- Menu toggler placeholder for basic theme -->
				<button type="button" class="text-gray-500 hover:text-indigo-600 focus:outline-none">
					<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="4 6h16M4 12h16M4 18h16" />
					</svg>
				</button>
			</div>
		</div>
	</header><!-- #masthead -->

	<main id="primary" class="site-main flex-grow pt-24">
