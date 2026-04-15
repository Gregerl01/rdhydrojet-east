<?php
/**
 * Template Name: Service + City
 *
 * Shared template for 150 service+city combo pages.
 * Slug format: {service-slug}-{city-slug}
 * Example: hydro-jetting-el-cajon
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );

// Load data arrays.
require_once get_stylesheet_directory() . '/inc/service-city-data.php';

// ---------------------------------------------------------------------------
// Slug resolution — match current page slug to service+city pair.
// ---------------------------------------------------------------------------
$current_slug        = get_post_field( 'post_name', get_the_ID() );
$matched_service     = null;
$matched_service_key = '';
$matched_city        = null;
$matched_city_key    = '';

foreach ( $rdh_services as $service_key => $service_data ) {
	foreach ( $rdh_cities as $city_key => $city_data ) {
		if ( $current_slug === $service_key . '-' . $city_key ) {
			$matched_service     = $service_data;
			$matched_service_key = $service_key;
			$matched_city        = $city_data;
			$matched_city_key    = $city_key;
			break 2;
		}
	}
}

if ( ! $matched_service || ! $matched_city ) {
	get_header();
	echo '<div class="container py-5 text-center"><h1>' . esc_html__( 'Service Not Found', 'bmg-theme' ) . '</h1>';
	echo '<p><a href="' . esc_url( home_url( '/services/' ) ) . '">' . esc_html__( 'View all services', 'bmg-theme' ) . '</a></p></div>';
	get_footer();
	return;
}

$service_label = $matched_service['label'];
$city_label    = $matched_city['label'];
$nearby        = $matched_city['nearby'];
$county        = $matched_city['county'];
$is_septic     = ( 'septic-sanitation' === $matched_service_key );

get_header();
?>

<main id="main" class="site-main">

	<!-- Section 1: Hero -->
	<section class="svc-city-hero section-dark">
		<div class="svc-city-hero__bg" aria-hidden="true"></div>
		<div class="container svc-city-hero__container">
			<nav class="svc-city-hero__breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'bmg-theme' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'bmg-theme' ); ?></a>
				<span aria-hidden="true">/</span>
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'bmg-theme' ); ?></a>
				<span aria-hidden="true">/</span>
				<span><?php echo esc_html( $service_label . ' in ' . $city_label ); ?></span>
			</nav>

			<h1 class="svc-city-hero__heading bmg-reveal">
				<?php echo esc_html( $service_label ); ?> in <?php echo esc_html( $city_label ); ?>
			</h1>

			<p class="svc-city-hero__subhead bmg-reveal">
				<?php echo esc_html( $matched_service['tagline'] ); ?> — serving <?php echo esc_html( $city_label ); ?>, <?php echo esc_html( $nearby ); ?>, and surrounding <?php echo esc_html( $county ); ?>.
			</p>

			<div class="svc-city-hero__ctas bmg-reveal">
				<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn btn-cta-primary d-inline-flex align-items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					<span><?php echo esc_html( $phone_display ); ?></span>
				</a>
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline-light">
					<?php esc_html_e( 'All Services', 'bmg-theme' ); ?>
				</a>
			</div>

			<div class="svc-city-hero__trust bmg-reveal">
				<span><?php esc_html_e( 'Licensed & Insured', 'bmg-theme' ); ?></span>
				<span><?php echo esc_html( $county ); ?></span>
				<?php if ( $is_septic ) : ?>
					<span><?php esc_html_e( 'C42 Certified', 'bmg-theme' ); ?></span>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- Section 2: About This Service -->
	<section class="svc-city-about">
		<div class="container">
			<div class="row align-items-center gy-5">
				<div class="col-lg-6 bmg-reveal">
					<span class="section-pill"><?php echo esc_html( strtoupper( $service_label ) ); ?></span>
					<h2 class="section-title"><?php echo esc_html( $service_label ); ?> in <?php echo esc_html( $city_label ); ?>, CA</h2>
					<p><?php echo esc_html( $matched_service['description'] ); ?></p>
					<p><?php
						/* translators: 1: city name, 2: nearby cities */
						printf(
							esc_html__( 'RD Hydrojet Plumbing provides %1$s service throughout %2$s and nearby communities including %3$s. Every job starts with a proper diagnosis and a written estimate before any work begins.', 'bmg-theme' ),
							esc_html( strtolower( $service_label ) ),
							esc_html( $city_label ),
							esc_html( $nearby )
						);
					?></p>
					<p><?php esc_html_e( 'Licensed, bonded, and insured — CA CSLB #1076642. We carry C-36 Plumbing, C-42 Sanitation, and C-20 HVAC licenses.', 'bmg-theme' ); ?></p>
				</div>
				<div class="col-lg-6 bmg-reveal">
					<div class="svc-city-about__image-placeholder">
						<span><?php echo esc_html( $service_label ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 3: What's Included -->
	<section class="svc-city-included">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'WHAT YOU GET', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php esc_html_e( "What's Included", 'bmg-theme' ); ?></h2>
			</div>
			<div class="row g-4 bmg-reveal-stagger">
				<?php foreach ( $matched_service['included'] as $item ) : ?>
					<div class="col-md-6 col-lg-4 bmg-reveal">
						<div class="svc-city-included__card">
							<div class="svc-city-included__icon" aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
							</div>
							<strong class="svc-city-included__label"><?php echo esc_html( $item ); ?></strong>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Section 4: Why Choose Us -->
	<section class="svc-city-why">
		<div class="container">
			<div class="svc-city-why__content bmg-reveal">
				<h2 class="section-title"><?php
					/* translators: %s city name */
					printf( esc_html__( 'Why Choose RD Hydrojet in %s', 'bmg-theme' ), esc_html( $city_label ) );
				?></h2>
				<p><?php
					/* translators: 1: city name, 2: county */
					printf(
						esc_html__( 'We know %1$s and %2$s inside and out. Our team works in these neighborhoods daily, and we understand the specific plumbing challenges that local homes and businesses face — from aging infrastructure to hard water to root-prone sewer lines.', 'bmg-theme' ),
						esc_html( $city_label ),
						esc_html( $county )
					);
				?></p>
				<p><?php esc_html_e( 'Every technician on our team is licensed, bonded, and insured. We carry C-36 Plumbing, C-42 Sanitation, and C-20 HVAC licenses — CA CSLB #1076642. We invest in commercial-grade equipment because proper tools mean proper results.', 'bmg-theme' ); ?></p>
				<?php if ( $is_septic ) : ?>
					<p><?php
						/* translators: %s city name */
						printf(
							esc_html__( 'Our C42 Sanitation license is especially important in %s, where many properties rely on septic systems. We are one of the few plumbing contractors in East San Diego County certified for full septic system inspection, repair, and installation.', 'bmg-theme' ),
							esc_html( $city_label )
						);
					?></p>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- CTA Bar -->
	<section class="svc-city-cta">
		<div class="container">
			<div class="svc-city-cta__bar bmg-reveal">
				<p class="svc-city-cta__text">
					<?php esc_html_e( 'Ready to schedule?', 'bmg-theme' ); ?>
				</p>
				<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="svc-city-cta__phone">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					<?php esc_html_e( 'Call', 'bmg-theme' ); ?> <?php echo esc_html( $phone_display ); ?>
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
