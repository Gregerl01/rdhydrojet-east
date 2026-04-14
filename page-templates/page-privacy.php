<?php
/**
 * Template Name: Privacy Policy
 *
 * Privacy Policy page for RD Hydrojet Plumbing & Drain Inc.
 *
 * @package starter-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Noindex for legal pages.
add_action( 'wp_head', function() {
	echo '<meta name="robots" content="noindex, follow">' . "\n";
}, 1 );

// Dynamic variables.
$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
$email         = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );

get_header();
?>

<main id="main" class="site-main">

	<!-- Section 1: Hero -->
	<section class="section-sd-hero section-dark">
		<div class="section-sd-hero__bg" aria-hidden="true"></div>
		<div class="container section-sd-hero__container">
			<nav class="section-sd-hero__breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'bmg-theme' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'bmg-theme' ); ?></a>
				<span aria-hidden="true">/</span>
				<span><?php esc_html_e( 'Privacy Policy', 'bmg-theme' ); ?></span>
			</nav>
			<h1 class="section-sd-hero__title bmg-reveal"><?php esc_html_e( 'Privacy Policy', 'bmg-theme' ); ?></h1>
			<p class="section-sd-hero__sub bmg-reveal"><?php esc_html_e( 'Your privacy matters. Here\'s how we handle your information.', 'bmg-theme' ); ?></p>
		</div>
	</section>

	<!-- Section 2: Privacy Policy Content -->
	<section class="section-legal bmg-reveal">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 mx-auto">

					<p class="section-legal__updated"><?php esc_html_e( 'Last Updated: April 2026', 'bmg-theme' ); ?></p>

					<article class="section-legal__content">

						<h2><?php esc_html_e( 'Information We Collect', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'We collect information you provide when requesting services or contacting us: your name, phone number, email address, and street address. This information is submitted voluntarily through our website contact forms.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'Our website also automatically collects certain technical information when you visit, including your IP address, browser type, device information, and pages visited. This data is collected through cookies and analytics tools to help us understand how visitors use our site.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'We do not collect payment card information through our website. All payment processing occurs in person or through separate, secure payment systems.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'How We Use Your Information', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'We use the information you provide to respond to service requests and provide estimates, schedule and coordinate plumbing services, communicate about upcoming or completed work, and improve our website and user experience.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'We do not sell, rent, or trade your personal information to third parties. We may share your information with service providers who assist in operating our website, but only to the extent necessary to provide those services.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Cookies and Analytics', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'Our website uses Google Analytics to analyze traffic patterns and user behavior. This helps us understand which pages are most useful and how visitors find our site. Google Analytics uses cookies to collect anonymous usage data.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'We use standard browser cookies to maintain basic site functionality such as form submissions and navigation preferences. We do not use third-party advertising cookies or tracking pixels.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'You can control cookie settings through your browser preferences. Disabling cookies may affect some website functionality but will not prevent you from viewing our content.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Third-Party Services', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'Our website integrates with the following third-party services:', 'bmg-theme' ); ?></p>

						<ul>
							<li><?php esc_html_e( 'Google Analytics for website traffic analysis', 'bmg-theme' ); ?></li>
							<li><?php esc_html_e( 'Google Maps for embedded maps on service area pages', 'bmg-theme' ); ?></li>
							<li><?php esc_html_e( 'WordPress and associated plugins for website functionality', 'bmg-theme' ); ?></li>
						</ul>

						<p><?php esc_html_e( 'Links to external websites such as our Google Business Profile, Yelp listing, or the California Contractors State License Board are provided for your convenience. These sites operate under their own privacy policies, which we encourage you to review.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Data Security', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'We use SSL encryption on all pages of our website to protect data transmitted between your browser and our servers. Form submissions are stored securely on our hosting provider\'s infrastructure with access limited to authorized personnel.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'While we take reasonable measures to protect your information, no method of electronic transmission or storage is completely secure. We cannot guarantee absolute security of your data.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Your Rights', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'You have the right to request access to the personal information we hold about you, request correction of inaccurate information, request deletion of your personal information, and opt out of any marketing communications.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'California residents have additional rights under the California Consumer Privacy Act (CCPA), including the right to know what personal information is collected, the right to request deletion, and the right to non-discrimination for exercising privacy rights. We do not sell personal information as defined by the CCPA.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'To exercise any of these rights, contact us using the information below.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Contact Us About Privacy', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'If you have questions about this privacy policy or wish to exercise your privacy rights, contact us:', 'bmg-theme' ); ?></p>

						<address class="privacy-contact-block">
							<?php esc_html_e( 'Phone:', 'bmg-theme' ); ?> <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone_display ); ?></a><br>
							<?php esc_html_e( 'Email:', 'bmg-theme' ); ?> <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a><br>
							<strong><?php esc_html_e( 'RD Hydrojet Plumbing & Drain Inc.', 'bmg-theme' ); ?></strong><br>
							<?php esc_html_e( 'East San Diego County, CA', 'bmg-theme' ); ?>
						</address>

						<h2><?php esc_html_e( 'Changes to This Policy', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'We may update this privacy policy periodically to reflect changes in our practices or applicable laws. When we make changes, we will update the "Last Updated" date at the top of this page. We encourage you to review this policy regularly.', 'bmg-theme' ); ?></p>

					</article>

				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
