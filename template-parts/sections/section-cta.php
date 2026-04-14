<?php
/**
 * Section: Final CTA + Full Form
 *
 * Dark bg, full form left (60%), contact info cards right (40%).
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
$email         = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );
$service_area  = get_theme_mod( 'bmg_address_city', 'East San Diego County, CA' );
$office_hours  = get_theme_mod( 'bmg_office_hours', 'Mon-Fri: 7AM - 7PM' );
?>

<section id="cta" class="section-cta section-dark">
	<div class="section-cta__bg" aria-hidden="true"></div>
	<div class="container bmg-reveal">

		<!-- Section Header -->
		<div class="text-center mb-5">
			<h2 class="section-title text-white">Stop Living with Bad Plumbing</h2>
			<p class="section-sub text-white opacity-75">Whether it's a slow drain or a full emergency, our East San Diego team is ready. Free estimates, no obligation, available 24/7.</p>
		</div>

		<div class="row gy-4">

			<!-- Left: Full Form (60%) -->
			<div class="col-lg-7">
				<div class="section-cta__form-card">
					<h3 class="section-cta__form-title">Request Your Free Estimate</h3>

					<?php bmg_render_gravity_form( BMG_CONTACT_FORM_ID ); ?>
					<p class="section-cta__form-micro">No spam, no obligation &mdash; just honest diagnostics.</p>
				</div>
			</div>

			<!-- Right: Contact Info Cards (40%) -->
			<div class="col-lg-5">
				<div class="section-cta__info-cards">

					<div class="section-cta__info-card">
						<div class="section-cta__info-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						</div>
						<div>
							<span class="section-cta__info-label">PHONE</span>
							<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="section-cta__info-value"><?php echo esc_html( $phone_display ); ?></a>
						</div>
					</div>

					<div class="section-cta__info-card">
						<div class="section-cta__info-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						</div>
						<div>
							<span class="section-cta__info-label">EMAIL</span>
							<a href="mailto:<?php echo esc_attr( $email ); ?>" class="section-cta__info-value"><?php echo esc_html( $email ); ?></a>
						</div>
					</div>

					<div class="section-cta__info-card">
						<div class="section-cta__info-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						</div>
						<div>
							<span class="section-cta__info-label">SERVICE AREA</span>
							<span class="section-cta__info-value"><?php echo esc_html( $service_area ); ?></span>
						</div>
					</div>

					<div class="section-cta__info-card">
						<div class="section-cta__info-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						</div>
						<div>
							<span class="section-cta__info-label">HOURS</span>
							<span class="section-cta__info-value"><?php echo esc_html( $office_hours ); ?></span>
						</div>
					</div>

					<!-- Emergency Callout -->
					<div class="section-cta__emergency">
						<div class="section-cta__emergency-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
						</div>
						<div>
							<strong class="section-cta__emergency-title">24/7 Emergency Service</strong>
							<p class="section-cta__emergency-sub mb-0">Burst pipes and sewer backups don't wait &mdash; neither do we.</p>
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>
</section>
