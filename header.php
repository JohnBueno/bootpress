<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="DESCRIPTION" />
<meta name="keywords" content=""/>

<meta property="og:type" content="website"/>
<meta property="og:image" content="<?php bloginfo( 'template_directory' ); ?>/images/facebook.png"/>
<meta property="og:site_name" content="SITENAME.com"/>
<meta property="fb:admins" content="24404043"/>
<?php if (is_front_page()) : ?>
    <meta property="og:title" content="SITE NAME"/>
    <meta property="og:url" content="http://www.SITENAME.com"/>
    <meta property="og:description" content="OG DESCRIPTION"/>
<?php elseif (is_single() || is_page()) : ?>
	<meta property="og:title" content="SITE NAME | <?php the_title(); ?>"/>
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:description" content="<?php the_excerpt();?>"/>

<?php elseif (!is_front_page() && !is_single() && !is_page()) : ?>   
<meta property="og:title" content="<?php echo trim(wp_title("", false)); ?>"/>
<?php endif ?> 


<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div class="container" id="header">
	<div class="row">
		<div class="span12"><?php wp_nav_menu(array('menu' => 'Main' )); ?></div>
	</div>
		
</div><!-- #header -->

<div class="container">
