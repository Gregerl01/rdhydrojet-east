<?php
/**
 * Blog Archive / Posts Page
 *
 * This is the WordPress blog index template (home.php). It displays
 * the latest posts in a responsive card grid when a static front page
 * is set and a separate "Posts page" is assigned in Settings → Reading.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );

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
				<span><?php esc_html_e( 'Blog', 'bmg-theme' ); ?></span>
			</nav>
			<h1 class="section-sd-hero__title bmg-reveal"><?php esc_html_e( 'Plumbing Tips & News for East San Diego County', 'bmg-theme' ); ?></h1>
			<p class="section-sd-hero__sub bmg-reveal"><?php esc_html_e( 'Expert advice, maintenance tips, and local plumbing insights from the RD Hydrojet team.', 'bmg-theme' ); ?></p>
		</div>
	</section>

	<!-- Section 2: Blog Grid -->
	<section class="section-blog">
		<div class="container">

			<?php if ( have_posts() ) : ?>

				<div class="row g-4 bmg-reveal bmg-reveal-stagger">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						// Estimated read time.
						$content    = get_the_content();
						$word_count = str_word_count( wp_strip_all_tags( $content ) );
						$read_time  = max( 1, (int) ceil( $word_count / 200 ) );

						// First category.
						$categories    = get_the_category();
						$category_name = ! empty( $categories ) ? $categories[0]->name : '';
						?>

						<div class="col-lg-4 col-md-6">
							<article class="section-blog__card">
								<a href="<?php the_permalink(); ?>" class="section-blog__card-link">
									<div class="section-blog__card-image">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php echo get_the_post_thumbnail( $post->ID, 'medium_large', array( 'class' => 'section-blog__card-img', 'loading' => 'lazy' ) ); ?>
										<?php else : ?>
											<div class="section-blog__card-placeholder">
												<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
											</div>
										<?php endif; ?>
									</div>
									<div class="section-blog__card-body">
										<?php if ( $category_name ) : ?>
											<span class="section-blog__card-category"><?php echo esc_html( $category_name ); ?></span>
										<?php endif; ?>
										<h2 class="section-blog__card-title"><?php the_title(); ?></h2>
										<p class="section-blog__card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25, '...' ) ); ?></p>
										<div class="section-blog__card-meta">
											<span class="section-blog__card-date"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
											<span class="section-blog__card-read"><?php echo esc_html( $read_time ); ?> <?php esc_html_e( 'min read', 'bmg-theme' ); ?></span>
										</div>
										<span class="section-blog__card-more">
											<?php esc_html_e( 'Read More', 'bmg-theme' ); ?>
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
										</span>
									</div>
								</a>
							</article>
						</div>

					<?php endwhile; ?>

				</div><!-- .row -->

				<?php
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => '&laquo; ' . esc_html__( 'Previous', 'bmg-theme' ),
					'next_text' => esc_html__( 'Next', 'bmg-theme' ) . ' &raquo;',
					'class'     => 'section-blog__pagination',
				) );
				?>

			<?php else : ?>

				<p class="section-blog__no-posts text-center">
					<?php esc_html_e( 'No posts yet. Check back soon for plumbing tips and advice.', 'bmg-theme' ); ?>
				</p>

			<?php endif; ?>

		</div><!-- .container -->
	</section>

</main>

<?php
get_footer();
