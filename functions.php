<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
// Activar imágenes destacadas en páginas y entradas
//Funciones nativas de WP
//Le decimos a WP que le agregamos una imagen destacada
add_theme_support('post-thumbnails','custom-logo','custom-background');
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}
function custom_single_template($the_template) {
    foreach ( (array) get_the_category() as $cat ) {
        if ( locate_template("single-{$cat->slug}.php") ) {
            return locate_template("single-{$cat->slug}.php");
        }
    }
    return $the_template;
}
add_filter( 'single_template', 'custom_single_template');


// Register a new sidebar simply named 'sidebar'
function dcms_agregar_nueva_zona_widgets() {

  register_sidebar( array(
    'name'          => 'sidebar',
    'id'            => 'idsidebar',
    'description'   => 'Descripción de la nueva Zona de Widgets',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array( 
    'name'          => 'contacto',
    'id'            => 'idcontacto',
    'description'   => 'Descripción de la nueva Zona de Widgets',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'dcms_agregar_nueva_zona_widgets' );

add_filter( 'widget_text','do_shortcode');
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// register_nav_menus( array(
// 	'primary' => __( 'Primary Menu', 'portfolio avanzado' ),
// ) );

// add_action( 'init', 'add_Main_Nav' );

function register_my_menus() {
  register_nav_menus( array(
    'nav-top'     => __('Menú principal'),
    'nav-bottom'  => __('Menú footer')
    
    ));
}
add_action('init','register_my_menus');



// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Incluir Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
  					array('jquery'), 
  					'4.1.3', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}

function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)."...";
echo $excerpt;
}



 add_theme_support( 'post-formats', array( 'aside', 'audio','video','galery' ) );
if( !function_exists( 'theme_pagination' ) ) {
  
    function theme_pagination() {
  
  global $wp_query, $wp_rewrite;
  $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
  
  $pagination = array(
    'base' => @add_query_arg('page','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
          'show_all' => false,
          'end_size'     => 1,
          'mid_size'     => 2,
    'type' => 'list',
    'next_text' => '»',
    'prev_text' => '«'
  );
  
  if( $wp_rewrite->using_permalinks() )
    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
  
  if( !empty($wp_query->query_vars['s']) )
    $pagination['add_args'] = array( 's' => str_replace( ' ' , '+', get_query_var( 's' ) ) );
    
  echo str_replace('page/1/','', paginate_links( $pagination ) );
    } 
}
if ( function_exists('cn_cookies_accepted') && cn_cookies_accepted() ) {
    // Your third-party non functional code here
}


// Hooks admin-post
add_action( 'admin_post_nopriv_process_form', 'send_mail_data' );
add_action( 'admin_post_process_form', 'send_mail_data' );

// Funcion callback
function send_mail_data() {

  $name = sanitize_text_field($_POST['name']);
  $email = sanitize_email($_POST['email']);
  $message = sanitize_textarea_field($_POST['message']);

  $adminmail = "contacto@sofiamfenandez.com"; //email destino
  $subject = 'Formulario de contacto'; //asunto
  $headers = "Reply-to: " . $name . " <" . $email . ">";

  //Cuerpo del mensaje
  $msg = "Nombre: " . $name . "\n";
  $msg .= "E-mail: " . $email . "\n\n";
  $msg .= "Mensaje: \n\n" . $message . "\n";

  $sendmail = wp_mail( $adminmail, $subject, $msg, $headers);

  wp_redirect( home_url("/contacto/")."?sent=".$sendmail ); //asumiendo que existe esta url
}

function dcms_widget_tag_cloud_args( $args ) {
	$args['largest']  = 20;
	$args['smallest'] = 10;
	$args['unit']     = 'px';
	$args['format']   = 'list';
	$args['number']	  = 10;
	$args['orderby']  = 'count';
	$args['order']  = 'RAND';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'dcms_widget_tag_cloud_args' );

