<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package single_page
 */

?>

	</div><!-- #content -->

	<footer id="colophon site-footer" class="site-footer" role="contentinfo">
		<p id="footer">&copy; Anna Olszewska Photography <?php echo date("Y") ?></p>
		<div class="site-info">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>

</body>
</html>
