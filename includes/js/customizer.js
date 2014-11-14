/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

jQuery( document ).ready( function( $ ) {
    // Site title and description.
    wp.customize( 'blogname', function( value ) {
        value.bind( function( to ) {
            $( '.site-title a' ).text( to );
        } );
    } );
    wp.customize( 'blogdescription', function( value ) {
        value.bind( function( to ) {
            $( '.site-description' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_title', function( value ) {
        value.bind( function( to ) {
            $( '.magista_feature_content .magista_page-title h1' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_description', function( value ) {
        value.bind( function( to ) {
            $( '.magista_feature_content .magista_page-title p' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_title_1', function( value ) {
        value.bind( function( to ) {
            $( '#feature1 h2' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_description_1', function( value ) {
        value.bind( function( to ) {
            $( '#feature1 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_title_2', function( value ) {
        value.bind( function( to ) {
            $( '#feature2 h2' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_description_2', function( value ) {
        value.bind( function( to ) {
            $( '#feature2 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_title_3', function( value ) {
        value.bind( function( to ) {
            $( '#feature3 h2' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_description_3', function( value ) {
        value.bind( function( to ) {
            $( '#feature3 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_title_4', function( value ) {
        value.bind( function( to ) {
            $( '#feature4 h2' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_description_4', function( value ) {
        value.bind( function( to ) {
            $( '#feature4 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_title_5', function( value ) {
        value.bind( function( to ) {
            $( '#feature5 h2' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_description_5', function( value ) {
        value.bind( function( to ) {
            $( '#feature5 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_title_6', function( value ) {
        value.bind( function( to ) {
            $( '#feature6 h2' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_description_6', function( value ) {
        value.bind( function( to ) {
            $( '#feature6 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_title_7', function( value ) {
        value.bind( function( to ) {
            $( '#feature7 h2' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_description_7', function( value ) {
        value.bind( function( to ) {
            $( '#feature7 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_title_8', function( value ) {
        value.bind( function( to ) {
            $( '#feature8 h2' ).text( to );
        } );
    } );
    wp.customize( 'magista_features_description_8', function( value ) {
        value.bind( function( to ) {
            $( '#feature8 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_about_title', function( value ) {
        value.bind( function( to ) {
            $( '.magista_about_section .magista_page-title h1' ).text( to );
        } );
    } );
    wp.customize( 'magista_video_title', function( value ) {
        value.bind( function( to ) {
            $( '.magista_about_section .magista_page-title h2' ).text( to );
        } );
    } );
    wp.customize( 'magista_about_desc', function( value ) {
        value.bind( function( to ) {
            $( '.magista_about_section .magista_about_description p' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_title', function( value ) {
        value.bind( function( to ) {
            $( '.magista_team .magista_page-title h1' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_title_1', function( value ) {
        value.bind( function( to ) {
            $( '#team1 h4' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_description_1', function( value ) {
        value.bind( function( to ) {
            $( '#team1 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_title_2', function( value ) {
        value.bind( function( to ) {
            $( '#team2 h4' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_description_2', function( value ) {
        value.bind( function( to ) {
            $( '#team2 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_title_3', function( value ) {
        value.bind( function( to ) {
            $( '#team3 h4' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_description_3', function( value ) {
        value.bind( function( to ) {
            $( '#team3 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_title_4', function( value ) {
        value.bind( function( to ) {
            $( '#team4 h4' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_description_4', function( value ) {
        value.bind( function( to ) {
            $( '#team4 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_team_title_1', function( value ) {
        value.bind( function( to ) {
            $( '#team1 h4' ).text( to );
        } );
    } );
    wp.customize( 'magista_test_title', function( value ) {
        value.bind( function( to ) {
            $( '.magista_testimonial .magista_page-title h1' ).text( to );
        } );
    } );
    wp.customize( 'magista_test_description_1', function( value ) {
        value.bind( function( to ) {
            $( '#magista_content1 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_test_description_2', function( value ) {
        value.bind( function( to ) {
            $( '#magista_content2 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_test_description_3', function( value ) {
        value.bind( function( to ) {
            $( '#magista_content3 p' ).text( to );
        } );
    } );
    wp.customize( 'magista_gallery_title', function( value ) {
        value.bind( function( to ) {
            $( '.magista_gallery .magista_page-title h1' ).text( to );
        } );
    } );
    wp.customize( 'magista_blog_title', function( value ) {
        value.bind( function( to ) {
            $( '.magista_blog .magista_page-title h1' ).text( to );
        } );
    } );
    wp.customize( 'magista_site_title', function( value ) {
        value.bind( function( to ) {
            $( '.site-name h1' ).text( to );
        } );
    } );
    wp.customize( 'magista_menu1', function( value ) {
        value.bind( function( to ) {
            $( '#magista_menu1 a' ).text( to );
        } );
    } );
    wp.customize( 'magista_menu2', function( value ) {
        value.bind( function( to ) {
            $( '#magista_menu2 a' ).text( to );
        } );
    } );
    wp.customize( 'magista_menu3', function( value ) {
        value.bind( function( to ) {
            $( '#magista_menu3 a' ).text( to );
        } );
    } );
    wp.customize( 'magista_menu4', function( value ) {
        value.bind( function( to ) {
            $( '#magista_menu4 a' ).text( to );
        } );
    } );
    wp.customize( 'magista_menu5', function( value ) {
        value.bind( function( to ) {
            $( '#magista_menu5 a' ).text( to );
        } );
    } );    
    wp.customize( 'magista_menu6', function( value ) {
        value.bind( function( to ) {
            $( '#magista_menu6 a' ).text( to );
        } );
    } );
    wp.customize( 'magista_menu7', function( value ) {
        value.bind( function( to ) {
            $( '#magista_menu7 a' ).text( to );
        } );
    } );
    // Header text color.
    wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( to ) {
            if ( 'blank' === to ) {
                $( '.site-title, .site-description' ).css( {
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                } );
            } else {
                $( '.site-title, .site-description' ).css( {
                    'clip': 'auto',
                    'color': to,
                    'position': 'relative'
                } );
            }
        } );
    } );
} );