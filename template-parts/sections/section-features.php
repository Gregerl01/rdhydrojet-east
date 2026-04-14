<?php
/**
 * Section: Features — "Plumbing Solutions for Every Situation"
 *
 * 6 service cards in 3x2 grid. First card has left accent border.
 * Data sourced from bmg_get_homepage_services() in inc/services-data.php.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$services = bmg_get_homepage_services();
?>

<section id="services" class="section-features">
	<div class="container">

		<!-- Section Header -->
		<div class="text-center mb-5 bmg-reveal">
			<span class="section-pill">OUR SERVICES</span>
			<h2 class="section-title">Plumbing Solutions for Every Situation</h2>
			<p class="section-sub">From routine drain cleaning to full sewer line replacement, we handle residential and commercial plumbing across East San Diego County.</p>
		</div>

		<!-- Service Cards (3x2) -->
		<div class="row gy-4 bmg-reveal-stagger">
			<?php foreach ( $services as $index => $service ) : ?>
				<div class="col-md-6 col-lg-4 bmg-reveal">
					<div class="section-features__card<?php echo 0 === $index ? ' section-features__card--accent' : ''; ?>">
						<div class="section-features__card-icon">
							<?php echo $service['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
						<h3 class="section-features__card-title"><?php echo wp_kses_post( $service['title'] ); ?></h3>
						<p class="section-features__card-desc"><?php echo esc_html( $service['desc'] ); ?></p>
						<ul class="section-features__card-features list-unstyled">
							<?php foreach ( $service['bullets'] as $bullet ) : ?>
								<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
									<?php echo wp_kses_post( $bullet ); ?>
								</li>
							<?php endforeach; ?>
						</ul>
						<a href="<?php echo esc_url( home_url( $service['link'] ) ); ?>" class="section-features__card-link">
							Learn More
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- View All Services -->
		<div class="text-center mt-5 bmg-reveal">
			<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="section-features__view-all">
				<?php esc_html_e( 'View All Services', 'bmg-theme' ); ?>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
			</a>
		</div>

	</div>
</section>
