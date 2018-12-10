<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Count_Zero
 */

if ( ! is_active_sidebar( 'footer' ) ) {
	return;
}
?>
<div class="container-fluid footer">
 	<div class="row">
	   <?php dynamic_sidebar( 'footer' ); ?>
 	</div>		
</div>