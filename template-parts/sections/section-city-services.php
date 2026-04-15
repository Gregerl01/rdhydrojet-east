<?php
/**
 * Section: City Services Internal Links
 *
 * Links from a city landing page to all 10 service+city combo pages.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

require_once get_stylesheet_directory() . '/inc/service-city-data.php';

// Derive city key from current page slug (strip "plumber-in-" prefix).
$page_slug = get_post_field( 'post_name', get_the_ID() );
$city_key  = str_replace( 'plumber-in-', '', $page_slug );

if ( ! isset( $rdh_cities[ $city_key ] ) ) {
	return;
}

$city_label = $rdh_cities[ $city_key ]['label'];
?>

<section class="city-services-links">
	<div class="container">

		<div class="city-services-links__header bmg-reveal">
			<span class="section-pill"><?php
				/* translators: %s city name */
				printf( esc_html__( 'OUR SERVICES IN %s', 'bmg-theme' ), esc_html( strtoupper( $city_label ) ) );
			?></span>
			<h2 class="section-title"><?php
				/* translators: %s city name */
				printf( esc_html__( 'Everything We Handle in %s', 'bmg-theme' ), esc_html( $city_label ) );
			?></h2>
			<p class="city-services-links__subhead"><?php esc_html_e( 'Click any service below for full details, pricing information, and what to expect on the job.', 'bmg-theme' ); ?></p>
		</div>

		<div class="city-services-links__grid bmg-reveal-stagger">
			<?php foreach ( $rdh_services as $service_key => $service ) :
				$combo_url = home_url( '/' . $service_key . '-' . $city_key . '/' );
			?>
				<a href="<?php echo esc_url( $combo_url ); ?>" class="city-services-links__card bmg-reveal">
					<span class="city-services-links__card-icon" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
					</span>
					<strong class="city-services-links__card-label"><?php echo esc_html( $service['label'] ); ?></strong>
					<span class="city-services-links__card-tagline"><?php echo esc_html( $service['tagline'] ); ?></span>
					<span class="city-services-links__card-cta">
						<?php esc_html_e( 'Learn more', 'bmg-theme' ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
					</span>
				</a>
			<?php endforeach; ?>
		</div>

	</div>
</section>
