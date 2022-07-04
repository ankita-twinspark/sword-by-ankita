<?php

/*Template Name: untitled Template*/?>

<?php get_header();?>


<div id="example" class="carousel slide" data-bs-ride="carousel">

<?php
    $args = array(  
        'post_type' => 'carousels',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'order' => 'ASC'
    );
    $i = 1;
    global $post;
    $loop = new WP_Query( $args ); 
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

  

  <div class="carousel-inner">
    <div class="carousel-item<?php echo $i;?>">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'medium');?>

        <img src="<?php echo $url ?>" class="d-block w-100" alt="<?php the_title();?>"> <?php the_title();?></div>
     
    </div>
    
  
  <?php 
  $i++;
    endwhile;
    wp_reset_postdata(); 
?>
  
</div>
<?php get_footer();?>