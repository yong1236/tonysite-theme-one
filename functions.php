<?php

// 小工具
include("includes/sidebars.php");
include("includes/widget.php"); //命名为widget.php将失效，不知是为什么


//在系统设置完主题后调用
if ( ! function_exists( 'tonysite_one' ) ) :
function tonysite_one(){
    
    /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	//启用缩略图
	add_theme_support('post-thumbnails');
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'tonysiteone' ),
		'social'  => __( 'Social Links Menu', 'tonysiteone' ),
		'blog'    => __( 'Blog Menu',      'tonysiteone' )
	) );
	
}
endif;  // tonysite_one
add_action( 'after_setup_theme', 'tonysite_one' );

//面包屑
include("includes/breadcrumbs.php");
?>
