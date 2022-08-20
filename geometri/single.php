<?php get_header("new"); ?>

	<main role="main" class="konten fifth-contentz">
	<!-- section -->
	<div class="single-grid">
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="singlep">
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				
			<?php endif; ?>
			</div>

			<h1>
				<?php the_title(); ?>
			</h1>
		
			<?php the_content();  ?>
			<?php comments_template(); ?>

		</article>
		
	

	<?php endwhile; ?>

	<?php else: ?>

		

	<?php endif; ?>

	</section>
	<?php get_sidebar(); ?>
	</div>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
