<?php
/**
 * Tracking & Analytics Customizer Settings
 *
 * Central place to drop GTM / GA4 / Meta Pixel / Google Ads / CallRail IDs.
 * Empty values = that tag is skipped. Never hardcode tracking IDs in templates.
 *
 * All IDs flow through this one panel so the operator can wire everything
 * without touching PHP.
 *
 * @package starter-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register Tracking Customizer Settings
 */
function bmg_tracking_customizer( $wp_customize ) {

	// ======================================================================
	// Panel: Tracking & Analytics
	// ======================================================================

	$wp_customize->add_panel(
		'bmg_tracking',
		array(
			'title'       => __( 'Tracking & Analytics', 'bmg-theme' ),
			'description' => __( 'Container and pixel IDs for GTM, GA4, Meta, Google Ads, and CallRail. Leave a field blank to disable that tag.', 'bmg-theme' ),
			'priority'    => 115,
		)
	);

	// ======================================================================
	// Section: Google Tag Manager
	// ======================================================================

	$wp_customize->add_section(
		'bmg_section_gtm',
		array(
			'title'       => __( 'Google Tag Manager', 'bmg-theme' ),
			'description' => __( 'Install GTM here and wire GA4, Meta Pixel, and Google Ads tags inside the GTM UI. This is the preferred approach.', 'bmg-theme' ),
			'panel'       => 'bmg_tracking',
		)
	);

	$wp_customize->add_setting(
		'bmg_gtm_id',
		array(
			'default'           => '',
			'sanitize_callback' => 'bmg_sanitize_gtm_id',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'bmg_gtm_id',
		array(
			'label'       => __( 'GTM Container ID', 'bmg-theme' ),
			'description' => __( 'Format: GTM-XXXXXXX. Get this from tagmanager.google.com after creating the container.', 'bmg-theme' ),
			'section'     => 'bmg_section_gtm',
			'type'        => 'text',
		)
	);

	// ======================================================================
	// Section: Direct-embed fallbacks (use ONLY if GTM is not in use)
	// ======================================================================

	$wp_customize->add_section(
		'bmg_section_direct_tags',
		array(
			'title'       => __( 'Direct Embed (fallback)', 'bmg-theme' ),
			'description' => __( 'ONLY fill these if GTM is not installed. If GTM is set above, leave these blank — wire GA4 and the Meta Pixel inside GTM instead.', 'bmg-theme' ),
			'panel'       => 'bmg_tracking',
		)
	);

	// GA4 Measurement ID.
	$wp_customize->add_setting(
		'bmg_ga4_measurement_id',
		array(
			'default'           => '',
			'sanitize_callback' => 'bmg_sanitize_ga4_id',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'bmg_ga4_measurement_id',
		array(
			'label'       => __( 'GA4 Measurement ID', 'bmg-theme' ),
			'description' => __( 'Format: G-XXXXXXXXXX. Leave blank if routing GA4 through GTM.', 'bmg-theme' ),
			'section'     => 'bmg_section_direct_tags',
			'type'        => 'text',
		)
	);

	// Meta Pixel ID.
	$wp_customize->add_setting(
		'bmg_meta_pixel_id',
		array(
			'default'           => '',
			'sanitize_callback' => 'bmg_sanitize_numeric_id',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'bmg_meta_pixel_id',
		array(
			'label'       => __( 'Meta Pixel ID', 'bmg-theme' ),
			'description' => __( '15-16 digit number from Meta Events Manager. Leave blank if routing Pixel through GTM.', 'bmg-theme' ),
			'section'     => 'bmg_section_direct_tags',
			'type'        => 'text',
		)
	);

	// Google Ads Conversion ID.
	$wp_customize->add_setting(
		'bmg_google_ads_id',
		array(
			'default'           => '',
			'sanitize_callback' => 'bmg_sanitize_google_ads_id',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'bmg_google_ads_id',
		array(
			'label'       => __( 'Google Ads Conversion ID', 'bmg-theme' ),
			'description' => __( 'Format: AW-XXXXXXXXXX. Leave blank if routing Google Ads conversions through GTM.', 'bmg-theme' ),
			'section'     => 'bmg_section_direct_tags',
			'type'        => 'text',
		)
	);

	// ======================================================================
	// Section: Behavior
	// ======================================================================

	$wp_customize->add_section(
		'bmg_section_tracking_behavior',
		array(
			'title' => __( 'Tracking Behavior', 'bmg-theme' ),
			'panel' => 'bmg_tracking',
		)
	);

	$wp_customize->add_setting(
		'bmg_tracking_exclude_admins',
		array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'bmg_tracking_exclude_admins',
		array(
			'label'       => __( 'Exclude logged-in admins/editors from tracking', 'bmg-theme' ),
			'description' => __( 'Recommended ON. Prevents your own page views and form tests from polluting analytics data.', 'bmg-theme' ),
			'section'     => 'bmg_section_tracking_behavior',
			'type'        => 'checkbox',
		)
	);
}
add_action( 'customize_register', 'bmg_tracking_customizer' );

/**
 * Sanitize GTM container ID. Format: GTM-XXXXXXX (6-8 alphanumeric).
 */
function bmg_sanitize_gtm_id( $value ) {
	$value = strtoupper( trim( $value ) );
	if ( '' === $value ) {
		return '';
	}
	return preg_match( '/^GTM-[A-Z0-9]{6,10}$/', $value ) ? $value : '';
}

/**
 * Sanitize GA4 Measurement ID. Format: G-XXXXXXXXXX.
 */
function bmg_sanitize_ga4_id( $value ) {
	$value = strtoupper( trim( $value ) );
	if ( '' === $value ) {
		return '';
	}
	return preg_match( '/^G-[A-Z0-9]{8,12}$/', $value ) ? $value : '';
}

/**
 * Sanitize Google Ads ID. Format: AW-XXXXXXXXXX.
 */
function bmg_sanitize_google_ads_id( $value ) {
	$value = strtoupper( trim( $value ) );
	if ( '' === $value ) {
		return '';
	}
	return preg_match( '/^AW-[0-9]{8,12}$/', $value ) ? $value : '';
}

/**
 * Sanitize numeric ID (Meta Pixel, CallRail, etc).
 */
function bmg_sanitize_numeric_id( $value ) {
	$value = trim( $value );
	if ( '' === $value ) {
		return '';
	}
	return preg_match( '/^[0-9]{6,20}$/', $value ) ? $value : '';
}

/**
 * Helper: should tracking fire for the current user?
 */
function bmg_tracking_should_fire() {
	if ( get_theme_mod( 'bmg_tracking_exclude_admins', 1 ) && is_user_logged_in() ) {
		if ( current_user_can( 'edit_posts' ) ) {
			return false;
		}
	}
	return true;
}
