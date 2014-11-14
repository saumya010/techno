<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Magista
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>



<nav class="site-navigation">
	<div class="">
		<div class="row">
			<div class="site-navigation-inner col-sm-12 navbar-fixed-top">
				<div class="navbar navbar-default navbar-fixed-top">
                                    <div class="container">
					<div class="navbar-header">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>

					<!-- Your site title as branding in the menu -->
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/png-new-01.png"></a>
				  </div>

				<!-- The WordPress Menu goes here -->
                                <div class="navbar-right collapse navbar-collapse navbar-responsive-collapse">
                                    <ul class="right-menu nav navbar-nav" id="main-menu">
                                    	<?php if(!is_front_page()) { ?>
                                    	<li id="magista_menuhome"><a href="http://missioniam.com/">
                                            <i class="fa fa-home"></i>
                                            </a></li>
                                            <?php } ?>
                                        <li id="magista_menu1"><a href="index.php#magista_about_section">
                                            <?php if ( get_theme_mod('magista_menu1') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_menu1')); ?>
                                            <?php } else {  ?> <?php esc_html_e('About us', 'magista') ?>
                                            <?php } ?>
                                            </a></li>
                                        <li id="magista_menu2">
                                            <a href="index.php#magista_features">
                                            <?php if ( get_theme_mod('magista_menu2') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_menu2')); ?>
                                            <?php } else {  ?> <?php esc_html_e('Our Services', 'magista') ?>
                                            <?php } ?>      
                                            </a></li>  
                                        <li id="magista_menu3"><a href="index.php#magista_testimonial">
                                            <?php if ( get_theme_mod('magista_menu3') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_menu3')); ?>
                                            <?php } else {  ?> <?php esc_html_e('Testimonials', 'magista') ?>
                                            <?php } ?>
                                            </a></li>    
                                        <li id="magista_menu4"><a href="index.php#magista_gallery">
                                            <?php if ( get_theme_mod('magista_menu4') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_menu4')); ?>
                                            <?php } else {  ?> <?php esc_html_e('Gallery', 'magista') ?>
                                            <?php } ?>
                                            </a></li>                                  
                                        <li id="magista_menu5"><a href="index.php#magista_team">
                                            <?php if ( get_theme_mod('magista_menu5') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_menu5')); ?>
                                            <?php } else {  ?> <?php esc_html_e('Team', 'magista') ?>
                                            <?php } ?>
                                            </a></li>
                                        <li id="magista_menu7"><a href="index.php#magista_contact">
                                            <?php if ( get_theme_mod('magista_menu7') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_menu7')); ?>
                                            <?php } else {  ?> <?php esc_html_e('Contact us', 'magista') ?>
                                            <?php } ?>
                                            </a></li>
                                    </ul>
                                </div>
                                </div>
				</div><!-- .navbar -->
			</div>
		</div>
	</div><!-- .container -->
</nav><!-- .site-navigation -->
<?php if(!is_front_page()) { ?>
<div class="main-content wrapper">
<?php if(!is_page()) { ?>
	<div class="container">
		<div class="row">	
			
			<div id="content" class="main-content-inner col-sm-12 col-md-8">
			<?php } ?>
<?php } ?>