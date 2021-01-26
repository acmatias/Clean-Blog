<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific support settings
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}

	
	// Bootstrap core CSS
	
	function load_stylesheets(){
		wp_register_style('bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css', array(), 1, 'all' );
		wp_enqueue_style('bootstrap');

		wp_register_style('fontawesome', get_template_directory_uri().'/vendor/fontawesome-free/css/all.min.css', array(), 1, 'all' );
		wp_enqueue_style('fontawesome');

		wp_register_style('css', get_template_directory_uri().'/css/clean-blog.min.css', array(), 1, 'all' );
		wp_enqueue_style('css');

		wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), 1, 'all' );
		wp_enqueue_style('custom');
	}
	add_action('wp_enqueue_scripts', 'load_stylesheets');

	
	// JavaScripts

	function addjs(){
		wp_register_script('jquery', get_template_directory_uri().'/vendor/jquery/jquery.min.js', array(), 1, 1, 1);
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), 1, 1, 1);
		wp_enqueue_script('bootstrap');

		wp_register_script('scripts', get_template_directory_uri().'/js/clean-blog.min.js', array(), 1, 1, 1);
		wp_enqueue_script('scripts');

		wp_register_script('custom', get_template_directory_uri().'/js/custom.js', array(), 1, 1, 1);
		wp_enqueue_script('custom');
	}

	
	// Menu Support

	register_nav_menus(
		array(
			'top-menu' => __('Top Menu', 'theme'),
		)
	);

	
	// wp_nav_menu  adding 'li' function

	function add_additional_class_on_li($classes, $item, $args) {
		if(isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
		}
		return $classes;
	}
	add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

	
	
	


