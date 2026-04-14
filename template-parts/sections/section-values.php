<?php
/**
 * Section: Values Strip
 *
 * Dark section with 4 value-prop icon tiles (Licensed, Honest,
 * Equipped, On Time). Sits between the trust strip and the
 * process section on the homepage.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$values = array(
	array(
		// Shield with check — licensed/certified.
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>',
		'label' => __( 'Licensed &amp; Certified', 'bmg-theme' ),
		'sub'   => __( 'C36 · C42 · C20', 'bmg-theme' ),
	),
	array(
		// Handshake — honest pricing.
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 17l2 2a1 1 0 1 0 3-3"/><path d="M14 14l2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/><path d="M21 3l-3.5 3.5"/><path d="M3 21l3-3"/><path d="M9 18l-4-4"/></svg>',
		'label' => __( 'Honest Pricing', 'bmg-theme' ),
		'sub'   => __( 'No surprises, ever', 'bmg-theme' ),
	),
	array(
		// Wrench — equipped.
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
		'label' => __( 'Equipped for Any Job', 'bmg-theme' ),
		'sub'   => __( 'Commercial-grade tools', 'bmg-theme' ),
	),
	array(
		// Stopwatch/clock — on time.
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="13" r="8"/><path d="M12 9v4l2 2"/><path d="M9 2h6"/><path d="M12 2v2"/></svg>',
		'label' => __( 'Always On Time', 'bmg-theme' ),
		'sub'   => __( '24/7 emergency ready', 'bmg-theme' ),
	),
);
?>

<section class="section-values section-dark">
	<div class="container">
		<div class="row gy-4 justify-content-center text-center bmg-reveal-stagger">
			<?php foreach ( $values as $value ) : ?>
				<div class="col-6 col-lg-3 bmg-reveal">
					<div class="section-values__item">
						<div class="section-values__icon" aria-hidden="true">
							<?php echo $value['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
						<p class="section-values__label"><?php echo wp_kses_post( $value['label'] ); ?></p>
						<p class="section-values__sub"><?php echo esc_html( $value['sub'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
