<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo bloginfo("template_url"); ?>/assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      	<h2><?php echo '404'; ?></h2>
        <ol>
          <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
          <li><?php echo '404'; ?></li>
        </ol>
      </div>
    </div><!-- End Breadcrumbs -->
    <div class="container">
		<div class="row">
		<div class="col-md-12">
		<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>
					<div class="sidebar-item search-form">
					<?php get_search_form(); ?>
				</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
</div>
</div>
</div>
<?php
get_footer();
