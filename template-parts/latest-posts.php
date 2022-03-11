<?php

/**
 * Template part for displaying latest posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tech_Blog
 */

$latestPosts = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 9,
    'order' => 'DESC',
    'orderby' => 'ID'
));
?>

<section class="post-area with-sidebar" id="postWarpperLoaded">
    <div class="container-fluid">
        <div class="post-area-inner">
            <!-- Entry Post -->
            <div class="entry-posts clearfix masonary-posts row">
                <?php while ($latestPosts->have_posts()) {
                    $latestPosts->the_post(); ?>
                    <div class="col-xl-4 col-sm-6">
                        <div class="entry-post">
                            <div class="entry-thumbnail">
                                <img src="assets/img/posts/01.jpg" alt="Image">
                            </div>
                            <div class="entry-content">
                                <h4 class="title">
                                    <a href="blog-details.html">
                                        Best Wordpress Theme of 2018
                                    </a>
                                </h4>
                                <ul class="post-meta">
                                    <li class="date">
                                        <a href="#">18-04-21</a>
                                    </li>
                                    <li class="categories">
                                        <a href="#">Design,</a>
                                        <a href="#">Travel,</a>
                                        <a href="#">photography,</a>
                                        <a href="#">Nature</a>
                                    </li>
                                </ul>
                                <p>
                                    When it comes to creating is a website for your business, an attractive design
                                    will only get you far. With people increasingly using their tablets and
                                    smartphones and shop online,...
                                </p>
                                <a href="blog-details.html" class="read-more">
                                    Read More <i class="fas fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-12">
                    <div class="text-center">
                        <a href="#" class="load-more-btn">Load More</a>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>