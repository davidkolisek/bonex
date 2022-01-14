<?php
$post = get_post( 30 );
?>
            <section class="md-contact">
                <a name="kontakt"></a>
                <div class="container">
                    <h2 class="md-heading-primary"><?php echo $post->post_title; ?></h2>
                    <?php echo do_shortcode( '[contact-form-7 id="63" title="Kontaktný formulár 1"]' ); ?>
                </div>
            </section>