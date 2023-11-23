<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="<?php echo bloginfo("template_url"); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo("template_url"); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo bloginfo("template_url"); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo("template_url"); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo bloginfo("template_url"); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo bloginfo("template_url"); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo bloginfo("template_url"); ?>/assets/css/main.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- ======= Header ======= -->
  <div class="top_header">
    <div class="container">
      <div class="row">
        <div class="topheader_sec">
          <div class="top_social">
            <?php if ( get_theme_mod( 'linkedin' ) ): ?>
            <a href="<?php echo get_theme_mod( 'linkedin' ); ?>" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'facebook' ) ): ?>
            <a href="<?php echo get_theme_mod( 'facebook' ); ?>" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'twitter' ) ): ?>
            <a href="<?php echo get_theme_mod( 'twitter' ); ?>" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'instagram' ) ): ?>
            <a href="<?php echo get_theme_mod( 'instagram' ); ?>" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
            <?php endif; ?>
          </div>
          <div class="top_email">
          	 <?php if ( get_theme_mod( 'email' ) ): ?>
            <a href="mailto:<?php echo get_theme_mod( 'email' ); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo get_theme_mod( 'email' ); ?></a>
             <?php endif; ?>
             <?php if ( get_theme_mod( 'phone' ) ): ?>
            <a href="tel:<?php echo get_theme_mod( 'phone' ); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_theme_mod( 'phone' ); ?></a>
             <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header id="header" class="header d-flex align-items-center sticky-header">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo get_home_url();?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <?php
        	$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		?>
        <img src="<?php echo $image[0]; ?>" alt="">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
      	<ul>
        <?php 
		global $wpdb;
		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ 'top' ] ) ) {

		$menu = wp_get_nav_menu_object( $locations[ 'top' ] );
		if ( ! empty( $menu ) ) {
		$menu_items = wp_get_nav_menu_items( $menu->term_id );
		if ( $menu_items ) {    
							foreach ( $menu_items as $key => $menu_item ) 
							{
									$parent=$menu_item->ID;
									$class=$menu_item->classes[0];
									if ( $menu_item->menu_item_parent == 0 ) 
									{
										if($class=='dropdown')
										{
											echo '<li class="'.$class.'"><a href="' . esc_url( $menu_item->url ) . '"><span>' . $menu_item->title . '</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>';
											$menu_array = array();
											echo '<ul>';
											foreach( $menu_items as $submenu ) 
											{
												$child=$submenu->ID;
										    $class1=$submenu->classes[0];
											    if($submenu->menu_item_parent == $parent ) 
											    {
															$bool = true;
															if($class1=='dropdown')
															{
																echo '<li class="'.$class1.'"><a href="' . esc_url( $submenu->url ) . '"><span>' .$submenu->title . '</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>';
																	$menu_array = array();
																	echo '<ul>';
																	foreach( $menu_items as $child1 ) 
																	{
																		if( $child1->menu_item_parent == $child ) 
																		{
																		$bool = true;
																		echo '<li><a href="' . esc_url( $child1->url ) . '">' . $child1->title . '</a></li>';
																		}
																	}
																	echo "</li></ul>";
															}else
															{
																echo '<li><a  href="' . esc_url( $submenu->url ) . '">' .$submenu->title . '</a></li>';
															}		
													}
											}
											echo "</ul>";
										}else
										{
											echo '<li><a  href="' . esc_url( $menu_item->url ) . '">' . $menu_item->title . '</a></li>';
										}	
									}
									echo "</li>";
							} 
		}
		}
		}
		?>
	</ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
