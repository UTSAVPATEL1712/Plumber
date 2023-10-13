<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="container">
<?php
while ( have_posts() ) :
the_post();?>
<?php the_content();?>
<?php 	
endwhile; ?>
</div>
<?php 
get_footer(); ?>
