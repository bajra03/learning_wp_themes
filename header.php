<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title><?php bloginfo("name"); ?></title>
    <?php wp_head() ?>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome-6/pro/css/all.min.css">
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a href="<?php echo home_url(); ?>" class="nav-logo"><?php echo get_custom_logo(); ?></a>
          </div>
          <div class="col-md-8">
            <nav>
              <?php 
                $args = array('theme_location' => 'main_menu');
                wp_nav_menu($args); 
              ?>
              <div class="search-wrapper">
                <?php get_search_form(); ?>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>