<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <!-- <img src="<?php //echo bloginfo("template_url"); ?>/assets/img/pcs-safety_logo1.png" alt="pcs-safety"> -->
              <?php if ( is_active_sidebar( 'sidebar-2' ) ){
               dynamic_sidebar( 'sidebar-2' ); 
               } ?>
              <p>
                <br><?php if ( get_theme_mod( 'address' ) ): ?><?php echo get_theme_mod( 'address' ); ?><?php endif; ?><br><?php if ( get_theme_mod( 'address1' ) ): ?><?php echo get_theme_mod( 'address1' ); ?><?php endif; ?><br><br>
                <?php if ( get_theme_mod( 'phone' ) ): ?><strong>Phone:</strong> <a href="tel:<?php echo get_theme_mod( 'phone' ); ?>"><?php echo get_theme_mod( 'phone' ); ?></a><br><?php endif; ?>
                <?php if ( get_theme_mod( 'email' ) ): ?><strong>Email:</strong> <a href="mailto:<?php echo get_theme_mod( 'email' ); ?>"><?php echo get_theme_mod( 'email' ); ?></a><br><?php endif; ?>
              </p>
              <div class="social-links d-flex mt-3">
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
            </div>
          </div><!-- End footer info column-->
          <?php if ( is_active_sidebar( 'sidebar-3' ) ){
               dynamic_sidebar( 'sidebar-3' ); 
               } ?>
          <?php if ( is_active_sidebar( 'sidebar-4' ) ){
               dynamic_sidebar( 'sidebar-4' ); 
               } ?>
          <?php if ( is_active_sidebar( 'sidebar-5' ) ){
               dynamic_sidebar( 'sidebar-5' ); 
               } ?>          
        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          <?php if ( get_theme_mod( 'copyright' ) ): ?>
          <?php echo get_theme_mod( 'copyright' ); ?>
           <?php endif; ?>
        </div>
        
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo bloginfo("template_url"); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo bloginfo("template_url"); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo bloginfo("template_url"); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo bloginfo("template_url"); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo bloginfo("template_url"); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo bloginfo("template_url"); ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo bloginfo("template_url"); ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo bloginfo("template_url"); ?>/assets/js/main.js"></script>
<script>
window.onscroll = function() {
    // Get the header
    var header = document.querySelector(".sticky-header");

    // Get the offset position of the header
    var sticky = header.offsetTop;

    // Add the "fixed" class to the header when you reach its scroll position
    if (window.pageYOffset > sticky) {
        header.classList.add("fixed");
    } else {
        header.classList.remove("fixed");
    }
};
</script>
<?php wp_footer(); ?>

</body>
</html>
