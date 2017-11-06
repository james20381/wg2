<?php
/**
 * The navigation for our theme's blog pages.
 *
 * The template for displaying the site's blog pages top navigation.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrapPress
 */
?>

   <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar">
     <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php require get_template_directory() . '/img/color_logo_transparent.svg'; ?></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav justify-content-end ml-auto">
  				<?php
           $args = array(
             'theme_location' => 'home-menu',
             'depth'      => 2,
             'container'  => false,
             'menu_class'     => 'navbar-nav',
             'walker'     => new Bootstrap_Walker_Nav_Menu()
             );
           if (has_nav_menu('home-menu')) {
             wp_nav_menu($args);
           }
         ?>
       </ul>
     </div>
   </nav>
