<?php
/**
 * Section: Features — "Plumbing Solutions for Every Situation"
 *
 * 6 service cards in 3x2 grid. First card has left accent border.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$services = array(
	array(
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>',
		'title'    => 'Hydro Jetting',
		'desc'     => 'Commercial-grade high-pressure jetting that clears grease, roots, and decades of buildup.',
		'features' => array( 'Camera inspection first', 'Up to 4,000 PSI jetting', 'Safe for older pipes', 'Long-lasting results' ),
		'slug'     => '/services/hydro-jetting/',
		'accent'   => true,
	),
	array(
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
		'title'    => 'Drain &amp; Sewer Repair',
		'desc'     => 'Camera inspections, trenchless repair, and full sewer line replacement when needed.',
		'features' => array( 'HD sewer camera inspection', 'Trenchless repair options', 'Root removal', 'Full line replacement' ),
		'slug'     => '/services/drain-cleaning/',
		'accent'   => false,
	),
	array(
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v7.527a2 2 0 0 1-.211.896L4.72 20.55a1 1 0 0 0 .9 1.45h12.76a1 1 0 0 0 .9-1.45l-5.069-10.127A2 2 0 0 1 14 9.527V2"/><path d="M8.5 2h7"/></svg>',
		'title'    => 'Water Heater Services',
		'desc'     => 'Tank and tankless installation, repair, and upgrades. All major brands.',
		'features' => array( 'Same-day replacement', 'Tankless conversion', 'All major brands', 'Warranty-backed work' ),
		'slug'     => '/services/water-heater-services/',
		'accent'   => false,
	),
	array(
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>',
		'title'    => 'Leak Detection',
		'desc'     => 'Electronic and thermal detection for slab leaks, hidden pipe leaks, and gas leaks.',
		'features' => array( 'Electronic leak location', 'Thermal imaging', 'Slab leak specialists', 'No-damage detection' ),
		'slug'     => '/services/leak-detection/',
		'accent'   => false,
	),
	array(
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
		'title'    => 'Gas Line Repair',
		'desc'     => 'Certified gas plumbers for installation, repair, and code-compliant inspections.',
		'features' => array( 'Certified gas techs', 'Leak testing', 'Code-compliant work', 'Permit handling' ),
		'slug'     => '/services/gas-line-repair/',
		'accent'   => false,
	),
	array(
		'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
		'title'    => '24/7 Emergency',
		'desc'     => 'Burst pipes, sewer backups, gas leaks, water heater failures. We answer the phone.',
		'features' => array( 'Live phone answered 24/7', '60-minute response goal', 'Weekends &amp; holidays', 'Upfront emergency pricing' ),
		'slug'     => '/services/emergency-plumbing/',
		'accent'   => false,
	),
);
?>

<section id="services" class="section-features">
	<div class="container">

		<!-- Section Header -->
		<div class="text-center mb-5 bmg-reveal">
			<span class="section-pill">OUR SERVICES</span>
			<h2 class="section-title">Plumbing Solutions for Every Situation</h2>
			<p class="section-sub">From routine drain cleaning to full sewer line replacement, we handle residential and commercial plumbing across East San Diego County.</p>
		</div>

		<!-- Service Cards (3x2) -->
		<div class="row gy-4 bmg-reveal-stagger">
			<?php foreach ( $services as $service ) : ?>
				<div class="col-md-6 col-lg-4 bmg-reveal">
					<div class="section-features__card<?php echo $service['accent'] ? ' section-features__card--accent' : ''; ?>">
						<div class="section-features__card-icon">
							<?php echo $service['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
						<h3 class="section-features__card-title"><?php echo wp_kses_post( $service['title'] ); ?></h3>
						<p class="section-features__card-desc"><?php echo esc_html( $service['desc'] ); ?></p>
						<ul class="section-features__card-features list-unstyled">
							<?php foreach ( $service['features'] as $feature ) : ?>
								<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
									<?php echo wp_kses_post( $feature ); ?>
								</li>
							<?php endforeach; ?>
						</ul>
						<a href="<?php echo esc_url( home_url( $service['slug'] ) ); ?>" class="section-features__card-link">
							Learn More
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
