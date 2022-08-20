<?php get_header("new"); ?>

	<main role="main" class="konten">
		<!-- section -->
		<section style="height:400px;">

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Sayfa Bulunamadı', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Anasayfaya Geri Dön', 'html5blank' ); ?></a>
				</h2>

			</article>


		</section>

	</main>

<?php get_footer(); ?>
