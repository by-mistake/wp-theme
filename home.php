<!--The main template. If your Theme provides its own templates, index.php must be present.-->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>by-mistake</title>
        <meta name="description" content="by-mistake" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/theme-tangerine.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700%7CRubik:300,400,500" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-rubiklato.css" rel="stylesheet" type="text/css">

    </head>
    <body data-tpl="home" data-smooth-scroll-offset="77">
        <a id="start"></a>
        <div class="main-container">
            <section id="home" class="cover imagebg height-70 text-center parallax" data-gradient-bg="#2196f3,#8293a4,#F4AC71,#A0B64E,#8293a4,#2196f3">
                <div class="background-image-holder background--top" style="transform: translate3d(0px, 479.5px, 0px); opacity: 1;">
                    <img alt="by-mistake" src="//res.cloudinary.com/by-mistake-com/image/upload/v1512037534/bg.wallpaper-hd_jc6o0t.jpg">
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-6 col-md-7">
                            <img alt="Image" src="//res.cloudinary.com/by-mistake-com/image/upload/v1512036772/logo.wallpaper_jcrpwk.png">
                            <h1 class="motto">
                                The possibility to learn <br><strong>by-mistake</strong> <br>is probably the greatest freedom
                            </h1>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="text-center menu">
                <div class="container menu-container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php get_template_part( 'template-parts/menu/home.header-menu' ); ?>
                            <!--end module-->
                        </div>
                    </div>
                </div>
            </section> <!-- menu -->
            <section class="text-center">
                <h2>complete software services</h2>
                <div class="tabs-container" data-content-align="left">
                    <ul class="tabs tabs--spaced tabs-services">
                        <li class="active">
                            <div class="tab__title text-center"> <i class="icon icon--sm block icon-Code-Window"></i> <span class="h5">development</span> </div>
                            <div class="tab__content">
                                <div class="container switchable switchable--switch">
                                    <div class="row">
                                        <div class="col-sm-7"> <img class="hidden-xs" alt="Development" src="//res.cloudinary.com/by-mistake-com/image/upload/v1512312000/develop_w800-framed_dlblyv.jpg"> </div>
                                        <div class="col-sm-5 col-md-4">
                                            <div class="mt--1">
                                                <h3>Bring your ideas to life</h3>
                                                <p class="lead"> We believe in people and their ideas. We believe that every idea represents a step forward for innovation. Using the latest and most innovative technology, our team of specialists is ready to bring your ideas to life. You with ideas, us with tehnology. <br> One goal, <strong>your dream</strong>. </p>
                                                <hr>
                                                <span class="label label--inline">PHP</span>
                                                <span class="label label--inline">NODEJS</span>
                                                <span class="label label--inline">GO</span>
                                                <span class="label label--inline">PYTHON</span>
                                                <span class="label label--inline">ZF2</span>
                                                <span class="label label--inline">Zend expressive</span>
                                                <span class="label label--inline">Angular</span>
                                                <span class="label label--inline">React</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tab__title text-center"> <i class="icon icon--sm block icon-Statistic"></i> <span class="h5">consulting</span> </div>
                            <div class="tab__content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-7"> <img class="hidden-xs" alt="Technical Consulting" src="//res.cloudinary.com/by-mistake-com/image/upload/v1512334857/consulting_w1000_framed_vs4pkk.jpg"> </div>
                                        <div class="col-sm-5 col-md-4">
                                            <div class="mt--1">
                                                <h3>Cost effective strategies</h3>
                                                <p class="lead"> We have expert staff to help you address people, process, and technology challenges and gain a competitive advantage. We will assist you in ensuring that your IT is able to quickly and efficiently adapt to new business requirements, and is delivered in the most cost-effective model to suit the pace of your business growth. </p>
                                                <hr>
                                                <span class="label label--inline">Microservices</span>
                                                <span class="label label--inline">Docker</span>
                                                <span class="label label--inline">Nginx</span>
                                                <span class="label label--inline">Apache</span>
                                                <span class="label label--inline">Kubernetes</span>
                                                <span class="label label--inline">PaaS</span>
                                                <span class="label label--inline">IaaS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tab__title text-center"> <i class="icon icon--sm block icon-Teacher"></i> <span class="h5">coaching</span> </div>
                            <div class="tab__content">
                                <div class="container switchable switchable--switch">
                                    <div class="row">
                                        <div class="col-sm-7"> <img class="hidden-xs" alt="Workflow Coaching" src="//res.cloudinary.com/by-mistake-com/image/upload/v1512334961/coaching_w800_framed_otjov4.jpg"> </div>
                                        <div class="col-sm-5 col-md-4">
                                            <div class="mt--1">
                                                <h3>Technical Coaching</h3>
                                                <p class="lead"> Technical coaching introduces Agile software engineering practices, which enable progressive capabilities such as Continuous Delivery and DevOps. Deliver consistently high quality code sprint after sprint. </p>
                                                <h3>Workflow Coaching</h3>
                                                <p class="lead"> Workflow coaching helps identify and address areas of waste and impediments to delivery and collaboration. Leverage Agile approaches like Scrum, Kanban and Lean to evolve your workflow. </p>
                                                <hr>
                                                <span class="label label--inline">agile</span>
                                                <span class="label label--inline">scrum</span>
                                                <span class="label label--inline">kanban</span>
                                                <span class="label label--inline">lean</span>
                                                <span class="label label--inline">Pair programming</span>
                                                <span class="label label--inline">Code review</span>
                                                <span class="label label--inline">unit testing</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section> <!-- services -->
            
            <?php get_template_part( 'template-parts/newsletter/front-subscribe' ); ?>
            
            <?php get_template_part( 'template-parts/post/latest-mistakes' ); ?>
            
            <section class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-md-7">
                            <div class="tweets-feed slider text-center" data-feed-name="ideasbymistake" data-amount="5" data-paging="true" data-children="0"></div>
                            <a class="btn btn--icon bg--twitter" href="#"> <span class="btn__text">
                        <i class="socicon socicon-twitter"></i>
                        Visit @ideasbymistake on Twitter
                    </span> </a>
                        </div>
                    </div>
                </div>
            </section> <!-- twitter -->
            <section class="text-center space--xs imagebg" data-gradient-bg="#837CE7,#3D34B2,#0D0574,#0D0574"> 
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="heading-block">
                                <h2 class="type--uppercase">Follow for updates</h2>
                            </div>
                            <div class="instafeed" data-user-name="ideasbymistake" data-amount="6" data-grid="6"></div>
                            <a class="btn btn--primary btn--icon type--uppercase" href="#">
                                <span class="btn__text">
                                    <i class="socicon socicon-instagram"></i>
                                    Follow @ideasbymistake
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end of container-->
            </section> <!-- instagram -->
            
            <?php get_template_part( 'template-parts/contact/front-contact' ); ?>
            <?php get_footer();?>
        </div>
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/flickity.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/parallax.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/granim.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/twitterfetcher.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/spectragram.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/smooth-scroll.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
    </body>

</html>