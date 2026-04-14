<?php
/**
 * Section: Testimonials — "What East County Homeowners Say"
 *
 * 6 review cards (3x2) + Google badge.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$testimonials = array(
	array(
		'quote'    => 'Called at 11pm with a sewer backup and they had someone at our house in under an hour. Found the root intrusion with the camera and cleared it the same night. Saved us from a much bigger mess.',
		'name'     => 'Michael Torres',
		'location' => 'El Cajon',
		'service'  => '24/7 Emergency',
	),
	array(
		'quote'    => "We'd had three plumbers out in two years for the same recurring clog. RD ran the camera, found grease buildup the others missed, and hydro-jetted the line. No issues since.",
		'name'     => 'Karen Walsh',
		'location' => 'La Mesa',
		'service'  => 'Hydro Jetting',
	),
	array(
		'quote'    => "Honest pricing, clean work, and they took the time to show me the camera footage before and after. First plumber I've used who treated me like I could understand the problem.",
		'name'     => 'David Nguyen',
		'location' => 'Santee',
		'service'  => 'Drain &amp; Sewer Repair',
	),
	array(
		'quote'    => 'Tankless water heater install took one day and the quote was exactly what they charged. Professional crew, respected the house, cleaned everything up. Highly recommend.',
		'name'     => 'Sandra Ortiz',
		'location' => 'Lakeside',
		'service'  => 'Water Heater',
	),
	array(
		'quote'    => 'I manage several rental properties in Spring Valley. RD is the only plumber I call now. Fast, reliable, and they document everything so I can share with owners. Game changer.',
		'name'     => 'Jon Rafferty',
		'location' => 'Spring Valley',
		'service'  => 'Commercial Service',
	),
	array(
		'quote'    => 'Slab leak under the kitchen. They used electronic detection to pinpoint it exactly and re-routed without tearing up the whole floor. Saved us thousands compared to the first estimate we got.',
		'name'     => 'Rachel Kim',
		'location' => 'Rancho San Diego',
		'service'  => 'Leak Detection',
	),
);
?>

<section id="reviews" class="section-testimonials">
	<div class="container">

		<!-- Section Header -->
		<div class="text-center mb-4 bmg-reveal">
			<span class="section-pill">TESTIMONIALS</span>
			<h2 class="section-title">What East County Homeowners Say</h2>
		</div>

		<!-- Google Badge -->
		<div class="text-center mb-5">
			<div class="section-testimonials__google-badge">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48" aria-hidden="true"><path fill="#4285F4" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#34A853" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59a14.5 14.5 0 0 1 0-9.18l-7.98-6.19a24.01 24.01 0 0 0 0 21.56l7.98-6.19z"/><path fill="#EA4335" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>
				<span class="section-testimonials__stars" aria-label="5.0 out of 5 stars">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
				</span>
				<strong>5.0</strong> on Google <span class="text-muted">(300+ reviews)</span>
			</div>
		</div>

		<!-- Testimonial Cards (3x2) -->
		<div class="row gy-4 bmg-reveal-stagger">
			<?php foreach ( $testimonials as $review ) : ?>
				<div class="col-md-6 col-lg-4 bmg-reveal">
					<div class="section-testimonials__card">
						<div class="section-testimonials__card-quote" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" opacity="0.25"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
						</div>

						<!-- Stars -->
						<div class="section-testimonials__card-stars" aria-label="5 stars">
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
						</div>

						<blockquote class="section-testimonials__card-text">
							<?php echo wp_kses_post( $review['quote'] ); ?>
						</blockquote>

						<div class="section-testimonials__card-footer">
							<div class="section-testimonials__card-avatar">
								<?php echo esc_html( mb_substr( $review['name'], 0, 1 ) ); ?>
							</div>
							<div class="section-testimonials__card-author">
								<strong><?php echo esc_html( $review['name'] ); ?></strong>
								<span><?php echo esc_html( $review['location'] ); ?></span>
							</div>
							<div class="section-testimonials__card-tag"><?php echo wp_kses_post( $review['service'] ); ?></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Below Cards: Link + CTA -->
		<div class="text-center mt-5">
			<a href="https://www.google.com/maps/place/RD+Hydrojet+Plumbing" class="section-testimonials__google-link" target="_blank" rel="noopener noreferrer">
				Read More on Google
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
			</a>
			<div class="mt-3">
				<a href="#quote" class="btn btn-cta-primary">Request Your Free Estimate</a>
			</div>
		</div>

	</div>
</section>
