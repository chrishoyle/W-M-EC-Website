<?php

/**
 * Template Name: Team
 */

get_header(); ?>

<div class="row">
  <div class="col-sm-6 col-md-4">
      <!-- <?php 
        $args =  array( 
          'post_type' => 'my-custom-post',
          'orderby' => 'menu_order',
          'order' => 'ASC'
        );
      $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?> -->

      <div class="thumbnail">

        <img src="..." alt="...">

      <div class="caption">
        <h3>Graham Henshaw</h3>
        <p>...</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); 