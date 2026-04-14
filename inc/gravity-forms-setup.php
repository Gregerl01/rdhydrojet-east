<?php
/**
 * Gravity Forms Setup — Programmatic form creation + SMTP notice.
 *
 * Creates two forms on first run (guarded by option flag).
 * Defines form ID constants for use in templates.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

// ---------------------------------------------------------------------------
// Form ID constants — update these if forms are re-created with different IDs.
// ---------------------------------------------------------------------------
if ( ! defined( 'BMG_QUICK_QUOTE_FORM_ID' ) ) {
	define( 'BMG_QUICK_QUOTE_FORM_ID', (int) get_option( 'bmg_gf_quick_quote_id', 1 ) );
}
if ( ! defined( 'BMG_CONTACT_FORM_ID' ) ) {
	define( 'BMG_CONTACT_FORM_ID', (int) get_option( 'bmg_gf_contact_id', 2 ) );
}

/**
 * Create the two Gravity Forms programmatically (runs once).
 */
function bmg_create_gravity_forms() {
	// Only run once, and only if GFAPI is available.
	if ( get_option( 'bmg_gravity_forms_created' ) || ! class_exists( 'GFAPI' ) ) {
		return;
	}

	$email = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );

	// Service options shared by both forms.
	$service_choices = array(
		array( 'text' => 'Hydro Jetting',           'value' => 'Hydro Jetting' ),
		array( 'text' => 'Drain & Sewer Repair',     'value' => 'Drain & Sewer Repair' ),
		array( 'text' => 'Water Heater Services',     'value' => 'Water Heater Services' ),
		array( 'text' => 'Leak Detection',            'value' => 'Leak Detection' ),
		array( 'text' => 'Gas Line Repair',           'value' => 'Gas Line Repair' ),
		array( 'text' => 'Toilet Repair',             'value' => 'Toilet Repair' ),
		array( 'text' => 'Emergency Plumbing',        'value' => 'Emergency Plumbing' ),
		array( 'text' => 'Repiping',                  'value' => 'Repiping' ),
		array( 'text' => 'Septic & Sanitation',       'value' => 'Septic & Sanitation' ),
		array( 'text' => 'New Construction Plumbing', 'value' => 'New Construction Plumbing' ),
		array( 'text' => 'Other',                     'value' => 'Other' ),
	);

	// =====================================================================
	// Form 1: Quick Quote (hero section — 3 fields).
	// =====================================================================
	$form1 = array(
		'title'                => 'Quick Quote',
		'description'          => 'Short lead form for hero section.',
		'labelPlacement'       => 'top_label',
		'button'               => array( 'type' => 'text', 'text' => 'Request Free Estimate' ),
		'fields'               => array(
			array(
				'type'        => 'text',
				'id'          => 1,
				'label'       => 'Full Name',
				'isRequired'  => true,
				'placeholder' => 'Your full name',
			),
			array(
				'type'        => 'phone',
				'id'          => 2,
				'label'       => 'Phone Number',
				'isRequired'  => true,
				'placeholder' => '(619) 000-0000',
				'phoneFormat' => 'standard',
			),
			array(
				'type'        => 'select',
				'id'          => 3,
				'label'       => 'Service Needed',
				'isRequired'  => true,
				'placeholder' => 'Select a service',
				'choices'     => $service_choices,
			),
		),
		'notifications'        => array(
			array(
				'id'          => '1',
				'isActive'    => true,
				'name'        => 'Admin Notification',
				'event'       => 'form_submission',
				'to'          => $email,
				'toType'      => 'email',
				'from'        => '{admin_email}',
				'replyTo'     => '{Phone Number:2}',
				'subject'     => 'New Quick Quote Request from {Full Name:1}',
				'message'     => "New quick quote request:\n\nName: {Full Name:1}\nPhone: {Phone Number:2}\nService: {Service Needed:3}\n\nSubmitted: {date_mdy} at {date_created:time}",
			),
		),
		'confirmations'        => array(
			array(
				'id'          => '1',
				'isDefault'   => true,
				'name'        => 'Default Confirmation',
				'type'        => 'message',
				'message'     => 'Thanks! We typically respond within 1 hour during business hours.',
			),
		),
	);

	$form1_id = GFAPI::add_form( $form1 );
	if ( ! is_wp_error( $form1_id ) ) {
		update_option( 'bmg_gf_quick_quote_id', $form1_id );
	}

	// =====================================================================
	// Form 2: Full Contact Form (CTA section + contact page — 6 fields).
	// =====================================================================
	$form2 = array(
		'title'                => 'Full Contact Form',
		'description'          => 'Complete lead form for CTA section and contact page.',
		'labelPlacement'       => 'top_label',
		'button'               => array( 'type' => 'text', 'text' => 'Request Free Estimate' ),
		'fields'               => array(
			array(
				'type'        => 'text',
				'id'          => 1,
				'label'       => 'Full Name',
				'isRequired'  => true,
				'placeholder' => 'Your full name',
				'cssClass'    => 'gf-half-left',
				'layoutGridColumnSpan' => 6,
			),
			array(
				'type'        => 'phone',
				'id'          => 2,
				'label'       => 'Phone Number',
				'isRequired'  => true,
				'placeholder' => '(619) 000-0000',
				'phoneFormat' => 'standard',
				'cssClass'    => 'gf-half-right',
				'layoutGridColumnSpan' => 6,
			),
			array(
				'type'        => 'email',
				'id'          => 3,
				'label'       => 'Email Address',
				'isRequired'  => true,
				'placeholder' => 'you@email.com',
				'cssClass'    => 'gf-half-left',
				'layoutGridColumnSpan' => 6,
			),
			array(
				'type'        => 'select',
				'id'          => 4,
				'label'       => 'Service Needed',
				'isRequired'  => true,
				'placeholder' => 'Select a service',
				'choices'     => $service_choices,
				'cssClass'    => 'gf-half-right',
				'layoutGridColumnSpan' => 6,
			),
			array(
				'type'        => 'text',
				'id'          => 5,
				'label'       => 'Street Address / City',
				'isRequired'  => false,
				'placeholder' => 'Street address, city',
			),
			array(
				'type'        => 'textarea',
				'id'          => 6,
				'label'       => 'Additional Details',
				'isRequired'  => false,
				'placeholder' => 'Describe the issue — upstairs, downstairs, leaking, flooding, no rush, etc.',
			),
		),
		'notifications'        => array(
			array(
				'id'          => '1',
				'isActive'    => true,
				'name'        => 'Admin Notification',
				'event'       => 'form_submission',
				'to'          => $email,
				'toType'      => 'email',
				'from'        => '{admin_email}',
				'replyTo'     => '{Email Address:3}',
				'subject'     => 'New Service Request from {Full Name:1} — {Service Needed:4}',
				'message'     => "New service request:\n\nName: {Full Name:1}\nPhone: {Phone Number:2}\nEmail: {Email Address:3}\nService: {Service Needed:4}\nAddress: {Street Address / City:5}\nDetails: {Additional Details:6}\n\nSubmitted: {date_mdy} at {date_created:time}",
			),
		),
		'confirmations'        => array(
			array(
				'id'          => '1',
				'isDefault'   => true,
				'name'        => 'Default Confirmation',
				'type'        => 'message',
				'message'     => "Thank you! We've received your request and will be in touch shortly. For emergencies, call (619) 571-1777.",
			),
		),
	);

	$form2_id = GFAPI::add_form( $form2 );
	if ( ! is_wp_error( $form2_id ) ) {
		update_option( 'bmg_gf_contact_id', $form2_id );
	}

	// Mark as done.
	update_option( 'bmg_gravity_forms_created', true );
}
add_action( 'init', 'bmg_create_gravity_forms', 20 );

// ---------------------------------------------------------------------------
// Admin notice if Gravity SMTP is installed but not configured.
// ---------------------------------------------------------------------------
add_action( 'admin_notices', function () {
	if ( ! class_exists( 'Gravity_SMTP' ) ) {
		return;
	}
	$mailer = get_option( 'gravitysmtp_mailer' );
	if ( empty( $mailer ) ) {
		printf(
			'<div class="notice notice-warning"><p><strong>%s</strong> %s <a href="%s">%s</a>.</p></div>',
			esc_html__( 'RD Hydrojet East:', 'bmg-theme' ),
			esc_html__( 'Gravity SMTP is installed but not configured. Set up email delivery at', 'bmg-theme' ),
			esc_url( admin_url( 'admin.php?page=gravitysmtp-settings' ) ),
			esc_html__( 'Gravity SMTP Settings', 'bmg-theme' )
		);
	}
} );

/**
 * Helper: check if Gravity Forms is active before rendering.
 *
 * @param int $form_id Form ID.
 * @return void
 */
function bmg_render_gravity_form( $form_id ) {
	if ( function_exists( 'gravity_form' ) ) {
		gravity_form( $form_id, false, false, false, null, true );
	} else {
		echo '<p class="text-center text-muted">' . esc_html__( 'Contact form loading...', 'bmg-theme' ) . '</p>';
	}
}
