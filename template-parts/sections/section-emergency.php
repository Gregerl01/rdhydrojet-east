<?php
/**
 * Section: Emergency Plumbing
 *
 * Dark background section with 3 emergency service cards and a
 * prominent bottom CTA pairing (Call + Book Online).
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(951) 600-0459' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );

$cards = array(
	array(
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 2v7a3 3 0 0 0 3 3h4a3 3 0 0 0 3-3V2"/><path d="M12 12v10"/><path d="M9 18s1 1 3 1 3-1 3-1"/><path d="M5 2h14"/></svg>',
		'title' => 'Burst Pipes &amp; Active Leaks',
		'desc'  => 'Fast response to stop damage and restore proper plumbing function.',
	),
	array(
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 3a14 14 0 0 0 0 18"/><path d="M12 3a14 14 0 0 1 0 18"/><path d="M3 12h18"/></svg>',
		'title' => 'Sewer Backups &amp; Major Clogs',
		'desc'  => 'Professional service to clear blockages and prevent overflow issues.',
	),
	array(
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="3" width="14" height="18" rx="2"/><line x1="9" y1="7" x2="15" y2="7"/><circle cx="12" cy="13" r="3"/><line x1="12" y1="17" x2="12" y2="17.01"/></svg>',
		'title' => 'Water Heater Failures',
		'desc'  => 'Quick help when hot water systems stop working unexpectedly.',
	),
);
?>

<section id="emergency" class="section-emergency section-dark">
	<div class="container">

		<!-- Heading -->
		<div class="text-center mb-5 bmg-reveal">
			<h2 class="section-title text-white">Need Emergency Plumbing in East San Diego?</h2>
		</div>

		<!-- Cards -->
		<div class="row gy-4 bmg-reveal-stagger">
			<?php foreach ( $cards as $card ) : ?>
				<div class="col-md-6 col-lg-4 bmg-reveal">
					<div class="section-emergency__card">
						<div class="section-emergency__placeholder" aria-hidden="true">
							<?php echo $card['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
						<div class="section-emergency__body">
							<h3 class="section-emergency__title"><?php echo wp_kses_post( $card['title'] ); ?></h3>
							<p class="section-emergency__desc"><?php echo esc_html( $card['desc'] ); ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Bottom CTA Area -->
		<div class="section-emergency__cta text-center bmg-reveal">
			<h3 class="section-emergency__cta-title">
				Need an Emergency Plumber in East County? We're Here to Help
			</h3>

			<div class="section-emergency__cta-buttons">
				<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn section-emergency__btn section-emergency__btn--call">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					<span>Call Us <?php echo esc_html( $phone_display ); ?></span>
				</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn section-emergency__btn section-emergency__btn--book">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
					<span>Book Online</span>
				</a>
			</div>
		</div>

	</div>
</section>
