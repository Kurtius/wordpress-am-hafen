<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

			</div>
		</div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="box">
			<?php get_sidebar( 'content-bottom' ); ?>
			<p>
				&copy; Copyright 2017 Stadtteilschule am Hafen.
				— <a href="/impressum/">Impressum</a>,
				<a href="/datenschutz/">Datenschutz</a>
			</p>
		</div>
	</footer>


<?php wp_footer(); ?>
</body>
</html>
