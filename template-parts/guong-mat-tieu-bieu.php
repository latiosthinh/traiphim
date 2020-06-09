<section class="guong-mat">
    <h2 data-aos="fade-up" data-aos-duration="1000">GƯƠNG MẶT TIÊU BIỂU CỰU SINH VIÊN <span>| ALUMNI STARS</span></h2>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="guong-mat_slider">
                    <?php
                    $nhan_vat = rwmb_meta( 'nhan_vat' );
                    if ( ! empty( $nhan_vat ) ) {
                        foreach ( $nhan_vat as $ct ) {
                    ?>
                    <div class="item">
                        <h3><?php echo $ct['title'] ?></h3>
                        <h3><?php echo $ct['name'] ?></h3>
                        <img src="<?php echo wp_get_attachment_url( $ct['avatar'][0] ) ?>">
                        <p><?php echo $ct['quote'] ?></p>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video" data-aos="fade-up" data-aos-duration="1000">
                    <a class="open-video" href="#video"><img src="<?php echo IMG . '/video.jpg' ?>"></a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

<div id="video">
    <div class="video-bg"></div>
    <iframe src="https://www.youtube.com/embed/<?php echo rwmb_meta( 'video' ) ?>?&showinfo=0&controls=1&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
</div>