<?php
get_header() ?>

    <main>
            <!-- emmet: (section#presentation>h2+p)+(section#highlight>h2+img) -->
            <section id="presentation">
                <h2>Trop de caméléons? nope.</h2>
                <p>Ici nous pensons qu'il n'y aura jamais trop de caméléons. Les caméléons, c'est mignon. Les caméléons, c'est pas con. Les
                caméléons, ça sent le bonbon. il est <a href="https://fr.wikipedia.org/wiki/Les_Cam%C3%A9l%C3%A9ons">prouvé scientifiquement</a>
                que regarder les caméléons tous les jours améliore la productivité et diminue le stress. Essayez !</p>
            </section>
            <section id="highlight">
                <h2>Le caméléon de la semaine &#9825;</h2>
                <img src="<?= get_template_directory_uri() ?>/images/cameleon-big.jpg" alt="Caméléon de la semaine">
            </section>



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

 
                    </div>

        <?php
get_footer() ?>