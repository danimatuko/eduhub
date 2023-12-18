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

                <article>
                    <?php if (get_the_post_thumbnail_url()) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid rounded mb-3">
                    <?php endif ?>


                    <?php the_content() ?>
                </article>


                <?php
                
                $relatedPrograms = get_field('related_programs');
                $programLinks = array();

                foreach ($relatedPrograms as $program) :
                    $programLinks[] = '<a class="" href="' . get_the_permalink($program) . '">' . get_the_title($program) . '</a>';
                endforeach;

                if (!empty($programLinks)) :
                ?>
                <div class="pt-5 mb-3 categories_tags">
                    <div>Program(s): <?php echo implode(', ', $programLinks); ?></div>
                </div>
                <?php endif; ?>




                <div class="post-single-navigation d-flex align-items-stretch">
                    <a href="#" class="mr-auto w-50 pr-4">
                        <span class="d-block">Previous Post</span>
                        A Mounteering Guide For Beginners
                    </a>
                    <a href="#" class="ml-auto w-50 text-right pl-4">
                        <span class="d-block">Next Post</span>
                        12 Creative Designers Share Ideas About Web Design
                    </a>
                </div>


                <div class="pt-5">
                    <h3 class="mb-5">6 Comments</h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="<?php echo get_theme_file_uri("/images/person_1.jpg") ?>"
                                    alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Irish Smith</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                    necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                    sapiente
                                    iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="<?php echo get_theme_file_uri("/images/person_2.jpg") ?>"
                                    alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Christine Stewart</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                    necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                    sapiente
                                    iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>

                            <ul class="children">
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="<?php echo get_theme_file_uri("/images/person_3.jpg") ?>"
                                            alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Chintan Patel</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat
                                            saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                            nihil?
                                        </p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                    </div>


                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard bio">
                                                <img src="<?php echo get_theme_file_uri("/images/person_4.jpg") ?>"
                                                    alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>John Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Pariatur
                                                    quidem laborum necessitatibus, ipsam impedit vitae autem, eum
                                                    officia, fugiat saepe enim sapiente iste iure! Quam voluptas
                                                    earum
                                                    impedit necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply">Reply</a></p>
                                            </div>

                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard bio">
                                                        <img src="<?php echo get_theme_file_uri("/images/person_5.jpg") ?>"
                                                            alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>Ben Afflick</h3>
                                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Pariatur quidem laborum necessitatibus, ipsam impedit
                                                            vitae
                                                            autem, eum officia, fugiat saepe enim sapiente iste
                                                            iure!
                                                            Quam voluptas earum impedit necessitatibus, nihil?</p>
                                                        <p><a href="#" class="reply">Reply</a></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="<?php echo get_theme_file_uri("/images/person_1.jpg") ?>"
                                    alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum
                                    necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim
                                    sapiente
                                    iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>
                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="5"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary btn-md">
                            </div>

                        </form>
                    </div>
                </div>


            </div>


            <div class="col-md-12 col-lg-1 order-lg-1">
                <div class="share sticky-top">
                    <h3>Share</h3>
                    <ul class="list-unstyled share-article">
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0 order-lg-3">

                <div class="mb-4">
                    <a href="https://vimeo.com/342333493" class="video-wrap glightbox">
                        <span class="play-wrap"><span class="icon-play"></span></span>
                        <img src="<?php echo get_theme_file_uri("/images/img_1.jpg") ?>" alt="Image"
                            class="img-fluid rounded">
                    </a>
                </div>

                <div class="share floating-block sticky-top">

                    <h2 class="mb-3 text-black">Subscribe to Newsletter</h2>
                    <p>Far far away behind the word mountains far from.</p>
                    <form action="#">
                        <input type="email" class="form-control mb-2" placeholder="Enter email">
                        <input type="submit" value="Subscribe" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>