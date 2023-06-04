<?php get_header(); ?>
    <div class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/presentation_1.png'; ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 saala-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo get_theme_mod('project_section_h1_title', 'SAALA "Avenir au Sud"'); ?></h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo get_theme_mod('project_section_h1_description', 'Fondée en 2009, l\'association SAALA "Avenir au Sud" est née du désir de venir en aide à une "petite école du bout du monde" visitée au gré d\'un voyage hors des sentiers battus.'); ?></a>
            </p>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
              <a href="<?php echo get_theme_mod('project_section_video', 'https://www.youtube.com/watch?v=DqLSEx_l80Y'); ?>" class="btn btn-white btn-outline-white px-4 py-3 popup-youtube">
                <span class="icon-play mr-2"></span><?php echo get_theme_mod('project_section_button2_text', 'Vidéo de présentation'); ?> </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <section class="saala-counter saala-intro" id="section-counter">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-5 d-flex justify-content-center counter-wrap saala-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
                <span><?php echo get_theme_mod('chiffres_section_counter_text_sup', 'Nous avons équipé plus de'); ?></span>
                <strong class="number" data-number="<?php echo get_theme_mod('chiffres_section_counter_number', '1000'); ?>">0</strong>
                <span><?php echo get_theme_mod('chiffres_section_counter_text_inf', 'élèves en cartables solaires Solarpak'); ?></span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap saala-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
                <h3 class="mb-4"><?php echo get_theme_mod('chiffres_section_counter_text_sup_2', 'Découvrir nos projets'); ?></h3>
                <p><?php echo get_theme_mod('chiffres_section_counter_text_inf_2', 'En 2016, SAALA a obtenu la reconnaissance d\'Intérêt Général.'); ?></p>
                <p>
                  <a href="<?php echo site_url('/blog/'); ?>" class="btn btn-white px-3 py-2 mt-2"><?php echo get_theme_mod('project_section_button_text', 'Nos projets'); ?></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap saala-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
                <h3 class="mb-4"><?php echo get_theme_mod('chiffres_section_counter_text_sup_3', 'Je suis volontaire'); ?></h3>
                <p><?php echo get_theme_mod('chiffres_section_counter_text_inf_3', 'Quelles que soient vos possibilités, votre aide sera toujours la bienvenue.'); ?></p>
                <p>
                  <a href="<?php echo site_url('/aide/'); ?>" class="btn btn-white px-3 py-2 mt-2">Devenir membre</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="saala-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch saala-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3">
                <span class="flaticon-donation-1"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading"><?php echo get_theme_mod('presentation_section_section_title', 'Faire un don'); ?></h3>
                <p><?php echo get_theme_mod('presentation_section_section_description', 'Pour améliorer l\'accès à l\'éducation pour les enfants et jeunes du Burkina Faso.'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch saala-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3">
                <span class="flaticon-charity"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading"><?php echo get_theme_mod('presentation_section_section_title_2', 'Devenir membre'); ?></h3>
                <p><?php echo get_theme_mod('presentation_section_section_description_2', 'Il vous est possible de devenir membre de l\'association en nous aidant régulièrement.'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch saala-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3">
                <span class="flaticon-donation"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading"><?php echo get_theme_mod('presentation_section_section_title_3', 'Participer aux sponsors'); ?></h3>
                <p><?php echo get_theme_mod('presentation_section_section_description_3', 'Chaque année est organisé dans le lycée George Sand à Domont, une tournée solidaire.'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="saala-section bg-light">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section saala-animate text-center">
            <h2 class="mb-4"><?php echo get_theme_mod('carrousel_section_title', 'Financement des projets'); ?></h2>
            <p><?php echo get_theme_mod('carrousel_section_description', 'Le premier grand projet de SAALA concernait le développement de la petite école primaire de Namponkoré, village du Burkina Faso situé à 500 kilomètres de la capitale.'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 saala-animate">
            <div class="carousel-cause owl-carousel">
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/dons_1.jpg'; ?>);"></a>
                  <div class="text p-3 p-md-4">
                    <h3>
                      <a href="https://www.helloasso.com/associations/association-saala-avenir-au-sud/formulaires/1"><?php echo get_theme_mod('carrousel_section_title_item', 'La Tournée solidaire 2023'); ?></a>
                    </h3>
                    <p><?php echo get_theme_mod('carrousel_section_description_item', 'La course solidaire organisée au lycée George Sand pour financer les projets de l\'association SAALA à travers les sponsors des élèves.'); ?></p>
                    <span class="donation-time mb-3 d-block"><?php echo get_theme_mod('carrousel_section_date_item', 'De 2023 à fin 2023'); ?></span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo get_theme_mod('carrousel_section_target_item', '50%'); ?>" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block"><?php echo get_theme_mod('carrousel_section_count_target_item', '1,000€ recueilli sur 2,000€'); ?></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="cause-entry">
                  <a href="#" class="img" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/dons_2.jpg'; ?>);"></a>
                  <div class="text p-3 p-md-4">
                    <h3>
                      <a href="#"><?php echo get_theme_mod('carrousel_section_title_item_2', 'L\'école au Burkina Faso'); ?></a>
                    </h3>
                    <p><?php echo get_theme_mod('carrousel_section_description_item_2', 'Fin 2013, ce sont les panneaux solaires qui vont être fixés sur le bâtiment, et permettre ainsi l\'électrification de deux salles de classe.'); ?></p>
                    <span class="donation-time mb-3 d-block"><?php echo get_theme_mod('carrousel_section_date_item_2', 'De 2013 à 2014'); ?></span>
                    <div class="progress custom-progress-success">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo get_theme_mod('carrousel_section_target_item_2', '100%'); ?>" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="fund-raised d-block"><?php echo get_theme_mod('carrousel_section_count_target_item_2', '5,000€ recueilli sur 5,000€'); ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="saala-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section saala-animate text-center">
            <h2 class="mb-4"><?php echo get_theme_mod('team_section_title', 'Notre équipe'); ?></h2>
            <p><?php echo get_theme_mod('team_section_description', 'SAALA est une micro association composée des personnes suivantes :'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 d-flex mb-sm-3 saala-animate">
            <div class="staff">
              <div class="d-flex mb-3">
                <div class="img" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/team_1.jpg'; ?>);"></div>
                <div class="info ml-3">
                  <h3>
                    <a href="javascript:void(0);"><?php echo get_theme_mod('team_section_person', 'Valérie Derue'); ?></a>
                  </h3>
                  <span class="position"><?php echo get_theme_mod('team_section_person_function', 'Enseignante/Présidente'); ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-flex mb-sm-3 saala-animate">
            <div class="staff">
              <div class="d-flex mb-3">
                <div class="img" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/team_2.jpg'; ?>);"></div>
                <div class="info ml-3">
                  <h3>
                    <a href="javascript:void(0);"><?php echo get_theme_mod('team_section_person_2', 'Nathaniel Lechêne'); ?></a>
                  </h3>
                  <span class="position"><?php echo get_theme_mod('team_section_person_function_2', 'Forestier/Trésorier'); ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-flex mb-sm-3 saala-animate">
            <div class="staff">
              <div class="d-flex mb-3">
                <div class="img" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/team_3.jpg'; ?>);"></div>
                <div class="info ml-3">
                  <h3>
                    <a href="javascript:void(0);"><?php echo get_theme_mod('team_section_person_3', 'Juliettte Brancourt'); ?></a>
                  </h3>
                  <span class="position"><?php echo get_theme_mod('team_section_person_function_3', 'Enseignante/Vice-Présidente'); ?></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-flex mb-sm-3 saala-animate">
            <div class="staff">
              <div class="d-flex mb-3">
                <div class="img" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/team_4.jpg'; ?>);"></div>
                <div class="info ml-3">
                  <h3>
                    <a href="javascript:void(0);"><?php echo get_theme_mod('team_section_person_4', 'Annie Derue'); ?></a>
                  </h3>
                  <span class="position"><?php echo get_theme_mod('team_section_person_function_4', 'Retraitée/Secrétaire'); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="saala-gallery">
      <div class="d-md-flex">
        <a href="<?php echo get_template_directory_uri().'/assets/img/gallery_2.jpg'; ?>" class="gallery image-popup d-flex justify-content-center align-items-center img saala-animate" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/gallery_2.jpg'; ?>);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="<?php echo get_template_directory_uri().'/assets/img/gallery_3.jpg'; ?>" class="gallery image-popup d-flex justify-content-center align-items-center img saala-animate" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/gallery_3.jpg'; ?>);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="<?php echo get_template_directory_uri().'/assets/img/gallery_4.jpg'; ?>" class="gallery image-popup d-flex justify-content-center align-items-center img saala-animate" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/gallery_4.jpg'; ?>);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="<?php echo get_template_directory_uri().'/assets/img/gallery_5.jpg'; ?>" class="gallery image-popup d-flex justify-content-center align-items-center img saala-animate" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/gallery_5.jpg'; ?>);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="d-md-flex">
        <a href="<?php echo get_template_directory_uri().'/assets/img/gallery_6.jpg'; ?>" class="gallery image-popup d-flex justify-content-center align-items-center img saala-animate" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/gallery_6.jpg'; ?>);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="<?php echo get_template_directory_uri().'/assets/img/gallery_7.jpg'; ?>" class="gallery image-popup d-flex justify-content-center align-items-center img saala-animate" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/gallery_7.jpg'; ?>);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="<?php echo get_template_directory_uri().'/assets/img/gallery_8.jpg'; ?>" class="gallery image-popup d-flex justify-content-center align-items-center img saala-animate" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/gallery_8.jpg'; ?>);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="<?php echo get_template_directory_uri().'/assets/img/gallery_9.jpg'; ?>" class="gallery image-popup d-flex justify-content-center align-items-center img saala-animate" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/gallery_9.jpg'; ?>);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
    </section>
    <section class="saala-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section saala-animate text-center">
            <h2 class="mb-4"><?php echo get_theme_mod('news_section_title', 'Actualités'); ?></h2>
            <p><?php echo get_theme_mod('news_section_description', 'L\'organisation, le soutien et la réalisation d\'actions d\'aide au développement en faveur de l\'éducation, de la culture et de la santé dans les pays du Sud :'); ?></p>
          </div>
        </div>
        <div class="row d-flex">
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3, // Nombre d'articles à récupérer
            'post_status' => 'publish', // Uniquement les articles publiés
        ));
        foreach ($recent_posts as $post) :
            $author = get_the_author_meta('display_name', $post['post_author']);
            $date = get_the_date('d/m/Y', $post['ID']);
            $link = get_permalink($post['ID']);
            $image = get_the_post_thumbnail_url($post['ID'], 'thumbnail');
            $title = get_the_title($post['ID']);
            $extract = get_the_excerpt($post['ID']);
        ?>
          <div class="col-md-4 d-flex saala-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?php echo $link ?>" class="block-20" style="background-image: url(<?php if($image != NULL) echo $image; else echo get_template_directory_uri().'/assets/img/noimage.png'; ?>);"></a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div>
                    <a href="javascript:void(0);"><?php echo $date ?></a>
                  </div>
                  <div>
                    <a href="javascript:void(0);"><?php echo $author ?></a>
                  </div>
                  <div>
                    <a href="javascript:void(0);" class="meta-chat">
                      <span class="icon-chat"></span> 0 </a>
                  </div>
                </div>
                <h3 class="heading mt-3">
                  <a href="<?php echo $link ?>"><?php echo $title ?></a>
                </h3>
                <p><?php if($extract != NULL && strlen($extract) >= 112) echo $extract; else echo "Micro association humanitaire, SAALA s'est donnée pour mission l'aide au développement scolaire au Burkina Faso." ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="saala-section-3 img" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/contact_2.png'; ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row d-md-flex">
          <div class="col-md-6 d-flex saala-animate">
            <div class="img img-2 align-self-stretch" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/contact_1.png'; ?>);"></div>
          </div>
          <div class="col-md-6 volunteer pl-md-5 saala-animate">
            <h3 class="mb-3">Je suis volontaire</h3>
            <form action="#" class="volunter-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nom">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Adresse email">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyer un message" class="btn btn-white py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>