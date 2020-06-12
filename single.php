<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package traiphim
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="single-hero">
	<iframe src="https://www.youtube.com/embed/<?= rwmb_meta( 'trailer' ); ?>?controls=0&showinfo=0&playsinline=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
	<div class="content">
		<div class="container">
			<div class="row">

				<div class="image">
					<?php the_post_thumbnail(); ?>

					<span>Tập <?= rwmb_meta( 'episode' ); ?>/<?= rwmb_meta( 'total' ); ?></span>
				</div>

				<div class="details">
					<h1 class="h1"><?= get_the_title(); ?></h1>

					<div class="info">
						<span class="h4 cl-gr">Phim <?= get_the_category()[1]->name; ?></span>
						<span class="h4 cl-gr"><?= get_the_category()[0]->name; ?></span>
						<span class="h4 cl-gr"><?= rwmb_meta( 'total' ); ?> tập</span>
						<span class="h4">1234 lượt xem</span>
						<img src="<?= IMG . '/heart.png' ?>">
					</div>

					<div class="tags">
						<?php
						$tags = get_the_tags();
						foreach( $tags as $tag ) :
						?>
						<a href="<?= get_tag_link( $tag->slug ) ?>"><?= $tag->name ?></a>
						<?php
						endforeach;
						?>
					</div>

					<div class="actions">
						<a href="<?= rwmb_meta( 'youtube' ); ?>" target="_blank" class="main-btn">
							<img src="<?= IMG . '/tri.png' ?>">
							Xem ngay
						</a>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_the_permalink(); ?>" class="share">
							<img src="<?= IMG . '/f.png' ?>">
							Share on Facebook
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row description">
		<div class="col-md-12">
			<h3>Nội dung phim</h3>
			<?= get_the_content(); ?>
		</div>
	</div>
	
	<div class="actors">
		<h3>Diễn viên</h3>
		<div class="actors-slider single">
			<?php
			for ( $i=0; $i<10; $i++ ) :
				if ( get_post_meta( $id, "actors_{$i}_actor_image", true ) ) :
			?>

				<div class="actors-slider__item">
					<?= wp_get_attachment_image( get_post_meta( $id, "actors_{$i}_actor_image", true ), 'thumb-220' ); ?>
					<p><?= get_post_meta( $id, "actors_{$i}_actor_name", true ); ?></p>
				</div>

			<?php 
				endif;
			endfor;
			?>
		</div>
	</div>

	<div class="related">
		<h2>Phim liên quan <ion-icon name="chevron-forward-outline"></ion-icon></h2>

		<div class="movie-slider">
			<?php
			$args_1 = [
				'post_type'      => 'post',
				'tag_slug__in'   => [ 'hot' ],
				'tag__not_in'    => [ get_tag_ID( 'comming-soon' ) ],
				'orderby'        => 'rand',
				'posts_per_page' => 8
			];

			$posts_1 = new WP_Query($args_1);

			if ( $posts_1->have_posts() ) :
				while ( $posts_1->have_posts() ) :
					$posts_1->the_post();

					get_template_part( 'template-parts/content-movie' );

				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php
get_footer();
