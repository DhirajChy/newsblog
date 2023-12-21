<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newsblog
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()): ?>

		<header class="page-header">
			<?php
			//the_archive_title('<h1 class="page-title">', '</h1>');
			//the_archive_description('<div class="archive-description">', '</div>');
			?>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		// while ( have_posts() ) :
		// 	the_post();
	
		/*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */?>
		<div class="w3l-homeblock2 w3l-homeblock5 py-5">
			<div class="container pt-md-4 pb-md-5">
				<?php
				$category = get_queried_object(); // Get the current category object
			
				$category_layout = get_term_meta($category->term_id, 'categories_option', true);
				?>

				<!-- block -->
				<h3 class="category-title mb-3">
					<?php the_category(); ?>
				</h3>
				<p class="mb-sm-5 mb-4 max-width">
					<?php the_archive_description(); ?>
				</p>

				<div class="row">
					<?php
					while (have_posts()):
						the_post();

						if ($category_layout === 'small') {
							get_template_part('template-parts/content-small', get_post_type());
						} elseif ($category_layout === 'big') {
							get_template_part('template-parts/content-big', get_post_type());
						}

					endwhile;
					?>
				</div>
			</div>
		</div>
		<?php


	else:

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php

get_footer();