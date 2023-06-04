<?php
/*
Template Name: Faire un don
*/
?>

<?php get_header(); ?>
    <div class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/donation_1.png'; ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 saala-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
              <span class="mr-2">
                <a href="<?php echo home_url(); ?>">Accueil</a>
              </span>
              <span><?php echo get_the_title(); ?></span>
            </p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo get_the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
    <section class="saala-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 saala-animate">
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
          <div class="col-md-4 saala-animate">
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
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li>
                  <a href="javascript:void(0);">&lt;</a>
                </li>
                <li class="active">
                  <span>1</span>
                </li>
                <li>
                  <a href="javascript:void(0);">2</a>
                </li>
                <li>
                  <a href="javascript:void(0);">3</a>
                </li>
                <li>
                  <a href="javascript:void(0);">4</a>
                </li>
                <li>
                  <a href="javascript:void(0);">5</a>
                </li>
                <li>
                  <a href="javascript:void(0);">&gt;</a>
                </li>
              </ul>
            </div>
          </div>
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