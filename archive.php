<?php

// charge la template header.php
get_header();

?>  
  
  <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">

       <h3>Articles de la catégorie <?php single_cat_title() ?></h1>
   
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
          <div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
            <p><?php
            // affiche un résumé de l'article
            the_excerpt();
            ?></p><br>
            <p>
              Posté par <a href="<?php the_permalink(); ?>"<?php the_author(); ?></a> le <time><?= get_the_date(); ?></time> dans <a href="<?= get_category_link($currentValue->term_id); ?>" ><?= $currentValue->name ?></a>
            </p>
            <?php endforeach; ?>
          </div>
           <?php
                endwhile;
            endif;
            ?>
        </article><br>
      


       
    

     

<?php

// charge la template footer.php
get_footer();
