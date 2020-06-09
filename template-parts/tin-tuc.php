<section class="tin-tuc">
    <h2 data-aos="fade-up" data-aos-duration="1000">TIN TỨC</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                <a href="<?php echo rwmb_meta( 'tin_tuc_url' ) ?>">
                    <?php
                    $anh_tin_tuc = rwmb_meta( 'tin_tuc_thumbnail', array( 'size' => 'thumbnail' ) );

                    foreach ( $anh_tin_tuc as $img ) {
                    ?>
                        <img src="<?php echo $img[ 'full_url' ] ?>">
                    <?php
                    }
                    ?>

                    <h3><?php echo rwmb_meta( 'tin_tuc_title' ) ?></h3>
                    <p><?php echo rwmb_meta( 'tin_tuc_content' ) ?></p>
                </a>
            </div>
            <div class="col-md-4">
                <h4 data-aos="fade-up" data-aos-duration="1000">TIN TỨC - SỰ KIỆN</h4>

                <div class="scroll" data-aos="fade-up" data-aos-duration="1000">
                    <?php
                    $tintuc = rwmb_meta( 'tin_tuc_list' );
                    if ( ! empty( $tintuc ) ) {
                        foreach ( $tintuc as $ct ) {
                    ?>
                    <a href="<?php echo $ct['tin_tuc_url_sub'] ?>" class="item">
                        <?php echo $ct['tin_tuc_title_sub'] ?>
                    </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>