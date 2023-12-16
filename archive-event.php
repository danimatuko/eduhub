<?php get_header() ?>

<?php get_template_part("partials/shared/nav"); ?>

<?php get_template_part("partials/shared/hero", "inner") ?>



<div class="section sec-news">
    <div class="container">

        <div class="row">
            <?php

            if (have_posts()) :  while (have_posts()) : the_post(); ?>

            <div class="section">
                <div class="container">
                    <div class="row justify-content-between">

                        <div class="col-lg-2 mb-4 mb-lg-0">
                            <img src="<?php echo get_theme_file_uri("images/img-3.jpg") ?>" alt="Image"
                                class="img-fluid rounded">
                        </div>

                        <div class="col-lg-9 ps-lg-2">

                            <div class="d-flex mb-3 service-alt">
                                <div>
                                    <span class="bi-wallet-fill me-4"></span>
                                </div>
                                <div>
                                    <h3>
                                        <a class="text-dark" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="mb-1">
                                        <span class="font-monospace text-secondary">
                                            <?php echo get_field('event_date') ?>
                                        </span>
                                    </div>
                                    <p><?php the_excerpt() ?></p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <?php endwhile;

            else :
                // If no posts are found, display a message
                echo '<p>No posts found</p>';
            endif;
            ?>

        </div>



    </div>

    <div class="row">
        <div class="col-lg-12 text-center py-5">
            <div class="custom-navigation">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>...</span>
                <a href="#">5</a>
            </div>
        </div>
    </div>
</div>



<?php get_footer() ?>