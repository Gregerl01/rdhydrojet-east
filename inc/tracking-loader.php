<?php
/**
 * Tracking Loader
 *
 * Outputs GTM / GA4 / Meta Pixel / Google Ads tags based on Customizer values.
 * Preferred setup: put ONLY the GTM Container ID in Customizer, then add GA4,
 * Meta Pixel, and Google Ads tags inside GTM. This file supports direct-embed
 * fallbacks for cases where GTM isn't being used.
 *
 * Also hooks Gravity Forms to push a `form_submit` event to dataLayer on
 * successful submission so GTM can fire GA4 + Meta Lead events consistently.
 *
 * @package starter-theme
 */

defined( 'ABSPATH' ) || exit;

// ---------------------------------------------------------------------------
// GTM: <head> snippet — must be as high in <head> as possible.
// ---------------------------------------------------------------------------
function bmg_tracking_output_gtm_head() {
	if ( ! bmg_tracking_should_fire() ) {
		return;
	}
	$gtm_id = get_theme_mod( 'bmg_gtm_id', '' );
	if ( empty( $gtm_id ) ) {
		return;
	}
	?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo esc_js( $gtm_id ); ?>');</script>
<!-- End Google Tag Manager -->
	<?php
}
add_action( 'wp_head', 'bmg_tracking_output_gtm_head', 2 );

// ---------------------------------------------------------------------------
// GTM: <body> snippet — noscript fallback, must be immediately after <body>.
// ---------------------------------------------------------------------------
function bmg_tracking_output_gtm_body() {
	if ( ! bmg_tracking_should_fire() ) {
		return;
	}
	$gtm_id = get_theme_mod( 'bmg_gtm_id', '' );
	if ( empty( $gtm_id ) ) {
		return;
	}
	?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_attr( $gtm_id ); ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php
}
add_action( 'wp_body_open', 'bmg_tracking_output_gtm_body', 1 );

// ---------------------------------------------------------------------------
// GA4: direct embed (fallback if GTM is not set).
// ---------------------------------------------------------------------------
function bmg_tracking_output_ga4_direct() {
	if ( ! bmg_tracking_should_fire() ) {
		return;
	}
	// If GTM is set, assume GA4 is wired inside GTM and skip direct embed.
	if ( ! empty( get_theme_mod( 'bmg_gtm_id', '' ) ) ) {
		return;
	}
	$ga4_id = get_theme_mod( 'bmg_ga4_measurement_id', '' );
	if ( empty( $ga4_id ) ) {
		return;
	}
	?>
<!-- GA4 (direct embed) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr( $ga4_id ); ?>"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', '<?php echo esc_js( $ga4_id ); ?>');
</script>
<!-- End GA4 -->
	<?php
}
add_action( 'wp_head', 'bmg_tracking_output_ga4_direct', 3 );

// ---------------------------------------------------------------------------
// Meta Pixel: direct embed (fallback if GTM is not set).
// ---------------------------------------------------------------------------
function bmg_tracking_output_meta_pixel_direct() {
	if ( ! bmg_tracking_should_fire() ) {
		return;
	}
	if ( ! empty( get_theme_mod( 'bmg_gtm_id', '' ) ) ) {
		return;
	}
	$pixel_id = get_theme_mod( 'bmg_meta_pixel_id', '' );
	if ( empty( $pixel_id ) ) {
		return;
	}
	?>
<!-- Meta Pixel -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo esc_js( $pixel_id ); ?>');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?php echo esc_attr( $pixel_id ); ?>&ev=PageView&noscript=1"/></noscript>
<!-- End Meta Pixel -->
	<?php
}
add_action( 'wp_head', 'bmg_tracking_output_meta_pixel_direct', 4 );

// ---------------------------------------------------------------------------
// Google Ads global tag (direct embed fallback).
// ---------------------------------------------------------------------------
function bmg_tracking_output_google_ads_direct() {
	if ( ! bmg_tracking_should_fire() ) {
		return;
	}
	if ( ! empty( get_theme_mod( 'bmg_gtm_id', '' ) ) ) {
		return;
	}
	$ads_id = get_theme_mod( 'bmg_google_ads_id', '' );
	if ( empty( $ads_id ) ) {
		return;
	}
	?>
<!-- Google Ads Global Site Tag -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr( $ads_id ); ?>"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', '<?php echo esc_js( $ads_id ); ?>');
</script>
<!-- End Google Ads Global Site Tag -->
	<?php
}
add_action( 'wp_head', 'bmg_tracking_output_google_ads_direct', 5 );

// ---------------------------------------------------------------------------
// Gravity Forms → dataLayer bridge.
//
// Pushes `form_submit` event to dataLayer on successful submission so GTM can
// fire GA4 + Meta Lead events without relying on fragile page-URL detection.
// ---------------------------------------------------------------------------
function bmg_tracking_gform_datalayer_push( $confirmation, $form, $entry, $ajax ) {
	if ( ! bmg_tracking_should_fire() ) {
		return $confirmation;
	}

	$form_id    = isset( $form['id'] ) ? (int) $form['id'] : 0;
	$form_title = isset( $form['title'] ) ? $form['title'] : '';

	// Normalize form title to a machine-friendly identifier.
	$form_slug = sanitize_title( $form_title );

	// Map form IDs to a clean form_type label.
	$form_type = 'generic';
	if ( defined( 'BMG_QUICK_QUOTE_FORM_ID' ) && $form_id === BMG_QUICK_QUOTE_FORM_ID ) {
		$form_type = 'quick_quote';
	} elseif ( defined( 'BMG_CONTACT_FORM_ID' ) && $form_id === BMG_CONTACT_FORM_ID ) {
		$form_type = 'contact';
	}

	$payload = array(
		'event'      => 'form_submit',
		'form_id'    => $form_id,
		'form_title' => $form_title,
		'form_slug'  => $form_slug,
		'form_type'  => $form_type,
	);

	$script = '<script>window.dataLayer = window.dataLayer || []; window.dataLayer.push(' . wp_json_encode( $payload ) . ');</script>';

	// Ajax confirmations: append script to the confirmation HTML.
	if ( is_array( $confirmation ) && isset( $confirmation['redirect'] ) ) {
		// Redirect confirmations: attach a query string so the destination page can fire the event.
		$confirmation['redirect'] = add_query_arg(
			array(
				'form_submit' => '1',
				'form_type'   => $form_type,
				'form_id'     => $form_id,
			),
			$confirmation['redirect']
		);
		return $confirmation;
	}

	if ( is_string( $confirmation ) ) {
		return $confirmation . $script;
	}

	return $confirmation;
}
add_filter( 'gform_confirmation', 'bmg_tracking_gform_datalayer_push', 10, 4 );

/**
 * If the current page has ?form_submit=1 (from a Gravity Forms redirect confirmation),
 * fire the dataLayer push on page load so the GTM trigger still catches it.
 */
function bmg_tracking_output_form_submit_from_querystring() {
	if ( ! bmg_tracking_should_fire() ) {
		return;
	}
	if ( empty( $_GET['form_submit'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		return;
	}
	$form_type = isset( $_GET['form_type'] ) ? sanitize_key( wp_unslash( $_GET['form_type'] ) ) : 'generic'; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	$form_id   = isset( $_GET['form_id'] ) ? (int) $_GET['form_id'] : 0; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
	event: 'form_submit',
	form_id: <?php echo (int) $form_id; ?>,
	form_type: <?php echo wp_json_encode( $form_type ); ?>,
	source: 'redirect_confirmation'
});
</script>
	<?php
}
add_action( 'wp_footer', 'bmg_tracking_output_form_submit_from_querystring', 20 );
