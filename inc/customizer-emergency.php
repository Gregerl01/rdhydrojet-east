<?php
/**
 * Emergency Section Customizer Settings
 *
 * Registers the Emergency Section panel with heading, 3 card slots
 * (image + title + description), and bottom CTA controls.
 *
 * @package starter-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register Emergency Section Customizer Settings
 */
function bmg_theme_emergency_customizer( $wp_customize ) {

	// ==========================================================================
	// Section
	// ==========================================================================
	$wp_customize->add_section(
		'bmg_theme_emergency',
		array(
			'title'       => __( 'Emergency Section', 'bmg-theme' ),
			'description' => __( 'Customize the homepage emergency plumbing section — heading, 3 cards, and bottom CTA.', 'bmg-theme' ),
			'priority'    => 155,
		)
	);

	// ==========================================================================
	// Section Heading
	// ==========================================================================
	$wp_customize->add_setting(
		'emergency_headline',
		array(
			'default'           => __( 'Need Emergency Plumbing in East San Diego?', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'emergency_headline',
		array(
			'label'   => __( 'Section Headline', 'bmg-theme' ),
			'section' => 'bmg_theme_emergency',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'emergency_sub_headline',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'emergency_sub_headline',
		array(
			'label'       => __( 'Section Sub-headline (optional)', 'bmg-theme' ),
			'description' => __( 'Short supporting sentence below the main headline. Leave empty to hide.', 'bmg-theme' ),
			'section'     => 'bmg_theme_emergency',
			'type'        => 'text',
		)
	);

	// ==========================================================================
	// 3 Card Slots — each with image, title, description
	// ==========================================================================
	$card_defaults = array(
		1 => array(
			'title' => __( 'Burst Pipes & Active Leaks', 'bmg-theme' ),
			'desc'  => __( 'Fast response to stop damage and restore proper plumbing function.', 'bmg-theme' ),
		),
		2 => array(
			'title' => __( 'Sewer Backups & Major Clogs', 'bmg-theme' ),
			'desc'  => __( 'Professional service to clear blockages and prevent overflow issues.', 'bmg-theme' ),
		),
		3 => array(
			'title' => __( 'Water Heater Failures', 'bmg-theme' ),
			'desc'  => __( 'Quick help when hot water systems stop working unexpectedly.', 'bmg-theme' ),
		),
	);

	foreach ( $card_defaults as $i => $defaults ) {

		// Image (attachment ID via Media Control so wp_get_attachment_image works).
		$wp_customize->add_setting(
			"bmg_emergency_{$i}_image",
			array(
				'default'           => '',
				'sanitize_callback' => 'absint',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Media_Control(
				$wp_customize,
				"bmg_emergency_{$i}_image",
				array(
					/* translators: %d: card number */
					'label'     => sprintf( __( 'Card %d — Image', 'bmg-theme' ), $i ),
					'section'   => 'bmg_theme_emergency',
					'mime_type' => 'image',
				)
			)
		);

		// Title.
		$wp_customize->add_setting(
			"bmg_emergency_{$i}_title",
			array(
				'default'           => $defaults['title'],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			"bmg_emergency_{$i}_title",
			array(
				/* translators: %d: card number */
				'label'   => sprintf( __( 'Card %d — Title', 'bmg-theme' ), $i ),
				'section' => 'bmg_theme_emergency',
				'type'    => 'text',
			)
		);

		// Description.
		$wp_customize->add_setting(
			"bmg_emergency_{$i}_description",
			array(
				'default'           => $defaults['desc'],
				'sanitize_callback' => 'sanitize_textarea_field',
			)
		);
		$wp_customize->add_control(
			"bmg_emergency_{$i}_description",
			array(
				/* translators: %d: card number */
				'label'   => sprintf( __( 'Card %d — Description', 'bmg-theme' ), $i ),
				'section' => 'bmg_theme_emergency',
				'type'    => 'textarea',
			)
		);
	}

	// ==========================================================================
	// Bottom CTA
	// ==========================================================================
	$wp_customize->add_setting(
		'emergency_cta_headline',
		array(
			'default'           => __( "Need an Emergency Plumber in East County? We're Here to Help", 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'emergency_cta_headline',
		array(
			'label'       => __( 'Bottom CTA Headline', 'bmg-theme' ),
			'description' => __( 'Uppercase headline shown below the 3 cards.', 'bmg-theme' ),
			'section'     => 'bmg_theme_emergency',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'emergency_cta_phone_text',
		array(
			'default'           => __( 'Call Us', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'emergency_cta_phone_text',
		array(
			'label'       => __( 'Phone Button Label', 'bmg-theme' ),
			'description' => __( 'Text before the phone number (e.g. "Call Us"). The actual phone number is pulled from Business Information.', 'bmg-theme' ),
			'section'     => 'bmg_theme_emergency',
			'type'        => 'text',
		)
	);

	$wp_customize->add_setting(
		'emergency_cta_book_text',
		array(
			'default'           => __( 'Book Online', 'bmg-theme' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'emergency_cta_book_text',
		array(
			'label'   => __( 'Book Button Label', 'bmg-theme' ),
			'section' => 'bmg_theme_emergency',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(
		'emergency_cta_book_url',
		array(
			'default'           => '/contact/',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'emergency_cta_book_url',
		array(
			'label'       => __( 'Book Button URL', 'bmg-theme' ),
			'description' => __( 'Relative path (e.g. /contact/) or full URL.', 'bmg-theme' ),
			'section'     => 'bmg_theme_emergency',
			'type'        => 'url',
		)
	);
}
add_action( 'customize_register', 'bmg_theme_emergency_customizer' );
