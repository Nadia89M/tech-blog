<?php

/**
 * Template part for displaying banner with seleted posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tech_Blog
 */

$bannerPosts = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'order' => 'DESC',
    'orderby' => 'ID',
    'meta_query' => array(
        array(
            'key' => 'banner_article',
            'value' => '1'
        )
    )
));
$latestPosts = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'order' => 'DESC',
    'orderby' => 'ID'
));
?>
<section class="banner-section">
    <div class="banner-slider">
        <?php if ($bannerPosts->have_posts()) {
            $bannerQuery = $bannerPosts;
        } else {
            $bannerQuery = $latestPosts;
        }
        while ($bannerQuery->have_posts()) {
            $bannerQuery->the_post();  ?>
            <div class="sinlge-banner">
                <div class="banner-wrapper">
                    <div class="banner-bg" style="background-image: url(assets/img/banner/01.jpg);"></div>
                    <div class="banner-content" data-animation="fadeInUp" data-delay="0.3s">
                        <h3 class="title" data-animation="fadeInUp" data-delay="0.6s">
                            <a href="#">
                                The Olivier da Costa restaurant experience in Lisbon
                            </a>
                        </h3>
                        <ul class="meta" data-animation="fadeInUp" data-delay="0.8s">
                            <li><a href="#">By - Zhon Smith</a></li>
                            <li><a href="#">Travel,</a><a href="#">Design,</a><a href="#">Nature</a></li>
                        </ul>
                        <p data-animation="fadeInUp" data-delay="1s">
                            When it comes to creating is a website for your busin an attractive design will only get you
                            far. With people increasingly using their tablets and smartphones and shop online,...
                        </p>
                        <a href="blog-details.html" class="read-more" data-animation="fadeInUp" data-delay="1.2s">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="banner-nav"></div>
</section>