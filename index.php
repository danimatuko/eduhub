<?php get_header(); ?>

<?php get_template_part("partials/shared/nav"); ?>

<?php get_template_part("partials/shared/hero", "inner"); ?>

<div class="section sec-news">
    <div class="container">

        <div class="row">
            <?php
            // Check if there are posts
            if (have_posts()) :
                // Loop through each post
                while (have_posts()) : the_post();
            ?>
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                        <div class="card post-entry">
                            <?php if (has_post_thumbnail()) : ?>
                                <!-- Display post thumbnail if available -->
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                                </a>
                            <?php endif; ?>

                            <div class="card-body">
                                <div>
                                    <div class="post-meta d-flex">
                                        <!-- Display post date -->
                                        <span class="text-uppercase font-weight-bold date me-1"><?php echo get_the_date('M d, Y'); ?></span>
                                        <!-- Display post author -->
                                        <span class="author">
                                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
                                        </span>
                                    </div>

                                    <!-- Display post title -->
                                    <h2 class="card-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                </div>
                                <!-- Display post excerpt or trimmed content -->
                                <p>
                                    <?php
                                    if (has_excerpt()) {
                                        the_excerpt();
                                    } else {
                                        echo wp_trim_words(get_the_content(), 18);
                                    }
                                    ?>
                                </p>
                                <?php
                                // Display post categories
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    foreach ($categories as $category) {
                                        echo '<span class="badge bg-secondary me-1"><a class="text-white" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></span>';
                                    }
                                }
                                ?>
                                <!-- Display "Read more" link -->
                                <p class="mt-5 mb-0"><a href="<?php the_permalink(); ?>">Read more</a></p>
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

        <div class="row">
            <div class="col-lg-12 text-center py-5">
                <!-- Custom navigation links -->
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

<?php get_footer(); ?>