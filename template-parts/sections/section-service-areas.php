<?php
/**
 * Section: Service Areas — "Pool Service Areas in Yuma County"
 *
 * Up to 6 primary area cards from Customizer + additional area pills from textarea.
 * Empty name slots are skipped.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );

// Build primary areas from Customizer (up to 6 slots).
$area_defaults = array(
	1 => array( 'name' => 'El Cajon',  'desc' => 'Residential and commercial plumbing across El Cajon', 'badge' => 'Full Service' ),
	2 => array( 'name' => 'La Mesa',   'desc' => 'Older homes and hillside neighborhoods',                'badge' => 'Full Service' ),
	3 => array( 'name' => 'Santee',    'desc' => 'Santee and the Sky Ranch / Carlton Hills area',         'badge' => 'Full Service' ),
	4 => array( 'name' => 'Lakeside',  'desc' => 'Lakeside, Eucalyptus Hills, and nearby communities',    'badge' => 'Full Service' ),
	5 => array( 'name' => '',          'desc' => '',                                                       'badge' => 'Full Service' ),
	6 => array( 'name' => '',          'desc' => '',                                                       'badge' => 'Full Service' ),
);

$primary_areas = array();
for ( $i = 1; $i <= 6; $i++ ) {
	$d    = $area_defaults[ $i ];
	$name = get_theme_mod( "bmg_area_{$i}_name", $d['name'] );
	if ( '' === trim( $name ) ) {
		continue;
	}
	$primary_areas[] = array(
		'name'  => $name,
		'desc'  => get_theme_mod( "bmg_area_{$i}_description", $d['desc'] ),
		'badge' => get_theme_mod( "bmg_area_{$i}_badge", $d['badge'] ),
	);
}

// Additional areas from textarea.
$additional_raw   = get_theme_mod( 'bmg_additional_areas', "Spring Valley\nLemon Grove\nRancho San Diego\nAlpine\nSan Carlos\nDel Cerro\nCollege Area\nRamona\nPoway\nPine Valley\nBostonia\nFletcher Hills\nCasa de Oro\nJamul\nMount Helix" );
$additional_areas = array_filter( array_map( 'trim', explode( "\n", $additional_raw ) ) );
?>

<section id="service-areas" class="section-service-areas">
	<div class="container">

		<!-- Section Header -->
		<div class="text-center mb-5 bmg-reveal">
			<span class="section-pill">SERVICE AREAS</span>
			<h2 class="section-title">Plumbing Service Across East San Diego County</h2>
			<p class="section-sub">We know East County inside and out. Our team serves residential and commercial plumbing across El Cajon, La Mesa, Santee, Lakeside, and surrounding communities.</p>
		</div>

		<?php if ( $primary_areas ) : ?>
			<!-- Primary Area Cards -->
			<div class="row gy-4 mb-4 bmg-reveal-stagger">
				<?php foreach ( $primary_areas as $area ) :
					$area_slug = sanitize_title( $area['name'] );
					$area_url  = home_url( '/plumber-in-' . $area_slug . '/' );
				?>
					<div class="col-md-6 col-lg-3 bmg-reveal">
						<a href="<?php echo esc_url( $area_url ); ?>" class="section-service-areas__card section-service-areas__card--link">
							<div class="section-service-areas__card-header">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
							</div>
							<h3 class="section-service-areas__card-name"><?php echo esc_html( $area['name'] ); ?></h3>
							<p class="section-service-areas__card-desc"><?php echo esc_html( $area['desc'] ); ?></p>
							<?php if ( $area['badge'] ) : ?>
								<span class="section-service-areas__badge"><?php echo esc_html( $area['badge'] ); ?></span>
							<?php endif; ?>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if ( $additional_areas ) : ?>
			<!-- Additional Areas -->
			<div class="section-service-areas__additional">
				<h3 class="section-service-areas__additional-title">Additional Service Areas</h3>
				<div class="section-service-areas__pills">
					<?php foreach ( $additional_areas as $area ) : ?>
						<span class="section-service-areas__pill"><?php echo esc_html( $area ); ?></span>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>

		<!-- CTAs -->
		<div class="text-center mt-5">
			<a href="#quote" class="btn btn-cta-primary me-2">Check Service Availability</a>
			<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="section-service-areas__phone-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
				<?php echo esc_html( $phone_display ); ?>
			</a>
		</div>

	</div>
</section>
