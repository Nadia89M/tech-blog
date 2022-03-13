<?php

/**
 * The sidebar 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tech_Blog
 */

?>

<!-- Sidebar -->
<div class="primary-sidebar clearfix">
	<div class="sidebar-masonary row">
		<?php

		$args = array(
			'role'    => 'administrator',
			'orderby' => 'user_nicename',
			'order'   => 'ASC'
		);
		$users = get_users($args);
		foreach ($users as $user) { ?>
			<div class="col-lg-12 col-sm-6 widget author-widget">
				<div class="author-img">
					<img src="<?php echo get_field('profile_pic', 'user_' . $user->ID); ?>" alt="Post-Author">
				</div>
				<h5 class="widget-title"><?php echo get_field('profile_title', 'user_' . $user->ID); ?></h5>
				<p>
					<?php echo get_field('profile_description', 'user_' . $user->ID); ?>
				</p>
			</div>
		<?php }
		?>
		<div class="col-lg-12 col-sm-6 widget categories-widget">
			<h5 class="widget-title">Categories</h5>
			<div class="categories">
				<?php
				$terms = get_terms(array(
					'taxonomy' => 'category',
					'hide_empty' => true,
				));
				foreach ($terms as $term) {
					$category_link = get_category_link($term->term_id); ?>
					<div class="categorie" style="background-image: url(<?php echo get_field('category_image', $term->taxonomy . '_' . $term->term_id); ?>);">
						<a href="<?php echo $category_link ?>">
							<?php echo $term->name ?>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>