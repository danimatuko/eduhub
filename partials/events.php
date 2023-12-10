<?php

$args = [
    'posts_per_page' => 2,
    'post_type' => 'event'
];
$events = new WP_Query($args);

if ($events->have_posts()) : ?>

<div class="section">
    <div class="container">
        <div class="row justify-content-between">


            <div class="col-lg-7 mb-4 mb-lg-0">
                <img src="<?php echo get_theme_file_uri("images/img-3.jpg") ?>" alt="Image" class="img-fluid rounded">
            </div>

            <div class="col-lg-4 ps-lg-2">
                <div class="mb-5">
                    <h2 class="text-black h4">Make payment fast and smooth.</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                </div>
                <?php while ($events->have_posts()) : $events->the_post(); ?>

                <div class="d-flex mb-3 service-alt">
                    <div>
                        <span class="bi-wallet-fill me-4"></span>
                    </div>
                    <div>
                        <h3>
                            <a class="text-dark" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </h3>
                        <p><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                    </div>
                </div>

                <?php endwhile; ?>

            </div>


        </div>
    </div>
</div>

<?php wp_reset_postdata(); ?>

<?php else : ?>
<p>No events found.</p>
<?php endif; ?>