<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Magista
 */

get_header(); ?>
<section id="feedback" style="right: -300px;">
    <h2>Contact us<a href="#"><span>FEEDBACK</span></a></h2>
    <div class="feed-form">
        <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>

    </div>
</section>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>


	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>