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
              <span class="mr-2">
                <a href="<?php echo site_url('/blog/'); ?>">Notre Blog</a>
              </span>
              <span><?php echo get_the_title(); ?></span>
            </p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo get_the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
    <section class="saala-section saala-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 saala-animate" style="text-align: justify;">
            <?php
            if (have_posts()) :
              while (have_posts()) :
                the_post();
                the_content();
              endwhile;
            endif;
            ?>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <?php
                $tags = get_the_tags();
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<a href="javascript:void(0);" class="tag-cloud-link">' . $tag->name . '</a>';
                    }
                }
                ?>
              </div>
            </div>
            <div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img style="width: 110px; height: 105px; border: 4px solid #f0f0f0; -webkit-border-radius: 50%; -moz-border-radius: 50%; -ms-border-radius: 50%; border-radius: 50%;" src="<?php echo get_template_directory_uri().'/assets/img/team_1.jpg'; ?>" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
                <h3><?php the_author(); ?></h3>
                <p>Enseignante/Présidente</p>
              </div>
            </div>
          </div>
          <!-- .col-md-8 -->
          <div class="col-md-4 sidebar saala-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Rechercher">
                </div>
              </form>
            </div>
            <div class="sidebar-box saala-animate">
              <div class="categories">
                <h3>Catégories</h3>
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                  foreach ($categories as $category) {
                    $cat_name = $category->name;
                    $cat_count = $category->count;
                    echo '<li><a href="javascript:void(0);">' . $cat_name . '<span>(' . $cat_count . ')</span></a></li>';
                  }
                }
                ?>
              </div>
            </div>
            <div class="sidebar-box saala-animate">
              <h3>Derniers articles</h3>
              <?php
              $recent_posts = wp_get_recent_posts(array(
                  'numberposts' => 3, // Nombre d'articles à récupérer
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
                  <div class="meta">
                    <div>
                      <a href="javascript:void(0);">
                        <span class="icon-calendar"></span> <?php echo $date ?> </a>
                    </div>
                    <div>
                      <a href="javascript:void(0);">
                        <span class="icon-person"></span> <?php echo $author ?> </a>
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
            <div class="sidebar-box saala-animate">
              <div class="tagcloud">
              <?php
              $tags = get_the_tags();
              if($tags) {
                  foreach ($tags as $tag) {
                      echo '<a href="javascript:void(0);" class="tag-cloud-link">' . $tag->name . '</a>';
                  }
              }
              ?>
              </div>
            </div>
            <div class="sidebar-box saala-animate" style="text-align: justify;">
              <h3>Résumé de l'article</h3>
              <p>
              <?php
              if(have_posts()):
                while(have_posts()):
                  the_post();
                  $excerpt = get_the_excerpt();
                  if($extract != NULL && strlen($extract) >= 112) {
                    echo $extract;
                  }
                  else {
                    echo "Micro association humanitaire, SAALA s'est donnée pour mission l'aide au développement scolaire au Burkina Faso.";
                  }
                endwhile;
              endif;
              ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- .section -->
<?php get_footer(); ?>