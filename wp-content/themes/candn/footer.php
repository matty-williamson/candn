<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Starter
 */
?>

<footer id="mastfoot" class="site-footer" role="contentinfo">

	<div class="wrapper">

		<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-navigation' ) ); ?>

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
