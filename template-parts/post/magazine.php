<div class="row">
    <div class="masonry__container">
        <div class="masonry__item col-sm-6"></div>
    <?php 
        // Global Variables
        global $paged;
        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
        $args = array( 'post_type' => 'post', 'posts_per_page' => 7, 'paged' => $paged );
        $wp_query = new WP_Query($args);
        // $count = $wp_query->post_count;
        // var_dump($wp_query->post_count);exit();
        $i = 0;
        $classes = array(
            'col-sm-12 col-xs-12',
            'col-sm-6 col-xs-12',
            'col-sm-6 col-xs-12',
            'col-sm-12 col-md-6 col-xs-12',
            'col-sm-12 col-xs-12',
            'col-sm-6 col-xs-12',
            'col-sm-6 col-xs-12',
        );
        $tall = array('','','','height--tall','','','','');
        while ( have_posts() ) : the_post(); 
        $postcategories = get_the_category();
        // var_dump($postcategories);exit();
        
    ?>
        
        <div class="masonry__item <?php echo $classes[$i]?>" data-masonry-filter="<?php echo esc_html( $postcategories[0]->name);?>">
            <a class="block" href="<?php echo get_permalink($post->ID) ?>">
                <article class="imagebg border--round <?php echo $tall[$i]?>" data-scrim-bottom="8">
                    <span class="label">New</span>
                    <div class="background-image-holder">
                        <img alt="background" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" />
                    </div>
                    <div class="article__title">
                        <span><?php echo $post->post_date; ?></span>
                        <h4><?php echo $post->post_title; ?></h4>
                    </div>
                </article>
            </a>
        </div>
        <?php if(3==$i) get_template_part( 'template-parts/newsletter/magazine-subscribe' ); ?>
        <!--end item-->
        <?php $i++;?>
        <?php endwhile; ?>
    </div>
    <?php if (3 >= $i) get_template_part( 'template-parts/newsletter/front-subscribe' ); ?>
</div>
<!--end of row-->

<div class="pagination">
    <?php next_posts_link( '&#x21E6; Older posts', $wp_query ->max_num_pages); ?>
    <?php previous_posts_link( 'Newer posts &#x21E8;'); ?>
</div>
