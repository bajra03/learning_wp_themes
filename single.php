<?php get_header(); ?>

<main class="container">
  <div class="row">
    <div class="col-md-12">
    <?php 

      if( have_posts() ) :
        while( have_posts() ) :
          the_post();
    ?>
      <div class="post-wrapper">
        <h3 class="post-header text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>    
        <div class="info-meta-wrapper text-center">
          <span class="post-author"><i class="fas fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author(); ?></a></span>
          <span class="post-posted"><i class="fas fa-calendar-alt"></i> <?php the_time('F j, Y'); ?></span>
          <span class="post-category"><i class="fas fa-list"></i> <?php the_category(); ?></span>
        </div>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </div>
    <?php
        endwhile;
      else:
        echo "There is no post yet.";
      endif;

    ?>
    </div>
  </div>
</main>


<?php get_footer(); ?>