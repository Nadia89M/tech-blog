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
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                    <div class="banner-bg" style="background-image: url(<?php echo $url ?>);"></div>
                    <div class="banner-content" data-animation="fadeInUp" data-delay="0.3s">
                        <h3 class="title" data-animation="fadeInUp" data-delay="0.6s">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <ul class="meta" data-animation="fadeInUp" data-delay="0.8s">
                            <li>
                                <?php $post_id = get_the_ID();
                                $post_categories = wp_get_post_categories($post_id);
                                foreach ($post_categories as $c) {
                                    $cat = get_category($c);
                                ?>
                                    <a href="/category/<?php echo $cat->slug ?>"><?php echo $cat->name ?></a>
                                <?php } ?></li>
                        </ul>
                        <p data-animation="fadeInUp" data-delay="1s">
                            <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="read-more" data-animation="fadeInUp" data-delay="1.2s">
                            Read More <i class="fas fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="banner-nav"></div>
</section>
