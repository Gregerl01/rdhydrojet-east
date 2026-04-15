<?php
/**
 * Single Blog Post Template
 *
 * Hero with breadcrumb + meta, featured image, content area,
 * author/CTA box, and related posts from the same category.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

get_header();

$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
?>

<main id="main" class="site-main">

<?php
while ( have_posts() ) :
	the_post();

	// Estimated read time.
	$content    = get_the_content();
	$word_count = str_word_count( wp_strip_all_tags( $content ) );
	$read_time  = max( 1, (int) ceil( $word_count / 250 ) );

	// First category.
	$categories = get_the_category();
	$category   = ! empty( $categories ) ? $categories[0] : null;
	?>

	<!-- 1. Hero -->
	<section class="section-sd-hero section-dark">
		<div class="container">

			<!-- Breadcrumb -->
			<nav aria-label="<?php esc_attr_e( 'Breadcrumb', 'bmg-theme' ); ?>" class="section-sd-hero__breadcrumb mb-3">
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'bmg-theme' ); ?></a>
					</li>
					<li class="breadcrumb-item">
						<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php esc_html_e( 'Blog', 'bmg-theme' ); ?></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
						<?php the_title(); ?>
					</li>
				</ol>
			</nav>

			<!-- Title -->
			<h1 class="section-sd-hero__title bmg-reveal">
				<?php the_title(); ?>
			</h1>

			<!-- Meta Row -->
			<div class="section-sd-hero__meta bmg-reveal">
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
					<?php echo esc_html( get_the_date( 'M j, Y' ) ); ?>
				</time>

				<?php if ( $category ) : ?>
					<span class="section-sd-hero__meta-sep" aria-hidden="true">&middot;</span>
					<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" class="section-sd-hero__meta-cat">
						<?php echo esc_html( $category->name ); ?>
					</a>
				<?php endif; ?>

				<span class="section-sd-hero__meta-sep" aria-hidden="true">&middot;</span>
				<span class="section-sd-hero__meta-read">
					<?php
					printf(
						/* translators: %d: estimated number of minutes to read */
						esc_html( _n( '%d min read', '%d min read', $read_time, 'bmg-theme' ) ),
						(int) $read_time
					);
					?>
				</span>
			</div>

		</div>
	</section>

	<!-- 2. Featured Image -->
	<?php if ( has_post_thumbnail() ) : ?>
		<section class="section-blog-single__hero-image">
			<div class="container">
				<div class="section-blog-single__hero-image-wrap mx-auto" style="max-width: 900px;">
					<?php
					the_post_thumbnail(
						'large',
						array( 'class' => 'section-blog-single__featured-img' )
					);
					?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- 3. Content Area -->
	<section class="section-blog-single__content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">

					<article class="section-blog-single__article">
						<?php the_content(); ?>
					</article>

					<!-- 4. Author / CTA Box -->
					<div class="section-blog-single__cta">
						<h3 class="section-blog-single__cta-title">
							<?php esc_html_e( 'Need plumbing help in East San Diego County?', 'bmg-theme' ); ?>
						</h3>
						<p class="section-blog-single__cta-text">
							<?php esc_html_e( 'Our licensed team is ready to help. Free estimates, same-day service, 24/7 emergency response.', 'bmg-theme' ); ?>
						</p>
						<div class="section-blog-single__cta-buttons d-flex flex-wrap gap-3">
							<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn btn-cta-primary d-inline-flex align-items-center gap-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
								<?php
								printf(
									/* translators: %s: phone number */
									esc_html__( 'Call %s', 'bmg-theme' ),
									esc_html( $phone_display )
								);
								?>
							</a>
							<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-cta-primary section-blog-single__cta-estimate">
								<?php esc_html_e( 'Request a Free Estimate', 'bmg-theme' ); ?> &rarr;
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- 5. Related Posts -->
	<?php
	if ( $category ) :
		$related_args = array(
			'category__in'   => array( $category->term_id ),
			'post__not_in'   => array( get_the_ID() ),
			'posts_per_page' => 3,
			'orderby'        => 'date',
			'order'          => 'DESC',
			'post_status'    => 'publish',
		);

		$related_query = new WP_Query( $related_args );

		if ( $related_query->have_posts() ) :
			?>
			<section class="section-blog-related">
				<div class="container">

					<h2 class="section-title text-center mb-5">
						<?php esc_html_e( 'More Plumbing Tips', 'bmg-theme' ); ?>
					</h2>

					<div class="row gy-4">
						<?php
						while ( $related_query->have_posts() ) :
							$related_query->the_post();

							$rel_categories = get_the_category();
							$rel_category   = ! empty( $rel_categories ) ? $rel_categories[0] : null;
							?>
							<div class="col-md-6 col-lg-4">
								<article class="section-blog__card">
									<a href="<?php the_permalink(); ?>" class="section-blog__card-link">
										<div class="section-blog__card-image">
											<?php if ( has_post_thumbnail() ) : ?>
												<?php the_post_thumbnail( 'medium_large', array(
													'class'   => 'section-blog__card-img',
													'loading' => 'lazy',
												) ); ?>
											<?php else : ?>
												<div class="section-blog__card-placeholder">
													<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
												</div>
											<?php endif; ?>
										</div>
										<div class="section-blog__card-body">
											<?php if ( $rel_category ) : ?>
												<span class="section-blog__card-category">
													<?php echo esc_html( $rel_category->name ); ?>
												</span>
											<?php endif; ?>
											<h3 class="section-blog__card-title">
												<?php the_title(); ?>
											</h3>
											<p class="section-blog__card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18, '...' ) ); ?></p>
											<span class="section-blog__card-more">
												<?php esc_html_e( 'Read More', 'bmg-theme' ); ?>
												<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
											</span>
										</div>
									</a>
								</article>
							</div>
						<?php endwhile; ?>
					</div>

				</div>
			</section>
			<?php
		endif;

		wp_reset_postdata();
	endif;
	?>

<?php endwhile; ?>

</main>

<?php
get_footer();
