<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tech_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="post-details-area">
		<div class="container container-1000">
			<div class="post-details">
				<div class="entry-header">
					<h2 class="title"><?php the_title(); ?></h2>
					<ul class="post-meta">
						<li><?php the_date(); ?></li>
						<li>
							<?php $post_id = get_the_ID();
							$post_categories = wp_get_post_categories($post_id);
							foreach ($post_categories as $c) {
								$cat = get_category($c);
							?>
								<a href="/<?php echo $cat->slug ?>"><?php echo $cat->name ?></a>
							<?php } ?>
						</li>
					</ul>
					<p class="short-desc">
						<?php the_excerpt(); ?>
					</p>
				</div>
				<div class="entry-media text-center">
					<img src="assets/img/post-details/01.jpg" alt="image">
				</div>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<div class="entry-footer">
					<div class="post-author">
						<?php $author_id = get_the_author_meta('ID'); ?>
						<div class="author-img">
							<img src="<?php echo get_field('profile_pic', 'user_' . $author_id); ?>" alt="PostAuthor">
						</div>
						<h5><?php the_author(); ?></h5>
						<p><?php echo get_field('profile_description', 'user_' . $author_id); ?></p>
					</div>
				</div>
				<div class="post-nav">
					<div class="prev-post">
						<?php $prev_post = get_adjacent_post(false, '', true);
						if (!empty($prev_post)) {
							echo '<a href="' . get_permalink($prev_post->ID) . '"><i class="far fa-angle-left"></i></a><span class="title">Previous Post</span>';
						} ?>
					</div>
					<div class="next-post">
						<?php $next_post = get_adjacent_post(false, '', false);
						if (!empty($next_post)) {
							echo '<span class="title">Next Post</span><a href="' . get_permalink($next_post->ID) . '"><i class="far fa-angle-right"></i></a>';
						} ?>
					</div>
				</div>
				<!-- <div class="related-posts">
					<h4 class="related-title">Related Posts</h4>
					<div class="related-loop row justify-content-center">
						<div class="col-lg-6 col-md-6 col-sm-10">
							<div class="related-post-box">
								<div class="thumb">
									<img src="assets/img/post-details/related-01.jpg" alt="image">
								</div>
								<h5 class="title">
									<a href="#">
										The Olivier da Costa restaurant experience in Lisbon
									</a>
								</h5>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-10">
							<div class="related-post-box">
								<div class="thumb">
									<img src="assets/img/post-details/related-02.jpg" alt="image">
								</div>
								<h5 class="title">
									<a href="#">
										The Olivier da Costa restaurant experience in Lisbon
									</a>
								</h5>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
