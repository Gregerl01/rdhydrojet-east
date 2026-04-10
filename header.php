<?php
/**
 * Header Template — RD Hydrojet East San Diego
 *
 * Sticky nav with top utility bar (desktop), phone icon + hamburger (mobile).
 * Contact info pulled from Customizer bmg_* variables.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(951) 600-0459' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
$email         = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );
$utility_left  = get_theme_mod( 'bmg_utility_left', 'Serving East San Diego County' );
$utility_right = get_theme_mod( 'bmg_utility_right', 'Available 24/7 for Emergencies' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Utility Bar (desktop only) -->
<div class="utility-bar d-none d-lg-block">
	<div class="container d-flex justify-content-center align-items-center">
		<span class="utility-bar__info">
			<?php echo esc_html( $utility_left ); ?>
			<span class="utility-bar__sep" aria-hidden="true">|</span>
			<?php echo esc_html( $utility_right ); ?>
		</span>
	</div>
</div>

<!-- Main Navigation (sticky) -->
<nav id="main-nav" class="navbar navbar-expand-lg site-nav" aria-label="<?php esc_attr_e( 'Main navigation', 'bmg-theme' ); ?>">
	<div class="container">

		<!-- Logo -->
		<a class="navbar-brand site-nav__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<span class="site-nav__logo-text">
					<span class="site-nav__logo-primary">RD Hydrojet</span>
					<span class="site-nav__logo-secondary">EAST</span>
				</span>
			<?php endif; ?>
		</a>

		<!-- Mobile: Phone + Hamburger -->
		<div class="d-flex d-lg-none align-items-center gap-2">
			<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn btn-sm btn-phone" aria-label="<?php esc_attr_e( 'Call us', 'bmg-theme' ); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
			</a>
			<button class="nav-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'bmg-theme' ); ?>">
				<span class="nav-toggler__bar"></span>
				<span class="nav-toggler__bar"></span>
				<span class="nav-toggler__bar"></span>
			</button>
		</div>

		<!-- Collapsible Menu -->
		<div class="collapse navbar-collapse" id="navbarContent">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container'       => false,
					'menu_class'      => 'navbar-nav ms-auto me-3 align-items-lg-center',
					'menu_id'         => 'primary-menu',
					'depth'           => 2,
					'walker'          => class_exists( 'Understrap_WP_Bootstrap_Navwalker' ) ? new Understrap_WP_Bootstrap_Navwalker() : null,
					'fallback_cb'     => 'bmg_nav_fallback',
				)
			);
			?>

			<!-- Desktop CTAs -->
			<div class="d-none d-lg-flex align-items-center site-nav__ctas">
				<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn nav-btn-outline">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
					<?php echo esc_html( $phone_display ); ?>
				</a>
				<a href="#quote" class="btn nav-btn-primary">Free Estimate</a>
			</div>

			<!-- Mobile menu bottom -->
			<div class="d-lg-none mt-4 pt-3 border-top nav-mobile-footer">
				<a href="#quote" class="btn btn-cta-primary w-100 mb-3">Request Free Estimate</a>
				<p class="small text-center mb-1">
					<a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone_display ); ?></a>
				</p>
				<p class="small text-center mb-0"><?php echo esc_html( $utility_right ); ?></p>
			</div>
		</div>

	</div>
</nav>
