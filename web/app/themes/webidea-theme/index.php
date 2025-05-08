<?php
/**
 * Main template file
 * 
 * @package WebideaTheme
 */

get_header();

// Si tu as un template `page-home.php` pour la home, tu peux l’inclure ici :
if ( is_front_page() ) {
  include get_template_directory() . '/page-home.php';
} else {
  // Sinon boucle WP basique
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      the_content();
    }
  }
}

get_footer();
