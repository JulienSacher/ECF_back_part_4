<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <article class="row">
            <div class="col-9 order-2">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="col-2 order-1">
            <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
            <?php endif; ?>
            </div>
        </article>
        <ul>
        <li><a href="<?= get_site_url() ?>/page-d-exemple/">Page d'exemple</li></a>
    </ul>

        <?php
    endwhile;
endif;

get_footer();
