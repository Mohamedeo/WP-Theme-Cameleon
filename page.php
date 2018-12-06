
<?php
get_header();
?>

<?php
the_post();
?>
            
<div class="container">    
    <div class="row">
      <main class="col-lg-12">
        <article>
          <div>
            <h2><?php the_title() ?></h2>
            <p>
            Posté par <a href="#" class="card-link"><?php the_author() ?></a> le <time datetime="<?= get_the_date('Y-m-d') ?>"> <?php the_date() ?></time> 
            </p><br>
            <p> <?php
            the_content(); ?></p>
          </div><br>
           <a href="<?= home_url() ?>" class="post__link">Retour à l'accueil</a>
        </article>
      </main>
    </div>

<?php
get_footer();

