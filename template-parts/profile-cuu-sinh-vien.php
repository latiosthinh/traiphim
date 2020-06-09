<section class="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="profile-slider">
                    <?php
                    $profile = rwmb_meta( 'profile_image', array( 'size' => 'thumbnail' ) );
                    foreach ( $profile as $image ) {
                        echo '<img src="' . $image['full_url'] . '">';
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="dots"></div>
                <img src="<?php echo IMG . '/profile-texture.png' ?>" class="bg">
                <h3>Hội Cựu Sinh viên <br>
                Đại học kinh Tế ĐHQGHN </h3>

                <p><?php echo rwmb_meta( 'profile_content' ) ?></p>
                <?php
                $files = rwmb_meta( 'file_profile' );
                foreach ( $files as $file ) {
                ?>
                    <a class="download" href="<?php echo $file['url']; ?>">Download</a>
                    <p><i>Profile Cựu Sinh Viên</i></p>
                <?php
                }
                ?>
                
                <div class="readmore">
                    <p>
                    <b>Danh sách chi tiết các Alumni theo lĩnh vực</b> <br>
                    "Tổng hợp và phân nhỏ danh sách các cựu sinh viên theo các ngành nghề, lĩnh vực như: Tập Đoàn, Bán Lẻ, Truyền Thông
                    </p>

                    <a href="<?php echo rwmb_meta( 'profile_url' ) ?>">&lt;&lt;READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>