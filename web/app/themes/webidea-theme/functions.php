<?php
// Enqueue CSS & JS
add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style(
    'webidea-css',
    get_stylesheet_directory_uri() . '/assets/css/app.css',
    [],
    filemtime( get_stylesheet_directory() . '/assets/css/app.css' )
  );
  wp_enqueue_script(
    'webidea-ajax',
    get_stylesheet_directory_uri() . '/assets/js/app.js',
    ['jquery'],
    filemtime( get_stylesheet_directory() . '/assets/js/app.js' ),
    true
  );
  wp_localize_script('webidea-ajax', 'webideaAjax', [
    'ajax_url' => admin_url('admin-ajax.php'),
  ]);
});

// AJAX handler
add_action('wp_ajax_nopriv_webidea_send_contact', 'webidea_send_contact');
add_action('wp_ajax_webidea_send_contact',        'webidea_send_contact');

function webidea_send_contact(){
  $name    = sanitize_text_field($_POST['name']);
  $email   = sanitize_email($_POST['email']);
  $message = sanitize_textarea_field($_POST['message']);
  $to      = 'toi@ton-agence.com';
  $subject = "Contact via landing : {$name}";
  $headers = ["Reply-To: {$email}"];
  $sent = wp_mail($to, $subject, $message, $headers);
  if ($sent) {
    wp_send_json_success();
  }
  wp_send_json_error();
}
