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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'traiphim' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container d-flex">
			<div class="site-branding d-flex">
				<?php the_custom_logo(); ?>
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<h1>ĐẠI HỌC QUỐC GIA HÀ NỘI</h1>
					<h2>Trường Đại Học Kinh Tế</h2>
					<h3>VNU - UNIVERSITY OF ECONOMICS AND BUSINESS</h3>
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>

		<div class="register">
			<h3>Alumni Association</h3>
			<a href="">ĐĂNG KÝ</a>
		</div>
	</header><!-- #masthead -->
