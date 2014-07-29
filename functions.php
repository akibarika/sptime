<?php
/**
 * Created by PhpStorm.
 * User: akibarika
 * Date: 29/07/14
 * Time: 10:08 上午
 */
    require get_template_directory() . '/inc/post_types.php';
    include_once('inc/metaboxclass.php');
    include_once('inc/metabox.php');
	add_filter('show_admin_bar');
	// Register Sidebar
	function custom_sidebar() {

		$args = array(
			'id'            => 'main-sidebar',
			'name'          => __( 'Widget Area', 'text_domain' ),
			'description'   => __( 'Aside Widgets.', 'text_domain' ),
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			'before_widget' => '<aside id="%1$s" class="widget %2$s left">',
			'after_widget'  => '</aside>',
		);
		register_sidebar( $args );

	}

	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'custom_sidebar' );

	// Register Navigation Menus
	function custom_navigation_menus() {

		$locations = array(
			'menu' => __( 'Custom Header Menu', 'text_domain' ),
		);
		register_nav_menus( $locations );

	}

	// Hook into the 'init' action
	add_action( 'init', 'custom_navigation_menus' );

	// 中文截断文字
	function cut_str($string, $sublen, $start = 0, $code = 'UTF-8'){if($code == 'UTF-8'){$pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";preg_match_all($pa, $string, $t_string);if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";return join('', array_slice($t_string[0], $start, $sublen));}else{$start = $start*2;$sublen = $sublen*2;$strlen = strlen($string);$tmpstr = '';for($i=0; $i<$strlen; $i++){ if($i>=$start && $i<($start+$sublen)){if(ord(substr($string, $i, 1))>129) $tmpstr.= substr($string, $i, 2);else $tmpstr.= substr($string, $i, 1);}if(ord(substr($string, $i, 1))>129) $i++;}if(strlen($tmpstr)<$strlen ) $tmpstr.= "...";return $tmpstr;}}

	/* wpbeginner_numeric_posts_nav  */
	function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
	return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
	return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
	$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
	$links[] = $paged - 1;
	$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
	$links[] = $paged + 2;
	$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
	printf( '<li>%s</li>' . "\n", get_previous_posts_link('<i class="fa-angle-left"></i>') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
	$class = 1 == $paged ? ' class="active"' : '';

	printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

	if ( ! in_array( 2, $links ) )
	echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
	$class = $paged == $link ? ' class="active"' : '';
	printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
	if ( ! in_array( $max - 1, $links ) )
	echo '<li>…</li>' . "\n";

	$class = $paged == $max ? ' class="active"' : '';
	printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
	printf( '<li>%s</li>' . "\n", get_next_posts_link('<i class="fa-angle-right"></i>') );

	echo '</ul></div>' . "\n";

	}

	/* Mini Pagenavi v1.0 by Willin Kan. */
	function pagenavi( $p = 2 ) {if ( is_singular() ) return; global $wp_query, $paged;$max_page = $wp_query->max_num_pages;if ( $max_page == 1 ) return; if ( empty( $paged ) ) $paged = 1;echo '<span class="pagescout">Page: ' . $paged . ' of ' . $max_page . ' </span> '; if ( $paged > $p + 1 ) p_link( 1, '第 1 页' );if ( $paged > $p + 2 ) echo '<span class="page-numbers"> ... </span>';for( $i = $paged - $p; $i <= $paged + $p; $i++ ) { if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<span class='page-numbers current'>{$i}</span> " : p_link( $i );}if ( $paged < $max_page - $p - 1 ) echo '<span class="page-numbers"> ... </span>';if ( $paged < $max_page - $p ) p_link( $max_page, '最末页' );}

