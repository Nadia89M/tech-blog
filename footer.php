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
	<div class="footer-widgets-area">
		<div class="container container-1360">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="widget address-widget">
						<h4 class="widget-title">Our Address</h4>
						<p>Sydney, Australia Sheen Darus Salam. <br> 112/B, Road 8A, Dhanmondi.</p>
						<p>+880-036987458765521 <br> example@yourmail.com</p>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="widget nav-widget">
						<h4 class="widget-title">Quick Links</h4>
						<ul>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="widget nav-widget">
						<h4 class="widget-title">Categories</h4>
						<ul>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Food & Drinks</a></li>
							<li><a href="#">Inspiration</a></li>
							<li><a href="#">Decoration</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 ml-auto">
					<div class="widget newsletter-widget">
						<h4 class="widget-title">Our Monthly Newsletter </h4>
						<p>
							Sign Up TO Get Updates On Articles, Interviews And Events.
						</p>
						<form action="#">
							<input type="email" placeholder="your email">
							<button type="submit">Sign Up</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright-area">
		<div class="container container-1360">
			<div class="row align-items-center">
				<div class="col-lg-6 col-12">
					<div class="social-links">
						<ul>
							<li class="title">Follow Me</li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Youtube</a></li>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Linkedin</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="copyright-text text-lg-right">
						<p><span>Copyright</span> - 2022 Nadia Mohamed</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--====== Footer Area End ======-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
