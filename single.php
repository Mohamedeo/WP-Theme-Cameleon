<?php
get_header() ?>


        <?php
        the_post();
        ?>

               
  <div class="container">    
    <div class="row">
      <main class="col-lg-12">
        <article>
          <div >
            <h2><?php the_title() ?></h2>
            <p>
            <?php
            $categoriesList = get_the_category();
            foreach ($categoriesList as $currentValue) : ?>
              Posté par <a href="#" class="card-link"><?php the_author() ?></a> le <time datetime="<?= get_the_date('Y-m-d') ?>">le <?php the_date() ?></time> dans <a href="<?= get_category_link($currentValue->term_id); ?>" class="card-link"><?= $currentValue->name ?></a>
            </p><br>
            <?php endforeach; ?>
            <p> 
            <?php
            the_content(); ?>
            </p>
          </div>
        </article>

           
        
      </main>
    </div><!-- /.row -->

<?php
get_footer() ?>