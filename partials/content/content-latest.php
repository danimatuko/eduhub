<?php

/**
 * Template Part: Latest News Section
 *
 * Description: This template part displays the latest news section with a list of recent posts.
 */
?>

<div class="section sec-news">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7">
                <h2 class="heading text-primary">Latest News</h2>
            </div>
        </div>

        <div class="row">
            <?php
            // Custom WP Query to retrieve the latest posts
            $args =  [
                'posts_per_page' => 2,
            ];

            $latestPosts = new WP_Query($args);

            // Check if the query has any posts
            if ($latestPosts->have_posts()) :
                while ($latestPosts->have_posts()) :
                    $latestPosts->the_post();
            ?>
                    <div class="col-lg-4">
                        <div class="card post-entry">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_theme_file_uri("/images/img-1.jpg") ?>" class="card-img-top" alt="Image">
                            </a>
                            <div class="card-body">
                                <div>
                                    <span class="text-uppercase font-weight-bold date"><?php echo get_the_date('M d, Y'); ?></span>
                                </div>
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p><?php echo wp_trim_words(get_the_content(), 18) ?></p>
                                <p class="mt-5 mb-0"><a href="<?php the_permalink(); ?>">Read more</a></p>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                // Reset global post data to ensure it doesn't interfere with the main loop
                wp_reset_postdata();
            else :
                // No posts found
                echo 'No posts found.';
            endif;
            ?>
        </div>
    </div>
</div>