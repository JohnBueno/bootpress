<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
    <div class="container">
    	<div class="row">
    		<div class="col-md-9">
    			<?php while ( have_posts() ) : the_post(); ?>
    				<h1><? the_title(); ?></h1>
    								
    				<? the_content(); ?>
                    
                    <?php comments_template(); ?>
    			<?php endwhile; // end of the loop. ?>
    		</div>
    		<?php get_sidebar(); ?>
    	</div>
    </div>

<?php get_footer(); ?>
