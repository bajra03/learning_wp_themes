<?php get_header(); ?>

<main class="container" id="wp-learn">
  <div class="row">
    <div class="col-md-12 post-container">

    <?php 

      if( have_posts() ) : 
    ?>

      <div class="title-search">
        <h3 class="text-center">Search Result</h3>
      </div>

    <?php  
        while( have_posts() ) :
          the_post();
          // skip search on page
          if($post->post_type === 'page') continue;

          get_template_part('template-parts/content');

        endwhile;
      else:
        echo "Search not found.";
      endif;
    ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>