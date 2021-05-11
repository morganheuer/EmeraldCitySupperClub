<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecsc
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="site-description">
			<p><?php bloginfo('description'); ?></p>
			<p>&copy; <?php bloginfo('title'); ?>
		</div>
		
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>