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


<!-- Cut from header.php -->

<header id="masthead" class="site-header" role="banner">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">
       <div class="navbar-brand mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <?php
            $args = array(
              'theme_location' => 'primary',
              'depth'      => 2,
              'container'  => false,
              'menu_class'     => 'navbar-nav',
              'walker'     => new Bootstrap_Walker_Nav_Menu()
              );
            if (has_nav_menu('primary')) {
              wp_nav_menu($args);
            }
            ?>
          </div>

        </div>
  </nav>
</header><!-- #masthead -->





<?php if ( is_front_page() ) :
  wp_nav_menu( array(
    'theme_location' => 'home-menu'
    // 'menu_id'        => 'primary-menu',
  ) );
  else :
    wp_nav_menu(array(
    'theme_location' => 'blog-menu'
  ));
  endif;
?>






<li class="nav-item active">
  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item">
  <a class="nav-link disabled" href="#">Disabled</a>
</li>
