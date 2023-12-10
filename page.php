<?php get_header(); ?>


<?php get_template_part("partials/shared/nav") ?>


<?php get_template_part("partials/shared/hero", "inner") ?>
<!-- Breadcrumbs -->
<div class="container mt-4">
    <?php get_template_part("partials/shared/breadcrumbs") ?>
</div>

<div class="section">
    <div class="container article">
        <div class="row justify-content-center align-items-stretch">

            <div class="col-lg-8 order-lg-2 px-lg-5">
                <h1><?php the_title() ?></h1>
                <div><?php the_content() ?></div>

            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>