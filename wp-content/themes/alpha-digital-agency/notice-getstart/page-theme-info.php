<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme info page.
 *
 */

?>
<div id="welcome-panels" class="welcome-panel alpha-digital-agency-hero ">
	<div class="welcome-panel-content alpha-digital-agency-hero">
		<div class="welcome-panel-header alpha-digital-agency-hero">
			<h2>
				<?php esc_html_e( 'Welcome to Alpha Digital Agency', 'alpha-digital-agency' ); ?>
			</h2>
			<p>
				<?php
				esc_html_e( 'Alpha Digital Agency is designed to give your website a bold, elegant, and professional look—ready to launch in just a few clicks.', 'alpha-digital-agency' );
				?>
			</p>




		<div class="not-link">
			<a href="https://www.thealphablocks.com/themes/digital-marketing-wordpress-theme/" target="_blank" rel="noopener noreferrer nofollow" class="alpha-digital-agency-btn alpha-digital-agency-btn-default button button-secodary button-hero ddd" >
				<?php esc_html_e( 'Buy Now', 'alpha-digital-agency' ); ?>
			</a>
			<a href="https://www.thealphablocks.com/themes/wordpress-theme-bundle/" target="_blank" rel="noopener noreferrer nofollow" class="alpha-digital-agency-btn alpha-digital-agency-btn-default button button-secodary button-hero bbb" target="_blank">
				<?php esc_html_e( 'Get All Themes', 'alpha-digital-agency' ); ?>
			</a>
			<a href="https://www.thealphablocks.com/demos/alpha-digital-agency-pro/" target="_blank" rel="noopener noreferrer nofollow" class="alpha-digital-agency-btn alpha-digital-agency-btn-default button button-secodary button-hero ccc" target="_blank">
				<?php esc_html_e( 'Live Demo', 'alpha-digital-agency' ); ?>
			</a>
			<a href="https://www.thealphablocks.com/docs/alpha-digital-agency-free/" target="_blank" rel="noopener noreferrer nofollow" class="alpha-digital-agency-gsn-btn  alpha-digital-agency-btn-outline button button-primary button-hero ghf alpha-digital-agency-install-plugins"  target="_blank">
				<?php esc_html_e( 'Documentation', 'alpha-digital-agency' ); ?>
			</a>
		</div>
		</div>

					<div class="bundle-img-wrap">
			            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/main-banner.png' ); ?>">
			        </div>
		
	</div>
</div>

<div class="alpha-digital-agency-main">
	<div class="row margin alpha-digital-agency-main-wrp">
		<div class="col-lg-3">
			<div class="alpha-digital-agency-main-sidebar">
				<div class="theme-screenshot-box">
					<div class="alpha-digital-agency-card-header abc">
						<h4 class="alpha-digital-agency-card-header-ttl">
							<?php esc_html_e( 'Premium Theme', 'alpha-digital-agency' ); ?>
						</h4>
					</div>	
					<div class="screenshot-container" id="screenshotContainer">
						<img id="scrollImage" src="<?php echo esc_url( get_template_directory_uri() . '/images/screenshort-image.png' ); ?>">
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 alpha-right">
			<div class="alpha-digital-agency-main-cont">
				<div class="row features">
					<div class="col-md-6 col-xl-3">
						<div class="alpha-digital-agency-card">
							<div class="alpha-digital-agency-card-header">
								<span class="dashicons dashicons-media-document"></span>
								<h4 class="alpha-digital-agency-card-header-mmm">
									<?php esc_html_e( 'Responsive Design', 'alpha-digital-agency' ); ?>
								</h4>
							</div>
							<div class="alpha-digital-agency-card-body">
								<p class="margin">
									<?php esc_html_e( 'Your website adapts to all screen sizes for seamless viewing experience.', 'alpha-digital-agency' ); ?>
								</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="alpha-digital-agency-card">
							<div class="alpha-digital-agency-card-header">
								<span class="dashicons dashicons-groups"></span>
									<h4 class="alpha-digital-agency-card-header-mmm">
									<?php esc_html_e( 'Demo Import', 'alpha-digital-agency' ); ?>
								</h4>
							</div>
							<div class="alpha-digital-agency-card-body">
								<p class="margin">
									<?php esc_html_e( 'Our themes has one-click demo import making it easier to launch website.', 'alpha-digital-agency' ); ?>
								</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="alpha-digital-agency-card">
							<div class="alpha-digital-agency-card-header">
								<span class="dashicons dashicons-backup"></span>
									<h4 class="alpha-digital-agency-card-header-mmm">
									<?php esc_html_e( 'Cross Browser Compatible
									', 'alpha-digital-agency' ); ?>
								</h4>
							</div>
							<div class="alpha-digital-agency-card-body">
								<p class="margin">
									<?php esc_html_e( 'Runs smoothly across all major browsers for consistent site experience.', 'alpha-digital-agency' ); ?>
								</p>
								
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xl-3">
						<div class="alpha-digital-agency-card">
							<div class="alpha-digital-agency-card-header">
								<span class="dashicons dashicons-video-alt3"></span>
									<h4 class="alpha-digital-agency-card-header-mmm">
									<?php esc_html_e( 'Easy Customization', 'alpha-digital-agency' ); ?>
								</h4>
							</div>
							<div class="alpha-digital-agency-card-body">
								<p class="margin">
									<?php esc_html_e( 'Quickly personalize fonts, colors, and layouts using simple customization panel.', 'alpha-digital-agency' ); ?>
								</p>
								
							</div>
						</div>
					</div>
				</div>
				
					<div class="<?php echo esc_attr( $quick_links_col ); ?>">
						<div class="alpha-digital-agency-card">
							<div class="alpha-digital-agency-card-header justify-content ">
								<span class="dashicons dashicons-admin-links"></span>
								<h4 class="alpha-digital-agency-card-header-ttl">
									<?php esc_html_e( 'Quick Links', 'alpha-digital-agency' ); ?>
								</h4>
							</div>
							<div class="alpha-digital-agency-card-body">
								<div class="alpha-digital-agency-card-btn-grp rrr">
									<a class="alpha-digital-agency-btn alpha-digital-agency-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?categoryId=header&postType=wp_template_part' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Header', 'alpha-digital-agency' ); ?>
									</a>
									<a class="alpha-digital-agency-btn alpha-digital-agency-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . ALPHA_DIGITAL_AGENCY_THEME_NAME . '%2F%2Ffooter&canvas=edit' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Footer', 'alpha-digital-agency' ); ?>
									</a>
									<a class="alpha-digital-agency-btn alpha-digital-agency-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . ALPHA_DIGITAL_AGENCY_THEME_NAME . '%2F%2Fsidebar&canvas=edit' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Sidebar', 'alpha-digital-agency' ); ?>
									</a>
									<a class="alpha-digital-agency-btn alpha-digital-agency-btn-primary-outline button button-hero btn-col" 
										href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . ALPHA_DIGITAL_AGENCY_THEME_NAME . '%2F%2Fpage&canvas=edit' ) ); ?>" 
										target="_blank">
										<?php esc_html_e( 'Edit Blog Home', 'alpha-digital-agency' ); ?>
									</a>

									<a class="alpha-digital-agency-btn alpha-digital-agency-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ); ?>" target="_blank">
										<?php esc_html_e( 'All Template Parts', 'alpha-digital-agency' ); ?>
									</a>
									<a class="alpha-digital-agency-btn alpha-digital-agency-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . ALPHA_DIGITAL_AGENCY_THEME_NAME . '%2F%2Ffront-page&canvas=edit' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Frontpage', 'alpha-digital-agency' ); ?>
									</a>
									<a class="alpha-digital-agency-btn alpha-digital-agency-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . ALPHA_DIGITAL_AGENCY_THEME_NAME . '%2F%2Farchive&canvas=edit' ) ); ?>" target="_blank">
										<?php esc_html_e( 'Edit Archive Page', 'alpha-digital-agency' ); ?>
									</a>
									<a class="alpha-digital-agency-btn alpha-digital-agency-btn-primary-outline button button-hero btn-col" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template' ) ); ?>" target="_blank">
										<?php esc_html_e( 'All Templates', 'alpha-digital-agency' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				$faqs = function_exists( 'alpha_digital_agency_get_theme_faq' ) ? alpha_digital_agency_get_theme_faq() : null;
				if ( $faqs ) {
					?>
						<div class="row">
							<div class="col-12">
								<div class="alpha-digital-agency-card">
									<div class="alpha-digital-agency-card-header">
										<span class="dashicons dashicons-format-chat"></span>
										<h4 class="alpha-digital-agency-card-header-ttl">
											<?php esc_html_e( 'Frequently Asked Questions', 'alpha-digital-agency' ); ?>
										</h4>
									</div>
									<div class="alpha-digital-agency-card-body">
										<div class="alpha-digital-agency-accordion">
									<div class="alpha-digital-agency-accordion ">
									<?php foreach ( $faqs as $key => $faq ) : ?>
										<details class="alpha-digital-agency-accordion-section ">
											<summary class="alpha-digital-agency-accordion-section-title">
												<h4 class="alpha-digital-agency-accordion-heading">
													<span class="dashicons dashicons-arrow-right"></span>
													<?php echo esc_html( $faq['q'] ); ?>
												</h4>
											</summary>
											<div id="alpha-digital-agency-info-faq-<?php echo esc_attr( $key ); ?>" class="alpha-digital-agency-accordion-section-content">
												<?php echo wp_kses_post( $faq['a'] ); ?>
											</div>
										</details>
									<?php endforeach; ?>
								</div>
								</div>

									</div>
								</div>
							</div>
						</div>
					<?php
				}
				?>
			</div>

		<div class="col-lg-3">
			<div class="alpha-digital-agency-main-sidebar">
				
				<div class="alpha-digital-agency-card">
					<div class="alpha-digital-agency-card-header abc">
						<h4 class="alpha-digital-agency-card-header-ttl">
							<?php esc_html_e( 'Buy Premium Theme', 'alpha-digital-agency' ); ?>
						</h4>
					</div>

					<div class="bun-para">
						<p><?php esc_html_e( 'Our Premium WordPress Themes are crafted to deliver powerful design, seamless performance, and full customization options—perfect for building stunning, professional websites with ease.', 'alpha-digital-agency' ); ?></p>
					</div>
					
					<a href="https://www.thealphablocks.com/themes/digital-marketing-wordpress-theme/" target="_blank" rel="noopener noreferrer nofollow" class="alpha-digital-agency-btn alpha-digital-agency-btn-default button button-secodary button-hero cba cbaa" target="_blank">
						<?php esc_html_e( 'Buy Now $40', 'alpha-digital-agency' ); ?>
					</a>
			
				</div>

				<div class="alpha-digital-agency-card">
					<div class="bundle-image-wrap">
			            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/bundle-image.png' ); ?>">
			        </div>
					<div class="alpha-digital-agency-card-header abc">
						<h4 class="alpha-digital-agency-card-header-ttl">
							<?php esc_html_e( 'Get All Themes', 'alpha-digital-agency' ); ?>
						</h4>
					</div>

					<div class="bun-para">
						<p><?php esc_html_e( 'Whether you need a website for a blog, business, portfolio, or online store, this WP Theme Bundle provides everything you need for a visually appealing and fully functional site.', 'alpha-digital-agency' ); ?></p>
					</div>
					
					<a href="https://www.thealphablocks.com/themes/wordpress-theme-bundle/" target="_blank" rel="noopener noreferrer nofollow" class="alpha-digital-agency-btn alpha-digital-agency-btn-default button button-secodary button-hero cba" target="_blank">
						<?php esc_html_e( 'Get All Block Themes $59', 'alpha-digital-agency' ); ?>
					</a>
			
				</div>

			</div>
			</div>

		</div>
	</div>
</div>

