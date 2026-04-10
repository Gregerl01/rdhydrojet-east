<?php
/**
 * Section: Before/After Gallery — "See the Montana Pools Difference"
 *
 * 3-column card grid with before/after image pairs, badges, and lightbox.
 * Images managed via Customizer fields so client can upload their own.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$cards = array(
	array(
		'before' => get_theme_mod( 'bmg_gallery_1_before', '' ),
		'after'  => get_theme_mod( 'bmg_gallery_1_after', '' ),
		'label'  => get_theme_mod( 'bmg_gallery_1_label', 'Hydro Jetted Sewer Line' ),
	),
	array(
		'before' => get_theme_mod( 'bmg_gallery_2_before', '' ),
		'after'  => get_theme_mod( 'bmg_gallery_2_after', '' ),
		'label'  => get_theme_mod( 'bmg_gallery_2_label', 'Tankless Water Heater Install' ),
	),
	array(
		'before' => get_theme_mod( 'bmg_gallery_3_before', '' ),
		'after'  => get_theme_mod( 'bmg_gallery_3_after', '' ),
		'label'  => get_theme_mod( 'bmg_gallery_3_label', 'Slab Leak Repair' ),
	),
);

// Check if at least one card has images.
$has_images = false;
foreach ( $cards as $card ) {
	if ( $card['before'] || $card['after'] ) {
		$has_images = true;
		break;
	}
}

// Placeholder image (grey rectangle with text) when no image is uploaded.
$placeholder_before = 'data:image/svg+xml,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" width="400" height="300" viewBox="0 0 400 300"><rect fill="#E2E8F0" width="400" height="300"/><text fill="#64748B" font-family="sans-serif" font-size="16" x="50%" y="50%" text-anchor="middle" dy=".3em">Before Photo</text></svg>' );
$placeholder_after  = 'data:image/svg+xml,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" width="400" height="300" viewBox="0 0 400 300"><rect fill="#E2E8F0" width="400" height="300"/><text fill="#64748B" font-family="sans-serif" font-size="16" x="50%" y="50%" text-anchor="middle" dy=".3em">After Photo</text></svg>' );
?>

<section id="gallery" class="section-gallery">
	<div class="container">

		<!-- Section Header -->
		<div class="text-center mb-5 bmg-reveal">
			<span class="section-pill">OUR WORK</span>
			<h2 class="section-title">Real Results Across East San Diego County</h2>
			<p class="section-sub">Before and after from hydro jetting, water heater installs, and slab leak repairs in East County homes. Every job backed by our workmanship guarantee.</p>
		</div>

		<!-- Gallery Cards (3-column) -->
		<div class="row gy-4 bmg-reveal-stagger">
			<?php foreach ( $cards as $card ) :
				$before_src = $card['before'] ? $card['before'] : $placeholder_before;
				$after_src  = $card['after'] ? $card['after'] : $placeholder_after;
				$before_is_real = (bool) $card['before'];
				$after_is_real  = (bool) $card['after'];
			?>
				<div class="col-md-6 col-lg-4 bmg-reveal">
					<div class="section-gallery__card">
						<div class="section-gallery__images">
							<!-- Before Image -->
							<div class="section-gallery__img-wrap">
								<?php if ( $before_is_real ) : ?>
									<img src="<?php echo esc_url( $before_src ); ?>"
										 alt="<?php echo esc_attr( $card['label'] ); ?> — Before"
										 class="section-gallery__img js-gallery-img"
										 loading="lazy">
								<?php else : ?>
									<img src="<?php echo esc_url( $before_src ); ?>"
										 alt="Before photo placeholder"
										 class="section-gallery__img"
										 loading="lazy">
								<?php endif; ?>
								<span class="section-gallery__badge section-gallery__badge--before">BEFORE</span>
							</div>
							<!-- After Image -->
							<div class="section-gallery__img-wrap">
								<?php if ( $after_is_real ) : ?>
									<img src="<?php echo esc_url( $after_src ); ?>"
										 alt="<?php echo esc_attr( $card['label'] ); ?> — After"
										 class="section-gallery__img js-gallery-img"
										 loading="lazy">
								<?php else : ?>
									<img src="<?php echo esc_url( $after_src ); ?>"
										 alt="After photo placeholder"
										 class="section-gallery__img"
										 loading="lazy">
								<?php endif; ?>
								<span class="section-gallery__badge section-gallery__badge--after">AFTER</span>
							</div>
						</div>
						<p class="section-gallery__label"><?php echo esc_html( $card['label'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- View More Link -->
		<div class="text-center mt-5">
			<a href="#" class="section-gallery__more-link">
				View More Results
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
			</a>
		</div>

	</div>
</section>

<!-- Lightbox Overlay -->
<div class="lightbox" id="lightbox" aria-hidden="true" role="dialog" aria-label="<?php esc_attr_e( 'Image lightbox', 'bmg-theme' ); ?>">
	<button class="lightbox__close" type="button" aria-label="<?php esc_attr_e( 'Close lightbox', 'bmg-theme' ); ?>">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
	</button>
	<img class="lightbox__img" src="" alt="">
</div>
