<?php get_header();?>
    <body data-smooth-scroll-offset="77">
        <a id="start"></a>
        <?php get_template_part( 'template-parts/header/single.header-menu' ); ?>
        <div class="main-container">
            <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
                
				$args = wp_parse_args( $args, array(
                    'prev_text'          => '&#x21E6; <span class="hidden-lg">Prev</span><span class="visible-lg-inline">%title</span>',
                    'next_text'          => '<span class="hidden-lg">Next</span><span class="visible-lg-inline">%title</span> &#x21E8;',
                    // 'in_same_term'       => false,
                    // 'excluded_terms'     => '',
                    // 'taxonomy'           => 'category',
                    // 'screen_reader_text' => 'Post navigation',
                ) );
             
				echo get_the_post_navigation( $args );

			endwhile; // End of the loop.
			?>
            
            <?php //get_template_part( 'template-parts/newsletter/post-subscribe' ); ?>
            <section class="space--sm">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <?php //comments_template(); ?>
            <?php get_template_part( 'template-parts/post/latest-mistakes' ); ?>
            <?php get_footer();?>
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <?php get_template_part( 'template-parts/footer/single.scripts' ); ?>
    </body>
</html>