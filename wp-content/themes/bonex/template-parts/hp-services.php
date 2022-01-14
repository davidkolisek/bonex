<?php
$post = get_post( 58 );
?>
          
            <section class="md-services">
                <div class="container">
                    <h2 class="md-heading-primary">
                    <?php echo $post->post_title; ?>
                    </h2>
                    <div class="row">

                    <?php
    $args = array( 'posts_per_page' => 99, 'category' => 3 );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <div class="col-lg-4 col-sm-6 col-6">
                            <div class="service-item">
                            <?php the_post_thumbnail('small'); ?>
                                <p><?php the_title(); ?></p>
                            </div>
                        </div>
                        
    <?php endforeach; 
    wp_reset_postdata();?>
                    </div>
                </div>
            </section>