<?php
$post = get_post( 51 );
?>
            <section class="md-projects">
                <a name="projekty"></a>
                <div class="container">
                    <h2 class="md-heading-primary"><?php echo $post->post_title; ?></h2>
                    <div class="row">

                    <?php
    $args = array( 'posts_per_page' => 99, 'category' => 4 );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <div class="col-lg-8 offset-lg-2 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="modal-link" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?php the_ID(); ?>">
                                <?php the_post_thumbnail('full'); ?>
                                <span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-plans-light.png" alt="Plany">
                                    <p class="p-large fw-500"><?php the_title(); ?></p>
                                </span>
                                <strong class="open-gallery">
                                    Fotogaléria
                                </strong>
                            </button>
                            

                            <!-- Modal -->
                            <div class="md-modal modal fade" id="exampleModal<?php the_ID(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
    <?php endforeach; 
    wp_reset_postdata();?>
                    </div>
                </div>
            </section>