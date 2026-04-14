<?php
/**
 * Section: Featured Blog Posts
 *
 * Shows 3 most recent blog posts in a card grid on the homepage.
 * Auto-updates as new posts are published.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$blog_query = new WP_Query( array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'post_status'    => 'publish',
	'no_found_rows'  => true,
) );

if ( ! $blog_query->have_posts() ) {
	return;
}
?>

<section class="section-blog">
	<div class="container">

		<!-- Section Header -->
		<div class="text-center mb-5 bmg-reveal">
			<span class="section-pill"><?php esc_html_e( 'FROM THE BLOG', 'bmg-theme' ); ?></span>
			<h2 class="section-title"><?php esc_html_e( 'Plumbing Tips for East County Homeowners', 'bmg-theme' ); ?></h2>
		</div>

		<!-- Blog Cards -->
		<div class="row g-4 bmg-reveal-stagger">
			<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
				<div class="col-lg-4 col-md-6 bmg-reveal">
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
								<?php
								$categories = get_the_category();
								if ( $categories ) :
								?>
									<span class="section-blog__card-category"><?php echo esc_html( $categories[0]->name ); ?></span>
								<?php endif; ?>
								<h3 class="section-blog__card-title"><?php the_title(); ?></h3>
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

		<!-- View All Posts -->
		<div class="text-center mt-5 bmg-reveal">
			<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog/' ) ); ?>" class="btn section-features__view-all-btn">
				<?php esc_html_e( 'View All Posts', 'bmg-theme' ); ?>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
			</a>
		</div>

	</div>
</section>

<?php wp_reset_postdata(); ?>
