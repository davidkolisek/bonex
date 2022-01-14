<?php
$post = get_post( 47 );
?>
            <section class="md-header-mp">
                <a name="uvod"></a>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <h1><?php echo $post->post_title; ?></h1>
                            <p><?php echo $post->post_content; ?></p>
                            <a href="" class="main-btn main-btn-primary btn-size-md btn-icon">
                                <i class="icon-chevron-right"></i> <?php echo $post->post_excerpt; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="image-wrapper">
                <?php echo get_the_post_thumbnail('47', 'full'); ?>
                </div>
            </section>
            