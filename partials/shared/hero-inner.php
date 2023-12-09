<?php

/**
 * Inner Page Template
 * 
 * This template is designed for inner pages such as single posts, category archives, and author archives.
 * It includes a hero section with a blob image, meta information for single posts, dynamic title display based
 * on the type of page, and an archive description if available.
 */
?>
<div class="hero overlay inner-page">
    <!-- Blob Image -->
    <img src="<?php echo get_theme_file_uri("/images/blob.svg") ?>" alt="" class="img-fluid blob">

    <div class="container">
        <div class="row align-items-center justify-content-center text-center pt-5">
            <div class="col-lg-6">
                <!-- Meta Information for Single Post -->
                <?php if (is_single()) : ?>
                    <p data-aos="fade-up" class="meta">
                        Posted by
                        <a href="#"><?php get_the_author() ?></a>
                        &bullet; on <a href="#"><?php echo get_the_date('M d, Y'); ?></a>
                    </p>
                <?php endif ?>

                <!-- Title Display -->
                <h1 class="heading text-white mb-3" data-aos="fade-up" data-aos-delay="100">
                    <?php
                    // Display appropriate title based on page type
                    if (is_singular()) {
                        the_title();
                    } elseif (is_category()) {
                        single_cat_title();
                    } elseif (is_author()) {
                        the_author();
                    } elseif (is_search()) {
                        echo 'Search Results for: ' . get_search_query();
                    } elseif (is_404()) {
                        echo '404 - Page Not Found';
                    } elseif (is_home()) {
                        echo 'Blog';
                    }
                    ?>
                </h1>

                <!-- Archive Description -->
                <?php
                $archive_description = get_the_archive_description();

                // Output archive description if it exists
                if ($archive_description) :
                    echo '<p class="fs-4">' . $archive_description . '</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</div>