<?php
/*
Template Name: Actualités
*/
?>

<?php get_header(); ?>
    <div class="hero-wrap" style="background-image: url(<?php echo get_template_directory_uri().'/assets/img/blog_1.png'; ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 saala-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
              <span class="mr-2">
                <a href="<?php echo home_url(); ?>">Accueil</a>
              </span>
              <span>Notre Blog</span>
            </p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Notre Blog</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="saala-section">
      <div class="container">
        <div class="row d-flex">
          <?php
          $recent_posts = wp_get_recent_posts(array(
              'numberposts' => 9, // Nombre d'articles à récupérer
              'post_status' => 'publish', // Uniquement les articles publiés
          ));
          foreach ($recent_posts as $post) :
              $author = get_the_author_meta('display_name', $post['post_author']);
              $date = get_the_date('d/m/Y', $post['ID']);
              $link = get_permalink($post['ID']);
              $image = get_the_post_thumbnail_url($post['ID'], 'full');
              $title = get_the_title($post['ID']);
              $extract = get_the_excerpt($post['ID']);
          ?>
          <div class="col-md-4 d-flex saala-animate">
            <div class="blog-entry align-self-stretch">
              <a href="<?php echo $link ?>" class="block-20" style="background-image: url(<?php if($image != NULL) echo $image; else echo get_template_directory_uri().'/assets/img/noimage.png'; ?>);"></a>
              <div class="text p-4 d-block">
                <div class="meta mb-3 disable-select">
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
<?php get_footer(); ?>