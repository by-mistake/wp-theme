<!--https://wordpress.stackexchange.com/questions/1753/when-should-you-use-wp-query-vs-query-posts-vs-get-posts/1755#1755-->
<?php $latestPosts = wp_get_recent_posts( array( 'numberposts' => '3' ) ); ?>
<?php if(!empty($latestPosts)) : ?>
<section>
    <div class="container">
        <div class="row text-block">
            <div class="col-sm-12">
                <h3>Latest mistakes</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ( $latestPosts as $post ) : ?>
            <div class="col-sm-4">
                <article class="feature feature-1">
                    <a href="#" class="block"> 
                        <img alt="Image" src="<?php echo get_the_post_thumbnail_url($post['ID']); ?>"> 
                    </a>
                    <div class="feature__body boxed boxed--border"> 
                        <span><?php echo $post['post_date']; ?></span>
                        <h5><?php echo $post['post_title']; ?></h5> 
                        <a href="<?php echo get_permalink($post['ID']) ?>">Read More </a> 
		            </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php wp_reset_query();?>
</section> <!-- blog -->
<?php endif; ?>