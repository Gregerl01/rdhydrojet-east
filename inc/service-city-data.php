<?php
/**
 * Service + City Combo Data
 *
 * Data arrays for the 150 service+city combo pages.
 * Used by page-service-city.php template.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$rdh_services = array(
	'hydro-jetting' => array(
		'label'       => 'Hydro Jetting',
		'tagline'     => 'High-pressure drain and sewer clearing',
		'description' => 'Industrial-grade hydro jetting removes grease, scale, roots, and debris other methods leave behind. Safe for all pipe types and effective on the toughest blockages in East San Diego County.',
		'included'    => array(
			'Main line hydro jetting',
			'Lateral line clearing',
			'Pre-jetting camera inspection',
			'Post-jetting flush verification',
			'Written service report',
		),
	),
	'drain-sewer-repair' => array(
		'label'       => 'Drain & Sewer Repair',
		'tagline'     => 'Trenchless and traditional drain repair',
		'description' => 'From slow drains to full line collapses, we diagnose and repair with minimal disruption to your property. East San Diego County homes and businesses rely on us for fast, lasting drain and sewer solutions.',
		'included'    => array(
			'Video camera inspection',
			'Trenchless pipe lining',
			'Pipe bursting',
			'Spot repairs',
			'Root intrusion removal',
		),
	),
	'water-heater-services' => array(
		'label'       => 'Water Heater Services',
		'tagline'     => 'Installation, repair, and replacement',
		'description' => 'Tank and tankless water heater service for residential and commercial properties across East San Diego County. Same-day service available on most calls.',
		'included'    => array(
			'Tank and tankless installation',
			'Same-day repairs',
			'Flush and descaling',
			'Anode rod replacement',
			'Permit-ready installation',
		),
	),
	'leak-detection' => array(
		'label'       => 'Leak Detection',
		'tagline'     => 'Non-invasive leak location and repair',
		'description' => 'Advanced acoustic and thermal detection finds hidden leaks under slabs, behind walls, and underground without unnecessary demolition. Protecting East San Diego County homes from water damage.',
		'included'    => array(
			'Acoustic leak detection',
			'Thermal imaging',
			'Slab leak location',
			'Underground line detection',
			'Repair estimate on-site',
		),
	),
	'gas-line-repair' => array(
		'label'       => 'Gas Line Repair',
		'tagline'     => 'Licensed gas line service and installation',
		'description' => 'Certified gas line repair and installation for residential and commercial properties in East San Diego County. Safety-first approach on every job, every time.',
		'included'    => array(
			'Gas line inspection',
			'Leak detection and repair',
			'New line installation',
			'Pressure testing',
			'City permit coordination',
		),
	),
	'toilet-repair' => array(
		'label'       => 'Toilet Repair',
		'tagline'     => 'Fast toilet repair and replacement',
		'description' => 'Running toilets, clogs, wax ring failures, and full replacements handled same-day in most cases across East San Diego County.',
		'included'    => array(
			'Flapper and fill valve replacement',
			'Wax ring replacement',
			'Toilet installation',
			'Slow drain clearing',
			'Leak diagnosis',
		),
	),
	'emergency-plumbing' => array(
		'label'       => 'Emergency Plumbing',
		'tagline'     => '24/7 emergency response across East SD',
		'description' => 'Burst pipes, sewage backups, and flooding do not wait for business hours. Neither do we. RD Hydrojet provides 24/7 emergency plumbing response across East San Diego County.',
		'included'    => array(
			'24/7 dispatch',
			'Burst pipe repair',
			'Sewage backup clearing',
			'Flood mitigation',
			'Water shutoff assistance',
		),
	),
	'repiping' => array(
		'label'       => 'Repiping',
		'tagline'     => 'Whole-home and commercial repiping',
		'description' => 'Old galvanized or failing copper lines replaced with PEX or copper — fully permitted and inspected. Restore water pressure and peace of mind for East San Diego County properties.',
		'included'    => array(
			'Whole-home repipe assessment',
			'PEX and copper repiping',
			'Water pressure restoration',
			'Permit and inspection coordination',
			'Wall patching after completion',
		),
	),
	'septic-sanitation' => array(
		'label'       => 'Septic & Sanitation',
		'tagline'     => 'C42-licensed septic service',
		'description' => 'One of the few C42-licensed septic contractors in East San Diego County. Full septic inspection, pumping, repair, and new system installation handled by certified professionals.',
		'included'    => array(
			'Septic pumping',
			'System inspection and certification',
			'Leach field evaluation',
			'New system design and installation',
			'County permit coordination',
		),
	),
	'new-construction-plumbing' => array(
		'label'       => 'New Construction Plumbing',
		'tagline'     => 'Ground-up plumbing for new builds',
		'description' => 'Complete plumbing rough-in and finish for residential and commercial new construction across East San Diego County. On-schedule, permitted, and inspected.',
		'included'    => array(
			'Rough-in plumbing',
			'Fixture installation',
			'Water and sewer connections',
			'Gas line rough-in',
			'Final inspection coordination',
		),
	),
);

$rdh_cities = array(
	'el-cajon'         => array( 'label' => 'El Cajon',         'county' => 'East San Diego County', 'nearby' => 'Santee, La Mesa, and Spring Valley' ),
	'santee'           => array( 'label' => 'Santee',           'county' => 'East San Diego County', 'nearby' => 'El Cajon, Lakeside, and Blossom Valley' ),
	'lakeside'         => array( 'label' => 'Lakeside',         'county' => 'East San Diego County', 'nearby' => 'Santee, El Cajon, and Harbison Canyon' ),
	'alpine'           => array( 'label' => 'Alpine',           'county' => 'East San Diego County', 'nearby' => 'Jamul, Dehesa, and El Cajon' ),
	'la-mesa'          => array( 'label' => 'La Mesa',          'county' => 'East San Diego County', 'nearby' => 'El Cajon, Lemon Grove, and Casa de Oro' ),
	'spring-valley'    => array( 'label' => 'Spring Valley',    'county' => 'East San Diego County', 'nearby' => 'La Mesa, El Cajon, and Lemon Grove' ),
	'lemon-grove'      => array( 'label' => 'Lemon Grove',      'county' => 'East San Diego County', 'nearby' => 'La Mesa, Spring Valley, and Casa de Oro' ),
	'ramona'           => array( 'label' => 'Ramona',           'county' => 'East San Diego County', 'nearby' => 'Lakeside, Alpine, and Flinn Springs' ),
	'jamul'            => array( 'label' => 'Jamul',            'county' => 'East San Diego County', 'nearby' => 'Alpine, Rancho San Diego, and Dehesa' ),
	'rancho-san-diego' => array( 'label' => 'Rancho San Diego', 'county' => 'East San Diego County', 'nearby' => 'El Cajon, Jamul, and Casa de Oro' ),
	'casa-de-oro'      => array( 'label' => 'Casa de Oro',      'county' => 'East San Diego County', 'nearby' => 'La Mesa, Lemon Grove, and Spring Valley' ),
	'blossom-valley'   => array( 'label' => 'Blossom Valley',   'county' => 'East San Diego County', 'nearby' => 'Santee, El Cajon, and Lakeside' ),
	'harbison-canyon'  => array( 'label' => 'Harbison Canyon',  'county' => 'East San Diego County', 'nearby' => 'Lakeside, El Cajon, and Alpine' ),
	'flinn-springs'    => array( 'label' => 'Flinn Springs',    'county' => 'East San Diego County', 'nearby' => 'Lakeside, Ramona, and El Cajon' ),
	'dehesa'           => array( 'label' => 'Dehesa',           'county' => 'East San Diego County', 'nearby' => 'Alpine, Jamul, and El Cajon' ),
);
