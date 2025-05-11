<?php

// Chargement automatique des classes (Models et Controllers)
spl_autoload_register(function ($class) {
  $class = str_replace('WebideaTheme\\', '', $class);
  $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
  $file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
  $directory = dirname($file);
  $filename = basename($file);
  if (is_dir($directory)) {
      $files = scandir($directory);
      foreach ($files as $f) {
          if (strcasecmp($f, $filename) === 0) {
              require_once $directory . DIRECTORY_SEPARATOR . $f;
              return;
          }
      }
  }
});

require_once __DIR__ . '/Controllers/BaseController.php';
require_once __DIR__ . '/Controllers/HomeController.php';

function webidea_enqueue_styles() {
  wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
    [],
    '6.5.1'
  );
  wp_enqueue_style(
    'webidea-app',
    get_template_directory_uri() . '/assets/css/app.css',
    ['font-awesome'],
    null
  );
}
function my_enqueue_scripts() {
  wp_enqueue_script('form-js', get_template_directory_uri() . '/assets/js/form.js', ['jquery'], '1.0', true);
  wp_localize_script('form-js', 'contactForm', [
    'ajax_url' => admin_url('admin-ajax.php')
  ]);
}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
add_action('wp_enqueue_scripts', 'webidea_enqueue_styles');
add_action('wp_ajax_handle_contact', ['WebideaTheme\Controllers\HomeController', 'handleForm']);
add_action('wp_ajax_nopriv_handle_contact', ['WebideaTheme\Controllers\HomeController', 'handleForm']);

add_action('phpmailer_init', function($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = '127.0.0.1';
  $phpmailer->Port = 1025;
});
