<?php
/**
 * Philosophy & Provider Customizer Settings
 *
 * Used for the philosophy section on the homepage and provider profile.
 *
 * @package starter-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register Philosophy/About Customizer Settings
 */
function bmg_theme_about_customizer( $wp_customize ) {

	// About Panel.
	$wp_customize->add_panel(
		'bmg_theme_about_panel',
		array(
			'title'       => __( 'About Page', 'bmg-theme' ),
			'description' => __( 'Customize the About page sections — hero, intro, brand story, and service promise.', 'bmg-theme' ),
			'priority'    => 122,
		)
	);

	// ==========================================================================
	// About Page: Hero
	// ==========================================================================
	$wp_customize->add_section(
		'bmg_theme_about_hero',
		array(
			'title'    => __( 'About — Hero', 'bmg-theme' ),
			'panel'    => 'bmg_theme_about_panel',
			'priority' => 5,
		)
	);

	$wp_customize->add_setting(
		'about_hero_h1',
		array(
			'default'           => __( "East San Diego's Trusted Plumbing Team", 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'about_hero_h1',
		array(
			'label'   => __( 'Hero Headline (H1)', 'bmg-theme' ),
			'section' => 'bmg_theme_about_hero',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'about_hero_sub',
		array(
			'default'           => __( 'Licensed, insured, and committed to honest work since 2003. Serving El Cajon, La Mesa, Santee, and all of East County.', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_hero_sub',
		array(
			'label'   => __( 'Hero Subtitle', 'bmg-theme' ),
			'section' => 'bmg_theme_about_hero',
			'type'    => 'textarea',
		)
	);

	// ==========================================================================
	// About Page: Company Intro (Who We Are)
	// ==========================================================================
	$wp_customize->add_section(
		'bmg_theme_about_intro',
		array(
			'title'    => __( 'About — Company Intro', 'bmg-theme' ),
			'panel'    => 'bmg_theme_about_panel',
			'priority' => 10,
		)
	);

	$wp_customize->add_setting(
		'about_intro_h2',
		array(
			'default'           => __( 'More Than a Plumbing Company', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'about_intro_h2',
		array(
			'label'   => __( 'Heading (H2)', 'bmg-theme' ),
			'section' => 'bmg_theme_about_intro',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'about_intro_p1',
		array(
			'default'           => __( 'RD Hydrojet Plumbing & Drain Inc. is a licensed, full-service plumbing company serving East San Diego County. We handle everything from routine drain cleaning to complex sewer line repairs, water heater installations, gas line work, and 24/7 emergency calls.', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_intro_p1',
		array(
			'label'   => __( 'Paragraph 1', 'bmg-theme' ),
			'section' => 'bmg_theme_about_intro',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'about_intro_p2',
		array(
			'default'           => __( "We're not a franchise. We're not a call center that dispatches whoever's available. We're a team of experienced plumbers who know East County infrastructure — the aging cast iron pipes in El Cajon, the hillside drainage challenges in Del Cerro, the hard water issues across Santee and Lakeside. When we show up, we already understand what we're likely dealing with.", 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_intro_p2',
		array(
			'label'   => __( 'Paragraph 2', 'bmg-theme' ),
			'section' => 'bmg_theme_about_intro',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'about_intro_image',
		array(
			'default'           => 0,
			'sanitize_callback' => 'absint',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'about_intro_image',
			array(
				'label'       => __( 'Intro Image', 'bmg-theme' ),
				'description' => __( 'Team or truck photo — shown in the right column of the Company Intro section.', 'bmg-theme' ),
				'section'     => 'bmg_theme_about_intro',
				'mime_type'   => 'image',
			)
		)
	);

	// ==========================================================================
	// About Page: Brand Story
	// ==========================================================================
	$wp_customize->add_section(
		'bmg_theme_about_story',
		array(
			'title'    => __( 'About — Brand Story', 'bmg-theme' ),
			'panel'    => 'bmg_theme_about_panel',
			'priority' => 15,
		)
	);

	$wp_customize->add_setting(
		'about_story_h2',
		array(
			'default'           => __( 'Started with One Truck and a Handshake', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'about_story_h2',
		array(
			'label'   => __( 'Heading (H2)', 'bmg-theme' ),
			'section' => 'bmg_theme_about_story',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'about_story_p1',
		array(
			'default'           => __( 'RD Hydrojet started in 2003 with a single truck, a commercial-grade hydro jetter, and a simple rule: diagnose before you quote, and never sell someone work they don\'t need. That approach earned repeat customers fast, and word spread.', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_story_p1',
		array(
			'label'   => __( 'Paragraph 1', 'bmg-theme' ),
			'section' => 'bmg_theme_about_story',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'about_story_p2',
		array(
			'default'           => __( "For years, we built our reputation across the Inland Empire — Murrieta, Temecula, Menifee. Homeowners trusted us because we showed up on time, explained what we found honestly, and fixed things right the first time. We didn't advertise much. We didn't need to. Referrals kept the phones ringing.", 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_story_p2',
		array(
			'label'   => __( 'Paragraph 2', 'bmg-theme' ),
			'section' => 'bmg_theme_about_story',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'about_story_p3',
		array(
			'default'           => __( 'We expanded into East San Diego County because the need was clear. Older homes, aging infrastructure, and too many plumbers offering quick fixes that don\'t last. East County homeowners deserve the same level of service we\'ve delivered for 20+ years — and now they have it.', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_story_p3',
		array(
			'label'   => __( 'Paragraph 3', 'bmg-theme' ),
			'section' => 'bmg_theme_about_story',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'about_story_quote',
		array(
			'default'           => __( "We don't just clear the line. We show you what's happening inside your pipes and fix the root cause.", 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_story_quote',
		array(
			'label'       => __( 'Pull Quote', 'bmg-theme' ),
			'description' => __( 'Optional. Leave empty to hide.', 'bmg-theme' ),
			'section'     => 'bmg_theme_about_story',
			'type'        => 'textarea',
		)
	);

	// ==========================================================================
	// About Page: Service Promise
	// ==========================================================================
	$wp_customize->add_section(
		'bmg_theme_about_promise',
		array(
			'title'    => __( 'About — Service Promise', 'bmg-theme' ),
			'panel'    => 'bmg_theme_about_panel',
			'priority' => 20,
		)
	);

	$wp_customize->add_setting(
		'about_promise_h2',
		array(
			'default'           => __( 'What You Can Expect From Every Job', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'about_promise_h2',
		array(
			'label'   => __( 'Heading (H2)', 'bmg-theme' ),
			'section' => 'bmg_theme_about_promise',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'about_promise_p1',
		array(
			'default'           => __( "We answer the phone. We show up when we say we will. We explain what we find in plain English, not plumber jargon. We quote the job before we start it, and we don't pad the bill with work you didn't ask for.", 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_promise_p1',
		array(
			'label'   => __( 'Paragraph 1', 'bmg-theme' ),
			'section' => 'bmg_theme_about_promise',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'about_promise_p2',
		array(
			'default'           => __( "If something isn't right after we leave, call us. We'll come back and make it right. No arguments, no runaround. That's not a marketing promise — it's how we've operated since 2003, and it's why most of our work comes from referrals and repeat customers.", 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
		)
	);
	$wp_customize->add_control(
		'about_promise_p2',
		array(
			'label'   => __( 'Paragraph 2', 'bmg-theme' ),
			'section' => 'bmg_theme_about_promise',
			'type'    => 'textarea',
		)
	);

	// ==========================================================================
	// Philosophy Section (Homepage)
	// ==========================================================================
	$wp_customize->add_section(
		'bmg_theme_philosophy',
		array(
			'title'       => __( 'Philosophy Section', 'bmg-theme' ),
			'description' => __( 'Content for the homepage philosophy introduction.', 'bmg-theme' ),
			'panel'       => 'bmg_theme_about_panel',
		)
	);

	// Philosophy Paragraph 1.
	$wp_customize->add_setting(
		'philosophy_paragraph_1',
		array(
			'default'           => __( '[Philosophy paragraph 1 — opening statement about your approach.]', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'philosophy_paragraph_1',
		array(
			'label'   => __( 'Opening Paragraph', 'bmg-theme' ),
			'section' => 'bmg_theme_philosophy',
			'type'    => 'textarea',
		)
	);

	// Philosophy Paragraph 2.
	$wp_customize->add_setting(
		'philosophy_paragraph_2',
		array(
			'default'           => __( '[Philosophy paragraph 2 — supporting statement about your value proposition.]', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'philosophy_paragraph_2',
		array(
			'label'   => __( 'Supporting Paragraph', 'bmg-theme' ),
			'section' => 'bmg_theme_philosophy',
			'type'    => 'textarea',
		)
	);

	// Show Link to About Page.
	$wp_customize->add_setting(
		'philosophy_show_link',
		array(
			'default'           => true,
			'sanitize_callback' => 'bmg_theme_sanitize_checkbox',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		'philosophy_show_link',
		array(
			'label'   => __( 'Show "Learn More" Link', 'bmg-theme' ),
			'section' => 'bmg_theme_philosophy',
			'type'    => 'checkbox',
		)
	);

	// Link Text.
	$wp_customize->add_setting(
		'philosophy_link_text',
		array(
			'default'           => __( 'Learn about our approach', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'philosophy_link_text',
		array(
			'label'   => __( 'Link Text', 'bmg-theme' ),
			'section' => 'bmg_theme_philosophy',
			'type'    => 'text',
		)
	);

	// Link URL.
	$wp_customize->add_setting(
		'philosophy_link_url',
		array(
			'default'           => '/about/',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'philosophy_link_url',
		array(
			'label'   => __( 'Link URL', 'bmg-theme' ),
			'section' => 'bmg_theme_philosophy',
			'type'    => 'url',
		)
	);

	// ==========================================================================
	// Physician Profile Section
	// ==========================================================================
	$wp_customize->add_section(
		'bmg_theme_physician',
		array(
			'title'       => __( 'Provider Profile', 'bmg-theme' ),
			'description' => __( 'Provider information for the About page.', 'bmg-theme' ),
			'panel'       => 'bmg_theme_about_panel',
		)
	);

	// Physician Name.
	$wp_customize->add_setting(
		'physician_name',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'physician_name',
		array(
			'label'       => __( 'Provider Name', 'bmg-theme' ),
			'description' => __( 'e.g., Dr. [Last Name], MD', 'bmg-theme' ),
			'section'     => 'bmg_theme_physician',
			'type'        => 'text',
		)
	);

	// Physician Title/Credentials.
	$wp_customize->add_setting(
		'physician_credentials',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'physician_credentials',
		array(
			'label'       => __( 'Credentials', 'bmg-theme' ),
			'description' => __( 'e.g., Board Certified Internal Medicine', 'bmg-theme' ),
			'section'     => 'bmg_theme_physician',
			'type'        => 'text',
		)
	);

	// Physician Bio.
	$wp_customize->add_setting(
		'physician_bio',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'physician_bio',
		array(
			'label'   => __( 'Biography', 'bmg-theme' ),
			'section' => 'bmg_theme_physician',
			'type'    => 'textarea',
		)
	);

	// Physician Photo.
	$wp_customize->add_setting(
		'physician_photo',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'physician_photo',
			array(
				'label'   => __( 'Provider Photo', 'bmg-theme' ),
				'section' => 'bmg_theme_physician',
			)
		)
	);

	// ==========================================================================
	// Credentials Section (Homepage)
	// ==========================================================================
	$wp_customize->add_section(
		'bmg_theme_credentials',
		array(
			'title'       => __( 'Credentials Section', 'bmg-theme' ),
			'description' => __( 'Professional affiliations shown on the homepage.', 'bmg-theme' ),
			'panel'       => 'bmg_theme_about_panel',
		)
	);

	// Credentials List.
	$wp_customize->add_setting(
		'credentials_list',
		array(
			'default'           => "[Credential 1]\n[Credential 2]\n[Credential 3]\n[Credential 4]",
			'sanitize_callback' => 'sanitize_textarea_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'credentials_list',
		array(
			'label'       => __( 'Credentials & Affiliations', 'bmg-theme' ),
			'description' => __( 'Enter each credential on a new line.', 'bmg-theme' ),
			'section'     => 'bmg_theme_credentials',
			'type'        => 'textarea',
		)
	);

	// Section Heading.
	$wp_customize->add_setting(
		'credentials_heading',
		array(
			'default'           => __( 'Credentials & Affiliations', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);

	$wp_customize->add_control(
		'credentials_heading',
		array(
			'label'   => __( 'Section Heading', 'bmg-theme' ),
			'section' => 'bmg_theme_credentials',
			'type'    => 'text',
		)
	);
}
add_action( 'customize_register', 'bmg_theme_about_customizer' );

/**
 * Sanitize checkbox values
 */
if ( ! function_exists( 'bmg_theme_sanitize_checkbox' ) ) {
	function bmg_theme_sanitize_checkbox( $checked ) {
		return ( ( isset( $checked ) && true === $checked ) ? true : false );
	}
}
