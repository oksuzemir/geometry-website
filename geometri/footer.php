<footer>
  <div class="main-footer">
    <div class="konten">
      <div class="main-footer-inner">
        <div class="main-footer-item">
          <div class="logo">
          <a href="/"> 
           <picture class="lazy-picture">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.webp" data-srcset="<?php echo get_template_directory_uri(); ?>/img/logo-renkli.webp" type="image/webp">
              <img width="250" height="72" src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/logo-renkli.png" loading="lazy" >
            </picture>
               
          </a>
          </div>
          <ul>
            <li>
              <a rel="nofollow" target="_blank" href="https://www.google.com/maps/place/Avrupa+Konutlar%C4%B1+TEM+Sitesi/@41.0913394,28.8886858,14.13z/data=!4m5!3m4!1s0x0:0x9ce86de24427921a!8m2!3d41.0888026!4d28.9030024">
                <i class="fa fa-map-marker"></i>
                Karayolları mah. Abdi İpekçi cad. no:34 Avrupa Konutları Tem
                b:14 d:120 Gaziosmanpaşa/İSTANBUL
              </a>
            </li>
            <li>
              <a rel="nofollow" href="tel:0532 212 63 49">
                <i class="fa fa-phone"></i>
                0532 212 63 49
              </a>
            </li>
            <li>
              <a rel="nofollow" href="mailto:aliselim1609@gmail.com">
                <i class="fa fa-envelope"></i>
                aliselim1609@gmail.com
              </a>
            </li>
          </ul>
        </div>
        <div class="main-footer-item">
          <div class="footer-title">Site Map</div>
          <ul>
            <li><a href="/geometry-topics">Geometry Topics</a></li>
            <li><a href="/math-test-solutions">Math Test Solutions</a></li>
            <li><a href="/geometry-textbook-pdf">Download PDF</a></li>
          </ul>
        </div>
        <div class="main-footer-item">
          <div class="footer-title">Last Posts</div>
          <ul>
            <?php
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('cat=1&showposts=4' . '&paged=' . $paged); ?>
            <?php if (have_posts()) : ?>
              <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>

          </ul>
        </div>
        <div class="main-footer-item">
          <div class="footer-title">Google Maps</div>
          <div class="footer-map">
            <a rel="nofollow" target="_blank" href="https://www.google.com/maps/place/Avrupa+Konutlar%C4%B1+TEM+Sitesi/@41.0913394,28.8886858,14.13z/data=!4m5!3m4!1s0x0:0x9ce86de24427921a!8m2!3d41.0888026!4d28.9030024">
             <picture>
                <source  srcset="<?php echo get_template_directory_uri(); ?>/img/map.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="google map">
              </picture>   
            </a>         
         </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="kontenf">
      <div class="bottom-text">
      dersimizgeometri.com © It is forbidden to copy the content of the site in whole or in part, even if the source is cited, according to the provisions of the law numbered 5846.
      </div>
      <div class="footer-social">
        <ul>
          <li>
            <a rel="nofollow noreferrer" target="_blank" href="https://twitter.com/yksgeometri"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a rel="nofollow noreferrer" target="_blank" href="https://www.instagram.com/dersimizgeometri/"><i class="fa fa-instagram"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<div class="search-overlay">
    <div class="search-overlay-close"></div>
    <div class="search-form">
      <form method="get" action="https://dersimizgeometri.com">
        <input type="text" placeholder="Arayın..." name="s" />
        <button type="submit" role="button"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
<script defer>
  var scrollpos = window.scrollY;
  var header = document.getElementById("header");
  var img2 = document.getElementById("image-2");
  var img1 = document.getElementById("image-1");
  var searchOverlay = document.querySelector(".search-overlay")
  var searchBtn = document.querySelector(".search-button")
  var searchClose = document.querySelector(".search-overlay-close")

  searchBtn.addEventListener('click', function(ev) {
    searchOverlay.classList.add("search-overlay-active");
  }, false);

  searchClose.addEventListener('click', function(ev) {
    searchOverlay.classList.remove("search-overlay-active");
  }, false);

  function add_class_on_scroll() {
    header.classList.add("nav-fixed");
  }

  function add_image_on_scroll() {
    img2.src = '<?php echo get_template_directory_uri(); ?>/img/logo-renkli.png'
    img1.srcset = '<?php echo get_template_directory_uri(); ?>/img/logo-renkli.webp'
  }

  function remove_class_on_scroll() {
    header.classList.remove("nav-fixed");
  }

  function remove_image_on_scroll() {
    img2.src = '<?php echo get_template_directory_uri(); ?>/img/logo.png'
    img1.srcset = '<?php echo get_template_directory_uri(); ?>/img/logo.webp'
  }

  window.addEventListener('scroll', function() {
    scrollpos = window.scrollY;
    if (scrollpos > 90) {
      add_class_on_scroll();
      add_image_on_scroll()
    } else {
      remove_class_on_scroll();
      remove_image_on_scroll()
    }
  });

  const de = document.querySelectorAll(".harf-siniri");
  for(var i = 0; i < de.length; i++){
    var ben = de[i].innerHTML;
    var den = ben.substr(0, 160); 
    de[i].innerHTML =  den + "..."; // yazdır

  }

  if (window.innerWidth < 1200) {
    var navIcon = document.querySelector(".sicon");
    var mobMenu = document.querySelector(".nav-main-right>nav>ul");
    const icons = document.querySelectorAll(".sicon");
    icons.forEach((icon) => {
      icon.addEventListener("click", (event) => {
        icon.classList.toggle("open");
      });
    });
    navIcon.addEventListener('click', function(ev) {
      mobMenu.classList.toggle("mobile-menu-active");
    }, false);

    const list = document.querySelectorAll(".menu-item-has-children");
    for (const el of list) {
      var newEl = '<i class="fa fa-angle-right"></i>';
      el.insertAdjacentHTML('beforeend', '<i class="fa fa-angle-down"></i>')
    }

    (function() {
      var menuElems = document.querySelectorAll(".menu-item-has-children .fa-angle-down")
      menuElems.forEach(function(elem) {
        elem.addEventListener("click", function() {
          menuElems.forEach(function(e) {
            e.previousElementSibling.classList.toggle("sub-menu-active");
          })
        }, false)
      });
    })();

  }
</script>
<script type="text/javascript" async>
  (function() {
    var css = document.createElement("link");
    css.href =
      "https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600&display=swap";
    css.rel = "stylesheet";
    css.type = "text/css";
    document.getElementsByTagName("head")[0].appendChild(css);
  })();
</script>
<script type="text/javascript" async>
  (function() {
    var css = document.createElement("link");
    css.href =
      "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";
    css.rel = "stylesheet";
    css.type = "text/css";
    document.getElementsByTagName("head")[0].appendChild(css);
  })();
</script>
<!-- Lazy img -->
<script defer>
  const imgObserver = new IntersectionObserver((entries, self) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        lazyLoad(entry.target);
        self.unobserve(entry.target);
      }
    });
  });
  document.querySelectorAll('.lazy-picture').forEach((picture) => {
    imgObserver.observe(picture);
  });
  const lazyLoad = (picture) => {
    const img = picture.querySelector('img');
    const sources = picture.querySelectorAll('source');

    sources.forEach((source) => {
      source.srcset = source.dataset.srcset;
      source.removeAttribute('data-srcset');
    });
    img.src = img.dataset.src;
    img.removeAttribute('data-src');
  }
</script>

<script defer>
  document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
      lazyloadImages = document.querySelectorAll(".lazy");
      var imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            var image = entry.target;
            image.classList.remove("lazy");
            imageObserver.unobserve(image);
          }
        });
      });

      lazyloadImages.forEach(function(image) {
        imageObserver.observe(image);
      });
    } else {
      var lazyloadThrottleTimeout;
      lazyloadImages = document.querySelectorAll(".lazy");

      function lazyload() {
        if (lazyloadThrottleTimeout) {
          clearTimeout(lazyloadThrottleTimeout);
        }

        lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
            if (img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
          });
          if (lazyloadImages.length == 0) {
            document.removeEventListener("scroll", lazyload);
            window.removeEventListener("resize", lazyload);
            window.removeEventListener("orientationChange", lazyload);
          }
        }, 20);
      }

      document.addEventListener("scroll", lazyload);
      window.addEventListener("resize", lazyload);
      window.addEventListener("orientationChange", lazyload);
    }
  })
</script>
<?php wp_footer(); ?>
</body>

</html>