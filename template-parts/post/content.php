<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                <article>
                    <div class="article__title text-center">
                        <?php the_title( '<h1 class="h2 entry-title">', '</h1>' ); ?>
                        <span><?php echo get_the_date(); ?> </span>
                        <span>
                            <a href="<?php the_author_meta('user_url'); ?>"><?php the_author(); ?></a>
                        </span>
                    </div>
                    <!--end article title-->
                    <div class="article__body">
                        <?php
                    		/* translators: %s: Name of current post */
                    		the_content( sprintf('Continue reading<span class="screen-reader-text"> "%s"</span>',get_the_title() ) );
                    
                    		wp_link_pages( array(
                    			'before'      => '<div class="page-links">Pages:',
                    			'after'       => '</div>',
                    			'link_before' => '<span class="page-number">',
                    			'link_after'  => '</span>',
                    		) );
                    		?>
                    </div>
                    <div class="article__share text-center">
                        <a class="btn bg--facebook btn--icon" href="#">
                            <span class="btn__text">
                                <i class="socicon socicon-facebook"></i>
                                Share on Facebook
                            </span>
                        </a>
                        <a class="btn bg--twitter btn--icon" href="#">
                            <span class="btn__text">
                                <i class="socicon socicon-twitter"></i>
                                Share on Twitter
                            </span>
                        </a>
                    </div>
                </article>
                <!--end item-->
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>