<?php get_header(); ?>

<div class="main">

    <div class="content">
        <?php 

            the_post_thumbnail();

            ?>

            <?php

            if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                the_content();
            }
            }

        ?>
    </div>

</div>

<?php get_footer(); ?>