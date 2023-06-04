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
		<div class="col-md-13 pl-md-10 saala-animate" style="text-align: justify;">
            <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post();
                the_content();
              endwhile;
            endif;
            ?>
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
    <!-- .section -->
<?php get_footer(); ?>