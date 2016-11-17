<?php

/**
 * Template Name: Team
 */

get_header(); ?>

<div class="row">
  <div class="col-sm-5 col-md-3">
   
      <div class="thumbnail">

        <img src="<?php print(get_template_directory_uri()); ?>/img/henshaw.jpg" height="100" width="130" />
      <div class="caption">
        <h3>Graham Henshaw</h3>
        <p>Executive Director Alan B. Miller Entrepreneurship Center</p>
      </div>
    </div>
  </div>



  <div class="col-sm-5 col-md-3">
   
      <div class="thumbnail">

        <img src="<?php print(get_template_directory_uri()); ?>/img/monark.jpeg" height="90" width="150" />
      <div class="caption">
        <h3>Ron Monark</h3>
        <p>Managing Director, Alan B. Miller Entrepreneurship Center; Lecturer of Business</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); 