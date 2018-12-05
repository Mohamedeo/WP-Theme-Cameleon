<?php
get_header() ?>


<div class="container">
  <div class="row">
    <div class="col-sm-8">
      
   
  
<?php

            // si j'ai au moins un article
            if ( have_posts() ) :

                /* Start the Loop */
                // Je boule sur chaque article et je charge ses données en mémoire
                while ( have_posts() ) : the_post();
            ?>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article>
         <?php
            $categoriesList = get_the_category();
            foreach ($categoriesList as $currentValue) : ?>
          <div class="card-body">
            <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
            <p class="card-text"><?php
            // affiche un résumé de l'article
            the_excerpt();
            ?></p><br>
            <p class="infos">
              Posté par <a href="<?php the_permalink(); ?>" class="card-link"><?php the_author(); ?></a> le <time><?= get_the_date(); ?></time> dans <a href="<?= get_category_link($currentValue->term_id); ?>" class="card-link"><?= $currentValue->name ?></a>
            </p>
            <?php endforeach; ?>
          </div>
           <?php
                endwhile;
            endif;
            ?>
        </article>
        </div>
  <div class="col-sm-4">
      <aside>
       <?php
if( is_active_sidebar( 'zone-widgets-1' ) ):
dynamic_sidebar( 'zone-widgets-1' );
endif;
?>
        </aside>
    </div>
  </div>

  <div class="container">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>

       
              </div>
                    </div>

        <?php
get_footer() ?>