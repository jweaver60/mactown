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

	<!-- About Us Page Content -->
	<div class="row with-padding">
		<?php $about_us_page = get_post(14); ?>
			<h1 class="section-title"><?php echo $about_us_page->post_title; ?></h1>
			<h4 class="section-subtitle"><?php the_field('about_us_subtitle', 14); ?></h4>
			<hr class="short" />
			<div class="col-xs-12 section-featured-image">
				<?php echo get_the_post_thumbnail(14, 'full'); ?>
			</div>
			<div class="col-xs-12 col-sm-5">
				<blockquote>
					<p><?php the_field('about_us_page_quote', 14); ?></p>
					<small><cite title="<?php the_field('about_us_page_quote_citation', 14); ?>"><?php the_field('about_us_page_quote_citation', 14); ?></cite></small>
				</blockquote>
			</div>
			<div class="col-xs-12 col-sm-7">
				<p class="section-content"><?php echo $about_us_page->post_content; ?></p>
				<button class="btn btn-primary" id="meet-the-team-button">Meet the Team</button>
			</div>
	</div>

	<!-- Our Team Page Content -->
	<div class="row with-gray-bg" id="meet-the-team-section">
		<div class="row">
			<a class="close-icon" id="meet-the-team-close" href="#"><i class="icon-remove"></i></a>
		</div>
		<div class="row with-padding no-vertical-padding">
			<?php $our_team_page = get_post(18); ?>
				<h2 class="section-small-title"><?php echo $our_team_page->post_title; ?></h2>
				<p class="section-content"><?php echo $our_team_page->post_content; ?></p>
		</div>
		<div id="carousel-team" class="carousel slide">
				<div class="row with-padding">
					<?php 
						$args = array( 'post_type' => 'team_members' );
						$team_loop = new WP_Query( $args );
						while ( $team_loop->have_posts() ) : $team_loop->the_post();
					?>
						<div class="col-xs-12 col-sm-3 team-member">
							<?php the_post_thumbnail('full'); ?>
							<div class="team-bio"><?php the_content(); ?></div>
							<div class="team-info">
								<h3><?php echo the_title(); ?></h3>
								<p><?php the_field('team_member_title'); ?></p>
								<p class="team-social-links">
									<a href="#"><i class="icon-linkedin"></i></a>
									<a href="#"><i class="icon-twitter"></i></a>
									<a href="#"><i class="icon-facebook"></i></a>
								</p>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<!-- Controls -->
			  <a class="left carousel-control" href="#carousel-home-page" data-slide="prev">
			    <span class="icon-prev"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-home-page" data-slide="next">
			    <span class="icon-next"></span>
			  </a>
		</div>
	</div>

	<!-- Partners Posts Slider -->
	<div class="row with-padding" id="partners-row">
		<?php $partners_page = get_post(40); ?>
		<h1 class="section-title"><?php echo $partners_page->post_title; ?></h1>
		<p class="section-content"><?php echo $partners_page->post_content; ?></p>
	</div>

	<!-- Services Page Content -->
	<div class="row with-padding with-gray-bg">
		<?php $services_page = get_post(46); ?>
			<h1 class="section-title"><?php echo $services_page->post_title; ?></h1>
			<h4 class="section-subtitle"><?php the_field('services_subtitle', 46); ?></h4>
			<hr class="short" />
			<div class="col-xs-12 col-sm-7">
				<p class="section-content"><?php echo $services_page->post_content; ?></p>
			</div>
			<div class="col-xs-12 col-sm-5">
				<blockquote>
					<p><?php the_field('services_page_quote', 46); ?></p>
					<small><cite title="<?php the_field('services_page_quote_citation', 46); ?>"><?php the_field('services_page_quote_citation', 46); ?></cite></small>
				</blockquote>
			</div>
	</div>



<?php get_footer(); ?>
