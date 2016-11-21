<?php 
/**
 *
 * @package Entrepreneurship
 */

get_header(); ?>
<body>
	<section id="more" class="about">
		<div class="container-fluid">
			<div class="row text-center">
				<div class="jumbotron_wrapper">
					<div class = "jumbotron" style="background-image : url('<?php echo get_header_image()?>');">
						<div id = "welcome" class="col-md-4 col-sm-6 col-xs-12">
							<div class="section-title wow zoomIn" style="visibility: visible; animation-name: zoomIn;" >
								<h1 style="color:white; margin : 0px;">Welcome <span style="color:#a0a0a0;">to the</span><span> Entrepreneurs</span><span style="color:#a0a0a0;">hip center</span></h1>
							</div>
						</div>
						<div class = "tanner"></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
					<i class="fa fa-connectdevelop"></i>
					<h4>LEARN</h4>
					<p>Foundational and broadly applicable learning experiences that cultivate entrepreneurial literacy and skills.</p>						
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
					<i class="glyphicon glyphicon-search" aria-hidden="true"></i>	
					<!-- <i class="fa fa-life-ring"></i>  -->
					<h4>ENGAGE</h4>
					<p>Impactful and direct experiences in the entrepreneurial ecosystem that immerse students in the practice of entrepreneurship.</p>
				</div><!--- END COL -->
				<div class="col-md-4 col-sm-6 col-xs-12 single_about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">		
					<i class="fa fa-paper-plane-o"></i>
					<h4>BUILD</h4>
					<p>Hands on and direct application of tools and skills that builds entrepreneurial mindset.</p>
				</div><!--- END COL -->
			</div>
		</div>
		<div class="">
			<p>We exist to educate, inspire, and support students in developing the skills and mindset of an entrepreneur</p>
			<p>Interested in learning more? Sign up for our new letter</p>
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</div>
	</section>
		<br><br>

</body>
<?php get_footer(); ?>