<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <article class="row">
            <div class="col-9 order-2">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <?php
    endwhile;
endif;

get_footer();
