<?php defined( 'ABSPATH' ) || exit;  // Exit if accessed directly. ?> 

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo("description"); ?>" >
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/discord-favicon.ico">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header id="masthead" class="site-header">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'template' ); ?></a>
		<div class="container">

			<div class="logo">
				<?php if ( ! has_custom_logo() ) { ?> 
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/discord-logo-white.svg" alt="Logo"></a>

                <?php } else { the_custom_logo(); } ?>
			</div>

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<span class="sr-only">MENU</span>
			</button>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container' => false,
						'menu_class' => '',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="primary-menu" data-visible="false">%3$s</ul>',
					)
				);
				?>
				<div id="overlay"></div>
			</nav>

			<a href="#" class="button login-btn">Login</a>
		</div>
	</header>
		
	
<main class="site-main" id="primary">
