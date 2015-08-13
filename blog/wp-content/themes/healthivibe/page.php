<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="page-heading" id="single-page-head">
<?php while ( have_posts() ) : the_post(); ?>
<?php the_title(); ?>
<?php endwhile; 
wp_reset_query(); ?>
</div>

<div id="page" class="hfeed site canvas">
        <div id="main" class="wrapper">
 
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> page type-page status-publish hentry">
			<div class="entry-content">
			<?php the_content(); ?>
			</div>
			<footer class="entry-meta">
			<span class="edit-link">
			<?php edit_post_link('Edit'); ?>
			</span>
			</footer>
			</article>	

			<?php comments_template('', true); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	
<?php //  get_sidebar(); ?>

        </div><!-- #main .wrapper -->
        <footer id="colophon" role="contentinfo">
                <div class="site-info">
                </div><!-- .site-info -->
        </footer><!-- #colophon -->
</div><!-- #page -->

<?php get_footer(); ?>
