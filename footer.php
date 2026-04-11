<?php
/**
 * Footer Template — RD Hydrojet East San Diego
 *
 * 4-column layout, dark bg, bottom bar. Includes sticky mobile CTA bar.
 * Contact info pulled from Customizer bmg_* variables.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
$email         = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );
$address_city  = get_theme_mod( 'bmg_address_city', 'East San Diego County, CA' );
$footer_tagline = get_theme_mod( 'bmg_footer_tagline', "East San Diego County's trusted plumbing team. Licensed, bonded, and insured — CA CSLB #1076642." );
?>

	<footer id="site-footer" class="site-footer">
		<div class="container">

			<div class="row gy-4 mb-5">

				<!-- Col 1: Company -->
				<div class="col-lg-3 col-md-6">
					<?php $footer_logo_url = get_theme_mod( 'bmg_footer_logo', '' ); ?>
					<?php if ( $footer_logo_url ) : ?>
						<div class="site-footer__logo mb-3">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
								<img
									src="<?php echo esc_url( $footer_logo_url ); ?>"
									alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
									class="footer-logo site-footer__logo-img"
									loading="lazy"
								>
							</a>
						</div>
					<?php elseif ( has_custom_logo() ) : ?>
						<div class="site-footer__logo mb-3">
							<?php the_custom_logo(); ?>
						</div>
					<?php else : ?>
						<div class="site-footer__logo-text mb-3">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<span class="site-footer__logo-primary">RD Hydrojet</span>
								<span class="site-footer__logo-secondary">EAST</span>
							</a>
						</div>
					<?php endif; ?>

					<p class="site-footer__desc">
						<?php echo esc_html( $footer_tagline ); ?>
					</p>

					<!-- Social -->
					<div class="site-footer__social">
						<a href="#" aria-label="Facebook" class="site-footer__social-link">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
						</a>
						<a href="#" aria-label="Instagram" class="site-footer__social-link">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
						</a>
					</div>
				</div>

				<!-- Col 2: Services -->
				<div class="col-lg-3 col-md-6">
					<h4 class="site-footer__title">Services</h4>
					<ul class="site-footer__links list-unstyled">
						<li><a href="<?php echo esc_url( home_url( '/services/hydro-jetting/' ) ); ?>">Hydro Jetting</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/drain-cleaning/' ) ); ?>">Drain &amp; Sewer Repair</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/water-heater-services/' ) ); ?>">Water Heater Services</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/leak-detection/' ) ); ?>">Leak Detection</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/gas-line-repair/' ) ); ?>">Gas Line Repair</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/emergency-plumbing/' ) ); ?>">24/7 Emergency</a></li>
					</ul>
				</div>

				<!-- Col 3: Service Areas -->
				<div class="col-lg-3 col-md-6">
					<h4 class="site-footer__title">Service Areas</h4>
					<ul class="site-footer__links list-unstyled">
						<li><a href="#service-areas">El Cajon</a></li>
						<li><a href="#service-areas">La Mesa</a></li>
						<li><a href="#service-areas">Santee</a></li>
						<li><a href="#service-areas">Lakeside</a></li>
						<li><a href="#service-areas">Spring Valley</a></li>
						<li><a href="#service-areas">Rancho San Diego</a></li>
					</ul>
				</div>

				<!-- Col 4: Contact -->
				<div class="col-lg-3 col-md-6">
					<h4 class="site-footer__title">Contact</h4>
					<ul class="site-footer__contact list-unstyled">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
							<a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone_display ); ?></a>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
							<a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
							<?php echo esc_html( $address_city ); ?>
						</li>
					</ul>
					<a href="#quote" class="btn btn-cta-primary mt-3">Request Estimate</a>
				</div>

			</div>

			<!-- Bottom Bar -->
			<div class="site-footer__bottom">
				<div class="row align-items-center">
					<div class="col-md-8 text-center text-md-start">
						<p class="site-footer__copyright mb-2 mb-md-0">
							&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> RD Hydrojet Plumbing &amp; Drain Inc. All rights reserved. Licensed, Bonded &amp; Insured. CA CSLB #1076642.
						</p>
					</div>
					<div class="col-md-4 text-center text-md-end">
						<nav class="site-footer__legal" aria-label="<?php esc_attr_e( 'Legal', 'bmg-theme' ); ?>">
							<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
							<span aria-hidden="true">|</span>
							<a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>">Terms of Service</a>
						</nav>
					</div>
				</div>

				<!-- Designer Credit -->
				<div class="site-footer__credit text-center mt-3">
					<p class="mb-0">
						Website designed and maintained by <a href="https://gsldesign.net" target="_blank" rel="noopener">GSL Design</a>
					</p>
				</div>
			</div>

		</div>
	</footer>

	<!-- Sticky Mobile CTA Bar (mobile only) -->
	<div class="sticky-cta d-lg-none">
		<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="sticky-cta__btn sticky-cta__btn--call">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
			Call Now
		</a>
		<a href="#quote" class="sticky-cta__btn sticky-cta__btn--quote">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
			Get Estimate
		</a>
	</div>

	<!-- Back to Top Button -->
	<button class="back-to-top" aria-label="<?php esc_attr_e( 'Back to top', 'bmg-theme' ); ?>" type="button">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><polyline points="18 15 12 9 6 15"/></svg>
	</button>

<?php wp_footer(); ?>

</body>
</html>
