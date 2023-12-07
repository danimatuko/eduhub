<?php get_header(); ?>


<?php get_template_part("partials/shared/nav") ?>


<div class="hero overlay inner-page">
    <img src="<?php echo get_theme_file_uri("/images/blob.svg") ?>" alt="" class="img-fluid blob">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center pt-5">
            <div class="col-lg-6">
                <p data-aos="fade-up" class="meta">by <a href="#">Admin</a> &bullet; on <a href="#">Apr 4th, 2022</a>
                </p>
                <h1 class="heading text-white mb-3" data-aos="fade-up" data-aos-delay="100">US dollar at risk of losing
                    dominance</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container article">
        <div class="row justify-content-center align-items-stretch">

            <div class="col-lg-8 order-lg-2 px-lg-5">
                <?php

                $page_id = get_the_ID();
                $parent_page_id = wp_get_post_parent_id($page_id);

                if ($parent_page_id) {
                    $breadcrumbs = array();

                    // Add a link to the home page
                    $breadcrumbs[] = '<a href="' . home_url() . '">Home</a>';

                    // Get ancestors and add them to the breadcrumbs
                    $ancestors = get_ancestors($page_id, 'page');
                    $ancestors = array_reverse($ancestors);
                    foreach ($ancestors as $ancestor) {
                        $breadcrumbs[] = '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a>';
                    }

                    // Add the current page as the last item in the breadcrumbs
                    $breadcrumbs[] = get_the_title($page_id);

                    // Display the breadcrumbs
                    echo '<div class="breadcrumbs">' . implode(' > ', $breadcrumbs) . '</div>';
                }

                ?>


                <h1><?php the_title() ?></h1>
                <div><?php the_content() ?></div>

            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>