<section class="co-hoi">
    <h2 data-aos="fade-up" data-aos-duration="1000">CƠ HỘI CỦA BẠN</h2>

    <div class="container-fluid">
        <div class="row">
            <?php
            $co_hoi = rwmb_meta( 'chi_tiet_co_hoi' );
            if ( ! empty( $co_hoi ) ) {
                foreach ( $co_hoi as $ct ) {
            ?>
            <div class="col-md-4" style="background:url(<?php echo wp_get_attachment_url( $ct['co_hoi_bg'][0] ) ?>) center center / cover no-repeat">
                <div class="item" data-aos="fade-up" data-aos-duration="1000">
                    <h3><?php echo $ct['co_hoi_title'] ?></h3>
                    <p><?php echo $ct['co_hoi_content'] ?></p>

                    <div class="image">
                        <img class="active" src="<?php echo wp_get_attachment_url( $ct['co_hoi_img'][0] ) ?>">
                        <img src="<?php echo wp_get_attachment_url( $ct['co_hoi_img_hover'][0] ) ?>">
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>