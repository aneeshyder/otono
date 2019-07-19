<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package otono
 */

?>

	</div><!-- #content -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <?php dynamic_sidebar('Footer1');?>
            </div>
	        <div class="col-sm-4">
		        <?php dynamic_sidebar('Footer2');?>
	        </div>
            <div class="col-sm-4">
                <?php dynamic_sidebar('Footer3');?>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
