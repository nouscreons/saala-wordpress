<?php
function add_css()
{
   wp_register_style('Dosis', get_template_directory_uri() . '/assets/fonts/Dosis.css', false,'1.1','all');
   wp_enqueue_style( 'Dosis');
   wp_register_style('Overpass', get_template_directory_uri() . '/assets/fonts/Overpass.css', false,'1.1','all');
   wp_enqueue_style( 'Overpass');
   wp_register_style('open-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'open-iconic-bootstrap');
   wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.css', false,'1.1','all');
   wp_enqueue_style( 'animate');
   wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', false,'1.1','all');
   wp_enqueue_style( 'owl-carousel');
   wp_register_style('owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', false,'1.1','all');
   wp_enqueue_style( 'owl-theme-default');
   wp_register_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', false,'1.1','all');
   wp_enqueue_style( 'magnific-popup');
   wp_register_style('aos', get_template_directory_uri() . '/assets/css/aos.css', false,'1.1','all');
   wp_enqueue_style( 'aos');
   wp_register_style('ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css', false,'1.1','all');
   wp_enqueue_style( 'ionicons');
   wp_register_style('bootstrap-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrap-datepicker');
   wp_register_style('jquery-timepicker', get_template_directory_uri() . '/assets/css/jquery.timepicker.css', false,'1.1','all');
   wp_enqueue_style( 'jquery-timepicker');
   wp_register_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', false,'1.1','all');
   wp_enqueue_style( 'flaticon');
   wp_register_style('icomoon', get_template_directory_uri() . '/assets/css/icomoon.css', false,'1.1','all');
   wp_enqueue_style( 'icomoon');
   wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'style');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquery');
   wp_register_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquery-migrate');
   wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'popper');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
   wp_register_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquery-easing');
   wp_register_script('jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquery-waypoints');
   wp_register_script('jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquery-stellar');
   wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'owl-carousel');
   wp_register_script('jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquery.magnific-popup');
   wp_register_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'aos');
   wp_register_script('jquery-animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquery-animateNumber');
   wp_register_script('bootstrap-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap-datepicker');
   wp_register_script('jquery-timepicker', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquery-timepicker');
   wp_register_script('scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'scrollax');
   wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'main');
}
add_action('wp_enqueue_scripts', 'add_script');
add_theme_support('post-thumbnails');

function theme_customizer_settings($wp_customize) {
  // Menu
  $wp_customize->add_section('menu_section', array(
    'title' => 'Menu',
    'priority' => 30,
  ));

  $wp_customize->add_setting('menu_section_color', array(
    'default' => '#382000',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('menu_section_color_control', array(
    'label' => 'Couleur du menu (HEX)',
    'section' => 'menu_section',
    'settings' => 'menu_section_color',
    'type' => 'text',
  ));

  $wp_customize->add_setting('menu_section_element', array(
    'default' => 'Accueil',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('menu_section_element_control', array(
    'label' => 'Titre du premier élément',
    'section' => 'menu_section',
    'settings' => 'menu_section_element',
    'type' => 'text',
  ));

  $wp_customize->add_setting('menu_section_element_2', array(
    'default' => 'L\'association',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('menu_section_element_2_control', array(
    'label' => 'Titre du deuxième élément',
    'section' => 'menu_section',
    'settings' => 'menu_section_element_2',
    'type' => 'text',
  ));

  $wp_customize->add_setting('menu_section_element_3', array(
    'default' => 'Notre mission',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('menu_section_element_3_control', array(
    'label' => 'Titre du troisième élément',
    'section' => 'menu_section',
    'settings' => 'menu_section_element_3',
    'type' => 'text',
  ));

  $wp_customize->add_setting('menu_section_element_4', array(
    'default' => 'Notre Blog',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('menu_section_element_4_control', array(
    'label' => 'Titre du quatrième élément',
    'section' => 'menu_section',
    'settings' => 'menu_section_element_4',
    'type' => 'text',
  ));

  $wp_customize->add_setting('menu_section_element_5', array(
    'default' => 'Nous aider',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('menu_section_element_5_control', array(
    'label' => 'Titre du cinquième élément',
    'section' => 'menu_section',
    'settings' => 'menu_section_element_5',
    'type' => 'text',
  ));

  $wp_customize->add_setting('menu_section_element_6', array(
    'default' => 'Faire un don',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('menu_section_element_6_control', array(
    'label' => 'Titre du sixième élément',
    'section' => 'menu_section',
    'settings' => 'menu_section_element_6',
    'type' => 'text',
  ));

  $wp_customize->add_setting('menu_section_element_7', array(
    'default' => 'Nous Contacter',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('menu_section_element_7_control', array(
    'label' => 'Titre du septième élément',
    'section' => 'menu_section',
    'settings' => 'menu_section_element_7',
    'type' => 'text',
  ));

  // Présentation
  $wp_customize->add_section('project_section', array(
    'title' => 'Présentation',
    'priority' => 30,
  ));

  $wp_customize->add_setting('project_section_h1_title', array(
    'default' => 'SAALA "Avenir au Sud"',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('project_section_h1_title_control', array(
    'label' => 'Titre principal',
    'section' => 'project_section',
    'settings' => 'project_section_h1_title',
    'type' => 'text',
  ));

  $wp_customize->add_setting('project_section_h1_description', array(
    'default' => 'Fondée en 2009, l\'association SAALA "Avenir au Sud" est née du désir de venir en aide à une "petite école du bout du monde" visitée au gré d\'un voyage hors des sentiers battus.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('project_section_h1_description_control', array(
    'label' => 'Description du titre principal',
    'section' => 'project_section',
    'settings' => 'project_section_h1_description',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('project_section_video', array(
    'default' => 'https://www.youtube.com/watch?v=DqLSEx_l80Y',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('project_section_video_control', array(
    'label' => 'Lien vers la vidéo de présentation',
    'section' => 'project_section',
    'settings' => 'project_section_video',
    'type' => 'text',
  ));

  // Les chiffres
  $wp_customize->add_section('chiffres_section', array(
    'title' => 'Les chiffres',
    'priority' => 30,
  ));

  $wp_customize->add_setting('chiffres_section_color', array(
    'default' => '#911c21',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_color_control', array(
    'label' => 'Couleur du premier block (HEX)',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_color',
    'type' => 'text',
  ));

  $wp_customize->add_setting('chiffres_section_counter_text_sup', array(
    'default' => 'Nous avons équipé plus de',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_counter_text_sup_control', array(
    'label' => 'Texte supérieur',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_counter_text_sup',
    'type' => 'text',
  ));

  $wp_customize->add_setting('chiffres_section_counter_number', array(
    'default' => '1000',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_counter_number_control', array(
    'label' => 'Compteur',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_counter_number',
    'type' => 'text',
  ));

  $wp_customize->add_setting('chiffres_section_counter_text_inf', array(
    'default' => 'élèves en cartables solaires Solarpak',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_counter_text_inf_control', array(
    'label' => 'Texte inférieur',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_counter_text_inf',
    'type' => 'text',
  ));

  $wp_customize->add_setting('chiffres_section_2_color', array(
    'default' => '#fa8f3d',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_2_color_control', array(
    'label' => 'Couleur du deuxième block (HEX)',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_2_color',
    'type' => 'text',
  ));

  $wp_customize->add_setting('chiffres_section_counter_text_sup_2', array(
    'default' => 'Découvrir nos projets',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_counter_text_sup_2_control', array(
    'label' => 'Texte supérieur 2',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_counter_text_sup_2',
    'type' => 'text',
  ));

  $wp_customize->add_setting('chiffres_section_counter_text_inf_2', array(
    'default' => 'En 2016, SAALA a obtenu la reconnaissance d\'Intérêt Général.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_counter_text_inf_2_control', array(
    'label' => 'Texte inférieur 2',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_counter_text_inf_2',
    'type' => 'text',
  ));

  $wp_customize->add_setting('chiffres_section_3_color', array(
    'default' => '#faaa3a',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_3_color_control', array(
    'label' => 'Couleur du troisième block (HEX)',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_3_color',
    'type' => 'text',
  ));

  $wp_customize->add_setting('chiffres_section_counter_text_sup_3', array(
    'default' => 'Je suis volontaire',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_counter_text_sup_3_control', array(
    'label' => 'Texte supérieur 3',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_counter_text_sup_3',
    'type' => 'text',
  ));

  $wp_customize->add_setting('chiffres_section_counter_text_inf_3', array(
    'default' => 'Quelles que soient vos possibilités, votre aide sera toujours la bienvenue.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('chiffres_section_counter_text_inf_3_control', array(
    'label' => 'Texte inférieur 3',
    'section' => 'chiffres_section',
    'settings' => 'chiffres_section_counter_text_inf_3',
    'type' => 'text',
  ));

  // Section de présentation
  $wp_customize->add_section('presentation_section_section', array(
    'title' => 'Section de présentation',
    'priority' => 30,
  ));

  $wp_customize->add_setting('presentation_section_section_title', array(
    'default' => 'Faire un don',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('presentation_section_section_title_control', array(
    'label' => 'Titre',
    'section' => 'presentation_section_section',
    'settings' => 'presentation_section_section_title',
    'type' => 'text',
  ));

  $wp_customize->add_setting('presentation_section_section_description', array(
    'default' => 'Pour améliorer l\'accès à l\'éducation pour les enfants et jeunes du Burkina Faso.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('presentation_section_section_description', array(
    'label' => 'Description',
    'section' => 'presentation_section_section',
    'settings' => 'presentation_section_section_description',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('presentation_section_section_title_2', array(
    'default' => 'Devenir membre',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('presentation_section_section_title_2_control', array(
    'label' => 'Titre 2',
    'section' => 'presentation_section_section',
    'settings' => 'presentation_section_section_title_2',
    'type' => 'text',
  ));

  $wp_customize->add_setting('presentation_section_section_description_2', array(
    'default' => 'Il vous est possible de devenir membre de l\'association en nous aidant régulièrement.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('presentation_section_section_description_2', array(
    'label' => 'Description 2',
    'section' => 'presentation_section_section',
    'settings' => 'presentation_section_section_description_2',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('presentation_section_section_title_3', array(
    'default' => 'Participer aux sponsors',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('presentation_section_section_title_3_control', array(
    'label' => 'Titre 3',
    'section' => 'presentation_section_section',
    'settings' => 'presentation_section_section_title_3',
    'type' => 'text',
  ));

  $wp_customize->add_setting('presentation_section_section_description_3', array(
    'default' => 'Chaque année est organisé dans le lycée George Sand à Domont, une tournée solidaire.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('presentation_section_section_description_3_control', array(
    'label' => 'Description 3',
    'section' => 'presentation_section_section',
    'settings' => 'presentation_section_section_description_3',
    'type' => 'textarea',
  ));

  // Carrousel
  $wp_customize->add_section('carrousel_section', array(
    'title' => 'Carrousel',
    'priority' => 30,
  ));

  $wp_customize->add_setting('carrousel_section_title', array(
    'default' => 'Financement des projets',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_title_control', array(
    'label' => 'Titre de la section',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_title',
    'type' => 'text',
  ));

  $wp_customize->add_setting('carrousel_section_description', array(
    'default' => 'Le premier grand projet de SAALA concernait le développement de la petite école primaire de Namponkoré, village du Burkina Faso situé à 500 kilomètres de la capitale.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_description_control', array(
    'label' => 'Description de la section',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_description',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('carrousel_section_title_item', array(
    'default' => 'La Tournée solidaire 2023',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_title_item_control', array(
    'label' => 'Titre du premier élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_title_item',
    'type' => 'text',
  ));

  $wp_customize->add_setting('carrousel_section_description_item', array(
    'default' => 'La course solidaire organisée au lycée George Sand pour financer les projets de l\'association SAALA à travers les sponsors des élèves.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_description_item_control', array(
    'label' => 'Description du premier élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_description_item',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('carrousel_section_date_item', array(
    'default' => 'De 2023 à fin 2023',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_date_item_control', array(
    'label' => 'Date du premier élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_date_item',
    'type' => 'text',
  ));

  $wp_customize->add_setting('carrousel_section_target_item', array(
    'default' => '50%',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_target_item_control', array(
    'label' => 'Pourcentage atteint du premier élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_target_item',
    'type' => 'text',
  ));

  $wp_customize->add_setting('carrousel_section_count_target_item', array(
    'default' => '1,000€ recueilli sur 2,000€',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_count_target_item_control', array(
    'label' => 'Total du premier élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_count_target_item',
    'type' => 'text',
  ));

  $wp_customize->add_setting('carrousel_section_title_item_2', array(
    'default' => 'L\'école au Burkina Faso',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_title_item_2_control', array(
    'label' => 'Titre du deuxième élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_title_item_2',
    'type' => 'text',
  ));

  $wp_customize->add_setting('carrousel_section_description_item_2', array(
    'default' => 'Fin 2013, ce sont les panneaux solaires qui vont être fixés sur le bâtiment, et permettre ainsi l\'électrification de deux salles de classe.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_description_item_2_control', array(
    'label' => 'Description du deuxième élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_description_item_2',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('carrousel_section_date_item_2', array(
    'default' => 'De 2013 à 2014',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_date_item_2_control', array(
    'label' => 'Date du deuxième élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_date_item_2',
    'type' => 'text',
  ));

  $wp_customize->add_setting('carrousel_section_target_item_2', array(
    'default' => '100%',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_target_item_2_control', array(
    'label' => 'Pourcentage atteint du deuxième élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_target_item_2',
    'type' => 'text',
  ));

  $wp_customize->add_setting('carrousel_section_count_target_item_2', array(
    'default' => '5,000€ recueilli sur 5,000€',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('carrousel_section_count_target_item_2_control', array(
    'label' => 'Total du deuxième élément',
    'section' => 'carrousel_section',
    'settings' => 'carrousel_section_count_target_item_2',
    'type' => 'text',
  ));

  // L'équipe
  $wp_customize->add_section('team_section', array(
    'title' => 'L\'équipe',
    'priority' => 30,
  ));

  $wp_customize->add_setting('team_section_title', array(
    'default' => 'Notre équipe',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_title_control', array(
    'label' => 'Titre de la section',
    'section' => 'team_section',
    'settings' => 'team_section_title',
    'type' => 'text',
  ));

  $wp_customize->add_setting('team_section_description', array(
    'default' => 'SAALA est une micro association composée des personnes suivantes :',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_description_control', array(
    'label' => 'Description de la section',
    'section' => 'team_section',
    'settings' => 'team_section_description',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('team_section_person', array(
    'default' => 'Valérie Derue',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_person_control', array(
    'label' => 'Première personne',
    'section' => 'team_section',
    'settings' => 'team_section_person',
    'type' => 'text',
  ));

  $wp_customize->add_setting('team_section_person_function', array(
    'default' => 'Enseignante/Présidente',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_person_function_control', array(
    'label' => 'Fonction de la première personne',
    'section' => 'team_section',
    'settings' => 'team_section_person_function',
    'type' => 'text',
  ));

  $wp_customize->add_setting('team_section_person_2', array(
    'default' => 'Nathaniel Lechêne',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_person_2_control', array(
    'label' => 'Deuxième personne',
    'section' => 'team_section',
    'settings' => 'team_section_person_2',
    'type' => 'text',
  ));

  $wp_customize->add_setting('team_section_person_function_2', array(
    'default' => 'Forestier/Trésorier',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_person_function_2_control', array(
    'label' => 'Fonction de la deuxième personne',
    'section' => 'team_section',
    'settings' => 'team_section_person_function_2',
    'type' => 'text',
  ));

  $wp_customize->add_setting('team_section_person_3', array(
    'default' => 'Juliettte Brancourt',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_person_3_control', array(
    'label' => 'Troisième personne',
    'section' => 'team_section',
    'settings' => 'team_section_person_3',
    'type' => 'text',
  ));

  $wp_customize->add_setting('team_section_person_function_3', array(
    'default' => 'Forestier/Trésorier',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_person_function_3_control', array(
    'label' => 'Fonction de la troisième personne',
    'section' => 'team_section',
    'settings' => 'team_section_person_function_3',
    'type' => 'text',
  ));

  $wp_customize->add_setting('team_section_person_4', array(
    'default' => 'Annie Derue',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_person_4_control', array(
    'label' => 'Quatrième personne',
    'section' => 'team_section',
    'settings' => 'team_section_person_4',
    'type' => 'text',
  ));

  $wp_customize->add_setting('team_section_person_function_4', array(
    'default' => 'Retraitée/Secrétaire',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('team_section_person_function_4_control', array(
    'label' => 'Fonction de la quatrième personne',
    'section' => 'team_section',
    'settings' => 'team_section_person_function_4',
    'type' => 'text',
  ));

  // L'actualité
  $wp_customize->add_section('news_section', array(
    'title' => 'L\'actualité',
    'priority' => 30,
  ));

  $wp_customize->add_setting('news_section_title', array(
    'default' => 'Actualités',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('news_section_title_control', array(
    'label' => 'Titre de la section',
    'section' => 'news_section',
    'settings' => 'news_section_title',
    'type' => 'text',
  ));

  $wp_customize->add_setting('news_section_description', array(
    'default' => 'L\'organisation, le soutien et la réalisation d\'actions d\'aide au développement en faveur de l\'éducation, de la culture et de la santé dans les pays du Sud :',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('news_section_description_control', array(
    'label' => 'Description de la section',
    'section' => 'news_section',
    'settings' => 'news_section_description',
    'type' => 'textarea',
  ));

  // Pied de page
  $wp_customize->add_section('footer_section', array(
    'title' => 'Pied de page',
    'priority' => 30,
  ));

  $wp_customize->add_setting('footer_section_footer_description', array(
    'default' => 'Micro association humanitaire, SAALA s\'est donnée pour mission l\'aide au développement scolaire au Burkina Faso.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('footer_section_footer_description_control', array(
    'label' => 'Description',
    'section' => 'footer_section',
    'settings' => 'footer_section_footer_description',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_section_twitter', array(
    'default' => '',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('footer_section_twitter_control', array(
    'label' => 'Lien vers le Twitter',
    'section' => 'footer_section',
    'settings' => 'footer_section_twitter',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_section_facebook', array(
    'default' => 'https://www.facebook.com/saala.org/?locale=fr_FR',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('footer_section_facebook_control', array(
    'label' => 'Lien vers le Facebook',
    'section' => 'footer_section',
    'settings' => 'footer_section_facebook',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_section_instagram', array(
    'default' => '',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('footer_section_instagram_control', array(
    'label' => 'Lien vers le Instagram',
    'section' => 'footer_section',
    'settings' => 'footer_section_instagram',
    'type' => 'text',
  ));

  // Page - L'assocation
  $wp_customize->add_section('association_section', array(
    'title' => 'Page - L\'assocation',
    'priority' => 30,
  ));

  $wp_customize->add_setting('association_section_title', array(
    'default' => 'Qui sommes-nous ?',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('association_section_title_control', array(
    'label' => 'Titre principal',
    'section' => 'association_section',
    'settings' => 'association_section_title',
    'type' => 'text',
  ));

  $wp_customize->add_setting('association_section_text_right', array(
    'default' => 'Fondée en 2009, l\'association SAALA "Avenir au Sud" est née du désir de venir en aide à une "petite école du bout du monde" visitée au gré d\'un voyage hors des sentiers battus. Nous y avons rencontré 500 élèves qui s\'entassaient dans un bâtiment vétuste de trois salles de classe... Le surplus d\'élèves étudiait tant bien que mal sous une paillote construite par les habitants du village.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('association_section_text_right_control', array(
    'label' => 'Texte à droite de l\'image',
    'section' => 'association_section',
    'settings' => 'association_section_text_right',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('association_section_paragraph', array(
    'default' => 'C\'était à Namponkore, au pied de la falaise de Gobnangou, dans l\'est du Burkina Faso, si durement touché aujourd\'hui par des conflits sanglants... Quelques bénévoles se sont alors engagés à nos côtés pour cette grande aventure : ensemble, nous allions tenter de permettre à ces enfants d\'étudier dans de meilleures conditions. Nous n\'avons pas ménagé notre peine : création de l\'association, organisation d\'événements caritatifs, dossiers de demandes de subventions... Et très vite nous avons pu construire à Namponkore un bâtiment de 3 classes ainsi que des latrines. Puis le bâtiment a été doté de tables-bancs et de panneaux solaires. Nous avons alors rencontré l\'association ABAEF, avec laquelle nous avons pu créer un centre de formations en couture et coiffure à Ouagadougou : en 18 mois, le centre était auto-suffisant et accueillait des jeunes filles sorties du système scolaire tout en leur proposant des cours d\'alphabétisation et la possibilité de créer leur propre commerce. Ensuite, à Sourou, au nord de la capitale, nous avons pu développer l\'école primaire de la même façon qu\'à Namponkore, et l\'association a alors commencé à parrainer dix enfants orphelins, que nous accompagnons toujours aujourd\'hui. En parallèle, nous avons soutenu chaque année l\'association AECEG dans son projet de permettre aux enfants les plus défavorisés de découvrir la riche région gourmanche par un voyage de fin d\'année.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('association_section_paragraph_control', array(
    'label' => 'Paragraphe 1',
    'section' => 'association_section',
    'settings' => 'association_section_paragraph',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('association_section_paragraph_2', array(
    'default' => 'En 2016, SAALA a obtenu la reconnaissance d\'Intérêt Général, une distinction dont nous sommes très fiers et qui nous permet de délivrer un reçu fiscal à chacun de nos donateurs. Encouragés par cette distinction, l\'association s\'est alors lancée dans le projet fou d\'équiper en cartables solaires Solarpak les plus de 1000 élèves de trois écoles primaires : cette aventure a pu être concrétisée pour le plus grand bonheur des enfants qui vivent dans des régions non électrifiées du Burkina. Le prochain grand projet de l\'association est d\'aider l\'association AMA BURKINA PAALGA dans la construction d\'une école en voûte nubienne sur la commune de Pabre.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('association_section_paragraph_2_control', array(
    'label' => 'Paragraphe 2',
    'section' => 'association_section',
    'settings' => 'association_section_paragraph_2',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('association_section_paragraph_3', array(
    'default' => 'Tous ces projets ont bien entendu pu voir le jour grâce au dynamisme et au courage de nos partenaires sur place :',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('association_section_paragraph_3_control', array(
    'label' => 'Paragraphe 3',
    'section' => 'association_section',
    'settings' => 'association_section_paragraph_3',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('association_section_paragraph_4', array(
    'default' => '- Denis KABORE, président de AMA BURKINA PAALGA',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('association_section_paragraph_4_control', array(
    'label' => 'Paragraphe 4',
    'section' => 'association_section',
    'settings' => 'association_section_paragraph_4',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('association_section_paragraph_5', array(
    'default' => '- Boukare ZABDA, président de l\'ABAEF',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('association_section_paragraph_5_control', array(
    'label' => 'Paragraphe 5',
    'section' => 'association_section',
    'settings' => 'association_section_paragraph_5',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('association_section_paragraph_6', array(
    'default' => '- David SAGNAN, président de l\'AECEG',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('association_section_paragraph_6_control', array(
    'label' => 'Paragraphe 6',
    'section' => 'association_section',
    'settings' => 'association_section_paragraph_6',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('association_section_paragraph_7', array(
    'default' => 'Qu\'ils soient ici remerciés pour leur incroyable travail et leur ténacité exemplaire.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('association_section_paragraph_7_control', array(
    'label' => 'Paragraphe 7',
    'section' => 'association_section',
    'settings' => 'association_section_paragraph_7',
    'type' => 'textarea',
  ));

  // Page - Notre mission
  $wp_customize->add_section('mission_section', array(
    'title' => 'Page - Notre mission',
    'priority' => 30,
  ));

  $wp_customize->add_setting('mission_section_title', array(
    'default' => 'Une association à but humanitaire',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('mission_section_title_control', array(
    'label' => 'Titre principal',
    'section' => 'mission_section',
    'settings' => 'mission_section_title',
    'type' => 'text',
  ));

  $wp_customize->add_setting('mission_section_paragraph', array(
    'default' => 'Extrait des statuts de l\'association :',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('mission_section_paragraph_control', array(
    'label' => 'Paragraphe 1',
    'section' => 'mission_section',
    'settings' => 'mission_section_paragraph',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('mission_section_paragraph_2', array(
    'default' => 'Cette association a un but humanitaire. Ses objectifs sont :',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('mission_section_paragraph_2_control', array(
    'label' => 'Paragraphe 2',
    'section' => 'mission_section',
    'settings' => 'mission_section_paragraph_2',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('mission_section_paragraph_3', array(
    'default' => '- l\'organisation, le soutien et la réalisation d\'actions d\'aide au développement en faveur de l\'éducation, de la culture et de la santé dans les pays du Sud;',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('mission_section_paragraph_3_control', array(
    'label' => 'Paragraphe 3',
    'section' => 'mission_section',
    'settings' => 'mission_section_paragraph_3',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('mission_section_paragraph_4', array(
    'default' => '- le développement des échanges culturels et la coopération entre individus de cultures et de pays différents.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('mission_section_paragraph_4_control', array(
    'label' => 'Paragraphe 4',
    'section' => 'mission_section',
    'settings' => 'mission_section_paragraph_4',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('mission_section_paragraph_5', array(
    'default' => 'Le premier grand projet de SAALA concernait le développement de la petite école primaire de Namponkoré, village du Burkina Faso situé à 500 kilomètres de la capitale.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('mission_section_paragraph_5_control', array(
    'label' => 'Paragraphe 5',
    'section' => 'mission_section',
    'settings' => 'mission_section_paragraph_5',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('mission_section_paragraph_6', array(
    'default' => 'Les membres de l\'association se sont fixé pour objectif la construction et l\'équipement de trois salles de classes, ainsi que la rénovation des classes existantes.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('mission_section_paragraph_6_control', array(
    'label' => 'Paragraphe 6',
    'section' => 'mission_section',
    'settings' => 'mission_section_paragraph_6',
    'type' => 'textarea',
  ));

  // Page - Nous aider
  $wp_customize->add_section('aide_section', array(
    'title' => 'Page - Nous aider',
    'priority' => 30,
  ));

  $wp_customize->add_setting('aide_section_title', array(
    'default' => 'Comment aider l\'association Saala ?',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_title_control', array(
    'label' => 'Titre principal',
    'section' => 'aide_section',
    'settings' => 'aide_section_title',
    'type' => 'text',
  ));

  $wp_customize->add_setting('aide_section_paragraph', array(
    'default' => 'Il y a plusieurs façons d\'aider SAALA et de contribuer ainsi à l\'avancée du projet :',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_paragraph_control', array(
    'label' => 'Paragraphe 1',
    'section' => 'aide_section',
    'settings' => 'aide_section_paragraph',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('aide_section_paragraph_2', array(
    'default' => '- Tout d\'abord, vous pouvez devenir membre actif de l\'association, par le versement d\'une cotisation annuelle de 20 euros.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_paragraph_2_control', array(
    'label' => 'Paragraphe 2',
    'section' => 'aide_section',
    'settings' => 'aide_section_paragraph_2',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('aide_section_paragraph_3', array(
    'default' => '- Il vous est aussi possible de devenir membre bienfaiteur par l\'octroi d\'un don supérieur à 20 euros. Dans les deux cas, vous pouvez libeller vos chèques à l\'ordre de SAALA et adresser vos dons et cotisations à l\'adresse suivante :',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_paragraph_3_control', array(
    'label' => 'Paragraphe 3',
    'section' => 'aide_section',
    'settings' => 'aide_section_paragraph_3',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('aide_section_paragraph_4', array(
    'default' => '- SAALA "Avenir au Sud" 4, rue Jules Guesde 95260 BEAUMONT-SUR-OISE',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_paragraph_4_control', array(
    'label' => 'Paragraphe 4',
    'section' => 'aide_section',
    'settings' => 'aide_section_paragraph_4',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('aide_section_paragraph_5', array(
    'default' => 'N\'oubliez pas de joindre votre adresse mail pour pouvoir être tenus au courant de l\'avancée du projet et des différents événements organisés.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_paragraph_5_control', array(
    'label' => 'Paragraphe 5',
    'section' => 'aide_section',
    'settings' => 'aide_section_paragraph_5',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('aide_section_paragraph_6', array(
    'default' => 'Vous pouvez également choisir le virement automatique pour un montant de votre choix, si vous souhaitez nous aider de façon plus régulière. Dans ce cas, vous pouvez nous adresser un courriel (rubrique "Contact") et nous nous mettrons en relation avec vous.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_paragraph_6_control', array(
    'label' => 'Paragraphe 6',
    'section' => 'aide_section',
    'settings' => 'aide_section_paragraph_6',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('aide_section_paragraph_7', array(
    'default' => 'Enfin, si l\'aide financière ne vous est pas possible, sachez que nous sommes régulièrement en recherche de bénévoles pour nos différents événements. Consultez régulièrement la rubrique "Actualités" pour en savoir plus.',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_paragraph_7_control', array(
    'label' => 'Paragraphe 7',
    'section' => 'aide_section',
    'settings' => 'aide_section_paragraph_7',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('aide_section_paragraph_8', array(
    'default' => 'De la même façon, nous recherchons aussi des talents amateurs pour participer à nos marchés de Noël et animer nos soirées dansantes (artistes en herbe, DJ, traiteurs, mini-cours et/ou démonstrations de danses, animateurs, etc.).',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_paragraph_8_control', array(
    'label' => 'Paragraphe 8',
    'section' => 'aide_section',
    'settings' => 'aide_section_paragraph_8',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('aide_section_paragraph_9', array(
    'default' => 'Quelles que soient vos possibilités, votre aide sera de toutes façons la bienvenue !!',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('aide_section_paragraph_9_control', array(
    'label' => 'Paragraphe 9',
    'section' => 'aide_section',
    'settings' => 'aide_section_paragraph_9',
    'type' => 'textarea',
  ));

  // Page - Nous Contacter
  $wp_customize->add_section('contact_section', array(
    'title' => 'Page - Nous Contacter',
    'priority' => 30,
  ));

  $wp_customize->add_setting('contact_section_address', array(
    'default' => '6 Rue de la Mairie 95820 Bruyères-sur-Oise',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('contact_section_address_control', array(
    'label' => 'Addresse',
    'section' => 'contact_section',
    'settings' => 'contact_section_address',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('contact_section_phone', array(
    'default' => '+33659009359',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('contact_section_phone_control', array(
    'label' => 'Téléphone',
    'section' => 'contact_section',
    'settings' => 'contact_section_phone',
    'type' => 'text',
  ));

  $wp_customize->add_setting('contact_section_email', array(
    'default' => 'saala.bf@gmail.com',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('contact_section_email_control', array(
    'label' => 'Addresse email',
    'section' => 'contact_section',
    'settings' => 'contact_section_email',
    'type' => 'text',
  ));

}
add_action('customize_register', 'theme_customizer_settings');