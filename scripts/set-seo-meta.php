<?php
/**
 * Set Rank Math SEO titles and meta descriptions for all pages and posts.
 *
 * Run via: wp eval-file /path/to/scripts/set-seo-meta.php --path=/path/to/wp
 *
 * @package bmg-theme
 */

$pages = [

	// CORE PAGES
	[
		'slug'        => 'about',
		'post_type'   => 'page',
		'title'       => 'About RD Hydrojet | East San Diego Plumbing Experts',
		'description' => 'RD Hydrojet Plumbing & Drain serves East San Diego County with licensed, reliable plumbing and drain services. C42 certified septic contractor. Call 619-571-1777.',
	],
	[
		'slug'        => 'contact',
		'post_type'   => 'page',
		'title'       => 'Contact RD Hydrojet | Plumber East San Diego County',
		'description' => 'Contact RD Hydrojet Plumbing & Drain for drain cleaning, hydro jetting, leak detection, and emergency plumbing in East San Diego County. Call 619-571-1777.',
	],
	[
		'slug'        => 'blog',
		'post_type'   => 'page',
		'title'       => 'Plumbing Tips & Guides | RD Hydrojet East San Diego',
		'description' => 'Plumbing tips, drain maintenance guides, and local advice from the East San Diego County experts at RD Hydrojet Plumbing & Drain. Call 619-571-1777.',
	],

	// SERVICES HUB
	[
		'slug'        => 'services',
		'post_type'   => 'page',
		'title'       => 'Plumbing Services East San Diego County | RD Hydrojet',
		'description' => 'Full-service plumbing for East San Diego County — hydro jetting, drain repair, water heater service, leak detection, septic, repiping, and more. Call 619-571-1777.',
	],

	// SERVICE DETAIL PAGES
	[
		'slug'        => 'hydro-jetting',
		'post_type'   => 'page',
		'title'       => 'Hydro Jetting East San Diego | RD Hydrojet Plumbing',
		'description' => 'Professional hydro jetting for East San Diego County. High-pressure drain and sewer clearing for residential and commercial properties. Call 619-571-1777.',
	],
	[
		'slug'        => 'drain-cleaning',
		'post_type'   => 'page',
		'title'       => 'Drain & Sewer Repair East San Diego | RD Hydrojet',
		'description' => 'Drain and sewer repair for East San Diego County. Trenchless lining, root removal, and full line replacement. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'water-heater-services',
		'post_type'   => 'page',
		'title'       => 'Water Heater Services East San Diego | RD Hydrojet',
		'description' => 'Tank and tankless water heater installation, repair, and replacement in East San Diego County. Same-day service available. Licensed plumber. Call 619-571-1777.',
	],
	[
		'slug'        => 'leak-detection',
		'post_type'   => 'page',
		'title'       => 'Leak Detection East San Diego County | RD Hydrojet',
		'description' => 'Leak detection for East San Diego County. Acoustic and thermal imaging finds slab leaks, underground leaks, and hidden pipe failures. Call 619-571-1777.',
	],
	[
		'slug'        => 'gas-line-repair',
		'post_type'   => 'page',
		'title'       => 'Gas Line Repair East San Diego County | RD Hydrojet',
		'description' => 'Licensed gas line repair and installation for East San Diego County. Safety-first approach on every job. Residential and commercial. Call 619-571-1777.',
	],
	[
		'slug'        => 'emergency-plumbing',
		'post_type'   => 'page',
		'title'       => '24/7 Emergency Plumber East San Diego | RD Hydrojet',
		'description' => '24/7 emergency plumbing for East San Diego County. Burst pipes, sewage backups, and flooding handled fast. Licensed plumber on call. Call 619-571-1777.',
	],
	[
		'slug'        => 'toilet-repair',
		'post_type'   => 'page',
		'title'       => 'Toilet Repair East San Diego County | RD Hydrojet',
		'description' => 'Toilet repair and replacement in East San Diego County. Running toilets, clogs, wax ring failures, and full installations. Same-day service. Call 619-571-1777.',
	],
	[
		'slug'        => 'septic-sanitation',
		'post_type'   => 'page',
		'title'       => 'Septic Service East San Diego | C42 Licensed | RD Hydrojet',
		'description' => 'C42-licensed septic service in East San Diego County. Pumping, inspection, repair, and new system installation. Call RD Hydrojet at 619-571-1777.',
	],
	[
		'slug'        => 'repiping',
		'post_type'   => 'page',
		'title'       => 'Whole-Home Repiping East San Diego | RD Hydrojet',
		'description' => 'Whole-home repiping for East San Diego County. PEX and copper, fully permitted. Restore water pressure and eliminate failing pipes. Call 619-571-1777.',
	],
	[
		'slug'        => 'new-construction-plumbing',
		'post_type'   => 'page',
		'title'       => 'New Construction Plumbing East San Diego | RD Hydrojet',
		'description' => 'New construction plumbing for East San Diego County. Rough-in, fixture installation, water and sewer connections, and gas rough-in. Call 619-571-1777.',
	],

	// CITY PAGES
	[
		'slug'        => 'plumber-in-el-cajon',
		'post_type'   => 'page',
		'title'       => 'Plumber in El Cajon CA | Drain & Hydro Jetting | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in El Cajon, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-santee',
		'post_type'   => 'page',
		'title'       => 'Plumber in Santee CA | Drain & Hydro Jetting | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in Santee, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-lakeside',
		'post_type'   => 'page',
		'title'       => 'Plumber in Lakeside CA | Drain & Hydro Jetting | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in Lakeside, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-alpine',
		'post_type'   => 'page',
		'title'       => 'Plumber in Alpine CA | Drain, Septic & Hydro Jetting | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, septic service, and emergency plumbing in Alpine, CA. C42 licensed. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-la-mesa',
		'post_type'   => 'page',
		'title'       => 'Plumber in La Mesa CA | Drain & Hydro Jetting | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in La Mesa, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-spring-valley',
		'post_type'   => 'page',
		'title'       => 'Plumber in Spring Valley CA | Drain & Sewer | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in Spring Valley, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-lemon-grove',
		'post_type'   => 'page',
		'title'       => 'Plumber in Lemon Grove CA | Drain & Sewer | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in Lemon Grove, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-ramona',
		'post_type'   => 'page',
		'title'       => 'Plumber in Ramona CA | Drain & Hydro Jetting | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in Ramona, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-poway',
		'post_type'   => 'page',
		'title'       => 'Plumber in Poway CA | Drain & Hydro Jetting | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in Poway, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-pine-valley',
		'post_type'   => 'page',
		'title'       => 'Plumber in Pine Valley CA | Drain & Sewer | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in Pine Valley, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-east-san-diego',
		'post_type'   => 'page',
		'title'       => 'Plumber in East San Diego CA | RD Hydrojet Plumbing',
		'description' => 'RD Hydrojet serves East San Diego County with hydro jetting, drain repair, leak detection, septic service, and 24/7 emergency plumbing. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-del-cerro',
		'post_type'   => 'page',
		'title'       => 'Plumber in Del Cerro CA | Drain & Sewer | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in Del Cerro, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-college-area',
		'post_type'   => 'page',
		'title'       => 'Plumber in College Area CA | Drain & Sewer | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in the College Area of San Diego, CA. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-rancho-san-diego',
		'post_type'   => 'page',
		'title'       => 'Plumber in Rancho San Diego CA | Drain & Sewer | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in Rancho San Diego, CA. Licensed and insured. Call 619-571-1777.',
	],
	[
		'slug'        => 'plumber-in-san-carlos',
		'post_type'   => 'page',
		'title'       => 'Plumber in San Carlos CA | Drain & Sewer | RD Hydrojet',
		'description' => 'RD Hydrojet provides hydro jetting, drain repair, leak detection, and emergency plumbing in San Carlos, CA. Licensed and insured. Call 619-571-1777.',
	],

	// BLOG POSTS
	[
		'slug'        => 'water-heater-replacement-guide',
		'post_type'   => 'post',
		'title'       => 'Water Heater Replacement Guide for East San Diego Homeowners',
		'description' => 'East San Diego County homeowners guide to water heater replacement. Tank vs tankless, costs, and when to call a plumber. RD Hydrojet — call 619-571-1777.',
	],
	[
		'slug'        => 'cast-iron-pipes-east-san-diego',
		'post_type'   => 'post',
		'title'       => 'Cast Iron Pipes East San Diego County | Homeowner Guide',
		'description' => 'What East San Diego County homeowners should know about cast iron pipes — signs of failure, repair vs replacement, and when to call a licensed plumber.',
	],
	[
		'slug'        => '5-signs-you-need-hydro-jetting',
		'post_type'   => 'post',
		'title'       => '5 Signs You Need Hydro Jetting | RD Hydrojet East San Diego',
		'description' => 'Learn the top 5 warning signs your drains need hydro jetting service. East San Diego County plumbing advice from RD Hydrojet. Call 619-571-1777.',
	],

];

// Loop and update.
foreach ( $pages as $entry ) {
	$args = [
		'name'           => $entry['slug'],
		'post_type'      => $entry['post_type'],
		'post_status'    => 'publish',
		'posts_per_page' => 1,
	];
	$posts = get_posts( $args );
	if ( empty( $posts ) ) {
		echo "NOT FOUND: " . $entry['slug'] . "\n";
		continue;
	}
	$post_id = $posts[0]->ID;
	update_post_meta( $post_id, 'rank_math_title',       $entry['title'] );
	update_post_meta( $post_id, 'rank_math_description', $entry['description'] );
	echo "UPDATED [{$post_id}]: " . $entry['slug'] . "\n";
}
echo "Done.\n";
