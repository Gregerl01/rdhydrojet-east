<?php
/**
 * Set Rank Math SEO titles and descriptions for all 150 service+city combo pages.
 *
 * Run via: wp eval-file /path/to/set-combo-seo-meta.php --path=/path/to/wp
 *
 * @package bmg-theme
 */

// Inline data — do not require_once (scope issue in wp eval-file).
$rdh_services = array(
	'hydro-jetting' => array(
		'label'   => 'Hydro Jetting',
		'tagline' => 'high-pressure drain and sewer clearing',
	),
	'drain-sewer-repair' => array(
		'label'   => 'Drain & Sewer Repair',
		'tagline' => 'trenchless and traditional drain repair',
	),
	'water-heater-services' => array(
		'label'   => 'Water Heater Services',
		'tagline' => 'water heater installation, repair, and replacement',
	),
	'leak-detection' => array(
		'label'   => 'Leak Detection',
		'tagline' => 'non-invasive leak location and repair',
	),
	'gas-line-repair' => array(
		'label'   => 'Gas Line Repair',
		'tagline' => 'licensed gas line service and installation',
	),
	'toilet-repair' => array(
		'label'   => 'Toilet Repair',
		'tagline' => 'fast toilet repair and replacement',
	),
	'emergency-plumbing' => array(
		'label'   => 'Emergency Plumbing',
		'tagline' => '24/7 emergency plumbing response',
	),
	'repiping' => array(
		'label'   => 'Repiping',
		'tagline' => 'whole-home and commercial repiping',
	),
	'septic-sanitation' => array(
		'label'   => 'Septic & Sanitation',
		'tagline' => 'C42-licensed septic service',
	),
	'new-construction-plumbing' => array(
		'label'   => 'New Construction Plumbing',
		'tagline' => 'ground-up plumbing for new builds',
	),
);

$rdh_cities = array(
	'el-cajon'         => array( 'label' => 'El Cajon',         'county' => 'East San Diego County' ),
	'santee'           => array( 'label' => 'Santee',           'county' => 'East San Diego County' ),
	'lakeside'         => array( 'label' => 'Lakeside',         'county' => 'East San Diego County' ),
	'alpine'           => array( 'label' => 'Alpine',           'county' => 'East San Diego County' ),
	'la-mesa'          => array( 'label' => 'La Mesa',          'county' => 'East San Diego County' ),
	'spring-valley'    => array( 'label' => 'Spring Valley',    'county' => 'East San Diego County' ),
	'lemon-grove'      => array( 'label' => 'Lemon Grove',      'county' => 'East San Diego County' ),
	'ramona'           => array( 'label' => 'Ramona',           'county' => 'East San Diego County' ),
	'jamul'            => array( 'label' => 'Jamul',            'county' => 'East San Diego County' ),
	'rancho-san-diego' => array( 'label' => 'Rancho San Diego', 'county' => 'East San Diego County' ),
	'casa-de-oro'      => array( 'label' => 'Casa de Oro',      'county' => 'East San Diego County' ),
	'blossom-valley'   => array( 'label' => 'Blossom Valley',   'county' => 'East San Diego County' ),
	'harbison-canyon'  => array( 'label' => 'Harbison Canyon',  'county' => 'East San Diego County' ),
	'flinn-springs'    => array( 'label' => 'Flinn Springs',    'county' => 'East San Diego County' ),
	'dehesa'           => array( 'label' => 'Dehesa',           'county' => 'East San Diego County' ),
);

$updated   = 0;
$not_found = 0;

foreach ( $rdh_services as $service_key => $service ) {
	foreach ( $rdh_cities as $city_key => $city ) {

		$slug  = $service_key . '-' . $city_key;
		$title = $service['label'] . ' in ' . $city['label'] . ' CA | RD Hydrojet';

		if ( 'emergency-plumbing' === $service_key ) {
			$desc = '24/7 emergency plumbing in ' . $city['label'] . ', CA. Burst pipes, sewage backups, and flooding handled fast by RD Hydrojet. Call 619-571-1777 anytime.';
		} elseif ( 'septic-sanitation' === $service_key ) {
			$desc = 'C42-licensed septic service in ' . $city['label'] . ', CA. RD Hydrojet provides septic pumping, inspection, repair, and installation. Call 619-571-1777.';
		} elseif ( 'repiping' === $service_key ) {
			$desc = 'Whole-home repiping in ' . $city['label'] . ', CA. RD Hydrojet replaces failing pipes with PEX or copper, fully permitted and inspected. Call 619-571-1777.';
		} else {
			$desc = 'RD Hydrojet provides ' . $service['tagline'] . ' in ' . $city['label'] . ', CA. Licensed and insured. Serving ' . $city['county'] . '. Call 619-571-1777.';
		}

		$posts = get_posts( array(
			'name'           => $slug,
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
		) );

		if ( empty( $posts ) ) {
			echo 'NOT FOUND: ' . $slug . "\n";
			$not_found++;
			continue;
		}

		$post_id = $posts[0]->ID;
		update_post_meta( $post_id, 'rank_math_title',       $title );
		update_post_meta( $post_id, 'rank_math_description', $desc );
		$updated++;
	}
}

echo "Complete: {$updated} updated, {$not_found} not found.\n";
