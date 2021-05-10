<?php get_header(); ?>

<main class="container" id="wp-learn">
  <div class="row">
    <div class="col-md-12 post-container">

    <?php 

      if( have_posts() ) : 
    ?>

      <div class="title-archive">
        <h3 class="text-center">
          <?php 
            if( is_category() ){
              echo "Category: "; single_cat_title();
            } elseif( is_author() ){
              echo "Posts by: " . get_the_author();
            } else {
              echo "Archive Page";
            }
          ?>
        </h3>
      </div>

    <?php  
        while( have_posts() ) : the_post();
        
        get_template_part('template-parts/content');

        endwhile;
      else:
        echo "There is no post yet.";
      endif;
    ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>