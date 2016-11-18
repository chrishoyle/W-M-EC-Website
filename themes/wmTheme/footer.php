<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Entrepreneurship
 */

?>

	</div> <!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info"><center>
			<br><br>
			<p> <img src="<?php print(get_template_directory_uri()); ?>/img/wm_wordmark_single_line_white.png" height="50%" width="50%"  /> </p>
			<p> Williamsburg, VA</p>
			<p>All Rights Reserved © 2016<p></center>
			<br><br>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page --> 

<?php wp_footer(); ?>

</body>
</html>
