<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/oksuzdev/dersimizgemetri2@master/style/style.min.css" />
  <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" rel="apple-touch-icon-precomposed">
</head>

<body <?php body_class(); ?>>
  <header class="nav-main" id="header">
    <div class="kontenf">
      <div class="nav-main-left">
        <div class="logo">
          <a href="/"> 
           <picture>
              <source id="image-1" srcset="<?php echo get_template_directory_uri(); ?>/img/logo.webp" type="image/webp">
              <img id="image-2" width="250" height="72" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" >
            </picture>   
          </a>
        </div>
      </div>
      <div class="nav-main-right">
        <div class="sicon nav-icon-1">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <nav>
        <?php html5blank_nav(); ?>
        </nav>
        <div class="search-button">
          <i class="fa fa-search"></i>
        </div>
        <div class="lang-button">
          <a rel="external" href="https://dersgeometri.com/">
            TR
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
     
      </div>
    </div>
</header>
 