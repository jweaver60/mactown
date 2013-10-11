<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<!-- Home Page Content -->
	<div class="row">
		<?php $home_page = get_post(5); ?>
		<div class="col-xs-12">
			<div id="carousel-home-page" class="carousel slide">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-home-page" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-home-page" data-slide-to="1"></li>
			    <li data-target="#carousel-home-page" data-slide-to="2"></li>
			  </ol>

				<!-- Caption -->
				<div class="carousel-caption">
			    <h4 class="first-slider-caption"><?php the_field('slider_caption_line_1', 5); ?></h4>
			    <h2 class="second-slider-caption"><?php the_field('slider_caption_line_2', 5); ?></h2>
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
		</div><!-- end col 12 -->
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

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>
									<p class="byline vcard"><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link() );
									?></p>


								</header> <?php // end article header ?>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

								<footer class="article-footer">
									<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer> <?php // end article footer ?>

								<?php comments_template(); ?>

							</article> <?php // end article ?>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <?php // end #main ?>

						<?php get_sidebar(); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
