<?php
/*
Template Name: Notre mission
*/
?>

<?php get_header(); ?>
    <div class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/projet_1.png'; ?>);" data-stellar-background-ratio="0.5">
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
        <div class="row d-flex">
          <div class="col-md-6 d-flex saala-animate">
            <div class="img img-about align-self-stretch" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/projet_2.jpg'; ?>); width: 100%;"></div>
          </div>
          <div class="col-md-6 pl-md-5 saala-animate">
            <h2 class="mb-4"><?php echo get_theme_mod('mission_section_title', 'Une association à but humanitaire'); ?></h2>
            <p style="text-align: justify;"><?php echo get_theme_mod('mission_section_paragraph', 'Extrait des statuts de l\'association :'); ?></p>
            <p style="text-align: justify;"><?php echo get_theme_mod('mission_section_paragraph_2', 'Cette association a un but humanitaire. Ses objectifs sont :'); ?></p>
            <p style="text-align: justify;"><?php echo get_theme_mod('mission_section_paragraph_3', '- l\'organisation, le soutien et la réalisation d\'actions d\'aide au développement en faveur de l\'éducation, de la culture et de la santé dans les pays du Sud;'); ?></p>
            <p style="text-align: justify;"><?php echo get_theme_mod('mission_section_paragraph_4', '- le développement des échanges culturels et la coopération entre individus de cultures et de pays différents.'); ?></p>
          </div>
        </div>
        <br><br><div class="col-md-13 pl-md-10 saala-animate">
          <p style="text-align: justify;"><?php echo get_theme_mod('mission_section_paragraph_5', 'Le premier grand projet de SAALA concernait le développement de la petite école primaire de Namponkoré, village du Burkina Faso situé à 500 kilomètres de la capitale.'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('mission_section_paragraph_6', 'Les membres de l\'association se sont fixé pour objectif la construction et l\'équipement de trois salles de classes, ainsi que la rénovation des classes existantes.'); ?></p>
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