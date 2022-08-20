<?php /* Template Name: Pdf Yapisi */ get_header("new"); ?>

	<main role="main" class="konten fifth-contentz">
		<!-- section -->
		<section>

			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="pdf-page">
				<?php the_content(); ?>
			</div>

			</article>
			<!-- /article -->


		<?php endwhile; ?>

		<?php else: ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
