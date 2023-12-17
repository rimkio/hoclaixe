<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package hoclaixe
 */

echo "</div><!--End site wrap-->";

/**
 * hoclaixe_hook_footer hook.
 * @see hoclaixe_footer_template - 20
 */
do_action( 'hoclaixe_hook_footer' );
do_action( 'hoclaixe_hook_menu_mobile' );

wp_footer();
?>
</body>
</html>
