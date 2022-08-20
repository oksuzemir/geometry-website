<?php get_header("new"); ?>

	<main role="main" class="konten fifth-contentz">
		<!-- section -->
		<section>

			<h1 class="page-title"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
			<?php 
the_archive_description( '<div class="cat-wrap">', '</div>' ); 
?>
<?php if( category_has_children( $cat ) == false) : ?>

	<div class="fifth-blog">
			<?php get_template_part('loop'); ?>
			</div>
			<?php get_template_part('pagination'); ?>

<?php endif; ?>


		</section>
		<!-- /section -->
	</main>
	<div class="yuksek"></div>


<div class="konten">
       <?php if (is_category()) {
    $this_category = get_category($cat);
    if (get_category_children($this_category->cat_ID) != "") {
        echo '<div class="sub-cat">';
            $childcategories = get_categories(array(
                'orderyby' => 'name',
                'hide_empty' => false,
                'child_of' => $this_category->cat_ID
            ));		
        foreach($childcategories as $category) {


			?>
			<div class="sub-cat-card">
				<div class="sub-cat-title">
					<span><?php echo $category->name ?></span>
				</div>
				<div class="sub-cat-desc">
					<p class="harf-siniri"> <?php echo $category->description ?> </p>
				</div>
				<div class="sub-cat-logo">
           			<picture class="lazy-picture">
              			<source srcset="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.webp" data-srcset="<?php echo get_template_directory_uri(); ?>/img/favicon.webp" type="image/webp">
              			<img width="250" height="72" src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/favicon.png" loading="lazy" >
            		</picture>     
				</div>
				<a href="<?php echo get_category_link( $category->term_id ) ?>" title=" "></a>
			</div>

			<?php
        } echo '</div>';
    }
    else{  
        get_template_part('loop-header');   
        if (have_posts()) :
            get_template_part('loop-actions');
            get_template_part('loop-content');
            get_template_part('loop-nav');
        else :
            get_template_part('loop-error');
        endif;  }}?>
<?php 
    ?>
</div>



<?php get_footer(); ?>
