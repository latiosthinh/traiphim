<section class="mo-ta">
    <div class="container">
        <div class="row flex-column">
            <div class="stars d-flex" data-aos="fade-up" data-aos-duration="1000">
                <img src="<?php echo IMG . '/star.png' ?>">
                <img src="<?php echo IMG . '/star.png' ?>">
                <img src="<?php echo IMG . '/star.png' ?>">
            </div>
            <h2 data-aos="fade-up" data-aos-duration="1000">
            Cộng đồng cựu sinh viên <br>
            Đại học kinh tế / ĐHQGHN
            </h2>
        </div>
        <div class="row items">
            <?php
            $chi_tiet = rwmb_meta( 'group_fuv053kscg' );
            if ( ! empty( $chi_tiet ) ) {
                foreach ( $chi_tiet as $ct ) {
            ?>
            <div class="col-md-4">
                <div class="item" data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo wp_get_attachment_url( $ct['anh_mo_ta'][0] ) ?>">
                    <div class="mota-content">
                        <h3><?php echo $ct['title_mo_ta'] ?></h3>
                        <p><?php echo $ct['content_mo_ta'] ?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>

        
    </div>
    <div class="d-flex flex-column download">
        <?php
        $files = rwmb_meta( 'file_quyen_loi' );
        foreach ( $files as $file ) {
        ?>
            <a href="<?php echo $file['url']; ?>" data-aos="fade-up" data-aos-duration="1000">Download</a>
            <p data-aos="fade-up" data-aos-duration="1000"><i>Bản quyền lợi Cựu sinh viên Tham dự Hệ thống</i></p>
        <?php
        }
        ?>
    </div>
</section>