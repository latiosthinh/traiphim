<section class="banner">
    <div class="banner-slider">
        <?php
        $banners = rwmb_meta( 'banner', array( 'size' => 'thumbnail' ) );
        foreach ( $banners as $image ) {
            echo '<img src="' . $image['full_url'] . '">';
        }
        ?>
    </div>

    <div class="banner-title container">
        <div class="row">
            <div class="col-md-8">
                <div class="content">
                    <?php
                    $banner_content = rwmb_meta( 'banner_content' );
                    
                    foreach ( $banner_content as $content ) :
                        $title = $content['banner_title'];
                        $des = $content['banner_description'];
                    ?>

                    <div class="item">
                        <h2><?= $title ?></h2>
                        <p><?= $des ?></p>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
