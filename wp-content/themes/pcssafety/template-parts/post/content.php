<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */
$feat_image =  get_the_post_thumbnail_url(get_the_ID(),'full'); 
$author_id = get_post_field ('post_author', get_the_ID());
$authorName = get_the_author_meta( 'nickname' , $author_id ); 
$postdate=get_the_date( 'M j, Y', get_the_ID());
?>
 <article class="blog-details">
<div class="post-img">
    <img src="<?php echo $feat_image; ?>" alt="" class="img-fluid">
</div>
<h2 class="title"><?php the_title(); ?></h2>
 <div class="meta-top">
    <ul>
        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?= get_the_permalink(get_the_ID()) ?>"><?= $authorName ?></a></li>
        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?= get_the_permalink(get_the_ID()) ?>"><time datetime="2020-01-01"><?= $postdate ?></time></a></li>
        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="<?= get_the_permalink(get_the_ID()) ?>"><?=  get_comments_number(get_the_ID()); ?> Comments</a></li>
    </ul>
 </div><!-- End meta top -->
<div class="content">
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				/* translators: %s: Post title. Only visible to screen readers. */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->
</article>
