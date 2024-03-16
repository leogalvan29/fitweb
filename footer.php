<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitness_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
				<h2>Todo los Derechos Reservados </h2>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<style>
	.site-footer{
		background-color: #000;
		padding: 30px 0px;
	}

	.site-footer .site-info{
		padding: 0;
		margin: 0;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.site-info h2{
         color:#fff;
		 font-family: "Montserrat", sans-serif;
	}
</style>

<?php wp_footer(); ?>

</body>
</html>
