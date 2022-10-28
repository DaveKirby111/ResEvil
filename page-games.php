<?php get_header(); ?>

<div class="main">

    <div class="content">
        
    <?php 
    
    $args = array(

        'post_type' => 'game',
        'post_status' => 'publish',
        'posts_per_page' => 30,
        'order' => 'ASC',

    );

    $games = new WP_Query( $args );

    while( $games->have_posts() ) : $games->the_post();
    if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_src( get_post_thumbnail_id(), 'large');
        echo '';
        the_post_thumbnail('thumbnail');
        echo '';
    }

    echo '<p class="title">';
    echo get_the_title();
    echo '</p>';

    endwhile;

    wp_reset_postdata();
    
    ?>

    <p><?php the_content(); ?></p>

    
    </div>

</div>

<?php get_footer(); ?>