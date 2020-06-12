<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package traiphim
 */

get_header();
?>

<div class="container">

	<?php if ( have_posts() ) : ?>

		<h1 class="page-title">Phim <?php single_term_title(); ?></h1>

		<div class="filter">
			<p>Sắp xếp theo:</p>

			<a class="filter-newest">Mới thêm</a>
			<select class="filter-by-year">
				<option value="">Năm phát hành</option>
				<?php
				$term_id = get_category_by_slug( 'nam-phat-hanh' )->term_id;
				$taxonomy_name = 'category';
				$termchildren = get_term_children( $term_id, $taxonomy_name );
				
				foreach ( $termchildren as $child ) :
					$term = get_term_by( 'id', $child, $taxonomy_name );
				?>
					<option value="<?= $term->slug ?>"><?= $term->name ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="row movie-list">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="col-md-25">
					<?php get_template_part( 'template-parts/content-movie' ); ?>
				</div>

			<?php endwhile; ?>
		</div>
		
		<div class="load-more">
			<a class="load-more__btn"><ion-icon name="add-circle-outline"></ion-icon></a>
		</div>
	<?php
	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</div>


<?php
get_footer();
