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
			'title'       => __( '[Business Name] — [Industry Tagline]', 'bmg-theme' ),
			'description' => __( '[Homepage meta description — summarize services, location, and value proposition.]', 'bmg-theme' ),
		),
		'page-about'    => array(
			'title'       => __( 'About RD Hydrojet Plumbing | Licensed East San Diego Plumber Since 2003', 'bmg-theme' ),
			'description' => __( 'Licensed plumbing and hydro jetting for East San Diego County. Serving El Cajon, La Mesa, Santee, and all of East County since 2003. CA CSLB #1076642.', 'bmg-theme' ),
		),
		'page-plans'    => array(
			'title'       => __( 'Plans — [Business Name]', 'bmg-theme' ),
			'description' => __( '[Plans page meta description — summarize plan tiers and key benefits.]', 'bmg-theme' ),
		),
		'page-services' => array(
			'title'       => __( 'Plumbing Services in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Full-service plumbing for East San Diego County. Hydro jetting, drain repair, water heaters, gas lines, emergency service. Licensed (CA #1076642). Call (951) 600-0459.', 'bmg-theme' ),
		),
		// Service detail pages — keyed by slug (basename page-service-detail + slug).
		'page-service-detail:hydro-jetting' => array(
			'title'       => __( 'Hydro Jetting in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Commercial-grade hydro jetting and drain cleaning. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (951) 600-0459.', 'bmg-theme' ),
		),
		'page-service-detail:drain-cleaning' => array(
			'title'       => __( 'Drain &amp; Sewer Repair in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Camera-guided drain and sewer line repair. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (951) 600-0459.', 'bmg-theme' ),
		),
		'page-service-detail:water-heater-services' => array(
			'title'       => __( 'Water Heater Services in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Tank and tankless water heater installation, repair, and replacement. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (951) 600-0459.', 'bmg-theme' ),
		),
		'page-service-detail:leak-detection' => array(
			'title'       => __( 'Leak Detection in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Non-invasive electronic and thermal leak detection for slab and hidden pipe leaks. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (951) 600-0459.', 'bmg-theme' ),
		),
		'page-service-detail:gas-line-repair' => array(
			'title'       => __( 'Gas Line Installation &amp; Repair in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Certified gas plumbers for installation, repair, and code inspection. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (951) 600-0459.', 'bmg-theme' ),
		),
		'page-service-detail:toilet-repair' => array(
			'title'       => __( 'Toilet Repair &amp; Installation in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Running toilets, broken flanges, and full replacements. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (951) 600-0459.', 'bmg-theme' ),
		),
		'page-service-detail:emergency-plumbing' => array(
			'title'       => __( '24/7 Emergency Plumber in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( '24/7 emergency plumbing across East County. Burst pipes, sewer backups, gas leaks. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (951) 600-0459.', 'bmg-theme' ),
		),
		'page-service-detail:repiping' => array(
			'title'       => __( 'Whole-Home Repiping in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'Replace aging galvanized and polybutylene pipes with copper or PEX. Serving El Cajon, La Mesa, Santee & East County. Licensed CA #1076642. Call (951) 600-0459.', 'bmg-theme' ),
		),
		'page-service-detail:septic-sanitation' => array(
			'title'       => __( 'Septic &amp; Sanitation Services in East San Diego County | RD Hydrojet Plumbing', 'bmg-theme' ),
			'description' => __( 'C-42 licensed septic system inspections, repairs, and installations. Serving Lakeside, Alpine, El Cajon & East County. Licensed CA #1076642. Call (951) 600-0459.', 'bmg-theme' ),
		),
		'page-enroll'   => array(
			'title'       => __( 'Enroll — [Business Name]', 'bmg-theme' ),
			'description' => __( '[Enrollment page meta description — describe the enrollment process.]', 'bmg-theme' ),
		),
		'page-faq'      => array(
			'title'       => __( 'FAQ — [Business Name]', 'bmg-theme' ),
			'description' => __( '[FAQ page meta description — summarize common questions covered.]', 'bmg-theme' ),
		),
		'page-contact'  => array(
			'title'       => __( 'Contact — [Business Name]', 'bmg-theme' ),
			'description' => __( '[Contact page meta description — mention contact methods and location.]', 'bmg-theme' ),
		),
		'page-privacy'  => array(
			'title'       => __( 'Privacy Policy — [Business Name]', 'bmg-theme' ),
			'description' => __( '[Privacy page meta description — mention privacy practices and compliance.]', 'bmg-theme' ),
		),
		'page-terms'    => array(
			'title'       => __( 'Terms of Use — [Business Name]', 'bmg-theme' ),
			'description' => __( '[Terms page meta description — mention terms of use and disclaimers.]', 'bmg-theme' ),
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

	if ( is_page() ) {
		$template = get_page_template_slug();
		if ( $template ) {
			// Template slug is like "page-templates/page-about.php".
			$basename = basename( $template, '.php' );

			// Service detail pages share a template — key by slug for per-page SEO.
			if ( 'page-service-detail' === $basename ) {
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
