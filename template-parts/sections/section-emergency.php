<?php
/**
 * Section: Emergency Plumbing
 *
 * Dark background section with 3 emergency service cards and a
 * prominent bottom CTA pairing (Call + Book Online).
 *
 * All content (heading, cards, CTA) is editable via
 * Customizer > Emergency Section.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

// Business info.
$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );

// Section heading.
$emergency_headline     = get_theme_mod( 'emergency_headline', __( 'Need Emergency Plumbing in East San Diego?', 'bmg-theme' ) );
$emergency_sub_headline = get_theme_mod( 'emergency_sub_headline', '' );

// Card defaults — mirror the defaults registered in customizer-emergency.php
// so this section renders correctly out of the box before any Customizer save.
$card_defaults = array(
	1 => array(
		'title' => __( 'Burst Pipes & Active Leaks', 'bmg-theme' ),
		'desc'  => __( 'Fast response to stop damage and restore proper plumbing function.', 'bmg-theme' ),
	),
	2 => array(
		'title' => __( 'Sewer Backups & Major Clogs', 'bmg-theme' ),
		'desc'  => __( 'Professional service to clear blockages and prevent overflow issues.', 'bmg-theme' ),
	),
	3 => array(
		'title' => __( 'Water Heater Failures', 'bmg-theme' ),
		'desc'  => __( 'Quick help when hot water systems stop working unexpectedly.', 'bmg-theme' ),
	),
);

$cards = array();
for ( $i = 1; $i <= 3; $i++ ) {
	$cards[] = array(
		'image_id' => (int) get_theme_mod( "bmg_emergency_{$i}_image", 0 ),
		'title'    => get_theme_mod( "bmg_emergency_{$i}_title", $card_defaults[ $i ]['title'] ),
		'desc'     => get_theme_mod( "bmg_emergency_{$i}_description", $card_defaults[ $i ]['desc'] ),
	);
}

// Bottom CTA.
$cta_headline   = get_theme_mod( 'emergency_cta_headline', __( "Need an Emergency Plumber in East County? We're Here to Help", 'bmg-theme' ) );
$cta_phone_text = get_theme_mod( 'emergency_cta_phone_text', __( 'Call Us', 'bmg-theme' ) );
$cta_book_text  = get_theme_mod( 'emergency_cta_book_text', __( 'Book Online', 'bmg-theme' ) );
$cta_book_url   = get_theme_mod( 'emergency_cta_book_url', '/contact/' );

// Resolve book URL — allow relative paths to be rendered against home_url().
if ( $cta_book_url && '/' === substr( $cta_book_url, 0, 1 ) ) {
	$cta_book_url = home_url( $cta_book_url );
}
?>

<section id="emergency" class="section-emergency section-dark">
	<div class="container">

		<!-- Heading -->
		<div class="text-center mb-5 bmg-reveal">
			<h2 class="section-title text-white"><?php echo esc_html( $emergency_headline ); ?></h2>
			<?php if ( $emergency_sub_headline ) : ?>
				<p class="section-sub text-white opacity-75"><?php echo esc_html( $emergency_sub_headline ); ?></p>
			<?php endif; ?>
		</div>

		<!-- Cards -->
		<?php
		// Fallback icons for when no image is uploaded.
		$fallback_icons = array(
			'<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
			'<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/></svg>',
			'<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 14.76V3.5a2.5 2.5 0 0 0-5 0v11.26a4.5 4.5 0 1 0 5 0z"/></svg>',
		);
		?>
		<div class="row gy-4 bmg-reveal-stagger">
			<?php foreach ( $cards as $card_index => $card ) : ?>
				<div class="col-md-6 col-lg-4 bmg-reveal">
					<div class="section-emergency__card">
						<div class="section-emergency__media">
							<?php if ( $card['image_id'] ) : ?>
								<?php
								echo wp_get_attachment_image(
									$card['image_id'],
									'large',
									false,
									array(
										'class'   => 'section-emergency__img',
										'alt'     => esc_attr( $card['title'] ),
										'loading' => 'lazy',
									)
								);
								?>
							<?php else : ?>
								<div class="section-emergency__placeholder" aria-hidden="true">
									<?php echo $fallback_icons[ $card_index ]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="section-emergency__body">
							<h3 class="section-emergency__title"><?php echo esc_html( $card['title'] ); ?></h3>
							<p class="section-emergency__desc"><?php echo esc_html( $card['desc'] ); ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Bottom CTA Area -->
		<div class="section-emergency__cta text-center bmg-reveal">
			<h3 class="section-emergency__cta-title">
				<?php echo esc_html( $cta_headline ); ?>
			</h3>

			<div class="section-emergency__cta-buttons">
				<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn section-emergency__btn section-emergency__btn--call">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					<span><?php echo esc_html( $cta_phone_text ); ?> <?php echo esc_html( $phone_display ); ?></span>
				</a>
				<a href="<?php echo esc_url( $cta_book_url ); ?>" class="btn section-emergency__btn section-emergency__btn--book">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
					<span><?php echo esc_html( $cta_book_text ); ?></span>
				</a>
			</div>
		</div>

	</div>
</section>
