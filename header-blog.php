<?php
/**
 * The blog header for our theme
 *
 * This is the template that displays all of the blog's <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrapPress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header>
<?php
 require get_template_directory() . '/template-parts/navigation/navigation-blog-top.php';
 ?>






















	<div id="content" class="site-content">
