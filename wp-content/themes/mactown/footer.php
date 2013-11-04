		<div class="row">	
			<footer class="footer" role="contentinfo">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-lg-3">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-white.png" alt="MacTown" class="footer-logo">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aut, ullam quis ipsa mollitia dolore tempora! Deleniti, aspernatur, aliquid, rerum.</p>
						<div class="footer-social-icons">
							<ul>
								<li><a href="#"><i class="rdm-linkedin-sign"></i></a></li>
								<li><a href="#"><i class="rdm-twitter-sign"></i></a></li>
								<li><a href="#"><i class="rdm-facebook-sign"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-lg-3">
						<h2>The Greene</h2>
						<p>Address: 4398 Holly Drive Dayton, Ohio</p>
						<p>Telephone: 937-435-0134</p>
						<p>Store Hours: Mon-Sat 10AM - 9PM</p>
						<p>Store Hours: Sunday 12PM - 6PM</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-lg-3">
						<h2>Kingsridge</h2>
						<p>Address: 8975 Kingsridge Dr. Dayton, Ohio</p>
						<p>Telephone: 937-435-0134</p>
						<p>Store Hours: Mon-Fri 9AM - 7PM</p>
						<p>Store Hours: Closed Saturday &amp; Sunday</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-lg-3">
						<h2>Support &amp; Sessions</h2>
						<p>MacTown is proud to offer both residential and business onsite support and in-store training sessions to help you get the most from your Mac.</p>
						<div class="footer-support-icons">
							<ul>
								<li><a href="#"><i class="rdm-sessions"></i></a></li>
								<li><a href="#"><i class="rdm-medkit"></i></a></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="row bottom-footer">
					<div class="col-xs-12">
						<p class="source-org copyright">All Rights Reserved. Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
						<nav role="navigation">
							<?php bones_footer_links(); ?>
						</nav>
					</div>
				</div>
			</footer>
		</div>
	</div><!-- end container -->
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
