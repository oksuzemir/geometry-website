<?php /* Template Name: Anasayfa */ get_header(); ?>

<section class="first-content">
  <div class="first-content-overlay"></div>
  <div class="konten">
    <div class="first-content-inner">
      <div class="first-content-title">COURSE GEOMETRY</div>
      <div class="first-content-title2">SOLUTIONS AND ANSWER TESTS</div>
      <div class="first-content-button">
        <a href="/blog">Lets Start</a>
      </div>
    </div>
    <div class="first-content-social">
      <ul>
        <li>
          <a rel="nofollow noreferrer" target="_blank" href="https://twitter.com/yksgeometri"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
          <a rel="nofollow" rel="nofollow noreferrer" target="_blank" href="https://www.instagram.com/dersimizgeometri/"><i class="fa fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="second-content">
  <div class="konten">
    <div class="second-content-inner">
      <div class="second-content-title">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="second-content-text">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_content(); ?>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="third-content">
  <div class="konten">
    <div class="third-content-inner lazy">
      <?php dynamic_sidebar('renkli-kutular'); ?>
    </div>
</section>
<section class="fourth-content lazy">
  <div class="konten">
    <div class="fourth-content-inner">
      <div class="fourth-content-title">
        <?php dynamic_sidebar('parallax-cumle'); ?>
        <div class="ana-form">
        <?php echo do_shortcode('[contact-form-7 id="30" title="Anasayfa Form"]'); ?>
      </div>
      </div>
    </div>
  </div>
</section>
<section class="fifth-content">
  <div class="konten">
    <div class="fifth-blog">
      <?php
      $temp = $wp_query;
      $wp_query = null;
      $wp_query = new WP_Query();
      $wp_query->query('cat=1&showposts=9' . '&paged=' . $paged); ?>
      <?php if (have_posts()) : ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <div class="fifth-blog-card">
            <div class="fifth-blog-card-header">
              <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">

              <?php if ( has_post_thumbnail()) : ?>
          							
                <picture class="lazy-picture">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.webp" data-srcset="<?php echo wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'second_featured_image', true), 'medium'); ?>" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.jpg" data-src="<?php the_post_thumbnail_url('medium'); ?>" loading="lazy" alt="<?php the_title(); ?>">
                </picture>

          						 <?php else: ?>
                        <picture class="lazy-picture">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.webp" data-srcset="<?php echo get_template_directory_uri(); ?>/img/bos-img.webp" type="image/webp">
              <img width="250" height="72" src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/bos-img.jpg" loading="lazy" >
            </picture>
          					 <?php endif; ?>

                

              </a>
              <div class="fifth-blog-date">
                <span> <?php the_time('j'); ?></span>
                <span> <?php the_time('F'); ?></span>
              </div>
            </div>
            <div class="fifth-blog-card-content">
              <div class="fifth-blog-title">
                <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
              </div>
              <div class="fifth-blog-text">
                <p><?php html5wp_excerpt('html5wp_index'); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>