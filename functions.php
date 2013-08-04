<?php
//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
function childtheme_menu_args($args) {
    $args = array(
        'show_home' => 'Home',
        'sort_column' => 'menu_order',
        'menu_class' => 'menu',
        'echo' => false
    );
    return $args;
}
add_filter('wp_page_menu_args','childtheme_menu_args', 20);

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


// I need to add this meta in head for responsive web
// <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
function viewport_responsive_meta() {
?>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<?php
}
add_action('wp_head', 'viewport_responsive_meta');


function respond_scripts() {?>
<!--[if lt IE 9]>
    <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/custom/respond.min.js" type="text/javascript"></script>
<![endif]-->
<?php }
add_action('wp_head','respond_scripts');

function my_typekit_js() {
?>
<script type="text/javascript" src="http://use.typekit.com/iiy6qtl.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php
}
add_action('wp_head', 'my_typekit_js');

?>