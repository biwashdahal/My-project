<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fourteen_blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-post-item">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image">
				<?php fourteen_blog_post_thumbnail(); ?>
			</div><!-- .featured-image -->
        <?php endif; ?>
        
        <div class="entry-container">
			<?php fourteen_blog_entry_footer(); ?>

			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->

			<?php $excerpt = get_the_excerpt();
			if ( !empty($excerpt) ) { ?>
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div><!-- .entry-content -->
			<?php } ?>

			<?php $read_more_label = get_theme_mod( 'read_more_label' , 'Read more' );
			if ( !empty($read_more_label) ) { ?>
				<div class="read-more">
					<a class="btn" href="<?php the_permalink(); ?>"><?php echo esc_html($read_more_label);?></a>
				</div><!-- .read-more -->
			<?php } ?>
		</div><!-- .entry-container -->
	</div><!-- .blog-post-item -->
</article><!-- #post-<?php the_ID(); ?> -->
