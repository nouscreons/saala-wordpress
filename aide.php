<?php
/*
Template Name: Nous aider
*/
?>

<?php get_header(); ?>
    <div class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/aide_1.png'; ?>);" data-stellar-background-ratio="0.5">
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
            <div class="img img-about align-self-stretch" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/aide_2.jpg'; ?>); width: 100%;"></div>
          </div>
          <div class="col-md-6 pl-md-5 saala-animate">
            <h2 class="mb-4"><?php echo get_theme_mod('aide_section_title', 'Comment aider l\'association Saala ?'); ?></h2>
            <p style="text-align: justify;"><?php echo get_theme_mod('aide_section_paragraph', 'Il y a plusieurs façons d\'aider SAALA et de contribuer ainsi à l\'avancée du projet :'); ?></p>
            <p style="text-align: justify;"><?php echo get_theme_mod('aide_section_paragraph_2', '- Tout d\'abord, vous pouvez devenir membre actif de l\'association, par le versement d\'une cotisation annuelle de 20 euros.'); ?></p>
            <p style="text-align: justify;"><?php echo get_theme_mod('aide_section_paragraph_3', '- Il vous est aussi possible de devenir membre bienfaiteur par l\'octroi d\'un don supérieur à 20 euros. Dans les deux cas, vous pouvez libeller vos chèques à l\'ordre de SAALA et adresser vos dons et cotisations à l\'adresse suivante :'); ?></p>
            <p style="text-align: justify;"><?php echo get_theme_mod('aide_section_paragraph_4', 'SAALA "Avenir au Sud" 4, rue Jules Guesde 95260 BEAUMONT-SUR-OISE'); ?></p>
          </div>
        </div>
        <br><br><div class="col-md-13 pl-md-10 saala-animate">
          <p style="text-align: justify;"><?php echo get_theme_mod('aide_section_paragraph_5', 'N\'oubliez pas de joindre votre adresse mail pour pouvoir être tenus au courant de l\'avancée du projet et des différents événements organisés.'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('aide_section_paragraph_6', 'Vous pouvez également choisir le virement automatique pour un montant de votre choix, si vous souhaitez nous aider de façon plus régulière. Dans ce cas, vous pouvez nous adresser un courriel (rubrique "Contact") et nous nous mettrons en relation avec vous.'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('aide_section_paragraph_7', 'Enfin, si l\'aide financière ne vous est pas possible, sachez que nous sommes régulièrement en recherche de bénévoles pour nos différents événements. Consultez régulièrement la rubrique "Actualités" pour en savoir plus.'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('aide_section_paragraph_8', 'De la même façon, nous recherchons aussi des talents amateurs pour participer à nos marchés de Noël et animer nos soirées dansantes (artistes en herbe, DJ, traiteurs, mini-cours et/ou démonstrations de danses, animateurs, etc.).'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('aide_section_paragraph_9', 'Quelles que soient vos possibilités, votre aide sera de toutes façons la bienvenue !!'); ?></p>
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