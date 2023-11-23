<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
  <?php echo get_field( "home_page_banner" ); ?>
  </section><!-- End Hero Section -->
  <main id="main">
  <section id="whoweare" class="whowe_are">
    <?php echo get_field( "whoweare" ); ?>
  </section>
    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <?php echo get_field( "what_we_do" ); ?>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <?php echo get_field( "services_section" ); ?>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">
        <?php echo get_field( "our_training_courses" ); ?>
      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <?php echo get_field( "features_section", false, false); ?>
    </section><!-- End Features Section -->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <?php echo get_field( "testimonials_section", false, false); ?>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
        <?php echo get_field( "recent_blog", false, false); ?>
      <div class="row gy-5">
        <?php
          $i=100;
          $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
          ));
          foreach( $recent_posts as $post_item ) : 
          $url = wp_get_attachment_url( get_post_thumbnail_id($post_item['ID']), 'thumbnail' );
          $author_id = get_post_field ('post_author', $post_item['ID']);
          $authorName = get_the_author_meta( 'nickname' , $author_id ); 
          $postdate=get_the_date( 'F d', $post_item['ID']);
          ?>
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i ?>">
          <div class="post-item position-relative h-100">
            <div class="post-img position-relative overflow-hidden">
              <img src="<?= $url ?>" class="img-fluid" alt="">
              <span class="post-date"><?= $postdate ?></span>
            </div>
            <div class="post-content d-flex flex-column">
              <h3 class="post-title"><?php echo $post_item['post_title'] ?></h3>
              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2"><?= $authorName ?></span>
                </div>
              </div>
              <hr>
              <a href="<?= get_the_permalink($post_item['ID']) ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <?php $i+100; endforeach; ?>
      </div>
      </div>
    </section>
    <!-- End Recent Blog Posts Section -->
    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">
        <div class="row justify-content-between gy-4">
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
        <?php echo get_field("get_started_section",false,false); ?>
        </div>
        <div class="col-lg-5" data-aos="fade"><?php echo do_shortcode('[contact-form-7 id="7aa4ec2" title="home quote" html_class="php-email-form"]'); ?></div>
        </div>
      </div>
    </section><!-- End Get Started Section -->
  </main><!-- End #main -->

<?php
get_footer();
