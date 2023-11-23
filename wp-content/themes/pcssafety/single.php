<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo bloginfo("template_url"); ?>/assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <ol>
          <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
          <li><?php the_title(); ?></li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->
<section id="blog" class="blog">
<div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-5">
        <div class="col-lg-8">
          <?php
          // Start the Loop.
          while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/post/content', get_post_format() );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

            the_post_navigation(
              array(
                /* translators: Hidden accessibility text. */
                'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                /* translators: Hidden accessibility text. */
                'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
              )
            );

          endwhile; // End the loop.
          ?>
        </div>
        <div class="col-lg-4">
        <div class="sidebar">
          <?php get_sidebar(); ?>
         </div>
         </div>
    </div>
</div>
</section>
<?php
get_footer();
