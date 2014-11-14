<?php
/**
 * The template for displaying featured posts on Front Page 
 *Template Name : Content-front-page
 * @package Magista
 * @since Magista 1.0
 */
?>

<?php

    $featured_post_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        
        'post__not_in' => get_option('sticky_posts'),
    );
    $featuredposts = new WP_Query($featured_post_args);
    ?>
<div class="magista_blog">
    <div class="magista_page-title" data-scroll-reveal="enter top over 2s">
        <?php if ( get_theme_mod('magista_blog_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_blog_title')); ?></h1>
        <?php } else {  ?> <h1><?php esc_html_e('Blog', 'magista') ?></h1>
        <?php } ?>
    </div>
        <div class="magista_blog-content">
            <div class="row">
            <div data-scroll-reveal="enter bottom over 2s">
                    <?php if ($featuredposts->have_posts()) : $i = 1; ?>
                        <?php while ($featuredposts->have_posts()) : $featuredposts->the_post(); ?>                            
                                <div class="magista_blog-inner col-xs-4">
                                <div class="magista_post-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('featured_thumb'); ?>
                                    </a>
                                </div> <!--end .featured-post-content -->
                                <div class="magista_page-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                        <p class="magista_post_meta">
                                            <span>By <a href="#"><?php the_author_posts_link(); ?></a></span>
                                            <span>On <?php the_time(esc_html('j M Y','magista')); ?></span>
                                        </p>                                    
                                    <div class="magista_post-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="magista_blog-btm">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="<?php comments_link(); ?>"><?php echo comments_number(); ?></a>
                                    </div>
                                </div><!-- /.featured-header -->
                            <?php $i+=1; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <h2 class="center"><?php esc_html_e('Not Found', 'mytheme'); ?></h2>
                        <p class="center"><?php esc_html_e('Sorry, but you are looking for something that is not here', 'peace'); ?></p>
                        <?php get_search_form(); ?>
                    <?php endif; ?>          
            </div> <!-- /#featured-posts-container -->
        </div> <!-- /#front-featured-posts -->
        </div> <!-- /#front-featured-posts -->
</div>