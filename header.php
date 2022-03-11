<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tech_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!--====== Header part start ======-->
		<header class="sticky-header">
			<div class="container-fluid">
				<div class="d-flex align-items-center justify-content-between">
					<div class="site-logo">
						<a href="<?php echo esc_url(home_url('/')); ?>"><?php the_custom_logo() ?></a>
					</div>
					<div class="header-right">
						<div class="search-area">
							<a href="javascript:void(0)" class="search-btn"><i class="fas fa-search"></i></a>
							<div class="search-form">
								<a href="#" class="search-close"><i class="fal fa-times"></i></a>
								<form action="#">
									<input type="search" placeholder="Type here to search">
								</form>
								<div class="search-overly"></div>
							</div>
						</div>
						<div class="offcanvas-panel">
							<a href="javascript:void(0)" class="panel-btn">
								<span>
									<span></span>
									<span></span>
									<span></span>
								</span>
							</a>
							<div class="panel-overly"></div>
							<div class="offcanvas-items">
								<!-- Navbar Toggler -->
								<a href="javascript:void(0)" class="panel-close">
									Back <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>

								<ul class="offcanvas-menu">
									<li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
									<li><a href="<?php echo esc_url(site_url('/about')); ?>">About</a></li>
									<li><a href="<?php echo esc_url(site_url('/contact')); ?>">Contact</a></li>
								</ul>

								<div class="social-icons">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		