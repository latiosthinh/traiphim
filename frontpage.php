<?php
/**
 * Template name: Home
 */

get_header();

get_template_part( 'template-parts/hero' );

?>
<section class="hot">
    <div class="container">
        <h2>Phim đang hot <ion-icon name="chevron-forward-outline"></ion-icon></h2>

        <div class="movie-slider">
            <?php
            $args_1 = [
                'post_type'      => 'post',
                'tag_slug__in'   => [ 'hot' ],
                'tag__not_in'    => [ get_tag_ID( 'comming-soon' ) ],
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
</section>

<section class="hot">
    <div class="container">
        <h2>Phim mới <ion-icon name="chevron-forward-outline"></ion-icon></h2>
        
        <div class="movie-slider">
            <?php
            $args_2 = [
                'post_type'      => 'post',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'tag__not_in'    => [ get_tag_ID( 'comming-soon' ) ],
                'posts_per_page' => 8
            ];

            $posts_2 = new WP_Query($args_2);

            if ( $posts_2->have_posts() ) :
                while ( $posts_2->have_posts() ) :
                    $posts_2->the_post();

                    get_template_part( 'template-parts/content-movie' );

                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<section class="hot">
    <div class="container">
        <h2>Phim sắp chiếu <ion-icon name="chevron-forward-outline"></ion-icon></h2>
        
        <div class="movie-soon-slider">
            <?php
            $args_3 = [
                'post_type'      => 'post',
                'tag_slug__in'   => [ 'comming-soon' ],
                'posts_per_page' => 8
            ];

            $posts_3 = new WP_Query($args_3);

            if ( $posts_3->have_posts() ) :
                while ( $posts_3->have_posts() ) :
                    $posts_3->the_post();
            ?>
                <article <?= post_class(); ?>>
                    <img src="<?= get_the_post_thumbnail_url(); ?>">
                </article>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php the_custom_logo(); ?>
            </div>
            <div class="col-md-8">
                <h2>Giới thiệu</h2>

                <p>
                    Mang đến cho bạn những bộ phim chuẩn HD, đầy đủ bản quyền. <br>
                    Độc quyền thuyết minh tiếng Việt trên kênh Youtube Trại phim. <br>
                    Cập nhật nhanh chóng những bộ phim hot nhất.
                </p>

                <div class="socials">
                    <span>Follow us:</span>

                    <a href="#" target="_blank"><img src="<?= IMG . '/yt.png' ?>"></a>
                    <a href="#" target="_blank"><img src="<?= IMG . '/fa.png' ?>"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();