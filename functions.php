<?php
//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// my original color changer, still going since 2002!
function body_color_class() {
	if(isset($_COOKIE['sitestyle'])){
			$classes[] = trim($_COOKIE['sitestyle']);
	}else { $classes[] = "green"; } 
	return $classes;
}
add_filter('body_class','body_color_class');


// Custom login page. Modifying logo image, link and title
function my_custom_login_logo() {
    echo '<style type="text/css"> h1 a { background-image:url('.get_stylesheet_directory_uri().'/img/logo-login-daigoorg.gif) !important; }</style>';
}
add_action('login_head', 'my_custom_login_logo');

function namespace_login_headerurl( $url ) {
    $url = get_bloginfo( 'url' );
    return $url;
}
add_filter( 'login_headerurl', 'namespace_login_headerurl' );

function namespace_login_headertitle( $title ) {
    $title = get_bloginfo( 'name' );
    return $title;
}
add_filter( 'login_headertitle', 'namespace_login_headertitle' );


// I need to add this meta in head for responsive web -- don't need it. foundation takes care of this. Also, I am adding all teh header items within header.php 
// <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
/* function viewport_responsive_meta() {
?>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<?php
}
add_action('wp_head', 'viewport_responsive_meta');
*/ 
/* edited function.php of the parent, I wanted to format some of the stuff:
// return entry meta information for posts, used by multiple loops. 
// edited Aug 2013 by Daigo
function reverie_entry_meta() {
    echo '<p class="byline author">'. __('By', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
    echo edit_post_link('Edit this', '<p class="byline author editthis">','</p>');
    echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate><i class="icon-calendar-empty"></i> '. sprintf(__('Published on %s', 'reverie'), get_the_time('l, F jS, Y'), get_the_time()).'</time>';
}
*/

?>
