<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<!-- Home Page Content -->
	<div class="row">
		<?php $home_page = get_post(5); ?>
			<div id="carousel-home-page" class="carousel slide">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-home-page" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-home-page" data-slide-to="1"></li>
			    <li data-target="#carousel-home-page" data-slide-to="2"></li>
			  </ol>

				<!-- Caption -->
				<div class="carousel-caption">
					<div class="caption-wrapper">
						<div class="caption-inner">
					    	<span class="line"></span><h4 class="first-slider-caption"><?php the_field('slider_caption_line_1', 5); ?></h4><span class="line"></span>
					    	<h2 class="second-slider-caption"><?php the_field('slider_caption_line_2', 5); ?></h2>
					    	<span class="line bottom"></span>
					  	</div>
					</div>
			  </div>
			  
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="<?php the_field('slider_image_1', 5); ?>">
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-home-page" data-slide="prev">
			    <span class="icon-prev"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-home-page" data-slide="next">
			    <span class="icon-next"></span>
			  </a>
			</div><!-- end carousel -->
	</div><!-- end row -->
	<div class="row with-gray-bg with-padding">
		<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
			<div class="block-header">
				<h2>Experience</h2>
				<h2>MacTown</h2>
			</div>
		</div>
		<div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
			<p class="lighter"><?php echo $home_page->post_content; ?></p>
		</div>
	</div><!-- end row -->



<?php get_footer(); ?>
