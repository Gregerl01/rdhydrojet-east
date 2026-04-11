<?php
/**
 * Section: Hero + Lead Form + Trust Stats
 *
 * Split layout — 58% headline left, 42% form right. Stats bar below.
 * Background, headline, subtitle, and CTAs pulled from Customizer.
 * CONTENT.md copy used as fallback defaults.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

// Phone from Business Information panel.
$phone_display = get_theme_mod( 'bmg_phone', '(951) 600-0459' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );

// Hero Customizer fields.
$hero_bg_image       = get_theme_mod( 'hero_background_image', '' );
$hero_overlay        = get_theme_mod( 'hero_overlay_opacity', 72 );
$hero_headline       = get_theme_mod( 'hero_headline', 'Fast, Licensed Plumbing for East San Diego County' );
$hero_subtitle       = get_theme_mod( 'hero_subtitle', 'From hydro jetting to emergency repairs — 20+ years of trusted service across El Cajon, La Mesa, Santee, and all of East County. Licensed, insured, and here when you need us.' );
$hero_cta_text       = get_theme_mod( 'hero_cta_primary_text', 'Call ' . $phone_display );
$hero_cta_url        = get_theme_mod( 'hero_cta_primary_url', 'tel:' . $phone_link );
$hero_secondary_text = get_theme_mod( 'hero_cta_secondary_text', 'See Our Services' );
$hero_secondary_url  = get_theme_mod( 'hero_cta_secondary_url', '#services' );

// Clamp overlay opacity to 0–100 and convert to 0–1.
$overlay_opacity = max( 0, min( 100, (int) $hero_overlay ) ) / 100;

// Build inline background style for the bg div.
$bg_style = '';
if ( $hero_bg_image ) {
	$bg_style = sprintf(
		'background-image: url(%s); background-size: cover; background-position: center;',
		esc_url( $hero_bg_image )
	);
}
?>

<section id="hero" class="section-hero section-dark">
	<?php if ( $hero_bg_image ) : ?>
		<div class="section-hero__bg-image" style="<?php echo esc_attr( $bg_style ); ?>" aria-hidden="true"></div>
	<?php endif; ?>
	<div class="section-hero__bg" style="opacity: <?php echo esc_attr( $overlay_opacity ); ?>;" aria-hidden="true"></div>
	<div class="container section-hero__container">
		<div class="row align-items-center gy-4">

			<!-- Left: Headline Content (58%) -->
			<div class="col-lg-7 section-hero__content bmg-reveal">

				<!-- Trust Badge Pill -->
				<span class="section-hero__badge">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
					East San Diego's Plumbing Specialists
				</span>

				<!-- H1 -->
				<h1 class="section-hero__title">
					<?php
					// If headline contains "East San Diego County", wrap it in the highlight span.
					$highlight = 'East San Diego County';
					if ( false !== strpos( $hero_headline, $highlight ) ) {
						echo wp_kses_post(
							str_replace(
								$highlight,
								'<span class="section-hero__title-highlight">' . $highlight . '</span>',
								esc_html( $hero_headline )
							)
						);
					} else {
						echo esc_html( $hero_headline );
					}
					?>
				</h1>

				<!-- Subline -->
				<p class="section-hero__sub">
					<?php echo esc_html( $hero_subtitle ); ?>
				</p>

				<!-- Trust Checkmarks -->
				<ul class="section-hero__checks list-unstyled d-flex flex-wrap gap-3">
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
						Licensed &amp; Insured
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						24/7 Emergency
					</li>
					<li>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
						CA Lic #1076642
					</li>
				</ul>

				<!-- Primary CTA: Phone -->
				<div class="section-hero__ctas d-flex flex-wrap align-items-center gap-3">
					<a href="tel:+19516000459" class="btn btn-cta-primary section-hero__phone-cta d-inline-flex align-items-center gap-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						<span>(951) 600-0459</span>
					</a>

					<?php if ( $hero_secondary_text ) : ?>
						<a href="<?php echo esc_url( $hero_secondary_url ); ?>" class="btn btn-outline-light section-hero__secondary-cta">
							<?php echo esc_html( $hero_secondary_text ); ?>
						</a>
					<?php endif; ?>
				</div>

			</div>

			<!-- Right: Lead Form Card (42%) -->
			<div class="col-lg-5">
				<div class="section-hero__form-card bmg-reveal" id="quote" style="transition-delay: 120ms;">
					<h2 class="section-hero__form-title">Request Service</h2>
					<p class="section-hero__form-sub">Free estimates &middot; Same-day response</p>

					<form class="lead-form" method="post" action="#">
						<div class="mb-3">
							<label for="hero-name" class="form-label">Full Name</label>
							<input type="text" class="form-control" id="hero-name" name="full_name" placeholder="Your full name" required>
						</div>
						<div class="mb-3">
							<label for="hero-phone" class="form-label">Phone Number</label>
							<input type="tel" class="form-control" id="hero-phone" name="phone" placeholder="(619) 000-0000" required>
						</div>
						<div class="mb-3">
							<label for="hero-service" class="form-label">Service Needed</label>
							<select class="form-select" id="hero-service" name="service" required>
								<option value="" disabled selected>Select a service</option>
								<option value="hydro-jetting">Hydro Jetting</option>
								<option value="drain-sewer">Drain &amp; Sewer Repair</option>
								<option value="water-heater">Water Heater</option>
								<option value="leak-detection">Leak Detection</option>
								<option value="gas-line">Gas Line Repair</option>
								<option value="emergency">24/7 Emergency</option>
								<option value="other">Other</option>
							</select>
						</div>
						<button type="submit" class="btn btn-cta-primary w-100">Request Free Estimate</button>
						<p class="section-hero__form-micro">No spam, no obligation &mdash; just honest diagnostics.</p>
					</form>
				</div>
			</div>

		</div>

		<!-- Stats Bar -->
		<div class="section-hero__stats">
			<div class="row text-center">
				<div class="col-6 col-md-3 section-hero__stat">
					<span class="section-hero__stat-value">1,200+</span>
					<span class="section-hero__stat-label">Jobs Completed</span>
				</div>
				<div class="col-6 col-md-3 section-hero__stat">
					<span class="section-hero__stat-value">4.9&#9733;</span>
					<span class="section-hero__stat-label">Average Rating</span>
				</div>
				<div class="col-6 col-md-3 section-hero__stat">
					<span class="section-hero__stat-value">20+</span>
					<span class="section-hero__stat-label">Years Experience</span>
				</div>
				<div class="col-6 col-md-3 section-hero__stat">
					<span class="section-hero__stat-value">24/7</span>
					<span class="section-hero__stat-label">Emergency Service</span>
				</div>
			</div>
		</div>

	</div>
</section>
