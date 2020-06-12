<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package traiphim
 */

get_header();
?>

<div class="container">

	<?php if ( have_posts() ) : ?>

		<h1 class="page-title">
			<?php printf( esc_html__( 'Từ khoá: %s', 'traiphim' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>

		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="col-md-25">
					<?php get_template_part( 'template-parts/content-movie' ); ?>
				</div>

			<?php endwhile; ?>
		</div>
	<?php
	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</div>

<?php
get_footer();
