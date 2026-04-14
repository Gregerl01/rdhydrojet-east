<?php
/**
 * Centralized services data — single source of truth.
 *
 * Used by homepage features section, services hub page, and schema markup.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Return the full array of services.
 *
 * @return array[] Each service has: slug, title, icon, desc, bullets, link.
 */
function bmg_get_services() {
	return array(
		array(
			'slug'    => 'hydro-jetting',
			'title'   => __( 'Hydro Jetting', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>',
			'desc'    => __( 'Commercial-grade, high-pressure drain cleaning that removes grease, roots, and decades of buildup from your sewer and drain lines. Camera inspection included.', 'bmg-theme' ),
			'bullets' => array(
				__( 'Residential &amp; commercial lines', 'bmg-theme' ),
				__( 'Root &amp; grease removal', 'bmg-theme' ),
				__( 'Preventive maintenance', 'bmg-theme' ),
			),
			'link'    => '/services/hydro-jetting/',
		),
		array(
			'slug'    => 'drain-cleaning',
			'title'   => __( 'Drain &amp; Sewer Repair', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
			'desc'    => __( 'From slow drains to full sewer line failures, we diagnose the issue with camera inspection and fix it with the least invasive method possible.', 'bmg-theme' ),
			'bullets' => array(
				__( 'Camera inspections', 'bmg-theme' ),
				__( 'Trenchless repair', 'bmg-theme' ),
				__( 'Full line replacement', 'bmg-theme' ),
			),
			'link'    => '/services/drain-cleaning/',
		),
		array(
			'slug'    => 'water-heater-services',
			'title'   => __( 'Water Heater Services', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="3" width="14" height="18" rx="2"/><line x1="9" y1="7" x2="15" y2="7"/><circle cx="12" cy="13" r="3"/><line x1="12" y1="17" x2="12" y2="17.01"/></svg>',
			'desc'    => __( 'Tank and tankless water heater installation, repair, and replacement. We work with all major brands and help you choose the right system for your home.', 'bmg-theme' ),
			'bullets' => array(
				__( 'Tank &amp; tankless installs', 'bmg-theme' ),
				__( 'Repair &amp; diagnostics', 'bmg-theme' ),
				__( 'Energy-efficient upgrades', 'bmg-theme' ),
			),
			'link'    => '/services/water-heater-services/',
		),
		array(
			'slug'    => 'leak-detection',
			'title'   => __( 'Leak Detection', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><path d="M11 8a3 3 0 0 0-3 3"/></svg>',
			'desc'    => __( 'Electronic and thermal detection to pinpoint leaks under slabs, behind walls, and in buried lines — before they cause serious damage.', 'bmg-theme' ),
			'bullets' => array(
				__( 'Slab leak detection', 'bmg-theme' ),
				__( 'Hidden pipe leaks', 'bmg-theme' ),
				__( 'Non-invasive methods', 'bmg-theme' ),
			),
			'link'    => '/services/leak-detection/',
		),
		array(
			'slug'    => 'gas-line-repair',
			'title'   => __( 'Gas Line Installation &amp; Repair', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
			'desc'    => __( 'Our certified gas plumbers install, repair, test, and inspect gas lines for residential and commercial properties. All work meets current California code.', 'bmg-theme' ),
			'bullets' => array(
				__( 'New installations', 'bmg-theme' ),
				__( 'Leak repair', 'bmg-theme' ),
				__( 'Code-compliant inspections', 'bmg-theme' ),
			),
			'link'    => '/services/gas-line-repair/',
		),
		array(
			'slug'    => 'toilet-repair',
			'title'   => __( 'Toilet Repair &amp; Installation', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16v8a6 6 0 0 1-6 6h-4a6 6 0 0 1-6-6V4z"/><path d="M8 22h8"/><path d="M12 18v4"/></svg>',
			'desc'    => __( 'Running toilets, broken flanges, full replacements — we handle it all. Fast, clean work with no mess left behind.', 'bmg-theme' ),
			'bullets' => array(
				__( 'Leak &amp; running toilet repair', 'bmg-theme' ),
				__( 'Full replacements', 'bmg-theme' ),
				__( 'Flange &amp; wax seal work', 'bmg-theme' ),
			),
			'link'    => '/services/toilet-repair/',
		),
		array(
			'slug'    => 'emergency-plumbing',
			'title'   => __( '24/7 Emergency Plumbing', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
			'desc'    => __( 'Burst pipes, sewer backups, gas leaks, water heater failures — we answer the phone day and night. Emergency response across all of East San Diego County.', 'bmg-theme' ),
			'bullets' => array(
				__( 'Burst pipe response', 'bmg-theme' ),
				__( 'Sewer backup service', 'bmg-theme' ),
				__( 'After-hours availability', 'bmg-theme' ),
			),
			'link'    => '/services/emergency-plumbing/',
		),
		array(
			'slug'    => 'repiping',
			'title'   => __( 'Whole-Home Repiping', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>',
			'desc'    => __( 'If your home has aging galvanized or polybutylene pipes, a full repipe protects your home from leaks, low pressure, and water quality issues for decades.', 'bmg-theme' ),
			'bullets' => array(
				__( 'Galvanized &amp; poly pipe replacement', 'bmg-theme' ),
				__( 'Copper &amp; PEX options', 'bmg-theme' ),
				__( 'Minimal wall damage', 'bmg-theme' ),
			),
			'link'    => '/services/repiping/',
		),
		array(
			'slug'    => 'septic-sanitation',
			'title'   => __( 'Septic &amp; Sanitation', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 8a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3z"/><line x1="3" y1="12" x2="21" y2="12"/><path d="M8 6V4"/><path d="M16 6V4"/><circle cx="12" cy="16" r="1.5"/></svg>',
			'desc'    => __( 'C42 licensed septic and sanitation specialists. Inspections, diagnostics, tank pumping, repairs, and full system replacements.', 'bmg-theme' ),
			'bullets' => array(
				__( 'C42 licensed contractor', 'bmg-theme' ),
				__( 'Inspections &amp; diagnostics', 'bmg-theme' ),
				__( 'Repairs &amp; replacements', 'bmg-theme' ),
			),
			'link'    => '/services/septic-sanitation/',
		),
		array(
			'slug'    => 'new-construction-plumbing',
			'title'   => __( 'New Construction Plumbing', 'bmg-theme' ),
			'icon'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-6h6v6"/><path d="M9 9h.01"/><path d="M15 9h.01"/><path d="M9 13h.01"/><path d="M15 13h.01"/></svg>',
			'desc'    => __( 'Ground-up plumbing for new builds — slab rough-in to final fixture trim. Every phase handled to code.', 'bmg-theme' ),
			'bullets' => array(
				__( 'Slab rough-in &amp; underground', 'bmg-theme' ),
				__( 'Top-out &amp; trim', 'bmg-theme' ),
				__( 'Builder &amp; GC partnerships', 'bmg-theme' ),
			),
			'link'    => '/services/new-construction-plumbing/',
		),
	);
}

/**
 * Return the top 6 homepage services by slug.
 *
 * @return array[] Filtered subset of bmg_get_services().
 */
function bmg_get_homepage_services() {
	$homepage_slugs = array(
		'hydro-jetting',
		'drain-cleaning',
		'water-heater-services',
		'leak-detection',
		'gas-line-repair',
		'emergency-plumbing',
	);

	$all      = bmg_get_services();
	$filtered = array();

	foreach ( $all as $service ) {
		if ( in_array( $service['slug'], $homepage_slugs, true ) ) {
			$filtered[] = $service;
		}
	}

	return $filtered;
}
