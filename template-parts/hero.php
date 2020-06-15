<section class="banner">
    <div class="banner-slider">
        <?php
        $args = [
            'post_type'      => 'post',
            'tag_slug__in'   => [ 'hot' ],
            'posts_per_page' => 5
        ];

        $query = new WP_Query($args);

        if ( $query->have_posts() ) :
            $i = 0;
            while ( $query->have_posts() ) :
                $query->the_post();

                $id = get_the_ID();
        ?>
            
            <div class="banner-slider__item">
                <iframe
                    <?php if ( $i === 0 ) : ?>
                    src="https://www.youtube.com/embed/<?= rwmb_meta( 'trailer' ); ?>?'&autoplay=1&loop=1&controls=0&showinfo=0&playsinline=1&playlist=<?= rwmb_meta( 'trailer' ); ?>"
                    data-src="https://www.youtube.com/embed/<?= rwmb_meta( 'trailer' ); ?>?'&autoplay=1&loop=1&controls=0&showinfo=0&playsinline=1&playlist=<?= rwmb_meta( 'trailer' ); ?>"
                    <?php else : ?>
                    src=""
                    data-src="https://www.youtube.com/embed/<?= rwmb_meta( 'trailer' ); ?>?'&autoplay=1&loop=1&controls=0&showinfo=0&playsinline=1&playlist=<?= rwmb_meta( 'trailer' ); ?>"
                    <?php endif; ?>
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
                
                <?php $i+=1; ?>

                <div class="content">
                    <div class="container">
                        <h2 class="h1"><?= get_the_title(); ?></h2>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="info">
                                    <?php
                                        // var_dump( get_the_category() );
                                    ?>
                                    <span class="h4 cl-gr">Phim <?= get_the_category()[1]->name; ?></span>
                                    <span class="h4 cl-gr"><?= get_the_category()[0]->name; ?></span>
                                    <span class="h4 cl-gr"><?= rwmb_meta( 'total' ); ?> tập</span>
                                    <span class="h4">1234 lượt xem</span>
                                    <img src="<?= IMG . '/heart.png' ?>">
                                </div>
                                <div class="description"><?= rwmb_meta( 'description' ); ?></div>

                                <div class="actions">
                                    <a href="<?= rwmb_meta( 'youtube' ); ?>" target="_blank" class="main-btn">
                                        <img src="<?= IMG . '/tri.png' ?>">
                                        Xem ngay
                                    </a>
                                    <a href="<?= get_the_permalink(); ?>">Thông tin chi thiết <ion-icon name="arrow-forward-outline"></ion-icon></a>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="actors-slider">
                                    <?php
                                    for ( $i=0; $i<10; $i++ ) :
                                        if ( get_post_meta( $id, "actors_{$i}_actor_image", true ) ) :
                                    ?>

                                        <div class="actors-slider__item">
                                            <?= wp_get_attachment_image( get_post_meta( $id, "actors_{$i}_actor_image", true ), 'thumb-120' ); ?>
                                            <p><?= get_post_meta( $id, "actors_{$i}_actor_name", true ); ?></p>
                                        </div>

                                    <?php 
                                        endif;
                                    endfor;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            $i+=1;
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>