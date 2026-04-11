<?php
/**
 * Front Page Template — RD Hydrojet East San Diego
 *
 * Homepage — 8 sections. See CLAUDE.md + CONTENT.md.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main id="main" class="site-main">

	<?php
	// Section 1: Hero + Lead Form + Stats.
	get_template_part( 'template-parts/sections/section', 'hero' );

	// Section 2: Values Strip — dark bg, 4 icon tiles.
	get_template_part( 'template-parts/sections/section', 'values' );

	// Section 3: Process — 3-step "How We Work".
	get_template_part( 'template-parts/sections/section', 'process' );

	// Section 4: Features — 6 plumbing service cards.
	get_template_part( 'template-parts/sections/section', 'features' );

	// Section 5: Testimonials — 6 review cards + Google badge.
	get_template_part( 'template-parts/sections/section', 'testimonials' );

	// Section 6: Emergency Plumbing — dark section, 3 cards, dual CTA.
	get_template_part( 'template-parts/sections/section', 'emergency' );

	// Section 7: Service Areas — East County cities + pills.
	get_template_part( 'template-parts/sections/section', 'service-areas' );

	// Section 8: Final CTA — dark bg, form left, contact cards right.
	get_template_part( 'template-parts/sections/section', 'cta' );
	?>

</main>

<?php
get_footer();
