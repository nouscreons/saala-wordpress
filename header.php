<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?php bloginfo( 'name' ); ?> - <?php if(is_home() || is_front_page()) echo 'Aide scolaire au Burkina Faso'; else echo get_the_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri().'/assets/favicons/apple-touch-icon.png'; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri().'/assets/favicons/favicon-32x32.png'; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri().'/assets/favicons/favicon-16x16.png'; ?>">
    <link rel="manifest" href="<?php echo get_template_directory_uri().'/assets/favicons/site.webmanifest'; ?>">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri().'/assets/favicons/safari-pinned-tab.svg'; ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <style type="text/css">
    @media (max-width: 991.98px) {
      .saala-navbar-light {
        background: <?php echo get_theme_mod('menu_section_color', '#382000'); ?> !important;
        top: 0;
        position: relative; } }
    .saala-footer {
        font-size: 16px;
        padding: 7em 0;
        background: <?php echo get_theme_mod('menu_section_color', '#382000'); ?> !important;
    }
    .saala-intro .block-18.color-1 {
        background: <?php echo get_theme_mod('chiffres_section_color', '#911c21'); ?> !important;
    }
    .saala-intro .block-18.color-2 {
        background: <?php echo get_theme_mod('chiffres_section_2_color', '#fa8f3d'); ?> !important;
    }
    .saala-intro .block-18.color-3 {
        background: <?php echo get_theme_mod('chiffres_section_3_color', '#faaa3a'); ?> !important;
    }
    </style>
  </head>
  <body>
    <!-- loader -->
    <div id="saala-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#911c21" />
      </svg>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark saala_navbar bg-dark saala-navbar-light" id="saala-navbar">
      <div class="container">
        <a class="navbar-brand disable-select" href="/"><img style="width: 100px; height: 100px;" src="<?php echo get_template_directory_uri().'/assets/img/logo.png'; ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#saala-nav" aria-controls="saala-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu </button>
        <div class="collapse navbar-collapse" id="saala-nav">
          <ul class="navbar-nav ml-auto disable-select">
            <li class="nav-item <?php if(is_home() || is_front_page()) echo 'active'; ?>">
              <a href="<?php echo home_url(); ?>" class="nav-link"><?php echo get_theme_mod('menu_section_element', 'Accueil'); ?></a>
            </li>
            <li class="nav-item <?php if(strstr($_SERVER['REQUEST_URI'], 'a-propos')) echo 'active'; ?>">
              <a href="<?php echo site_url('/a-propos/'); ?>" class="nav-link"><?php echo get_theme_mod('menu_section_element_2', 'L\'association'); ?></a>
            </li>
            <li class="nav-item <?php if(strstr($_SERVER['REQUEST_URI'], 'le-projet')) echo 'active'; ?>">
              <a href="<?php echo site_url('/le-projet/'); ?>" class="nav-link"><?php echo get_theme_mod('menu_section_element_3', 'Notre mission'); ?></a>
            </li>
            <li class="nav-item <?php if(is_singular('post') || strstr($_SERVER['REQUEST_URI'], 'blog')) echo 'active'; ?>">
              <a href="<?php echo site_url('/blog/'); ?>" class="nav-link"><?php echo get_theme_mod('menu_section_element_4', 'Notre Blog'); ?></a>
            </li>
            <li class="nav-item <?php if(strstr($_SERVER['REQUEST_URI'], 'aide')) echo 'active'; ?>">
              <a href="<?php echo site_url('/aide/'); ?>" class="nav-link"><?php echo get_theme_mod('menu_section_element_5', 'Nous aider'); ?></a>
            </li>
            <li class="nav-item <?php if(strstr($_SERVER['REQUEST_URI'], 'donation')) echo 'active'; ?>">
              <a href="<?php echo site_url('/donation/'); ?>" class="nav-link"><?php echo get_theme_mod('menu_section_element_6', 'Faire un don'); ?></a>
            </li>
            <li class="nav-item <?php if(strstr($_SERVER['REQUEST_URI'], 'contact')) echo 'active'; ?>">
              <a href="<?php echo site_url('/contact/'); ?>" class="nav-link"><?php echo get_theme_mod('menu_section_element_7', 'Nous Contacter'); ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->