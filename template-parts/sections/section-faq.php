<?php
/**
 * Section: FAQ
 *
 * 8-question Bootstrap accordion targeting East San Diego County
 * plumbing searches. Placed between service areas and the final CTA
 * on the homepage.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$faqs = array(
	array(
		'q' => __( 'Do you offer emergency plumbing services in East San Diego?', 'bmg-theme' ),
		'a' => __( "Yes. RD Hydrojet Plumbing provides 24/7 emergency plumbing services across El Cajon, La Mesa, Santee, and nearby areas. Whether it's a burst pipe, sewer backup, or water heater failure, we're available day or night to help.", 'bmg-theme' ),
	),
	array(
		'q' => __( 'What areas do you serve?', 'bmg-theme' ),
		'a' => __( 'We proudly serve homeowners and businesses in El Cajon, La Mesa, Santee, Lakeside, Spring Valley, Lemon Grove, Rancho San Diego, Alpine, San Carlos, Del Cerro, College Area, and the surrounding East San Diego County communities.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'What is hydro jetting and when is it needed?', 'bmg-theme' ),
		'a' => __( "Hydro jetting is a powerful, high-pressure drain cleaning method that removes grease, sludge, roots, and scale from your plumbing lines. It's ideal for recurring clogs, slow drains, or blocked sewer lines.", 'bmg-theme' ),
	),
	array(
		'q' => __( 'Are your plumbers licensed and insured?', 'bmg-theme' ),
		'a' => __( 'Yes, all of our technicians are fully licensed, bonded, and insured. RD Hydrojet Plumbing has been operating since 2003 and is committed to providing safe, code-compliant plumbing services. CA CSLB #1076642.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'Do you offer free estimates?', 'bmg-theme' ),
		'a' => __( 'Yes. We provide free, no-obligation estimates for all standard plumbing services.', 'bmg-theme' ),
	),
	array(
		'q' => __( "What's the difference between snaking and hydro jetting?", 'bmg-theme' ),
		'a' => __( 'Snaking punches a hole through a clog. Hydro jetting scours the entire pipe wall clean, removing grease, scale, and roots for a longer-lasting result.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'Do you work on commercial properties?', 'bmg-theme' ),
		'a' => __( 'Yes. We serve restaurants, apartment complexes, office buildings, and retail properties across East San Diego County.', 'bmg-theme' ),
	),
	array(
		'q' => __( 'What payment methods do you accept?', 'bmg-theme' ),
		'a' => __( 'We accept cash, checks, and all major credit cards. Financing available for larger projects.', 'bmg-theme' ),
	),
);
?>

<section id="faq" class="section-faq">
	<div class="container">

		<!-- Section Header -->
		<div class="text-center mb-5 bmg-reveal">
			<span class="section-pill">FAQ</span>
			<h2 class="section-title">Frequently Asked Questions</h2>
			<p class="section-sub">Quick answers to the questions we hear most often from East County homeowners and property managers.</p>
		</div>

		<!-- Accordion -->
		<div class="row justify-content-center bmg-reveal">
			<div class="col-lg-9">
				<div class="section-faq__accordion accordion" id="faqAccordion">
					<?php foreach ( $faqs as $index => $faq ) :
						$id         = 'faq-' . ( $index + 1 );
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
								data-bs-parent="#faqAccordion"
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
