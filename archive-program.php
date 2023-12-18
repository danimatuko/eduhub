<?php

/**
 *
 * This is a template for displaying the program archive
 *
 * @package Eduhub
 * @author Dani Matuko
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

// Get the header
get_header();
?>

<?php
// Include shared navigation
get_template_part("partials/shared/nav");

// Include shared inner hero section
get_template_part("partials/shared/hero", "inner");
?>

<div class="section sec-news">
    <div class="container">

        <div class="row">
            <?php
            // Check if there are posts
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>

                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                        <div class="">

                            <?php
                            // Display post thumbnail if available
                            if (has_post_thumbnail()) :
                            ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                                </a>
                            <?php endif; ?>


                            <h2 class="">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        </div>
                    </div>

            <?php
                endwhile;
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

</div>

<?php
// Get the footer
get_footer();
?>