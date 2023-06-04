<?php
/*
Template Name: L'association
*/
?>

<?php get_header(); ?>
    <div class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/apropos_1.png'; ?>);" data-stellar-background-ratio="0.5">
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
            <div class="img img-about align-self-stretch" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/apropos_2.jpg'; ?>); width: 100%;"></div>
          </div>
          <div class="col-md-6 pl-md-5 saala-animate">
            <h2 class="mb-4"><?php echo get_theme_mod('association_section_title', 'Qui sommes-nous ?'); ?></h2>
            <p style="text-align: justify;"><?php echo get_theme_mod('association_section_text_right', 'Fondée en 2009, l\'association SAALA "Avenir au Sud" est née du désir de venir en aide à une "petite école du bout du monde" visitée au gré d\'un voyage hors des sentiers battus. Nous y avons rencontré 500 élèves qui s\'entassaient dans un bâtiment vétuste de trois salles de classe... Le surplus d\'élèves étudiait tant bien que mal sous une paillote construite par les habitants du village.'); ?></p>
          </div>
        </div>
        <br><br><div class="col-md-13 pl-md-10 saala-animate">
          <p style="text-align: justify;"><?php echo get_theme_mod('association_section_paragraph', 'C\'était à Namponkore, au pied de la falaise de Gobnangou, dans l\'est du Burkina Faso, si durement touché aujourd\'hui par des conflits sanglants... Quelques bénévoles se sont alors engagés à nos côtés pour cette grande aventure : ensemble, nous allions tenter de permettre à ces enfants d\'étudier dans de meilleures conditions. Nous n\'avons pas ménagé notre peine : création de l\'association, organisation d\'événements caritatifs, dossiers de demandes de subventions... Et très vite nous avons pu construire à Namponkore un bâtiment de 3 classes ainsi que des latrines. Puis le bâtiment a été doté de tables-bancs et de panneaux solaires. Nous avons alors rencontré l\'association ABAEF, avec laquelle nous avons pu créer un centre de formations en couture et coiffure à Ouagadougou : en 18 mois, le centre était auto-suffisant et accueillait des jeunes filles sorties du système scolaire tout en leur proposant des cours d\'alphabétisation et la possibilité de créer leur propre commerce. Ensuite, à Sourou, au nord de la capitale, nous avons pu développer l\'école primaire de la même façon qu\'à Namponkore, et l\'association a alors commencé à parrainer dix enfants orphelins, que nous accompagnons toujours aujourd\'hui. En parallèle, nous avons soutenu chaque année l\'association AECEG dans son projet de permettre aux enfants les plus défavorisés de découvrir la riche région gourmanche par un voyage de fin d\'année.'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('association_section_paragraph_2', 'En 2016, SAALA a obtenu la reconnaissance d\'Intérêt Général, une distinction dont nous sommes très fiers et qui nous permet de délivrer un reçu fiscal à chacun de nos donateurs. Encouragés par cette distinction, l\'association s\'est alors lancée dans le projet fou d\'équiper en cartables solaires Solarpak les plus de 1000 élèves de trois écoles primaires : cette aventure a pu être concrétisée pour le plus grand bonheur des enfants qui vivent dans des régions non électrifiées du Burkina. Le prochain grand projet de l\'association est d\'aider l\'association AMA BURKINA PAALGA dans la construction d\'une école en voûte nubienne sur la commune de Pabre.'); ?> </p>
          <p style="text-align: justify;"><?php echo get_theme_mod('association_section_paragraph_3', 'Tous ces projets ont bien entendu pu voir le jour grâce au dynamisme et au courage de nos partenaires sur place :'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('association_section_paragraph_4', '- Denis KABORE, président de AMA BURKINA PAALGA'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('association_section_paragraph_5', '- Boukare ZABDA, président de l\'ABAEF'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('association_section_paragraph_6', '- David SAGNAN, président de l\'AECEG'); ?></p>
          <p style="text-align: justify;"><?php echo get_theme_mod('association_section_paragraph_7', 'Qu\'ils soient ici remerciés pour leur incroyable travail et leur ténacité exemplaire.'); ?></p>
        </div>
      </div>
    </section>
    <section class="saala-counter saala-intro saala-intro-2" id="section-counter">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-5 d-flex justify-content-center counter-wrap saala-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
                <span>Nous avons équipé plus de</span>
                <strong class="number" data-number="1000">0</strong>
                <span>élèves en cartables solaires Solarpak</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap saala-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
                <h3 class="mb-4">Découvrir nos projets</h3>
                <p>En 2016, SAALA a obtenu la reconnaissance d'Intérêt Général.</p>
                <p>
                  <a href="<?php echo site_url('/blog/'); ?>" class="btn btn-white px-3 py-2 mt-2">Nos projets</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap saala-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
                <h3 class="mb-4">Je suis volontaire</h3>
                <p>Quelles que soient vos possibilités, votre aide sera toujours la bienvenue.</p>
                <p>
                  <a href="<?php echo site_url('/aide/'); ?>" class="btn btn-white px-3 py-2 mt-2">Devenir membre</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br><br><br>
<?php get_footer(); ?>