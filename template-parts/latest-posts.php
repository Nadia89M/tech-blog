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
                                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                                <img src="<?php echo $url ?>" alt="Image" />
                            </div>
                            <div class="entry-content">
                                <h4 class="title">
                                    <a href="blog-details.html">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <ul class="post-meta">
                                    <li class="date">
                                        <?php the_date(); ?>
                                    </li>
                                    <li class="categories">
                                        <?php $post_id = get_the_ID();
                                        $post_categories = wp_get_post_categories($post_id);
                                        foreach ($post_categories as $c) {
                                            $cat = get_category($c);
                                        ?>
                                            <a href="/category/<?php echo $cat->slug ?>"><?php echo $cat->name ?></a>
                                        <?php } ?>
                                    </li>
                                </ul>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="read-more">
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
