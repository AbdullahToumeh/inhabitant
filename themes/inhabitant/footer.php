<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-block">
					<h3>Contact Info</h3>
					<p><i class="fas fa-envelope"></i> info@inhabitent.com</p>
					<p><i class="fas fa-phone"></i> 778-456-7891</p>
					<p class="social-media-icons"><i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i> <i class="fab fa-google-plus-square"></i></p>
				</div>
				<div class="footer-block">
					<h3>Business Hours</h3>
					<p><span>Monday-Friday:</span> 9am to 5pm</p>
					<p><span>Saturday:</span> 10am to 2pm</p>
					<p><span>Sunday:</span> Closed</p>
				</div>
				<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-text.svg'; ?>" alt="Inhabitent logo" />
				</div>
				<p class="copyright-text">Copyright &copy; 2018 Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
