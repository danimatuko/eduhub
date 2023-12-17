<?php
// Get today's date in 'Ymd' format
$today = date('Ymd');

// Query to retrieve events
$args = [
    'posts_per_page' => -1,
    'post_type'      => 'event',
    'meta_key'       => 'event_date',
    'orderby'        => 'meta_value_num',
    'meta_query'     => [
        [
            'key'     => 'event_date',
            'compare' => '>=',
            'value'   => $today,
            'type'    => 'numeric',
        ],
    ],
];

$events_query = new WP_Query($args);

// Check if there are any events
if ($events_query->have_posts()) :
?>

    <div class="section">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-7 mb-4 mb-lg-0">
                    <img src="<?php echo get_theme_file_uri("images/img-3.jpg") ?>" alt="Image" class="img-fluid rounded">
                </div>

                <div class="col-lg-4 ps-lg-2">
                    <div class="mb-5">
                        <h2 class="text-black h4">Upcoming Events</h2>
                        <p>Journey into the realm of knowledge as we bring you upcoming events from our educational
                            institution. Join us in the pursuit of wisdom, far beyond the word mountains, in lands distant
                            from Vokalia and Consonantia.</p>
                    </div>


                    <?php
                    // Loop through each event
                    while ($events_query->have_posts()) :
                        $events_query->the_post();
                    ?>
                        <div class="d-flex mb-3 service-alt">
                            <div>
                                <span class="bi-wallet-fill me-4"></span>
                            </div>
                            <div>
                                <h3>
                                    <a class="text-dark" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="mb-1">
                                    <span class="font-monospace text-secondary"><?php echo get_field('event_date') ?></span>
                                </div>
                                <p><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <a href="<?php echo get_post_type_archive_link(get_post_type()) ?>">
                        <span>See All Events</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <?php
    // Reset post data after custom query
    wp_reset_postdata();
    ?>

<?php else : ?>
    <p>No events found.</p>
<?php endif; ?>