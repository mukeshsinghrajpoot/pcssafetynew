<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<main id="main">
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo bloginfo("template_url"); ?>/assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      	<h2><?php single_post_title(); ?></h2>
        <ol>
          <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
          <li><?php single_post_title(); ?></li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->
		<!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 posts-list">
        	<?php
							if ( have_posts() ) :
							while ( have_posts() ) :
							the_post();
					$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
          $author_id = get_post_field ('post_author', get_the_ID());
          $authorName = get_the_author_meta( 'nickname' , $author_id ); 
          $postdate=get_the_date( 'F d', get_the_ID());
					?>
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">
              <div class="post-img position-relative overflow-hidden">
                <img src="<?= $url ?>" class="img-fluid" alt="">
                <span class="post-date"><?= $postdate ?></span>
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title"><?= the_title(); ?></h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2"><?= $authorName ?></span>
                  </div>
                  <!-- <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div> -->
                </div>
                <p>
                  <?php echo wp_trim_words( get_the_content(), 20, '.' ); ?>
                </p>
                <hr>
                <a href="<?= get_the_permalink(get_the_ID()) ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End post list item -->
        <?php endwhile; ?>
        </div><!-- End blog posts list -->
		        <?php 
		        	the_posts_pagination(
							array(
								/* translators: Hidden accessibility text. */
								'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
								/* translators: Hidden accessibility text. */
								'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
								/* translators: Hidden accessibility text. */
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
							)
						);
					else :
						get_template_part( 'template-parts/post/content', 'none' );
					endif;
         ?>
       <!--  <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div> --><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
<?php
get_footer();
