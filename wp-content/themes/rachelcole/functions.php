<?php


add_filter('show_admin_bar', '__return_false');
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'pyramid', 600, 600, true );
if ( is_user_logged_in() ) { show_admin_bar( true ); }


// Menus
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'main_menu', __( 'Main Menu' ) );
}

if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
}


// Widgets
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Sidebar',
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));



// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Limit excerpt text function
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}


function widget_title_link( $title ) {
    if( $title == "Follow me on Instagram" ) {
        return " Follow me on <a href=\"https://instagram.com/rachelwcole\" target=\"_blank\">Instagram</a>";
    }
	else {
        return $title;
    }
}
add_filter( 'widget_title', 'widget_title_link' );

/*********************
RECENT BLOG WIDGET
*********************/
class Custom_Recent_Posts extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'widget_recent_entries', 'description' => __( "This is a custom recent posts widget.") );
        parent::__construct('recent-posts', __('Custom Recent Posts'), $widget_ops);
        $this->alt_option_name = 'widget_recent_entries';

        add_action( 'save_post', array($this, 'flush_widget_cache') );
        add_action( 'deleted_post', array($this, 'flush_widget_cache') );
        add_action( 'switch_theme', array($this, 'flush_widget_cache') );
    }

    function widget($args, $instance) {
        $cache = wp_cache_get('widget_recent_posts', 'widget');

        if ( !is_array($cache) )
            $cache = array();

        if ( ! isset( $args['widget_id'] ) )
            $args['widget_id'] = $this->id;

        if ( isset( $cache[ $args['widget_id'] ] ) ) {
            echo $cache[ $args['widget_id'] ];
            return;
        }

        ob_start();
        extract($args);

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 10;
        if ( ! $number )
            $number = 10;

        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
        if ($r->have_posts()) :
?>
        <?php echo $before_widget; ?>
        <?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<?php echo '<ul>'; ?>
        <?php while ( $r->have_posts() ) : $r->the_post(); ?>
			<?php $num_comments = get_comments_number(get_the_ID()); ?>
			<li class="clearfix"><div class="img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-thumb2'); ?></a></div><div class="text"><a href="<?php the_permalink(); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a><span class="date"><?php echo get_the_time('F j, Y'); ?></span></div></li>
        <?php endwhile; ?>
		<?php echo '</ul>'; ?>
        <?php echo $after_widget; ?>
<?php
        wp_reset_postdata();

        endif;

        $cache[$args['widget_id']] = ob_get_flush();
        wp_cache_set('widget_recent_posts', $cache, 'widget');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = (int) $new_instance['number'];
        $this->flush_widget_cache();

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['widget_recent_entries']) )
            delete_option('widget_recent_entries');

        return $instance;
    }

    function flush_widget_cache() {
        wp_cache_delete('widget_recent_posts', 'widget');
    }

    function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
        <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
<?php
    }
}

function register_recentposts_widget() {
    register_widget( 'Custom_Recent_Posts' );
}
add_action( 'widgets_init', 'register_recentposts_widget' );

// Header/Footer Scripts
function ss_init_script() {
	if (!is_admin()) {
	   wp_deregister_script( 'jquery' );
	   wp_register_script( 'jquery', get_template_directory_uri().'/js/jquery.js');
	   wp_enqueue_script( 'jquery',true);
	   wp_enqueue_script('modernizr', get_template_directory_uri().'/js/modernizr.js', array('jquery'), '1.0.0');
	   wp_enqueue_script('superfish', get_template_directory_uri().'/js/superfish.js', array('jquery'), '1.0.0');
	   wp_enqueue_script('magnificjs', get_template_directory_uri().'/js/magnific-popup/jquery.magnific-popup.js', array('jquery'), '1.0.0');
	   wp_enqueue_script('mainjs', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0.0');

	   wp_enqueue_style( 'normalizeStyle', get_template_directory_uri() . '/css/normalize.css' );
	   wp_enqueue_style( 'mainStyle', get_stylesheet_uri(), array(), time() );
	   wp_enqueue_style( 'fontawesomeStyle', get_template_directory_uri() . '/css/font-awesome.css' );
	   wp_enqueue_style( 'superfishStyle', get_template_directory_uri() . '/css/superfish.css' );
	   wp_enqueue_style( 'magnificStyle', get_template_directory_uri() . '/js/magnific-popup/magnific-popup.css' );
	   wp_enqueue_style( 'responsiveStyle', get_template_directory_uri() . '/css/responsive.css' );
	}
}
add_action('init', 'ss_init_script');

remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

?>