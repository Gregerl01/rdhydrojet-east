<?php
/**
 * Template Name: About Page
 *
 * About RD Hydrojet Plumbing — 9 sections targeting trust, credentials,
 * and local relevance for East San Diego County plumbing searches.
 *
 * All copy is editable via Appearance > Customize > About Page.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

// Business info.
$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
$email         = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );

// Hero.
$about_hero_h1  = get_theme_mod( 'about_hero_h1', __( "East San Diego's Trusted Plumbing Team", 'bmg-theme' ) );
$about_hero_sub = get_theme_mod( 'about_hero_sub', __( 'Licensed, insured, and committed to honest work since 2003. Serving El Cajon, La Mesa, Santee, and all of East County.', 'bmg-theme' ) );

// Company Intro.
$about_intro_h2      = get_theme_mod( 'about_intro_h2', __( 'More Than a Plumbing Company', 'bmg-theme' ) );
$about_intro_p1_default = __( 'RD Hydrojet Plumbing & Drain Inc. is a licensed, full-service plumbing company serving East San Diego County. We handle everything from routine drain cleaning to complex sewer line repairs, water heater installations, gas line work, and 24/7 emergency calls.', 'bmg-theme' );
$about_intro_p2_default = __( "We're not a franchise. We're not a call center that dispatches whoever's available. We're a team of experienced plumbers who know East County infrastructure — the aging cast iron pipes in El Cajon, the hillside drainage challenges in Del Cerro, the hard water issues across Santee and Lakeside. When we show up, we already understand what we're likely dealing with.", 'bmg-theme' );
$about_intro_p1      = get_theme_mod( 'about_intro_p1', $about_intro_p1_default );
$about_intro_p2      = get_theme_mod( 'about_intro_p2', $about_intro_p2_default );
$about_intro_image   = (int) get_theme_mod( 'about_intro_image', 0 );

// Brand Story.
$about_story_h2      = get_theme_mod( 'about_story_h2', __( 'Started with One Truck and a Handshake', 'bmg-theme' ) );
$about_story_p1_default = __( 'RD Hydrojet started in 2003 with a single truck, a commercial-grade hydro jetter, and a simple rule: diagnose before you quote, and never sell someone work they don\'t need. That approach earned repeat customers fast, and word spread.', 'bmg-theme' );
$about_story_p2_default = __( "For years, we built our reputation across the Inland Empire — Murrieta, Temecula, Menifee. Homeowners trusted us because we showed up on time, explained what we found honestly, and fixed things right the first time. We didn't advertise much. We didn't need to. Referrals kept the phones ringing.", 'bmg-theme' );
$about_story_p3_default = __( 'We expanded into East San Diego County because the need was clear. Older homes, aging infrastructure, and too many plumbers offering quick fixes that don\'t last. East County homeowners deserve the same level of service we\'ve delivered for 20+ years — and now they have it.', 'bmg-theme' );
$about_story_p1      = get_theme_mod( 'about_story_p1', $about_story_p1_default );
$about_story_p2      = get_theme_mod( 'about_story_p2', $about_story_p2_default );
$about_story_p3      = get_theme_mod( 'about_story_p3', $about_story_p3_default );
$about_story_quote   = get_theme_mod( 'about_story_quote', __( "We don't just clear the line. We show you what's happening inside your pipes and fix the root cause.", 'bmg-theme' ) );

// Service Promise.
$about_promise_h2   = get_theme_mod( 'about_promise_h2', __( 'What You Can Expect From Every Job', 'bmg-theme' ) );
$about_promise_p1_default = __( "We answer the phone. We show up when we say we will. We explain what we find in plain English, not plumber jargon. We quote the job before we start it, and we don't pad the bill with work you didn't ask for.", 'bmg-theme' );
$about_promise_p2_default = __( "If something isn't right after we leave, call us. We'll come back and make it right. No arguments, no runaround. That's not a marketing promise — it's how we've operated since 2003, and it's why most of our work comes from referrals and repeat customers.", 'bmg-theme' );
$about_promise_p1   = get_theme_mod( 'about_promise_p1', $about_promise_p1_default );
$about_promise_p2   = get_theme_mod( 'about_promise_p2', $about_promise_p2_default );

get_header();
?>

<?php if ( ! class_exists( 'RankMath' ) && ! defined( 'WPSEO_VERSION' ) ) : ?>
<!-- LocalBusiness Schema -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "LocalBusiness",
	"@id": "<?php echo esc_url( home_url( '/' ) ); ?>#business",
	"name": "RD Hydrojet Plumbing & Drain Inc.",
	"description": "Licensed plumbing and hydro jetting for East San Diego County. Serving El Cajon, La Mesa, Santee, and all of East County since 2003. CA CSLB #1076642.",
	"url": "<?php echo esc_url( home_url( '/' ) ); ?>",
	"telephone": "<?php echo esc_attr( $phone_display ); ?>",
	"email": "<?php echo esc_attr( $email ); ?>",
	"foundingDate": "2003",
	"priceRange": "$$",
	"areaServed": [
		{ "@type": "City", "name": "El Cajon", "containedInPlace": { "@type": "State", "name": "California" } },
		{ "@type": "City", "name": "La Mesa", "containedInPlace": { "@type": "State", "name": "California" } },
		{ "@type": "City", "name": "Santee", "containedInPlace": { "@type": "State", "name": "California" } },
		{ "@type": "City", "name": "Lakeside", "containedInPlace": { "@type": "State", "name": "California" } },
		{ "@type": "City", "name": "Spring Valley", "containedInPlace": { "@type": "State", "name": "California" } },
		{ "@type": "City", "name": "Lemon Grove", "containedInPlace": { "@type": "State", "name": "California" } },
		{ "@type": "City", "name": "Rancho San Diego", "containedInPlace": { "@type": "State", "name": "California" } },
		{ "@type": "City", "name": "Alpine", "containedInPlace": { "@type": "State", "name": "California" } }
	],
	"address": {
		"@type": "PostalAddress",
		"addressLocality": "East San Diego County",
		"addressRegion": "CA",
		"addressCountry": "US"
	},
	"aggregateRating": {
		"@type": "AggregateRating",
		"ratingValue": "5.0",
		"reviewCount": "300"
	},
	"hasCredential": [
		{ "@type": "EducationalOccupationalCredential", "credentialCategory": "license", "name": "C-36 Plumbing", "identifier": "CA CSLB #1076642" },
		{ "@type": "EducationalOccupationalCredential", "credentialCategory": "license", "name": "C-42 Sanitation", "identifier": "CA CSLB #1076642" },
		{ "@type": "EducationalOccupationalCredential", "credentialCategory": "license", "name": "C-20 HVAC", "identifier": "CA CSLB #1076642" }
	]
}
</script>
<?php endif; ?>

<main id="main" class="site-main">

	<!-- Section 1: Hero -->
	<section class="section-about-hero section-dark">
		<div class="section-about-hero__bg" aria-hidden="true"></div>
		<div class="container section-about-hero__container">
			<nav class="section-about-hero__breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'bmg-theme' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'bmg-theme' ); ?></a>
				<span aria-hidden="true">/</span>
				<span><?php esc_html_e( 'About Us', 'bmg-theme' ); ?></span>
			</nav>
			<h1 class="section-about-hero__title bmg-reveal"><?php echo esc_html( $about_hero_h1 ); ?></h1>
			<p class="section-about-hero__sub bmg-reveal"><?php echo esc_html( $about_hero_sub ); ?></p>
			<div class="section-about-hero__ctas bmg-reveal">
				<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn btn-cta-primary d-inline-flex align-items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					<span><?php echo esc_html( $phone_display ); ?></span>
				</a>
			</div>
		</div>
	</section>

	<!-- Section 2: Company Introduction -->
	<section class="section-about-intro">
		<div class="container">
			<div class="row align-items-center gy-5">

				<div class="col-lg-7 bmg-reveal">
					<span class="section-pill"><?php esc_html_e( 'WHO WE ARE', 'bmg-theme' ); ?></span>
					<h2 class="section-title"><?php echo esc_html( $about_intro_h2 ); ?></h2>
					<div class="section-about-intro__text">
						<p><?php echo wp_kses_post( $about_intro_p1 ); ?></p>
						<p><?php echo wp_kses_post( $about_intro_p2 ); ?></p>
					</div>
					<ul class="section-about-intro__facts list-unstyled">
						<li>
							<strong><?php esc_html_e( 'Founded:', 'bmg-theme' ); ?></strong>
							<?php esc_html_e( '2003', 'bmg-theme' ); ?>
						</li>
						<li>
							<strong><?php esc_html_e( 'Licenses:', 'bmg-theme' ); ?></strong>
							<?php esc_html_e( 'C-36 Plumbing · C-42 Sanitation · C-20 HVAC', 'bmg-theme' ); ?>
						</li>
						<li>
							<strong><?php esc_html_e( 'Service area:', 'bmg-theme' ); ?></strong>
							<?php esc_html_e( '12+ East County communities', 'bmg-theme' ); ?>
						</li>
						<li>
							<strong><?php esc_html_e( 'Available:', 'bmg-theme' ); ?></strong>
							<?php esc_html_e( '24/7, including holidays', 'bmg-theme' ); ?>
						</li>
					</ul>
				</div>

				<div class="col-lg-5 bmg-reveal">
					<div class="section-about-intro__image-wrap">
						<?php if ( $about_intro_image ) : ?>
							<?php
							echo wp_get_attachment_image(
								$about_intro_image,
								'large',
								false,
								array(
									'class'   => 'section-about-intro__image',
									'alt'     => esc_attr__( 'RD Hydrojet Plumbing team', 'bmg-theme' ),
									'loading' => 'lazy',
								)
							);
							?>
						<?php else : ?>
							<div class="section-about-intro__placeholder" aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
								<span><?php esc_html_e( 'Team / truck photo', 'bmg-theme' ); ?></span>
							</div>
						<?php endif; ?>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Section 3: Brand Story -->
	<section class="section-about-narrative">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 bmg-reveal text-center">
					<span class="section-pill"><?php esc_html_e( 'OUR STORY', 'bmg-theme' ); ?></span>
					<h2 class="section-title"><?php echo esc_html( $about_story_h2 ); ?></h2>
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-lg-8 section-about-narrative__body bmg-reveal">
					<p><?php echo wp_kses_post( $about_story_p1 ); ?></p>
					<p><?php echo wp_kses_post( $about_story_p2 ); ?></p>
					<p><?php echo wp_kses_post( $about_story_p3 ); ?></p>
					<?php if ( $about_story_quote ) : ?>
						<blockquote class="section-about-narrative__quote">
							<p>&ldquo;<?php echo esc_html( $about_story_quote ); ?>&rdquo;</p>
						</blockquote>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 4: Why Choose Us -->
	<?php
	$why_cards = array(
		array(
			'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="14" rx="2"/><circle cx="12" cy="11" r="3"/><path d="M8 4V2"/><path d="M16 4V2"/></svg>',
			'title' => __( 'We Find the Problem First', 'bmg-theme' ),
			'desc'  => __( "Most plumbers start fixing before they know what's wrong. We run a camera inspection or diagnostic test before quoting any work. You see what we see.", 'bmg-theme' ),
		),
		array(
			'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
			'title' => __( 'Hospital-Grade Tools, Residential Care', 'bmg-theme' ),
			'desc'  => __( 'Our hydro jetting rigs, sewer cameras, and leak detection equipment are the same tools municipalities use. Your home gets that level of precision.', 'bmg-theme' ),
		),
		array(
			'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="9" y1="7" x2="15" y2="7"/><line x1="9" y1="11" x2="15" y2="11"/><line x1="9" y1="15" x2="13" y2="15"/></svg>',
			'title' => __( 'Written Estimates Before We Start', 'bmg-theme' ),
			'desc'  => __( "You'll never get a surprise bill from us. We provide a clear, written estimate before any work begins. If the scope changes, we tell you first.", 'bmg-theme' ),
		),
		array(
			'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
			'title' => __( 'We Leave It Cleaner Than We Found It', 'bmg-theme' ),
			'desc'  => __( 'Booties on at the door. Drop cloths down. Debris hauled away. We treat your home the way we\'d want ours treated.', 'bmg-theme' ),
		),
	);
	?>
	<section class="section-about-why">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'WHY CHOOSE US', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php esc_html_e( 'Why East County Homeowners Choose RD Hydrojet', 'bmg-theme' ); ?></h2>
			</div>
			<div class="row g-4 bmg-reveal-stagger">
				<?php foreach ( $why_cards as $card ) : ?>
					<div class="col-lg-6 bmg-reveal">
						<div class="section-about-why__card">
							<div class="section-about-why__icon" aria-hidden="true">
								<?php echo $card['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<h3 class="section-about-why__title"><?php echo esc_html( $card['title'] ); ?></h3>
							<p class="section-about-why__desc"><?php echo esc_html( $card['desc'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="text-center mt-5">
				<a href="<?php echo esc_url( home_url( '/plumbing-services/' ) ); ?>" class="section-about-why__link">
					<?php esc_html_e( 'See our full list of services', 'bmg-theme' ); ?>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
				</a>
			</div>
		</div>
	</section>

	<!-- Section 5: Stats Bar -->
	<section class="section-about-statbar section-dark">
		<div class="container">
			<div class="row text-center gy-4 bmg-reveal-stagger">
				<div class="col-6 col-lg-3 bmg-reveal">
					<div class="section-about-statbar__item">
						<span class="section-about-statbar__number">20+</span>
						<span class="section-about-statbar__label"><?php esc_html_e( 'Years in Business', 'bmg-theme' ); ?></span>
					</div>
				</div>
				<div class="col-6 col-lg-3 bmg-reveal">
					<div class="section-about-statbar__item">
						<span class="section-about-statbar__number">1,200+</span>
						<span class="section-about-statbar__label"><?php esc_html_e( 'Jobs Completed', 'bmg-theme' ); ?></span>
					</div>
				</div>
				<div class="col-6 col-lg-3 bmg-reveal">
					<div class="section-about-statbar__item">
						<span class="section-about-statbar__number">5.0&#9733;</span>
						<span class="section-about-statbar__label"><?php esc_html_e( 'Average Rating', 'bmg-theme' ); ?></span>
					</div>
				</div>
				<div class="col-6 col-lg-3 bmg-reveal">
					<div class="section-about-statbar__item">
						<span class="section-about-statbar__number">24/7</span>
						<span class="section-about-statbar__label"><?php esc_html_e( 'Emergency Service', 'bmg-theme' ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 6: Licensing & Credentials -->
	<?php
	$credentials = array(
		array(
			'title'  => __( 'C-36 Plumbing', 'bmg-theme' ),
			'detail' => __( 'CA CSLB #1076642', 'bmg-theme' ),
			'desc'   => __( 'Full residential and commercial plumbing — installation, repair, and maintenance.', 'bmg-theme' ),
			'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>',
		),
		array(
			'title'  => __( 'C-42 Sanitation', 'bmg-theme' ),
			'detail' => __( 'CA CSLB #1076642', 'bmg-theme' ),
			'desc'   => __( "Septic systems, sanitation lines, and sewer infrastructure — a credential most plumbers don't carry.", 'bmg-theme' ),
			'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2v20"/><path d="M5 8h14"/><path d="M5 16h14"/><circle cx="12" cy="12" r="10"/></svg>',
		),
		array(
			'title'  => __( 'C-20 HVAC', 'bmg-theme' ),
			'detail' => __( 'CA CSLB #1076642', 'bmg-theme' ),
			'desc'   => __( 'Heating, ventilation, and cooling system work — including gas line connections and water heater venting.', 'bmg-theme' ),
			'icon'   => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 1.98-3A2.5 2.5 0 0 1 9.5 2Z"/><path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-1.98-3A2.5 2.5 0 0 0 14.5 2Z"/></svg>',
		),
	);
	?>
	<section class="section-about-credentials">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'CREDENTIALS', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php esc_html_e( 'Licensed. Bonded. Insured. Verified.', 'bmg-theme' ); ?></h2>
			</div>
			<div class="row g-4 justify-content-center bmg-reveal-stagger">
				<?php foreach ( $credentials as $cred ) : ?>
					<div class="col-md-6 col-lg-4 bmg-reveal">
						<div class="section-about-credentials__card">
							<div class="section-about-credentials__icon" aria-hidden="true">
								<?php echo $cred['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<h3 class="section-about-credentials__title"><?php echo esc_html( $cred['title'] ); ?></h3>
							<p class="section-about-credentials__detail"><?php echo esc_html( $cred['detail'] ); ?></p>
							<p class="section-about-credentials__desc"><?php echo esc_html( $cred['desc'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="section-about-credentials__callout bmg-reveal">
				<div>
					<strong><?php esc_html_e( 'Want to verify?', 'bmg-theme' ); ?></strong>
					<?php esc_html_e( 'Look us up on the California Contractors State License Board.', 'bmg-theme' ); ?>
					<span class="section-about-credentials__license"><?php esc_html_e( 'CA CSLB #1076642', 'bmg-theme' ); ?></span>
				</div>
				<a href="https://www.cslb.ca.gov/onlineservices/checklicenseII/checklicense.aspx" target="_blank" rel="noopener" class="section-about-credentials__verify-link">
					<?php esc_html_e( 'CSLB License Check', 'bmg-theme' ); ?>
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
				</a>
			</div>
		</div>
	</section>

	<!-- Section 7: Our Service Promise -->
	<section class="section-about-promise">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 bmg-reveal text-center">
					<span class="section-pill"><?php esc_html_e( 'OUR PROMISE', 'bmg-theme' ); ?></span>
					<h2 class="section-title"><?php echo esc_html( $about_promise_h2 ); ?></h2>
					<div class="section-about-promise__body">
						<p><?php echo wp_kses_post( $about_promise_p1 ); ?></p>
						<p><?php echo wp_kses_post( $about_promise_p2 ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 8: Service Area -->
	<?php
	$areas = array(
		array(
			'name' => __( 'El Cajon', 'bmg-theme' ),
			'desc' => __( "East County's largest city. Older infrastructure, high demand for sewer and drain work.", 'bmg-theme' ),
			'slug' => 'el-cajon',
		),
		array(
			'name' => __( 'La Mesa', 'bmg-theme' ),
			'desc' => __( 'Historic homes near the Village, newer builds in Mt. Helix. We handle both.', 'bmg-theme' ),
			'slug' => 'la-mesa',
		),
		array(
			'name' => __( 'Santee', 'bmg-theme' ),
			'desc' => __( 'Growing suburban community. Water heater and sewer line specialists.', 'bmg-theme' ),
			'slug' => 'santee',
		),
		array(
			'name' => __( 'Lakeside', 'bmg-theme' ),
			'desc' => __( 'Well water and septic system experts. C-42 licensed.', 'bmg-theme' ),
			'slug' => 'lakeside',
		),
	);
	$pill_areas = array( 'Spring Valley', 'Lemon Grove', 'Rancho San Diego', 'Alpine', 'San Carlos', 'Del Cerro', 'College Area' );
	?>
	<section class="section-about-areas">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'WHERE WE WORK', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php esc_html_e( 'Serving All of East San Diego County', 'bmg-theme' ); ?></h2>
				<p class="section-sub"><?php esc_html_e( 'From El Cajon to Alpine, our licensed plumbers are already in your neighborhood.', 'bmg-theme' ); ?></p>
			</div>

			<div class="row g-4 bmg-reveal-stagger">
				<?php foreach ( $areas as $area ) : ?>
					<div class="col-6 col-lg-3 bmg-reveal">
						<div class="section-about-areas__card">
							<div class="section-about-areas__icon" aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
							</div>
							<h3 class="section-about-areas__name"><?php echo esc_html( $area['name'] ); ?></h3>
							<p class="section-about-areas__desc"><?php echo esc_html( $area['desc'] ); ?></p>
							<a href="<?php echo esc_url( home_url( '/plumber-in-' . $area['slug'] . '/' ) ); ?>" class="section-about-areas__link">
								<?php esc_html_e( 'Learn More', 'bmg-theme' ); ?>
								<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="section-about-areas__pills-wrap">
				<h4 class="section-about-areas__pills-title"><?php esc_html_e( 'Also Serving', 'bmg-theme' ); ?></h4>
				<div class="section-about-areas__pills">
					<?php foreach ( $pill_areas as $pill ) : ?>
						<span class="section-about-areas__pill"><?php echo esc_html( $pill ); ?></span>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="text-center mt-5">
				<p class="section-about-areas__cta-text"><?php esc_html_e( "Don't see your neighborhood? Give us a call — we probably serve it.", 'bmg-theme' ); ?></p>
				<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn btn-cta-primary d-inline-flex align-items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					<span><?php echo esc_html( $phone_display ); ?></span>
				</a>
			</div>
		</div>
	</section>

	<!-- Section 9: CTA -->
	<?php get_template_part( 'template-parts/sections/section', 'cta' ); ?>

</main>

<?php
get_footer();
