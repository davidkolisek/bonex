<?php
$post = get_post( 49 );
?>

            <section class="md-about">
                <a name="o-nas"></a>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="text-content">
                                <h2 class="md-heading-primary"><?php echo $post->post_title; ?></h2>
                                <?php echo $post->post_content; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-wrapper">
                <?php echo get_the_post_thumbnail('49', 'full'); ?>
                </div>
            </section>