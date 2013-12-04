<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<!-- Home Page Content -->
	<div class="row" id="home">
		<?php $home_page = get_post(5); ?>
			<div id="carousel-home-page" class="carousel slide">
			  <!-- Indicators -->
			 <!--  <ol class="carousel-indicators">
			    <li data-target="#carousel-home-page" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-home-page" data-slide-to="1"></li>
			    <li data-target="#carousel-home-page" data-slide-to="2"></li>
			  </ol> -->

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
			   <!--  <div class="item">
			    	<img src="<?php the_field('slider_image_2', 5); ?>">
			    </div>
			    <div class="item">
			    	<img src="<?php the_field('slider_image_3', 5); ?>">
			    </div> -->
			  </div>

			  <!-- Controls -->
			 <!--  <a class="left carousel-control" href="#carousel-home-page" data-slide="prev">
			    <span class="icon-prev"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-home-page" data-slide="next">
			    <span class="icon-next"></span>
			  </a> -->
			</div><!-- end carousel -->
	</div><!-- end row -->
	<div class="row with-padding">
		<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
			<div class="block-header">
				<h2>The</h2>
				<h2>MacTown</h2>
				<h2>Experience</h2>
			</div>
		</div>
		<div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 comp-margin">
			<p class="lighter"><?php echo $home_page->post_content; ?></p>
		</div>
	</div><!-- end row -->

	<!-- Services Page Content (top) -->
	<div class="row with-padding small-bottom-padding with-gray-bg" id="services">
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
				</blockquote>
			</div>
	</div>

	<!-- Apple Specialist Page Content (middle) -->
	<div class="row with-padding no-top-padding services-main-content" id="apple-specialist-content">
		<div class="row">
			<a class="close-icon" id="apple-specialist-close" href="#"><i class="icon-remove"></i></a>
		</div>
		<?php $apple_specialist_page = get_post(67); ?>
		<div class="col-xs-12 col-sm-8">
			<?php echo $apple_specialist_page->post_content; ?>
		</div>
		<div class="col-xs-12 col-sm-4">
			<?php echo get_the_post_thumbnail(67, 'full'); ?>
		</div>
	</div>

	<!-- Sessions Page Content (middle) -->
	<div class="row with-padding no-top-padding services-main-content" id="sessions-content">
		<div class="row">
			<a href="#" class="close-icon" id="sessions-close"><i class="icon-remove"></i></a>
		</div>
		<?php $sessions_page = get_post(70); ?>
		<div class="col-xs-12 col-sm-8">
			<?php echo $sessions_page->post_content; ?>
			<br /><br />
			<a href="http://www.mactown.com/sessions/index.php?r=site/login" class="btn btn-primary">Sessions Scheduler</a>
		</div>
		<div class="col-xs-12 col-sm-4">
			<?php echo get_the_post_thumbnail(70, 'full'); ?>
		</div>
	</div>

	<!-- Business Solutions Page Content (middle) -->
	<div class="row with-padding no-top-padding services-main-content" id="business-solutions-content">
		<div class="row">
			<a href="#" class="close-icon" id="business-solutions-close"><i class="icon-remove"></i></a>
		</div>
		<?php $business_solutions_page = get_post(72); ?>
		<div class="col-xs-12 col-sm-8">
			<?php echo $business_solutions_page->post_content; ?>
			<a href="https://mactown.zendesk.com/anonymous_requests/new" class="btn btn-primary">Business Support</a>
		</div>
		<div class="col-xs-12 col-sm-4">
			<?php echo get_the_post_thumbnail(72, 'full'); ?>
		</div>
	</div>

	<!-- Service Page Content (middle) -->
	<div class="row with-padding no-top-padding services-main-content" id="service-content">
		<div class="row">
			<a href="#" class="close-icon" id="service-close"><i class="icon-remove"></i></a>
		</div>
		<?php $service_page = get_post(74); ?>
		<div class="col-xs-12 col-sm-8">
			<?php echo $service_page->post_content; ?>
		</div>
		<div class="col-xs-12 col-sm-4">
			<?php echo get_the_post_thumbnail(74, 'full'); ?>
		</div>
	</div>

	<!-- Services Page Content (bottom) -->
	<div class="row with-padding small-top-padding with-gray-bg" id="services-offered">
		<div class="row">
			<div class="col-xs-12 col-sm-6 services-cell">
				<a href="#" class="services-title" id="specialist-link">
					<i class="icon-apple"></i>
					<h3><?php echo $apple_specialist_page->post_title; ?></h3>
				</a>
				<p>
					<?php the_field('services_section_summary', 67); ?>
				</p>
			</div>
			<div class="col-xs-12 col-sm-6 services-cell">
				<a href="#" class="services-title" id="sessions-link">
					<i class="rdm-sessions"></i>
					<h3><?php echo $sessions_page->post_title; ?></h3>
				</a>
				<p>
					<?php the_field('services_section_summary', 70); ?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 services-cell">
				<a href="#" class="services-title" id="business-solutions-link">
					<i class="rdm-service"></i>
					<h3><?php echo $business_solutions_page->post_title; ?></h3>
				</a>
				<p>
					<?php the_field('services_section_summary', 72); ?>
				</p>
			</div>
			<div class="col-xs-12 col-sm-6 services-cell">
				<a href="#" class="services-title" id="service-link">
					<i class="rdm-medkit"></i>
					<h3><?php echo $service_page->post_title; ?></h3>
				</a>
				<p>
					<?php the_field('services_section_summary', 74); ?>
				</p>
			</div>
		</div>
	</div>

	<!-- Partners Posts Slider -->
	<div class="row with-padding no-horizontal-padding" id="partners-row">
		<?php $partners_page = get_post(40); ?>
		<div class="extra-padding">
			<h1 class="section-title"><?php echo $partners_page->post_title; ?></h1>
			<p class="section-content"><?php echo $partners_page->post_content; ?></p>
		</div>
		<div class="owl-carousel" id="partners-carousel">
			<?php 
				$partner_args = array( 'post_type' => 'partner' );
				$partner_loop = new WP_Query( $partner_args );
				while ( $partner_loop->have_posts() ) : $partner_loop->the_post();
			?>
				<div class="partner-section">
					<?php if (the_field('partner_link')) { ?>
						<a href="<?php the_field('partner_link'); ?>" target="_blank">
							<?php the_post_thumbnail('full'); ?>
						</a>
					<?php } else { ?>
						<?php the_post_thumbnail('full'); ?>
					<?php } ?>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

	<!-- Retail Page Content -->
	<div class="row with-padding with-gray-bg small-bottom-padding" id="retail">
		<?php $retail_page = get_post(105); ?>
			<h1 class="section-title"><?php echo $retail_page->post_title; ?></h1>
			<h4 class="section-subtitle"><?php the_field('retail_subheader', 105); ?></h4>
			<hr class="short" />
			<div class="col-xs-12 col-sm-5">
				<blockquote>
					<p><?php the_field('retail_quote', 105); ?></p>
				</blockquote>
			</div>
			<div class="col-xs-12 col-sm-7">
				<p class="section-content"><?php echo $retail_page->post_content; ?></p>
			</div>
		</div>
		<div class="row with-gray-bg with-padding no-vertical-padding small-bottom-padding">
			<div class="col-xs-12 col-sm-6 retail-section">
				<?php $apple_products_page = get_post(108); ?>
				<span class="retail-header">
					<i class="icon-apple"></i>
					<h3><?php echo $apple_products_page->post_title; ?></h3>
				</span>
				<p>
					<?php echo $apple_products_page->post_content; ?>
				</p>
				<div class="clear"></div>
			</div>
			<div class="col-xs-12 col-sm-6 retail-section">
				<?php $mac_accessories_page = get_post(110); ?>
				<span class="retail-header">
					<i class="icon-desktop"></i>
					<h3><?php echo $mac_accessories_page->post_title; ?></h3>
				</span>
				<p>
					<?php echo $mac_accessories_page->post_content; ?>
				</p>
				<div class="clear"></div>
			</div>
		</div>
		<div class="row with-gray-bg with-padding small-top-padding">
			<div class="col-xs-12 col-sm-6 retail-section">
				<?php $ios_accessories_page = get_post(112); ?>
				<span class="retail-header">
					<i class="icon-mobile-phone"></i>
					<h3><?php echo $ios_accessories_page->post_title; ?></h3>
				</span>
				<p>
					<?php echo $ios_accessories_page->post_content; ?>
				</p>
				<div class="clear"></div>
			</div>
			<div class="col-xs-12 col-sm-6 retail-section">
				<?php $latest_software = get_post(114); ?>
				<span class="retail-header">
					<i class="icon-keyboard"></i>
					<h3><?php echo $latest_software->post_title; ?></h3>
				</span>
				<p>
					<?php echo $latest_software->post_content; ?>
				</p>
				<div class="clear"></div>
			</div>
		</div>

		<!-- Brands Page Section -->
		<div class="row with-padding no-horizontal-padding" id="brand-row">
			<?php $brands_page = get_post(116); ?>
			<div class="extra-padding">
				<h1 class="section-title"><?php echo $brands_page->post_title; ?></h1>
				<p class="section-content"><?php echo $brands_page->post_content; ?></p>
			</div>
			<div class="owl-carousel" id="brand-carousel">
				<?php
					$brand_args = array('post_type' => 'brand');
					$brand_loop = new WP_Query($brand_args);
					while ($brand_loop->have_posts()) : $brand_loop->the_post();
				?>
					<div class="brand-section">
						<?php if (the_field('brand_link')) { ?>
							<a href="<?php the_field('brand_link'); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
						<?php } else { ?>
							<?php the_post_thumbnail('full'); ?>
						<?php } ?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>

	<!-- Blog Page Section -->
	<div class="row with-padding with-gray-bg" id="trending">
		<?php $blog_page = get_post(7); ?>
		<h1 class="section-title"><a href="<?php echo site_url(); ?>/trending"><?php echo $blog_page->post_title; ?></a></h1>
		<h4 class="section-subtitle"><?php the_field('trending_subtitle', 7); ?></h4>
		<hr class="short" />
		<div class="row">
			<?php
				$trending_args = array( 'post_type' => 'post', 'post_per_page' => 3);
				$trending_loop = new WP_Query( $trending_args );
				while ( $trending_loop->have_posts() ) : $trending_loop->the_post();
			?>
				<div class="col-xs-12 col-sm-4 trending-post">
					<div class="featured-image">
						<?php the_post_thumbnail('full'); ?>
					</div>
					<div class="author-avatar">
						<?php echo get_avatar(get_the_author_meta('ID'), 50); ?>
					</div>
					<div class="trending-content">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
						<?php the_excerpt(); ?>
					</div>
					<div class="trending-meta">
						<div class="row">
							<div class="col-xs-6">
								<span class='meta-section'>
									<i class='icon-calendar'></i> <?php the_date(); ?>
								</span>
							</div>
							<div class="col-xs-3">
								<span class="meta-section">
									<i class="icon-comment"></i> <?php comments_number('0', '1', '%'); ?>
								</span>
							</div>
							<div class="col-xs-3">
								<span class="meta-section">
									<i class="icon-plus-sign-alt"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

	<!-- Testimonials Slider -->
	<div class="row with-padding no-horizontal-padding" id="testimonials-row">
		<?php $testimonials_page = get_post(89); ?>
		<div class="extra-padding">
			<h1 class="section-title"><?php echo $testimonials_page->post_title; ?></h1>
			<p class="section-content"><?php echo $testimonials_page->post_content; ?></p>
		</div>
		<div class="owl-carousel" id="testimonials-carousel">
			<?php 
				$testimonial_args = array( 'post_type' => 'testimonial' );
				$testimonial_loop = new WP_Query( $testimonial_args );
				while ( $testimonial_loop->have_posts() ) : $testimonial_loop->the_post();
			?>
				<div class="testimonial-section">
					<?php $service_used = get_field('customer_service'); ?>
					<div class="testimonial-icon">
						<?php if ($service_used === 'Business Solutions Customer') {
							echo "<i class='rdm-service'></i>";
						} elseif ($service_used === 'Sessions Customer') {
							echo "<i class='rdm-sessions'></i>";
						} else {
							echo "<i class='rdm-medkit'></i>";
						} ?>
					</div>
					<div class="quote">
						<?php the_content(); ?>
					</div>
					<div class="customer-info">
						<p>- <?php the_field('customer_name'); ?>, <?php echo $service_used; ?> <?php echo get_avatar(get_field('customer_email'), 42); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

	<!-- About Us Page Content -->
	<div class="row with-padding" id="about-us">
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
				</blockquote>
			</div>
			<div class="col-xs-12 col-sm-7">
				<p class="section-content"><?php echo $about_us_page->post_content; ?></p>
				<!-- <button class="btn btn-primary" id="meet-the-team-button">Meet the Team</button> -->
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
		<div class="row with-padding no-horizontal-padding">
			<div class="owl-carousel" id="team-carousel">
				<?php 
					$args = array( 'post_type' => 'team_members' );
					$team_loop = new WP_Query( $args );
					while ( $team_loop->have_posts() ) : $team_loop->the_post();
				?>
					<div class="team-member">
						<?php 
							$post_ID = get_the_ID();
							$url = wp_get_attachment_url(get_post_thumbnail_id($post_ID));
						?>
						<div class="team-photo" style="background-image: url('<?php echo $url; ?>');">
							<div class="team-bio">
								<?php // the_content(); ?>
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
						</div>
					</div>
				<?php endwhile; ?>		
			</div>
		</div>
	</div>

	<!-- Sub-carousel Section -->
	<div class="row with-padding no-horizontal-padding" id="subcarousel">
		<div class="owl-carousel" id="updates-carousel">
			<?php
				$update_args = array('post_type' => 'update');
				$update_loop = new WP_Query($update_args);
				while ($update_loop->have_posts()) : $update_loop->the_post();
			?>
				<div class="update-section">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

		<!-- Contact Page Section -->
		<div class="row with-padding" id="contact">
			<?php $contact_page = get_post(126); ?>
			<h1 class="section-title"><?php echo $contact_page->post_title; ?></h1>
			<h4 class="section-subtitle"><?php the_field('contact_subheader', 126); ?></h4>
			<hr class="short" />
			<p class="contact-description">
				<?php echo $contact_page->post_content; ?>
			</p>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<h4 class="form-header">Send us a message</h4>
				<?php gravity_form(1, $display_title=false, $display_description=false, $ajax=true); ?>
				<div class="clear"></div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<h4 class="form-header">Support &amp; Sessions</h4>
				<p class="contact-description" style="text-align: left;">MacTown proudly offers Residential and Corporate Onsite support, as well as training at your place or ours. Tell us what you need, we are here to help.</p>
				<div class="footer-support-icons">
					<ul>
						<li><a href="http://www.mactown.com/sessions/index.php?r=site/login"><i class="rdm-sessions"></i></a></li>
						<li><a href="#"><i class="rdm-medkit"></i></a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<br /><br />
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="MacTown" class="footer-logo">
				<p class="contact-description" style="text-align: left;">Connect with us on Facebook, Twitter or LinkedIn</p>
				<div class="footer-support-icons">
					<ul>
						<li><a href="#"><i class="rdm-linkedin-sign"></i></a></li>
						<li><a href="#"><i class="rdm-twitter-sign"></i></a></li>
						<li><a href="#"><i class="rdm-facebook-sign"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
