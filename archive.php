<?php
get_header();
?>  
<div class="container">
<div class="row">
<main class="col-lg-9">
  <h3>Articles de la catégorie <?php single_cat_title() ?></h1>
   
<?php
  if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>
       
      <article>
         <?php
            $categoriesList = get_the_category();
            foreach ($categoriesList as $currentValue) : 
            ?>
          <div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
            <p><?php           
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
