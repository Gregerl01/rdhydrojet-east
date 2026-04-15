<?php
/**
 * Bulk create 150 service+city combo pages.
 * Run via: wp eval-file scripts/create-service-city-pages.php
 */

// Inline the data arrays since require_once scoping is tricky in eval-file.
$rdh_services = array(
	'hydro-jetting'             => array( 'label' => 'Hydro Jetting' ),
	'drain-sewer-repair'        => array( 'label' => 'Drain & Sewer Repair' ),
	'water-heater-services'     => array( 'label' => 'Water Heater Services' ),
	'leak-detection'            => array( 'label' => 'Leak Detection' ),
	'gas-line-repair'           => array( 'label' => 'Gas Line Repair' ),
	'toilet-repair'             => array( 'label' => 'Toilet Repair' ),
	'emergency-plumbing'        => array( 'label' => 'Emergency Plumbing' ),
	'repiping'                  => array( 'label' => 'Repiping' ),
	'septic-sanitation'         => array( 'label' => 'Septic & Sanitation' ),
	'new-construction-plumbing' => array( 'label' => 'New Construction Plumbing' ),
);

$rdh_cities = array(
	'el-cajon'         => array( 'label' => 'El Cajon' ),
	'santee'           => array( 'label' => 'Santee' ),
	'lakeside'         => array( 'label' => 'Lakeside' ),
	'alpine'           => array( 'label' => 'Alpine' ),
	'la-mesa'          => array( 'label' => 'La Mesa' ),
	'spring-valley'    => array( 'label' => 'Spring Valley' ),
	'lemon-grove'      => array( 'label' => 'Lemon Grove' ),
	'ramona'           => array( 'label' => 'Ramona' ),
	'jamul'            => array( 'label' => 'Jamul' ),
	'rancho-san-diego' => array( 'label' => 'Rancho San Diego' ),
	'casa-de-oro'      => array( 'label' => 'Casa de Oro' ),
	'blossom-valley'   => array( 'label' => 'Blossom Valley' ),
	'harbison-canyon'  => array( 'label' => 'Harbison Canyon' ),
	'flinn-springs'    => array( 'label' => 'Flinn Springs' ),
	'dehesa'           => array( 'label' => 'Dehesa' ),
);

$created = 0;
$skipped = 0;

foreach ( $rdh_services as $service_key => $service_data ) {
	foreach ( $rdh_cities as $city_key => $city_data ) {
		$slug  = $service_key . '-' . $city_key;
		$title = $service_data['label'] . ' in ' . $city_data['label'];

		$existing = get_posts( array(
			'name'           => $slug,
			'post_type'      => 'page',
			'post_status'    => 'any',
			'posts_per_page' => 1,
		) );

		if ( ! empty( $existing ) ) {
			$skipped++;
			continue;
		}

		$post_id = wp_insert_post( array(
			'post_type'     => 'page',
			'post_status'   => 'publish',
			'post_title'    => $title,
			'post_name'     => $slug,
			'page_template' => 'page-service-city.php',
		) );

		if ( is_wp_error( $post_id ) ) {
			echo "ERROR: {$slug}\n";
		} else {
			$created++;
		}
	}
}

echo "Created: {$created}, Skipped: {$skipped}\n";

// Flush rewrite rules.
flush_rewrite_rules();
echo "Rewrite rules flushed. Done.\n";
