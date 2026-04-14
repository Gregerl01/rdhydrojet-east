<?php
/**
 * Template Name: Contact Page
 *
 * Full contact page with lead form, info sidebar, service area strip,
 * and trust bar. Built for East San Diego County lead generation.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
$email         = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );
$service_area  = get_theme_mod( 'bmg_address_city', 'East San Diego County, CA' );
$office_hours  = get_theme_mod( 'bmg_office_hours', 'Mon–Fri: 7AM–7PM' );

// Service area cities.
$area_cities = array(
	'el-cajon'          => 'El Cajon',
	'la-mesa'           => 'La Mesa',
	'santee'            => 'Santee',
	'lakeside'          => 'Lakeside',
	'spring-valley'     => 'Spring Valley',
	'lemon-grove'       => 'Lemon Grove',
	'rancho-san-diego'  => 'Rancho San Diego',
	'alpine'            => 'Alpine',
	'san-carlos'        => 'San Carlos',
	'del-cerro'         => 'Del Cerro',
	'college-area'      => 'College Area',
	'east-san-diego'    => 'East San Diego',
	'ramona'            => 'Ramona',
	'poway'             => 'Poway',
	'pine-valley'       => 'Pine Valley',
);

get_header();
?>

<?php if ( ! class_exists( 'RankMath' ) && ! defined( 'WPSEO_VERSION' ) ) : ?>
<!-- LocalBusiness + ContactPoint Schema -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "LocalBusiness",
	"@id": "<?php echo esc_url( home_url( '/' ) ); ?>#business",
	"name": "RD Hydrojet Plumbing & Drain Inc.",
	"url": "<?php echo esc_url( home_url( '/' ) ); ?>",
	"telephone": "<?php echo esc_attr( $phone_display ); ?>",
	"email": "<?php echo esc_attr( $email ); ?>",
	"priceRange": "$$",
	"address": {
		"@type": "PostalAddress",
		"addressLocality": "East San Diego County",
		"addressRegion": "CA",
		"addressCountry": "US"
	},
	"contactPoint": {
		"@type": "ContactPoint",
		"telephone": "<?php echo esc_attr( $phone_display ); ?>",
		"email": "<?php echo esc_attr( $email ); ?>",
		"contactType": "customer service",
		"areaServed": "East San Diego County",
		"availableLanguage": ["English", "Spanish"]
	}
}
</script>
<?php endif; ?>

<main id="main" class="site-main">

	<!-- Section 1: Hero -->
	<section class="section-sd-hero section-dark">
		<div class="section-sd-hero__bg" aria-hidden="true"></div>
		<div class="container section-sd-hero__container">
			<nav class="section-sd-hero__breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'bmg-theme' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'bmg-theme' ); ?></a>
				<span aria-hidden="true">/</span>
				<span><?php esc_html_e( 'Contact', 'bmg-theme' ); ?></span>
			</nav>
			<h1 class="section-sd-hero__title bmg-reveal"><?php esc_html_e( 'Contact RD Hydrojet Plumbing', 'bmg-theme' ); ?></h1>
			<p class="section-sd-hero__sub bmg-reveal"><?php esc_html_e( "Have a question, need a quote, or dealing with an emergency? We're real plumbers based in East San Diego County — and we answer our phones.", 'bmg-theme' ); ?></p>
		</div>
	</section>

	<!-- Section 2: Main Contact -->
	<section class="section-contact">
		<div class="container">
			<div class="row gy-4">

				<!-- Left: Form (60%) -->
				<div class="col-lg-7 bmg-reveal">
					<div class="section-contact__form-card">
						<h2 class="section-contact__form-title"><?php esc_html_e( 'Request Your Free Estimate', 'bmg-theme' ); ?></h2>

						<form class="lead-form" method="post" action="#">
							<div class="row gy-3">
								<div class="col-md-6">
									<label for="contact-name" class="form-label"><?php esc_html_e( 'Full Name', 'bmg-theme' ); ?></label>
									<input type="text" class="form-control" id="contact-name" name="full_name" placeholder="<?php esc_attr_e( 'Your full name', 'bmg-theme' ); ?>" required>
								</div>
								<div class="col-md-6">
									<label for="contact-phone" class="form-label"><?php esc_html_e( 'Phone Number', 'bmg-theme' ); ?></label>
									<input type="tel" class="form-control" id="contact-phone" name="phone" placeholder="(619) 000-0000" required>
								</div>
								<div class="col-md-6">
									<label for="contact-email" class="form-label"><?php esc_html_e( 'Email Address', 'bmg-theme' ); ?></label>
									<input type="email" class="form-control" id="contact-email" name="email" placeholder="you@email.com">
								</div>
								<div class="col-md-6">
									<label for="contact-service" class="form-label"><?php esc_html_e( 'Service Needed', 'bmg-theme' ); ?></label>
									<select class="form-select" id="contact-service" name="service" required>
										<option value="" disabled selected><?php esc_html_e( 'Select a service', 'bmg-theme' ); ?></option>
										<option value="hydro-jetting"><?php esc_html_e( 'Hydro Jetting', 'bmg-theme' ); ?></option>
										<option value="drain-sewer"><?php esc_html_e( 'Drain &amp; Sewer Repair', 'bmg-theme' ); ?></option>
										<option value="water-heater"><?php esc_html_e( 'Water Heater', 'bmg-theme' ); ?></option>
										<option value="leak-detection"><?php esc_html_e( 'Leak Detection', 'bmg-theme' ); ?></option>
										<option value="gas-line"><?php esc_html_e( 'Gas Line Repair', 'bmg-theme' ); ?></option>
										<option value="toilet-repair"><?php esc_html_e( 'Toilet Repair', 'bmg-theme' ); ?></option>
										<option value="emergency"><?php esc_html_e( '24/7 Emergency', 'bmg-theme' ); ?></option>
										<option value="repiping"><?php esc_html_e( 'Repiping', 'bmg-theme' ); ?></option>
										<option value="septic-sanitation"><?php esc_html_e( 'Septic &amp; Sanitation', 'bmg-theme' ); ?></option>
										<option value="new-construction"><?php esc_html_e( 'New Construction Plumbing', 'bmg-theme' ); ?></option>
										<option value="other"><?php esc_html_e( 'Other', 'bmg-theme' ); ?></option>
									</select>
								</div>
								<div class="col-12">
									<label for="contact-address" class="form-label"><?php esc_html_e( 'Street Address / City', 'bmg-theme' ); ?></label>
									<input type="text" class="form-control" id="contact-address" name="address" placeholder="<?php esc_attr_e( 'Street address, city', 'bmg-theme' ); ?>">
								</div>
								<div class="col-12">
									<label for="contact-details" class="form-label"><?php esc_html_e( 'Additional Details', 'bmg-theme' ); ?> <span class="text-muted">(<?php esc_html_e( 'optional', 'bmg-theme' ); ?>)</span></label>
									<textarea class="form-control" id="contact-details" name="details" rows="4" placeholder="<?php esc_attr_e( 'Describe the issue — upstairs, downstairs, leaking, flooding, no rush, etc.', 'bmg-theme' ); ?>"></textarea>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-cta-primary w-100"><?php esc_html_e( 'Request Free Estimate', 'bmg-theme' ); ?></button>
									<p class="section-contact__form-micro"><?php esc_html_e( 'We typically respond within 1 hour during business hours. No spam, no obligation.', 'bmg-theme' ); ?></p>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Right: Sidebar (40%) -->
				<div class="col-lg-5 bmg-reveal">
					<div class="section-contact__sidebar">

						<!-- Phone -->
						<div class="section-contact__info-card">
							<div class="section-contact__info-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
							</div>
							<div>
								<span class="section-contact__info-label"><?php esc_html_e( 'PHONE', 'bmg-theme' ); ?></span>
								<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="section-contact__info-value"><?php echo esc_html( $phone_display ); ?></a>
							</div>
						</div>

						<!-- Email -->
						<div class="section-contact__info-card">
							<div class="section-contact__info-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
							</div>
							<div>
								<span class="section-contact__info-label"><?php esc_html_e( 'EMAIL', 'bmg-theme' ); ?></span>
								<a href="mailto:<?php echo esc_attr( $email ); ?>" class="section-contact__info-value"><?php echo esc_html( $email ); ?></a>
							</div>
						</div>

						<!-- Service Area -->
						<div class="section-contact__info-card">
							<div class="section-contact__info-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
							</div>
							<div>
								<span class="section-contact__info-label"><?php esc_html_e( 'SERVICE AREA', 'bmg-theme' ); ?></span>
								<span class="section-contact__info-value"><?php echo esc_html( $service_area ); ?></span>
							</div>
						</div>

						<!-- Hours -->
						<div class="section-contact__info-card">
							<div class="section-contact__info-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
							</div>
							<div>
								<span class="section-contact__info-label"><?php esc_html_e( 'HOURS', 'bmg-theme' ); ?></span>
								<span class="section-contact__info-value"><?php echo esc_html( $office_hours ); ?></span>
								<span class="section-contact__info-sub"><?php esc_html_e( '24/7 Emergency Available', 'bmg-theme' ); ?></span>
							</div>
						</div>

						<!-- Emergency Callout -->
						<div class="section-contact__emergency">
							<div class="section-contact__emergency-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
							</div>
							<div>
								<strong class="section-contact__emergency-title"><?php esc_html_e( 'Plumbing Emergency?', 'bmg-theme' ); ?></strong>
								<p class="section-contact__emergency-sub mb-0">
									<?php
									printf(
										/* translators: %s phone number */
										esc_html__( 'Call %s — we answer day and night.', 'bmg-theme' ),
										esc_html( $phone_display )
									);
									?>
								</p>
								<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn btn-cta-primary w-100 mt-2"><?php esc_html_e( 'Call Now', 'bmg-theme' ); ?></a>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Section 3: Service Areas Strip -->
	<section class="section-contact-areas">
		<div class="container">
			<p class="section-contact-areas__text bmg-reveal">
				<?php esc_html_e( 'Proudly serving', 'bmg-theme' ); ?>
				<?php
				$links = array();
				foreach ( $area_cities as $slug => $name ) {
					$links[] = sprintf(
						'<a href="%s">%s</a>',
						esc_url( home_url( '/plumber-in-' . $slug . '/' ) ),
						esc_html( $name )
					);
				}
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo implode( ', ', $links );
				?>
				<?php esc_html_e( ', and surrounding communities.', 'bmg-theme' ); ?>
			</p>
		</div>
	</section>

	<!-- Section 4: Trust Bar -->
	<section class="section-contact-trust section-dark">
		<div class="container">
			<div class="row gy-4 text-center bmg-reveal-stagger">

				<div class="col-6 col-md-3 bmg-reveal">
					<div class="section-contact-trust__item">
						<div class="section-contact-trust__icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
						</div>
						<span class="section-contact-trust__label"><?php esc_html_e( 'Licensed & Insured', 'bmg-theme' ); ?></span>
						<span class="section-contact-trust__sub"><?php esc_html_e( 'CA CSLB #1076642', 'bmg-theme' ); ?></span>
					</div>
				</div>

				<div class="col-6 col-md-3 bmg-reveal">
					<div class="section-contact-trust__item">
						<div class="section-contact-trust__icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
						</div>
						<span class="section-contact-trust__label"><?php esc_html_e( '4.9★ Google Rated', 'bmg-theme' ); ?></span>
						<span class="section-contact-trust__sub"><?php esc_html_e( '75+ Reviews', 'bmg-theme' ); ?></span>
					</div>
				</div>

				<div class="col-6 col-md-3 bmg-reveal">
					<div class="section-contact-trust__item">
						<div class="section-contact-trust__icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
						</div>
						<span class="section-contact-trust__label"><?php esc_html_e( '20+ Years Experience', 'bmg-theme' ); ?></span>
						<span class="section-contact-trust__sub"><?php esc_html_e( 'Since 2003', 'bmg-theme' ); ?></span>
					</div>
				</div>

				<div class="col-6 col-md-3 bmg-reveal">
					<div class="section-contact-trust__item">
						<div class="section-contact-trust__icon" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						</div>
						<span class="section-contact-trust__label"><?php esc_html_e( '24/7 Emergency', 'bmg-theme' ); ?></span>
						<span class="section-contact-trust__sub"><?php esc_html_e( 'Always Available', 'bmg-theme' ); ?></span>
					</div>
				</div>

			</div>
		</div>
	</section>

</main>

<?php
get_footer();
