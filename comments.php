<!--The comments template.-->
<?php if ( comments_open()) :?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="comments">
                    <h3><?php get_comments_number(); ?> Comments</h3>
                    <ul class="comments__list">
                        <?php foreach($comments as $comment) : ?>
                        <li>
                            <div class="comment">
                                <div class="comment__avatar">
                                    <!--<img alt="Image" src="img/avatar-round-1.png" />-->
                                </div>
                                <div class="comment__body">
                                    <h5 class="type--fine-print"><?php comment_author(); ?></h5>
                                    <div class="comment__meta">
                                        <span><?php comment_date(); comment_time();?></span>
                                        <a href="#">Reply</a>
                                    </div>
                                    <p>
                                        <?php 
                                        if ($comment->comment_approved == '0'):
                                            echo 'Your comment is awaiting approval';
                                        else:
                                            comment_text(); 
                                        endif; 
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <!--end comment-->
                            
                            <!--<div class="comment">-->
                            <!--    <div class="comment__avatar">-->
                            <!--        <img alt="Image" src="img/avatar-round-3.png" />-->
                            <!--    </div>-->
                            <!--    <div class="comment__body">-->
                            <!--        <h5 class="type--fine-print">Jacob Sims</h5>-->
                            <!--        <div class="comment__meta">-->
                            <!--            <span>10th May 2016</span>-->
                            <!--            <a href="#">Reply</a>-->
                            <!--        </div>-->
                            <!--        <p>-->
                            <!--            Prototype intuitive intuitive thought leader personas parallax paradigm long shadow engaging unicorn SpaceTeam fund ideate paradigm.-->
                            <!--        </p>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--end comment-->
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <!--end comments-->
                <?php get_template_part( 'template-parts/comment/comment-form' ); ?>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<?php endif;?>