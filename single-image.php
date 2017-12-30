<!--The single post template used when a single post from a custom post type is queried. -->
<!--For example, single-book.php would be used for displaying single posts from the -->
<!--custom post type named "book". index.php is used if the query template for the -->
<!--custom post type is not present.-->
<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'bymistake-featured-image' ); ?>
		</a>
	</div><!-- .post-thumbnail -->
<?php endif; ?>