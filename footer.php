<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tech_Blog
 */

?>

<!--====== Footer Area Start ======-->
<footer>
	<div class="footer-copyright-area">
		<div class="container container-1360">
			<?php
			$args = array(
				'role'    => 'administrator',
				'orderby' => 'user_nicename',
				'order'   => 'ASC'
			);
			$users = get_users($args);
			foreach ($users as $user) { ?>
				<div class="row align-items-center">
					<div class="col-lg-6 col-12">
						<div class="social-links">

							<ul>
								<?php if (get_field('author_twitter', 'user_' . $user->ID) && get_field('author_facebook', 'user_' . $user->ID) && get_field('author_youtube', 'user_' . $user->ID) && get_field('author_instagram', 'user_' . $user->ID) && get_field('author_linkedin', 'user_' . $user->ID)) { ?>
									<li class="title">Follow Me</li>
									<?php if (get_field('author_twitter', 'user_' . $user->ID)) { ?>
										<li><a href="<?php echo get_field('author_twitter', 'user_' . $user->ID); ?>">Twitter</a></li>
									<?php } ?>
									<?php if (get_field('author_facebook', 'user_' . $user->ID)) { ?>
										<li><a href="<?php echo get_field('author_facebook', 'user_' . $user->ID); ?>">Twitter</a></li>
									<?php } ?>
									<?php if (get_field('author_youtube', 'user_' . $user->ID)) { ?>
										<li><a href="<?php echo get_field('author_youtube', 'user_' . $user->ID); ?>">Twitter</a></li>
									<?php } ?>
									<?php if (get_field('author_instagram', 'user_' . $user->ID)) { ?>
										<li><a href="<?php echo get_field('author_instagram', 'user_' . $user->ID); ?>">Twitter</a></li>
									<?php } ?>
									<?php if (get_field('author_linkedin', 'user_' . $user->ID)) { ?>
										<li><a href="<?php echo get_field('author_linkedin', 'user_' . $user->ID); ?>">Twitter</a></li>
									<?php } ?>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="copyright-text text-lg-right">
							<p><span>Copyright</span> - <?php echo date("Y"); ?> <?php echo $user->display_name; ?></p>
						</div>
					</div>
				</div>
		</div>
	<?php } ?>
	</div>
</footer>
<!--====== Footer Area End ======-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
