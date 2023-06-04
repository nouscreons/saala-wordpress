<?php
/*
Template Name: Nous Contacter
*/
?>

<?php get_header(); ?>
    <div class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/contact_3.png'; ?>);" data-stellar-background-ratio="0.5">
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
    <section class="saala-section contact-section saala-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Nos Coordonnées</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p>
              <span>Adresse :</span> <?php echo get_theme_mod('contact_section_address', '6 Rue de la Mairie 95820 Bruyères-sur-Oise'); ?>
            </p>
          </div>
          <div class="col-md-3">
            <p>
              <span>Téléphone :</span>
              <a href="tel:<?php echo get_theme_mod('contact_section_phone', '+33659009359'); ?>"><?php echo get_theme_mod('contact_section_phone', '+33659009359'); ?></a>
            </p>
          </div>
          <div class="col-md-3">
            <p>
              <span>Adresse email :</span>
              <a href="mailto:<?php echo get_theme_mod('contact_section_email', 'saala.bf@gmail.com'); ?>"><?php echo get_theme_mod('contact_section_email', 'saala.bf@gmail.com'); ?></a>
            </p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <h4 class="mb-4">J'ai des questions</h4>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nom">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Adresse email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Sujet">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyer un message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
          <div class="col-md-6" id="map"><iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo get_theme_mod('contact_section_address', '6 Rue de la Mairie 95820 Bruyères-sur-Oise'); ?>+&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>