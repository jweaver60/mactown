<?php get_header(); ?>
<div class="blog-container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="row">
			<div class="col-xs-12">
				<header class="article-header">
					<h1><?php the_title(); ?></h1>
					<h4><?php echo get_the_category_list(', '); ?></h4>
				</header>
				<hr class="left">
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-8">

				<article id="post-<?php the_ID(); ?>" role="article" class="post-article">
					<div class="main-image">
						<?php the_post_thumbnail('full'); ?>
					</div>
					<div class="author-avatar">
						<?php echo get_avatar(get_the_author_meta('ID'), 70); ?>
					</div>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<div class="post-metadata">
						<div class="row">
							<div class="col-xs-6">
								<p><i class="icon-calendar"></i> <?php echo get_the_time( get_option('date_format')); ?></p>
							</div>
							<div class="col-xs-2">
								<p><i class="icon-comment"></i> <?php comments_number('0', '1', '%'); ?></p>
							</div>
							<div class="col-xs-4">
								<p><i class="icon-plus-sign-alt"></i></p>
							</div>
						</div>
					</div>
				</article>

						<?php comments_template(); ?>

				<?php endwhile; ?>

				<?php else : ?>

					<article id="post-not-found" class="hentry clearfix">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
							</footer>
					</article>

				<?php endif; ?>

		</div>
		<div class="col-xs-12 col-md-4">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>
<?php get_footer(); ?>
