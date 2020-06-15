<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package traiphim
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'traiphim' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container d-flex">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu([
					'theme_location'  => 'menu-1',
					'menu_id'         => 'primary-menu',
				]);
				?>
			</nav>

			<?php echo get_search_form(); ?>

			<div class="socials">
				<a href="#" target="_blank"><img src="<?= IMG . '/yt.png' ?>"></a>
				<a href="https://www.facebook.com/Traiphim.vn" target="_blank"><img src="<?= IMG . '/fa.png' ?>"></a>
			</div>

			<button class="menu-toggle" aria-expanded="false"><ion-icon name="menu-sharp"></ion-icon></button>
		</div>
	</header><!-- #masthead -->
