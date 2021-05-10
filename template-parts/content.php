<div class="post-wrapper">
  <h3 class="post-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>    
  <div class="info-meta-wrapper">
    <span class="post-author"><i class="fas fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author(); ?></a></span>
    <span class="post-posted"><i class="fas fa-calendar-alt"></i> <?php the_time('F j, Y'); ?></span>
    <span class="post-category"><i class="fas fa-list"></i> <?php the_category(); ?></span>
  </div>
  <div class="post-content">

    <?php the_excerpt(); ?>

    <div class="post-readmore">
      <a href="<?php the_permalink(); ?>">Read More</a>
    </div>
  </div>
</div>