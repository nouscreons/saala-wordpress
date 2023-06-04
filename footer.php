    <footer class="saala-footer saala-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="saala-footer-widget mb-4">
              <h2 class="saala-heading-2">Saala.org</h2>
              <p style="text-align: justify;"><?php echo get_theme_mod('footer_section_footer_description', 'Micro association humanitaire, SAALA s\'est donnée pour mission l\'aide au développement scolaire au Burkina Faso.'); ?></p>
              <ul class="saala-footer-social list-unstyled float-md-left float-lft mt-5 disable-select">
                <li class="saala-animate">
                  <a href="<?php echo get_theme_mod('footer_section_twitter', ''); ?>" target="_blank">
                    <span class="icon-twitter"></span>
                  </a>
                </li>
                <li class="saala-animate">
                  <a href="<?php echo get_theme_mod('footer_section_facebook', 'https://www.facebook.com/saala.org/?locale=fr_FR'); ?>" target="_blank">
                    <span class="icon-facebook"></span>
                  </a>
                </li>
                <li class="saala-animate">
                  <a href="<?php echo get_theme_mod('footer_section_instagram', ''); ?>" target="_blank">
                    <span class="icon-instagram"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="saala-footer-widget mb-4">
              <h2 class="saala-heading-2">Actualités</h2>
              <?php
              $recent_posts = wp_get_recent_posts(array(
                  'numberposts' => 2, // Nombre d'articles à récupérer
                  'post_status' => 'publish', // Uniquement les articles publiés
              ));
              foreach ($recent_posts as $post) :
                  $author = get_the_author_meta('display_name', $post['post_author']);
                  $date = get_the_date('d/m/Y', $post['ID']);
                  $link = get_permalink($post['ID']);
                  $image = get_the_post_thumbnail_url($post['ID'], 'full');
                  $title = get_the_title($post['ID']);
              ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php if($image != NULL) echo $image; else echo get_template_directory_uri().'/assets/img/noimage.png'; ?>);"></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="<?php echo $link ?>"><?php echo $title ?></a>
                  </h3>
                  <div class="meta disable-select">
                    <div>
                      <a href="javascript:void(0);">
                        <span class="icon-calendar"></span><?php echo $date ?></a>
                    </div>
                    <div>
                      <a href="javascript:void(0);">
                        <span class="icon-person"></span><?php echo $author ?></a>
                    </div>
                    <div>
                      <a href="javascript:void(0);">
                        <span class="icon-chat"></span> 0 </a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-md-2">
            <div class="saala-footer-widget mb-4 ml-md-4">
              <h2 class="saala-heading-2">Pages</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="<?php echo site_url('/blog/'); ?>" class="py-2 d-block"><?php echo get_theme_mod('menu_section_element_4', 'Notre Blog'); ?></a>
                </li>
                <li>
                  <a href="<?php echo site_url('/a-propos/'); ?>" class="py-2 d-block"><?php echo get_theme_mod('menu_section_element_2', 'L\'association'); ?></a>
                </li>
                <li>
                  <a href="<?php echo site_url('/le-projet/'); ?>" class="py-2 d-block"><?php echo get_theme_mod('menu_section_element_3', 'Notre mission'); ?></a>
                </li>
                <li>
                  <a href="<?php echo site_url('/donation/'); ?>" class="py-2 d-block"><?php echo get_theme_mod('menu_section_element_6', 'Faire un don'); ?></a>
                </li>
                <li>
                  <a href="<?php echo site_url('/contact/'); ?>" class="py-2 d-block"><?php echo get_theme_mod('menu_section_element_7', 'Nous Contacter'); ?></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="saala-footer-widget mb-4">
              <h2 class="saala-heading-2">Nous Contacter</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="icon icon-map-marker"></span>
                    <span class="text"><?php echo get_theme_mod('contact_section_address', '6 Rue de la Mairie 95820 Bruyères-sur-Oise'); ?></span>
                  </li>
                  <li>
                    <a href="tel:<?php echo get_theme_mod('contact_section_phone', '+33659009359'); ?>">
                      <span class="icon icon-phone"></span>
                      <span class="text"><?php echo get_theme_mod('contact_section_phone', '+33659009359'); ?></span>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:<?php echo get_theme_mod('contact_section_email', 'saala.bf@gmail.com'); ?>">
                      <span class="icon icon-envelope"></span>
                      <span class="text"><?php echo get_theme_mod('contact_section_email', 'saala.bf@gmail.com'); ?></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center disable-select">
            <p>SAALA : <a href="https://www.net1901.org/association/SAALA,545713.html" target="_blank">Association Loi 1901 à but humanitaire</a> - <a href="https://www.nouscreons.fr/" target="_blank">Site web par l'Agence Nous Créons</a> - Tous droits réservés : 2009- <script>document.write(new Date().getFullYear());</script></p>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>