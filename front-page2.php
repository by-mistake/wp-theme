<?php

$layout = get_option( 'front_page_layout', 'default' );
get_template_part( 'template-parts/front-page/'. $layout );

?>