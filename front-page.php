<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Magista
 */

get_header(); ?>
<!--<section id="style-switcher" style="left: -120px;">
    <h2>Style Switcher <a href="#"><span></span></a></h2>
    <div>
        <h3>Colors</h3>
        <ul class="colors" id="colors">
            <li><a href="#" class="green" title="Green"></a></li>
            <li><a href="#" class="blue" title="Blue"></a></li>
            <li><a href="#" class="orange" title="Orange"></a></li>
            <li><a href="#" class="golden" title="Teal Green"></a></li>
            <li><a href="#" class="red" title="Red"></a></li>
            <li><a href="#" class="purple" title="Purple"></a></li>
        </ul>
    </div>
</section>-->
<section id="feedback" style="right: -300px;">
    <h2>Contact us<a href="#"><span>FEEDBACK</span></a></h2>
    <div class="feed-form">
        <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>

    </div>
</section>
<div class="magista_home-slider">
    
<div class="flexslider">
  <ul class="slides">
    <li>
        <div class="flex-caption">
            <div class="flex-cont">
        <?php if ( get_theme_mod('magista_slider_title_1') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_slider_title_1')); ?></h1>
                <?php } else {  ?> <h1><span style="color:crimson">Mission I AM</span></h1>
                <?php } ?>
        </div>
        </div>
        <?php if ( get_theme_mod('magista_slider_image_1') !='' ) {  ?>
        <div><img src="<?php echo esc_url(get_theme_mod('magista_slider_image_1')); ?>" /></div>
        <?php } else {  ?>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/Slider-51.jpg" /></div>
        <?php } ?>
    </li>
    <li>
        <?php if ( get_theme_mod('magista_slider_title_2') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_slider_title_2')); ?></h1>
                <?php } else {  ?> <h1><span style="color:orange">Rediscover Yourself</span></h1>
                <?php } ?>
        <?php if ( get_theme_mod('magista_slider_image_2') !='' ) {  ?>
        <div><img src="<?php echo esc_url(get_theme_mod('magista_slider_image_2')); ?>" /></div>
        <?php } else {  ?>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/Slider-41.jpg" /></div>
        <?php } ?>
    <li>
    <?php if ( get_theme_mod('magista_slider_title_3') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_slider_title_3')); ?></h1>
                <?php } else {  ?> <h1><span style="color:red">I Am</span><span style="color:white"> Ready</span></h1>
                <?php } ?>
        <?php if ( get_theme_mod('magista_slider_image_3') !='' ) {  ?>
        <div><img src="<?php echo esc_url(get_theme_mod('magista_slider_image_3')); ?>" /></div>
        <?php } else {  ?>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/Slider-21.jpg" /></div>
        <?php } ?>
    <li>
        <?php if ( get_theme_mod('magista_slider_title_4') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_slider_title_4')); ?></h1>
                <?php } else {  ?> <h1><span style="color:white">Are You</span><span style="color:yellowgreen"> Ready?</span></h1>
                <?php } ?>
        <?php if ( get_theme_mod('magista_slider_image_4') !='' ) {  ?>
        <div><img src="<?php echo esc_url(get_theme_mod('magista_slider_image_4')); ?>" /></div>
        <?php } else {  ?>
        <div><img src="<?php echo get_template_directory_uri(); ?>/img/Slider-3.jpg" /></div>
        <?php } ?>
  </ul>
</div>
</div>
<?php if(get_theme_mod('magista_about_check')) { ?>
<div class="magista_about_section">
    <div class="magista_work-content">
        <div class="magista_inner_content">
            <div class="magista_page-title" data-scroll-reveal="after 1s, ease-in 32px and reset over .8s">
                <?php if ( get_theme_mod('magista_about_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_about_title')); ?></h1>
                <?php } else {  ?> <h1><?php esc_html_e('About us', 'magista') ?></h1>
                <?php } ?>
            </div>
            <div class="magista_about_description container">
                <?php if ( get_theme_mod('magista_about_desc') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_about_desc')); ?></p>
                <?php } else {  ?> <p>How often have you said to yourself “I want to be something,” but never really had the right approach to channel your inner desires into an actionable plan to be that something?</p><p>At Mission I Am, our goal is to bridge the gap between what you are and what you want to be; to help you discover a side of yourself that you knew you had, but were unable to bring out.</p><p>Our specially designed programmes ensure that you know how to put your best foot forward whether you’re stepping into the corporate world for the first time, addressing your peers on stage, or managing a team of your co-workers.</p><p>Mission I Am goes beyond the work place as well – offering programmes that are aimed at bringing out the creative streak in you – be it learning that exotic language you always wished you could speak, learning how to capture life’s best moments through a lens, or just letting the athlete or fitness freak in you step out.</p><p>Mission I Am – dedicated to changing “I want to be” to “I am”</p>
                <?php } ?>                
            </div>
                
        </div>
    </div>
</div>
<?php } ?>
<div class="magista_features">
    <div class="container">		
        <div class="magista_feature_content">
            <div class="magista_page-title" data-scroll-reveal="enter top and move 50px over 1.33s">
                <?php if ( get_theme_mod('magista_features_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_features_title')); ?></h1>
                <?php } else {  ?> <h1><?php esc_html_e('What You Can Do With Magista?', 'magista') ?></h1>
                <?php } ?>
                <?php if ( get_theme_mod('magista_features_description') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description')); ?></p>
                <?php } else {  ?> <p><?php esc_html_e('', 'magista') ?></p>
                <?php } ?>
            </div>
            <div class="col-lg-12 col-lg-3" data-scroll-reveal="enter left over 2s">
                <div class="magista_feature_content_inner" id="feature1"> 
                <a href="http://missioniam.com/wp/?page_id=28">                   
                    <div class="magista_font_icon magista_content">  
                        <?php if ( get_theme_mod('magista_features_image_1') !='' ) {  ?>
                        <img src="<?php echo esc_url(get_theme_mod('magista_features_image_1')); ?>" />
                        <?php } else {  ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/pro.jpg" />
                        <?php } ?>
                    </div>
                    
                        <?php if ( get_theme_mod('magista_features_title_1') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_1')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Create A Perfect Website', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_1') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_1')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-12 col-lg-3" data-scroll-reveal="enter top over 2s">
                <div class="magista_feature_content_inner" id="feature2">
                <a href="http://missioniam.com/wp/?page_id=42">
                    <div class="magista_font_icon magista_content">  
                        <?php if ( get_theme_mod('magista_features_image_2') !='' ) {  ?>
                        <img src="<?php echo esc_url(get_theme_mod('magista_features_image_2')); ?>" />
                        <?php } else {  ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/leader.jpg" />
                        <?php } ?>
                    </div>
                    
                        <?php if ( get_theme_mod('magista_features_title_2') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_2')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Share Testimonials', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_2') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_2')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-12 col-lg-3" data-scroll-reveal="enter top over 2s">
                <div class="magista_feature_content_inner" id="feature6">
                <a href="http://missioniam.com/wp/?page_id=38">
                    <div class="magista_font_icon magista_content">  
                        <?php if ( get_theme_mod('magista_features_image_6') !='' ) {  ?>
                        <img src="<?php echo esc_url(get_theme_mod('magista_features_image_6')); ?>" />
                        <?php } else {  ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/speaker.jpg" />
                        <?php } ?>
                    </div>
                    
                        <?php if ( get_theme_mod('magista_features_title_6') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_6')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Share Testimonials', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_6') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_6')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-12 col-lg-3" data-scroll-reveal="enter bottom over 2s">
                <div class="magista_feature_content_inner" id="feature7">
                <a href="http://missioniam.com/wp/?page_id=40">
                    <div class="magista_font_icon magista_content">  
                        <?php if ( get_theme_mod('magista_features_image_7') !='' ) {  ?>
                        <img src="<?php echo esc_url(get_theme_mod('magista_features_image_7')); ?>" />
                        <?php } else {  ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/voice.jpg" />
                        <?php } ?>
                    </div>
                    
                        <?php if ( get_theme_mod('magista_features_title_7') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_7')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Build Social Presence', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_7') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_7')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-12 col-lg-3" data-scroll-reveal="enter bottom over 2s">
                <div class="magista_feature_content_inner" id="feature3">
                <a href="http://missioniam.com/wp/?page_id=32">
                    <div class="magista_font_icon magista_content">  
                        <?php if ( get_theme_mod('magista_features_image_3') !='' ) {  ?>
                        <img src="<?php echo esc_url(get_theme_mod('magista_features_image_3')); ?>" />
                        <?php } else {  ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/creative.jpg" />
                        <?php } ?>
                    </div>
                    
                        <?php if ( get_theme_mod('magista_features_title_3') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_3')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Build Social Presence', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_3') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_3')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>            
            <div class="col-lg-12 col-lg-3" data-scroll-reveal="enter left over 2s">
                <div class="magista_feature_content_inner" id="feature5">
                <a href="http://missioniam.com/wp/?page_id=36">
                    <div class="magista_font_icon magista_content">  
                        <?php if ( get_theme_mod('magista_features_image_5') !='' ) {  ?>
                        <img src="<?php echo esc_url(get_theme_mod('magista_features_image_5')); ?>" />
                        <?php } else {  ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/photographer.jpg" />
                        <?php } ?>
                    </div>
                    
                        <?php if ( get_theme_mod('magista_features_title_5') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_5')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Create A Perfect Website', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_5') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_5')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>            
            <div class="col-lg-12 col-lg-3" data-scroll-reveal="enter right over 2s">
                <div class="magista_feature_content_inner" id="feature8">
                <a href="http://missioniam.com/wp/?page_id=30">
                    <div class="magista_font_icon magista_content">  
                        <?php if ( get_theme_mod('magista_features_image_8') !='' ) {  ?>
                        <img src="<?php echo esc_url(get_theme_mod('magista_features_image_8')); ?>" />
                        <?php } else {  ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/sport.jpg" />
                        <?php } ?>
                    </div>
                    
                        <?php if ( get_theme_mod('magista_features_title_8') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_8')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Build Social Presence', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_8') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_8')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-12 col-lg-3" data-scroll-reveal="enter right over 2s">
                <div class="magista_feature_content_inner" id="feature4">
                <a href="http://missioniam.com/wp/?page_id=34">
                    <div class="magista_font_icon magista_content">  
                        <?php if ( get_theme_mod('magista_features_image_4') !='' ) {  ?>
                        <img src="<?php echo esc_url(get_theme_mod('magista_features_image_4')); ?>" />
                        <?php } else {  ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fitness.jpg" />
                        <?php } ?>
                    </div>
                    
                        <?php if ( get_theme_mod('magista_features_title_4') !='' ) {  ?><h2><?php echo esc_html(get_theme_mod('magista_features_title_4')); ?></h2>
                        <?php } else {  ?> <h2><?php esc_html_e('Build Social Presence', 'magista') ?></h2>
                        <?php } ?>
                    </a>
                    <?php if ( get_theme_mod('magista_features_description_4') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_features_description_4')); ?></p>
                    <?php } else {  ?> <p><?php esc_html_e('', 'magista') ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>			
</div>
<?php if(get_theme_mod('magista_test_check')) { ?>
<div class="magista_testimonial">
    <div class="magista_page-title" data-scroll-reveal="enter top over 2s">
        <?php if ( get_theme_mod('magista_test_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_test_title')); ?></h1>
        <?php } else {  ?> <h1><?php esc_html_e('Testimonials', 'magista') ?></h1>
        <?php } ?>
    </div>
    <div class="magista_test-flex container" data-scroll-reveal="enter bottom over 2s">
        <div class="flexslider">
            <ul class="slides">
                <li id="magista_content1">
                    <div class="magista_test-image">
                        <?php if ( get_theme_mod('magista_test_image_1') !='' ) {  ?>
                        <div><img src="<?php echo esc_url(get_theme_mod('magista_test_image_1')); ?>" /></div>
                        <?php } else {  ?>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image10.jpg" /></div>
                        <?php } ?>
                    </div>
                    <div class="magista_test-content">
                        <?php if ( get_theme_mod('magista_test_description_1') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_test_description_1')); ?></p>
                        <?php } else {  ?> <p><?php esc_html_e('I really love your products and support you 100%. I am a new web developer. I started in October of 2012 and Magista has helped me succeed. But today, I have dozens and dozens of customers and all of their websites are built with an Inktheme. I love you guys. Keep up the good work and many blessings from God be upon you.', 'magista') ?></p>
                        <?php } ?>
                        <?php if ( get_theme_mod('magista_test_by1') !='' ) {  ?><h5><?php echo esc_html(get_theme_mod('magista_test_by1')); ?></h5>
                        <?php } else {  ?> <h5><?php esc_html_e('', 'magista') ?></h5>
                        <?php } ?>
                        <?php if ( get_theme_mod('magista_test_des1') !='' ) {  ?><h5><?php echo esc_html(get_theme_mod('magista_test_des1')); ?></h5>
                        <?php } else {  ?> <h5><?php esc_html_e('', 'magista') ?></h5>
                        <?php } ?>
                    </div>
                </li>
                <li id="magista_content2">
                    <div class="magista_test-image">
                        <?php if ( get_theme_mod('magista_test_image_2') !='' ) {  ?>
                        <div><img src="<?php echo esc_url(get_theme_mod('magista_test_image_2')); ?>" /></div>
                        <?php } else {  ?>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image11.jpg" /></div>
                        <?php } ?>
                    </div>
                    <div class="magista_test-content">
                        <?php if ( get_theme_mod('magista_test_description_2') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_test_description_2')); ?></p>
                        <?php } else {  ?> <p><?php esc_html_e('I really love your products and support you 100%. I am a new web developer. I started in October of 2012 and Magista has helped me succeed. But today, I have dozens and dozens of customers and all of their websites are built with an Inktheme. I love you guys. Keep up the good work and many blessings from God be upon you.', 'magista') ?></p>
                        <?php } ?>
                        <?php if ( get_theme_mod('magista_test_by2') !='' ) {  ?><h5><?php echo esc_html(get_theme_mod('magista_test_by2')); ?></h5>
                        <?php } else {  ?> <h5><?php esc_html_e('', 'magista') ?></h5>
                        <?php } ?>
                        <?php if ( get_theme_mod('magista_test_des2') !='' ) {  ?><h5><?php echo esc_html(get_theme_mod('magista_test_des2')); ?></h5>
                        <?php } else {  ?> <h5><?php esc_html_e('', 'magista') ?></h5>
                        <?php } ?>
                    </div>
                </li>
                <li id="magista_content3">
                    <div class="magista_test-image">
                        <?php if ( get_theme_mod('magista_test_image_3') !='' ) {  ?>
                        <div><img src="<?php echo esc_url(get_theme_mod('magista_test_image_3')); ?>" /></div>
                        <?php } else {  ?>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/image12.jpg" /></div>
                        <?php } ?>
                    </div>
                    <div class="magista_test-content">
                        <?php if ( get_theme_mod('magista_test_description_3') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_test_description_3')); ?></p>
                        <?php } else {  ?> <p><?php esc_html_e('I really love your products and support you 100%. I am a new web developer. I started in October of 2012 and Magista has helped me succeed. But today, I have dozens and dozens of customers and all of their websites are built with an Inktheme. I love you guys. Keep up the good work and many blessings from God be upon you.', 'magista') ?></p>
                        <?php } ?>
                        <?php if ( get_theme_mod('magista_test_by3') !='' ) {  ?><h5><?php echo esc_html(get_theme_mod('magista_test_by3')); ?></h5>
                        <?php } else {  ?> <h5><?php esc_html_e('', 'magista') ?></h5>
                        <?php } ?>
                        <?php if ( get_theme_mod('magista_test_des3') !='' ) {  ?><h5><?php echo esc_html(get_theme_mod('magista_test_des3')); ?></h5>
                        <?php } else {  ?> <h5><?php esc_html_e('', 'magista') ?></h5>
                        <?php } ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php } ?>
<?php if(get_theme_mod('magista_gallery_check')) { ?>
<div class="magista_gallery">
    <div class="magista_page-title" data-scroll-reveal="enter top over 2s">
        <?php if ( get_theme_mod('magista_gallery_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_gallery_title')); ?></h1>
        <?php } else {  ?> <h1><?php esc_html_e('Gallery', 'magista') ?></h1>
        <?php } ?>
    </div>
    <div class="magista_content1">
        <div class="magista_one" data-scroll-reveal="enter bottom over 2s">
            <?php $var=get_theme_mod('magista_gallery_shortcode'); ?>
            
            <div class="magista_gallery-img"><?php echo do_shortcode('[gmedia id=2]'); ?></div>
            
            
        </div>        
    </div>
</div>
<?php } ?>
<?php if(get_theme_mod('magista_team_check')) { ?>
<div class="magista_team">
        <div class="magista_page-title" data-scroll-reveal="enter right over 2s">
            <?php if ( get_theme_mod('magista_team_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_team_title')); ?></h1>
            <?php } else {  ?> <h1><?php esc_html_e('Team', 'magista') ?></h1>
            <?php } ?>
        </div>
        <div class="row container">
            <div class="magista_grid col-xs-4" data-scroll-reveal="enter left over 2s" id="team1">
                <?php if ( get_theme_mod('magista_team_image_1') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('magista_team_image_1')); ?>" /></div>
                <?php } else {  ?>
                <div><img src="<?php echo get_template_directory_uri(); ?>/img/arun.jpg" /></div>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_title_1') !='' ) {  ?><h4><?php echo esc_html(get_theme_mod('magista_team_title_1')); ?></h4>
                <?php } else {  ?> <h4><?php esc_html_e('Arun Mittal', 'magista') ?></h4>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_description_1') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_team_description_1')); ?></p>
                <?php } else {  ?> <p><?php esc_html_e('CO-FOUNDER', 'magista') ?></p>
                <?php } ?>                
                <ul class="magista_social-icons">
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_1_fb') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_1_fb')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.facebook.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_1_tw') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_1_tw')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://twitter.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_1_ln') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_1_ln')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.linkedin.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_1_gp') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_1_gp')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://plus.google.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
            <div class="magista_grid col-xs-4" data-scroll-reveal="enter right over 2s" id="team2">
                <?php if ( get_theme_mod('magista_team_image_2') !='' ) {  ?>
                <div><img src="<?php echo esc_url(get_theme_mod('magista_team_image_2')); ?>" /></div>
                <?php } else {  ?>
                <div><img src="<?php echo get_template_directory_uri(); ?>/img/ira.jpg" /></div>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_title_2') !='' ) {  ?><h4><?php echo esc_html(get_theme_mod('magista_team_title_2')); ?></h4>
                <?php } else {  ?> <h4><?php esc_html_e('Ira Aggarwal', 'magista') ?></h4>
                <?php } ?>
                <?php if ( get_theme_mod('magista_team_description_2') !='' ) {  ?><p><?php echo esc_html(get_theme_mod('magista_team_description_2')); ?></p>
	                <?php } else {  ?> <p><?php esc_html_e('CO-FOUNDER', 'magista') ?></p>
                <?php } ?>
                <ul class="magista_social-icons">
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_2_fb') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_2_fb')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.facebook.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_2_tw') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_2_tw')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://twitter.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_2_ln') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_2_ln')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://www.linkedin.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="<?php if ( get_theme_mod('magista_team_2_gp') !='' ) {  ?><?php echo esc_html(get_theme_mod('magista_team_2_gp')); ?>
                        <?php } else {  ?> <?php esc_html_e('https://plus.google.com/', 'magista') ?>
                        <?php } ?>"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>            
        </div>
</div>
<?php } ?>
<?php if(get_theme_mod('magista_blog_check')) { ?>
<?php get_template_part('content','frontposts') ?>
<?php } ?>
<?php if(get_theme_mod('magista_contact_check')) { ?>
<div class="magista_contact">
    <div class="magista_page-title" data-scroll-reveal="enter top over 2s">
        <?php if ( get_theme_mod('magista_contact_title') !='' ) {  ?><h1><?php echo esc_html(get_theme_mod('magista_contact_title')); ?></h1>
        <?php } else {  ?> <h1><?php esc_html_e('Contact us', 'magista') ?></h1>
        <?php } ?>
    </div>
    <?php $var=get_theme_mod('magista_contact_shortcode'); ?>
            <?php if($var) { ?>
    <div class="magista_form container"><?php echo do_shortcode($var); ?></div>
            <?php } ?>
</div>
<?php } ?> 
<div class="magista-map">
	<div class="map-addr">
	<div class="map-tri"><div class="map-tri-inner"></div></div>
		<p>Delhi Office:</p><p>B-4/34B, L.I.G. Flats,</p><p> Ashok Vihar, Phase II,</p><p> Delhi - 110052</p><p><i class="fa fa-phone"></i>+91 98995 63839</p>
		<p><i class="fa fa-phone"></i>+91 95828 95188</p><p><i class="fa fa-envelope"></i> contact@missioniam.com</p>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3499.831120580017!2d77.178884!3d28.694698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02116650bd8f%3A0xbbd1c4f739d1023a!2sMission+I+AM!5e0!3m2!1sen!2sin!4v1413815427259" width="600" height="450" frameborder="0" style="border:0"></iframe>
</div>
<?php get_footer(); ?>