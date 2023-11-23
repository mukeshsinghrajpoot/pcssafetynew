<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo bloginfo("template_url"); ?>/assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <ol>
          <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
          <li><?php the_title(); ?></li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->
     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'  => '</div>',
				)
			);
			?>
	
