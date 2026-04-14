<?php
/**
 * Template Name: Services Page
 *
 * Services hub — 8-card grid linking to individual service detail
 * pages, with FAQ, differentiator strip, process, and service-area
 * link strip. Built for East San Diego County SEO targeting.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
$email         = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );

// Services array — centralized source.
$services = bmg_get_services();

// FAQ array.
$faqs = array(
	array(
		'q' => __( 'What plumbing services do you offer in East San Diego?', 'bmg-theme' ),
		'a' => __( 'We provide hydro jetting, drain and sewer repair, water heater installation and repair, gas line work, leak detection, toilet repair, emergency plumbing, and whole-home repiping. All services are available across El Cajon, La Mesa, Santee, and surrounding East County communities.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'How do I know if I need hydro jetting or regular drain cleaning?', 'bmg-theme' ),
		'a' => __( "If you've had a drain snaked multiple times and the clog keeps coming back, hydro jetting is likely the better solution. Snaking punches through the clog; hydro jetting clears the entire pipe wall. We run a camera inspection first to recommend the right approach.", 'bmg-theme' ),
	),
	array(
		'q' => __( 'Do you offer same-day plumbing service?', 'bmg-theme' ),
		'a' => __( 'Yes. We offer same-day appointments for most services and 24/7 emergency response for urgent situations like burst pipes, sewer backups, and gas leaks.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'How much does a plumbing service call cost?', 'bmg-theme' ),
		'a' => __( 'Service call costs vary depending on the type of work needed. We provide free estimates for standard services and always give you a written quote before starting any work. No surprise bills.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'Can you work on older homes with cast iron or clay pipes?', 'bmg-theme' ),
		'a' => __( 'Absolutely. Many East San Diego homes built in the 1960s-80s have cast iron or clay sewer lines. We specialize in diagnosing and repairing aging pipe infrastructure, including trenchless repair options that minimize disruption.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'Are your plumbers licensed for gas line work?', 'bmg-theme' ),
		'a' => __( 'Yes. We hold a C-36 Plumbing license, C-42 Sanitation license, and C-20 HVAC license — CA CSLB #1076642. Our team is certified for gas line installation, repair, and inspection.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'What areas do you serve?', 'bmg-theme' ),
		'a' => __( 'We serve all of East San Diego County, including El Cajon, La Mesa, Santee, Lakeside, Spring Valley, Lemon Grove, Rancho San Diego, Alpine, San Carlos, Del Cerro, and College Area.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'Do you offer warranties on your work?', 'bmg-theme' ),
		'a' => __( 'Yes. All of our plumbing services come with a workmanship guarantee. Specific warranty terms vary by service type and are included in your written estimate.', 'bmg-theme' ),
	),
);

// Service area strip cities.
$area_cities = array(
	'el-cajon'      => 'El Cajon',
	'la-mesa'       => 'La Mesa',
	'santee'        => 'Santee',
	'lakeside'      => 'Lakeside',
	'spring-valley' => 'Spring Valley',
	'lemon-grove'   => 'Lemon Grove',
);

get_header();
?>

<!-- Service + FAQPage Schema -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@graph": [
		{
			"@type": "LocalBusiness",
			"@id": "<?php echo esc_url( home_url( '/' ) ); ?>#business",
			"name": "RD Hydrojet Plumbing & Drain Inc.",
			"url": "<?php echo esc_url( home_url( '/' ) ); ?>",
			"telephone": "<?php echo esc_attr( $phone_display ); ?>",
			"email": "<?php echo esc_attr( $email ); ?>",
			"priceRange": "$$",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "East San Diego County",
				"addressRegion": "CA",
				"addressCountry": "US"
			}
		},
		{
			"@type": "ItemList",
			"@id": "<?php echo esc_url( get_permalink() ); ?>#services",
			"name": "Plumbing Services",
			"itemListElement": [
				<?php
				$schema_items = array();
				foreach ( $services as $idx => $service ) {
					$schema_items[] = sprintf(
						'{
							"@type": "ListItem",
							"position": %d,
							"item": {
								"@type": "Service",
								"name": "%s",
								"description": "%s",
								"url": "%s",
								"provider": { "@id": "%s#business" },
								"areaServed": "East San Diego County"
							}
						}',
						$idx + 1,
						esc_js( wp_strip_all_tags( html_entity_decode( $service['title'] ) ) ),
						esc_js( wp_strip_all_tags( html_entity_decode( $service['desc'] ) ) ),
						esc_url( home_url( $service['link'] ) ),
						esc_url( home_url( '/' ) )
					);
				}
				echo implode( ",\n", $schema_items );
				?>
			]
		},
		{
			"@type": "FAQPage",
			"@id": "<?php echo esc_url( get_permalink() ); ?>#faq",
			"mainEntity": [
				<?php
				$schema_faqs = array();
				foreach ( $faqs as $faq ) {
					$schema_faqs[] = sprintf(
						'{
							"@type": "Question",
							"name": "%s",
							"acceptedAnswer": {
								"@type": "Answer",
								"text": "%s"
							}
						}',
						esc_js( $faq['q'] ),
						esc_js( $faq['a'] )
					);
				}
				echo implode( ",\n", $schema_faqs );
				?>
			]
		}
	]
}
</script>

<main id="main" class="site-main">

	<!-- Section 1: Hero -->
	<section class="section-services-hero section-dark">
		<div class="section-services-hero__bg" aria-hidden="true"></div>
		<div class="container section-services-hero__container">
			<nav class="section-services-hero__breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'bmg-theme' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'bmg-theme' ); ?></a>
				<span aria-hidden="true">/</span>
				<span><?php esc_html_e( 'Services', 'bmg-theme' ); ?></span>
			</nav>
			<h1 class="section-services-hero__title bmg-reveal"><?php esc_html_e( 'Plumbing Services for East San Diego County', 'bmg-theme' ); ?></h1>
			<p class="section-services-hero__sub bmg-reveal"><?php esc_html_e( 'From hydro jetting to emergency repairs — licensed solutions for every residential and commercial plumbing need.', 'bmg-theme' ); ?></p>
		</div>
	</section>

	<!-- Section 2: Services Introduction -->
	<section class="section-services-intro">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center bmg-reveal">
					<span class="section-pill"><?php esc_html_e( 'WHAT WE DO', 'bmg-theme' ); ?></span>
					<h2 class="section-title"><?php esc_html_e( 'Full-Service Plumbing, Done Right', 'bmg-theme' ); ?></h2>
					<p class="section-services-intro__body">
						<?php
						printf(
							/* translators: %1$s drain cleaning link, %2$s water heater link, %3$s hydro jetting link, %4$s gas line link */
							wp_kses(
								__( 'RD Hydrojet Plumbing provides a complete range of residential and commercial plumbing services across East San Diego County. Whether you need routine %1$s, a %2$s, %3$s for a stubborn sewer line, or a %4$s that has to be done to code — our licensed team handles it. Every job starts with a proper diagnosis and a written estimate before work begins.', 'bmg-theme' ),
								array( 'a' => array( 'href' => array() ) )
							),
							'<a href="' . esc_url( home_url( '/services/drain-cleaning/' ) ) . '">drain cleaning</a>',
							'<a href="' . esc_url( home_url( '/services/water-heater-services/' ) ) . '">water heater replacement</a>',
							'<a href="' . esc_url( home_url( '/services/hydro-jetting/' ) ) . '">hydro jetting</a>',
							'<a href="' . esc_url( home_url( '/services/gas-line-repair/' ) ) . '">gas line repair</a>'
						);
						?>
					</p>
					<p class="section-services-intro__cta">
						<?php esc_html_e( 'Need help now?', 'bmg-theme' ); ?>
						<a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone_display ); ?></a>
						<?php esc_html_e( 'or', 'bmg-theme' ); ?>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'request a free estimate', 'bmg-theme' ); ?></a>.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 3: Services Grid -->
	<section class="section-services-grid">
		<div class="container">
			<h2 class="visually-hidden"><?php esc_html_e( 'Our Services', 'bmg-theme' ); ?></h2>
			<div class="row g-4 bmg-reveal-stagger">
				<?php foreach ( $services as $service ) : ?>
					<div class="col-lg-6 bmg-reveal">
						<a
							href="<?php echo esc_url( home_url( $service['link'] ) ); ?>"
							class="section-services__card"
						>
							<div class="section-services__card-icon" aria-hidden="true">
								<?php echo $service['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<h3 class="section-services__card-title"><?php echo wp_kses_post( $service['title'] ); ?></h3>
							<p class="section-services__card-desc"><?php echo esc_html( $service['desc'] ); ?></p>
							<ul class="section-services__card-bullets list-unstyled">
								<?php foreach ( $service['bullets'] as $bullet ) : ?>
									<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
										<?php echo wp_kses_post( $bullet ); ?>
									</li>
								<?php endforeach; ?>
							</ul>
							<span class="section-services__card-link">
								<?php esc_html_e( 'Learn More', 'bmg-theme' ); ?>
								<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</span>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Section 4: Compact Differentiator Strip -->
	<?php
	$differentiators = array(
		array(
			'title' => __( 'Licensed &amp; Insured', 'bmg-theme' ),
			'sub'   => __( 'CA CSLB #1076642', 'bmg-theme' ),
			'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>',
		),
		array(
			'title' => __( 'Same-Day Service', 'bmg-theme' ),
			'sub'   => __( 'Fast response, every time', 'bmg-theme' ),
			'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
		),
		array(
			'title' => __( 'Upfront Pricing', 'bmg-theme' ),
			'sub'   => __( 'No surprises, no hidden fees', 'bmg-theme' ),
			'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="9" y1="7" x2="15" y2="7"/><line x1="9" y1="11" x2="15" y2="11"/><line x1="9" y1="15" x2="13" y2="15"/></svg>',
		),
		array(
			'title' => __( '20+ Years Experience', 'bmg-theme' ),
			'sub'   => __( 'East County specialists', 'bmg-theme' ),
			'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
		),
	);
	?>
	<section class="section-values section-dark">
		<div class="container">
			<div class="row gy-4 justify-content-center text-center bmg-reveal-stagger">
				<?php foreach ( $differentiators as $diff ) : ?>
					<div class="col-6 col-lg-3 bmg-reveal">
						<div class="section-values__item">
							<div class="section-values__icon" aria-hidden="true">
								<?php echo $diff['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<h3 class="section-values__label"><?php echo wp_kses_post( $diff['title'] ); ?></h3>
							<p class="section-values__sub"><?php echo esc_html( $diff['sub'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Section 5: Process -->
	<section class="section-process">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'HOW IT WORKS', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php esc_html_e( 'Simple, Honest Service — Every Time', 'bmg-theme' ); ?></h2>
			</div>
			<div class="row gy-4 section-process__grid bmg-reveal-stagger justify-content-center">

				<div class="col-md-6 col-lg-4 bmg-reveal">
					<div class="section-process__step">
						<div class="section-process__icon-wrap">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
							<span class="section-process__step-num">01</span>
						</div>
						<h3 class="section-process__step-title"><?php esc_html_e( 'Call or Request Online', 'bmg-theme' ); ?></h3>
						<p class="section-process__step-desc"><?php esc_html_e( 'Reach us by phone or submit a request through our website. We respond fast — usually within the hour.', 'bmg-theme' ); ?></p>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 bmg-reveal">
					<div class="section-process__step">
						<div class="section-process__icon-wrap">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
							<span class="section-process__step-num">02</span>
						</div>
						<h3 class="section-process__step-title"><?php esc_html_e( 'Diagnosis &amp; Estimate', 'bmg-theme' ); ?></h3>
						<p class="section-process__step-desc"><?php esc_html_e( 'We arrive on-site, diagnose the issue properly, and give you a clear written estimate before touching anything.', 'bmg-theme' ); ?></p>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 bmg-reveal">
					<div class="section-process__step">
						<div class="section-process__icon-wrap">
							<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
							<span class="section-process__step-num">03</span>
						</div>
						<h3 class="section-process__step-title"><?php esc_html_e( 'Professional Repair', 'bmg-theme' ); ?></h3>
						<p class="section-process__step-desc"><?php esc_html_e( 'Our licensed plumbers fix the problem right, clean up after themselves, and make sure everything is tested before we leave.', 'bmg-theme' ); ?></p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Section 6: Service Area Strip -->
	<section class="section-services-areas-strip">
		<div class="container">
			<p class="section-services-areas-strip__text bmg-reveal">
				<?php esc_html_e( 'Proudly serving', 'bmg-theme' ); ?>
				<?php
				$links = array();
				foreach ( $area_cities as $slug => $name ) {
					$links[] = sprintf(
						'<a href="%s">%s</a>',
						esc_url( home_url( '/plumber-in-' . $slug . '/' ) ),
						esc_html( $name )
					);
				}
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo implode( ', ', $links );
				?>
				<?php esc_html_e( ', and all of East San Diego County.', 'bmg-theme' ); ?>
			</p>
		</div>
	</section>

	<!-- Section 7: FAQ -->
	<section id="faq" class="section-faq">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'COMMON QUESTIONS', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php esc_html_e( 'Plumbing Service FAQs', 'bmg-theme' ); ?></h2>
			</div>
			<div class="row justify-content-center bmg-reveal">
				<div class="col-lg-9">
					<div class="section-faq__accordion accordion" id="servicesFaqAccordion">
						<?php foreach ( $faqs as $index => $faq ) :
							$id         = 'svc-faq-' . ( $index + 1 );
							$heading_id = $id . '-heading';
							$collapsed  = ( 0 === $index ) ? '' : 'collapsed';
							$expanded   = ( 0 === $index ) ? 'true' : 'false';
							$show       = ( 0 === $index ) ? ' show' : '';
							?>
							<div class="accordion-item">
								<h3 class="accordion-header" id="<?php echo esc_attr( $heading_id ); ?>">
									<button
										class="accordion-button <?php echo esc_attr( $collapsed ); ?>"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#<?php echo esc_attr( $id ); ?>"
										aria-expanded="<?php echo esc_attr( $expanded ); ?>"
										aria-controls="<?php echo esc_attr( $id ); ?>"
									>
										<?php echo esc_html( $faq['q'] ); ?>
									</button>
								</h3>
								<div
									id="<?php echo esc_attr( $id ); ?>"
									class="accordion-collapse collapse<?php echo esc_attr( $show ); ?>"
									aria-labelledby="<?php echo esc_attr( $heading_id ); ?>"
									data-bs-parent="#servicesFaqAccordion"
								>
									<div class="accordion-body">
										<?php echo esc_html( $faq['a'] ); ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 8: Final CTA -->
	<?php get_template_part( 'template-parts/sections/section', 'cta' ); ?>

</main>

<?php
get_footer();
