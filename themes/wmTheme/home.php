<?php 
/**
 *
 * @package Entrepreneurship
 */

get_header(); ?>
<div id = "home_content"> <!-- #home -->
	<div id = "home_blog_row">
		<div id = "left" class="section"> <!-- wordpress loop -->
			
		</div>

		<div id = "mid" class="section">
			<div id = "home_blog_title" class = "col">
				<h1> <?php echo get_bloginfo('name'); ?> </h1>
				<h3 id = "home_blog_descrption"> <?php echo get_bloginfo('description'); ?> </h3>
			</div>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</div> 

		<div id = "right" class="section">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</div>
	</div>
</div> <!-- #home -->

<?php get_footer(); ?>