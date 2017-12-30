<?php
/*
Template Name: blog-articles-magazine
*/
?>
<?php get_header();?>
    <body data-smooth-scroll-offset="77">
        <a id="start"></a>
        <?php get_template_part( 'template-parts/header/single.header-menu' ); ?>
        <div class="main-container">
            <section class="space--sm">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="masonry masonry-blog-magazine">
                                <div class="masonry-filter-container">
                                    <span>Category:</span>
                                    <div class="masonry-filter-holder">
                                        <div class="masonry__filters" data-filter-all-text="All Categories"></div>
                                    </div>
                                </div>
                                <?php get_template_part( 'template-parts/post/magazine' ); ?>
                            </div>
                            <!--end masonry-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <?php get_footer();?>
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <?php get_template_part( 'template-parts/footer/single.scripts' ); ?>
    </body>
</html>