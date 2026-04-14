<?php
/**
 * Template Name: Terms of Use
 *
 * Website Terms of Use for RD Hydrojet Plumbing & Drain Inc.
 *
 * @package bmg-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Noindex — legal pages should not be indexed.
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
				<span><?php esc_html_e( 'Terms of Use', 'bmg-theme' ); ?></span>
			</nav>
			<h1 class="section-sd-hero__title bmg-reveal"><?php esc_html_e( 'Terms of Use', 'bmg-theme' ); ?></h1>
			<p class="section-sd-hero__sub bmg-reveal"><?php esc_html_e( 'Please review the terms that govern your use of our website.', 'bmg-theme' ); ?></p>
		</div>
	</section>

	<!-- Section 2: Terms Content -->
	<section class="section-legal">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 mx-auto">

					<p class="section-legal__updated bmg-reveal"><?php esc_html_e( 'Last Updated: April 2026', 'bmg-theme' ); ?></p>

					<article class="section-legal__content bmg-reveal">

						<h2><?php esc_html_e( 'Acceptance of Terms', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'By accessing and using the RD Hydrojet Plumbing website, you agree to be bound by these Terms of Use. If you do not agree with any part of these terms, please discontinue use of this website.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Use of This Website', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'This website is provided for informational purposes and to facilitate requests for plumbing services in the East San Diego County area. You may browse our service descriptions, submit service requests, and access contact information.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'Users must be at least 18 years of age to submit service requests or contact forms through this website. All information submitted must be accurate and truthful. We reserve the right to refuse service based on inaccurate or misleading submissions.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Services and Estimates', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'The service descriptions on this website are provided for general informational purposes. The actual scope, method, and materials for any plumbing job are determined during on-site inspection and diagnosis.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'Estimates submitted through our website are requests for pricing, not binding quotes. Final pricing is confirmed after our licensed plumber inspects the situation in person and provides a written estimate. No work begins without your approval of the final quote.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'Emergency service availability is subject to technician availability and current call volume. We make every effort to respond to emergencies promptly, but response times may vary.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Intellectual Property', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'All content on this website — including text, images, logos, graphics, icons, and page design — is the property of RD Hydrojet Plumbing & Drain Inc. and is protected by applicable copyright and trademark laws.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'You may not reproduce, distribute, modify, or create derivative works from any content on this website without prior written permission from RD Hydrojet Plumbing & Drain Inc.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'Website design and development by GSL Design (gsldesign.net).', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Limitation of Liability', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'This website and its content are provided "as is" without warranties of any kind, either express or implied. RD Hydrojet Plumbing & Drain Inc. does not warrant that the website will be uninterrupted, error-free, or free of harmful components.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'RD Hydrojet Plumbing & Drain Inc. shall not be liable for any damages arising from your use of this website or reliance on information presented here. Service guarantees and warranties are governed by individual service agreements provided at the time of service, not by website content.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Licensing and Credentials', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'RD Hydrojet Plumbing & Drain Inc. is a licensed, bonded, and insured plumbing contractor in the State of California.', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'California Contractors State License Board (CSLB) License #1076642', 'bmg-theme' ); ?><br>
						<?php esc_html_e( 'Classifications: C-36 Plumbing, C-42 Sanitation, C-20 HVAC', 'bmg-theme' ); ?></p>

						<p><?php esc_html_e( 'License status can be verified at the CSLB website (www.cslb.ca.gov).', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Third-Party Links', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'This website may contain links to third-party websites, including our Google Business Profile, Yelp listing, and the California Contractors State License Board. These links are provided for your convenience. We do not control or endorse the content of external websites and are not responsible for their privacy practices or content.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Governing Law', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'These Terms of Use are governed by and construed in accordance with the laws of the State of California. Any disputes arising from these terms or your use of this website shall be subject to the exclusive jurisdiction of the courts of San Diego County, California.', 'bmg-theme' ); ?></p>

						<h2><?php esc_html_e( 'Contact', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'Questions about these terms? Contact us:', 'bmg-theme' ); ?></p>

						<address class="section-legal__contact">
							<?php esc_html_e( 'Phone:', 'bmg-theme' ); ?> <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone_display ); ?></a><br>
							<?php esc_html_e( 'Email:', 'bmg-theme' ); ?> <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a><br>
							<?php esc_html_e( 'RD Hydrojet Plumbing & Drain Inc.', 'bmg-theme' ); ?><br>
							<?php esc_html_e( 'East San Diego County, CA', 'bmg-theme' ); ?>
						</address>

						<h2><?php esc_html_e( 'Changes to These Terms', 'bmg-theme' ); ?></h2>

						<p><?php esc_html_e( 'We reserve the right to update these Terms of Use at any time. Changes take effect upon posting to this website. The "Last Updated" date at the top of this page reflects the most recent revision. Your continued use of the website after changes are posted constitutes acceptance of the revised terms.', 'bmg-theme' ); ?></p>

					</article>

				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
