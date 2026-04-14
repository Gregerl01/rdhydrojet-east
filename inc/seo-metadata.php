<?php
/**
 * SEO Metadata — Title Tags & Meta Descriptions
 *
 * Programmatic defaults matching CONTENT.md Section 12.
 * Rank Math (or any SEO plugin) takes priority when configured;
 * these serve as fallbacks for pages without plugin-level overrides.
 *
 * @package starter-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Map page template slugs to SEO data.
 *
 * @return array Keyed by template file basename (without .php).
 */
function bmg_seo_page_data() {
	return array(
		'front-page'    => array(
			'title'       => __( 'RD Hydrojet Plumbing | Licensed Plumber in East San Diego County', 'bmg-theme' ),
			'description' => __( 'Licensed plumber serving East San Diego County. Hydro jetting, drain repair, water heaters, emergency service. Serving El Cajon, La Mesa, Santee & East County. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-about'    => array(
			'title'       => __( 'About RD Hydrojet Plumbing | Licensed East San Diego Plumber Since 2003', 'bmg-theme' ),
			'description' => __( 'Licensed plumbing and hydro jetting for East San Diego County. Serving El Cajon, La Mesa, Santee, and all of East County since 2003. CA CSLB #1076642.', 'bmg-theme' ),
		),
		'page-plans'    => array(
			'title'       => __( 'Service Plans | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Plumbing maintenance plans for East San Diego County homes. Preventive service, priority scheduling, and member discounts.', 'bmg-theme' ),
		),
		'page-services' => array(
			'title'       => __( 'Plumbing Services in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Full-service plumbing for East San Diego County. Hydro jetting, drain repair, water heaters, gas lines, emergency service. Licensed (CA #1076642). Call (619) 571-1777.', 'bmg-theme' ),
		),
		// Service detail pages — keyed by slug (basename page-service-detail + slug).
		'page-service-detail:hydro-jetting' => array(
			'title'       => __( 'Hydro Jetting | East County Plumber | RD Hydrojet', 'bmg-theme' ),
			'description' => __( 'Commercial-grade hydro jetting and drain cleaning. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-detail:drain-cleaning' => array(
			'title'       => __( 'Drain &amp; Sewer Repair | East County Plumber | RD Hydrojet', 'bmg-theme' ),
			'description' => __( 'Camera-guided drain and sewer line repair. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-detail:water-heater-services' => array(
			'title'       => __( 'Water Heater Services | East County Plumber | RD Hydrojet', 'bmg-theme' ),
			'description' => __( 'Tank and tankless water heater installation, repair, and replacement. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-detail:leak-detection' => array(
			'title'       => __( 'Leak Detection | East County Plumber | RD Hydrojet', 'bmg-theme' ),
			'description' => __( 'Non-invasive electronic and thermal leak detection for slab and hidden pipe leaks. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-detail:gas-line-repair' => array(
			'title'       => __( 'Gas Line Repair | East County Plumber | RD Hydrojet', 'bmg-theme' ),
			'description' => __( 'Certified gas plumbers for installation, repair, and code inspection. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-detail:toilet-repair' => array(
			'title'       => __( 'Toilet Repair | East County Plumber | RD Hydrojet', 'bmg-theme' ),
			'description' => __( 'Running toilets, broken flanges, and full replacements. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-detail:emergency-plumbing' => array(
			'title'       => __( '24/7 Emergency Plumber | East County | RD Hydrojet', 'bmg-theme' ),
			'description' => __( '24/7 emergency plumbing across East County. Burst pipes, sewer backups, gas leaks. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-detail:repiping' => array(
			'title'       => __( 'Whole-Home Repiping | East County Plumber | RD Hydrojet', 'bmg-theme' ),
			'description' => __( 'Replace aging galvanized and polybutylene pipes with copper or PEX. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-detail:septic-sanitation' => array(
			'title'       => __( 'Septic &amp; Sanitation | East County Plumber | RD Hydrojet', 'bmg-theme' ),
			'description' => __( 'C-42 licensed septic system inspections, repairs, and installations. Serving Lakeside, Alpine, El Cajon & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-detail:new-construction-plumbing' => array(
			'title'       => __( 'New Construction Plumbing | East County | RD Hydrojet', 'bmg-theme' ),
			'description' => __( 'Licensed new construction plumbing for East San Diego County builders and homeowners. Rough-in, top-out, trim, and inspection. CA CSLB #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		// Service area pages — keyed by slug (basename page-service-area + slug).
		'page-service-area:plumber-in-el-cajon' => array(
			'title'       => __( 'Plumber in El Cajon, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in El Cajon. Hydro jetting, drain repair, water heaters, emergency service. Serving El Cajon and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-la-mesa' => array(
			'title'       => __( 'Plumber in La Mesa, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in La Mesa. Hydro jetting, drain repair, water heaters, emergency service. Serving La Mesa and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-santee' => array(
			'title'       => __( 'Plumber in Santee, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Santee. Hydro jetting, drain repair, water heaters, emergency service. Serving Santee and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-lakeside' => array(
			'title'       => __( 'Plumber in Lakeside, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Lakeside. Hydro jetting, drain repair, water heaters, septic service. Serving Lakeside and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-spring-valley' => array(
			'title'       => __( 'Plumber in Spring Valley, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Spring Valley. Hydro jetting, drain repair, water heaters, emergency service. Serving Spring Valley and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-lemon-grove' => array(
			'title'       => __( 'Plumber in Lemon Grove, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Lemon Grove. Hydro jetting, drain repair, water heaters, repiping. Serving Lemon Grove and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-rancho-san-diego' => array(
			'title'       => __( 'Plumber in Rancho San Diego, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Rancho San Diego. Hydro jetting, drain repair, water heaters, leak detection. Serving Rancho San Diego and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-alpine' => array(
			'title'       => __( 'Plumber in Alpine, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Alpine. Hydro jetting, septic service, well water plumbing, emergency service. Serving Alpine and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-san-carlos' => array(
			'title'       => __( 'Plumber in San Carlos, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in San Carlos. Hydro jetting, drain repair, water heaters, repiping. Serving San Carlos and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-del-cerro' => array(
			'title'       => __( 'Plumber in Del Cerro, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Del Cerro. Leak detection, drain repair, hillside drainage, emergency service. Serving Del Cerro and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-college-area' => array(
			'title'       => __( 'Plumber in College Area, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in College Area near SDSU. Hydro jetting, drain repair, water heaters, landlord services. Serving College Area and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-east-san-diego' => array(
			'title'       => __( 'Plumber in East San Diego, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in East San Diego. Hydro jetting, drain repair, repiping, emergency service. Serving City Heights, Oak Park and East San Diego. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-ramona' => array(
			'title'       => __( 'Plumber in Ramona, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Ramona. Septic systems, well water plumbing, hydro jetting, emergency service. Serving Ramona and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-poway' => array(
			'title'       => __( 'Plumber in Poway, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Poway. Hydro jetting, drain repair, water heaters, septic service. Serving Poway and East San Diego County. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-service-area:plumber-in-pine-valley' => array(
			'title'       => __( 'Plumber in Pine Valley, CA | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Licensed plumber in Pine Valley. Freeze protection, septic systems, well water plumbing, emergency service. Serving Pine Valley and backcountry. CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'home'          => array(
			'title'       => __( 'Plumbing Blog | Tips & News | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Plumbing tips, maintenance advice, and local news for East San Diego County homeowners. From the licensed pros at RD Hydrojet Plumbing.', 'bmg-theme' ),
		),
		'page-enroll'   => array(
			'title'       => __( 'Enroll | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Enroll in a plumbing maintenance plan with RD Hydrojet Plumbing. Serving East San Diego County.', 'bmg-theme' ),
		),
		'page-faq'      => array(
			'title'       => __( 'Plumbing FAQ | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Common plumbing questions answered by RD Hydrojet Plumbing. Hydro jetting, drain repair, water heaters, and more. Serving East San Diego County.', 'bmg-theme' ),
		),
		'page-contact'  => array(
			'title'       => __( 'Contact RD Hydrojet Plumbing | East San Diego County Plumber', 'bmg-theme' ),
			'description' => __( 'Contact RD Hydrojet Plumbing for a free estimate. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (619) 571-1777.', 'bmg-theme' ),
		),
		'page-privacy'  => array(
			'title'       => __( 'Privacy Policy | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Privacy policy for RD Hydrojet Plumbing & Drain Inc. Learn how we collect, use, and protect your information.', 'bmg-theme' ),
		),
		'page-terms'    => array(
			'title'       => __( 'Terms of Use | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Terms of use for the RD Hydrojet Plumbing website. Review the terms governing your use of our site and services.', 'bmg-theme' ),
		),
	);
}

/**
 * Identify the current page's SEO key.
 *
 * @return string|false SEO key or false if not a mapped page.
 */
function bmg_get_current_seo_key() {
	if ( is_front_page() ) {
		return 'front-page';
	}

	// Blog archive (Posts Page).
	if ( is_home() ) {
		return 'home';
	}

	if ( is_page() ) {
		$template = get_page_template_slug();
		if ( $template ) {
			// Template slug is like "page-templates/page-about.php".
			$basename = basename( $template, '.php' );

			// Shared templates — key by slug for per-page SEO.
			if ( in_array( $basename, array( 'page-service-detail', 'page-service-area' ), true ) ) {
				global $post;
				if ( isset( $post->post_name ) && $post->post_name ) {
					$composite = $basename . ':' . $post->post_name;
					$map       = bmg_seo_page_data();
					if ( isset( $map[ $composite ] ) ) {
						return $composite;
					}
				}
			}

			return $basename;
		}
	}

	return false;
}

/**
 * Filter document title parts for mapped pages.
 *
 * Replaces the default "Page Title – Site Name" with our CONTENT.md title.
 * Yields to Rank Math: if Rank Math sets a custom title, it runs at
 * priority 15 and overrides this.
 *
 * @param array $title_parts Title parts array.
 * @return array
 */
function bmg_seo_document_title( $title_parts ) {
	// Skip if an SEO plugin is handling titles.
	if ( class_exists( 'RankMath' ) || defined( 'WPSEO_VERSION' ) ) {
		return $title_parts;
	}

	$key = bmg_get_current_seo_key();
	if ( ! $key ) {
		return $title_parts;
	}

	$seo_data = bmg_seo_page_data();
	if ( isset( $seo_data[ $key ]['title'] ) ) {
		// Set the full title and remove the site name separator.
		$title_parts['title'] = $seo_data[ $key ]['title'];
		unset( $title_parts['site'] );
		unset( $title_parts['tagline'] );
	}

	return $title_parts;
}
add_filter( 'document_title_parts', 'bmg_seo_document_title' );

/**
 * Output meta description for mapped pages.
 *
 * Skips output if Rank Math or Yoast is active (they handle their own).
 */
function bmg_seo_meta_description() {
	// Skip if an SEO plugin is handling meta descriptions.
	if ( class_exists( 'RankMath' ) || defined( 'WPSEO_VERSION' ) ) {
		return;
	}

	$key = bmg_get_current_seo_key();
	if ( ! $key ) {
		return;
	}

	$seo_data = bmg_seo_page_data();
	if ( isset( $seo_data[ $key ]['description'] ) ) {
		echo '<meta name="description" content="' . esc_attr( $seo_data[ $key ]['description'] ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'bmg_seo_meta_description', 1 );
