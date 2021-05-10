<?php get_header(); ?>

<main class="container" id="wp-learn">
  <div class="row">
    <div class="col-md-12 post-container d-flex flex-wrap">

    <?php 
      $dir = get_template_directory_uri();
      if( have_posts() ) :
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