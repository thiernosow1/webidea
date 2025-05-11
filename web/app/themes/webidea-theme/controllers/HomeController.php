<?php
namespace WebideaTheme\Controllers;

use WebideaTheme\Models\ACFModel;
use WebideaTheme\Models\PostModel;

class HomeController extends BaseController {
    public function showHome() {
        $data = [
            'title' => ACFModel::getField('home_title') ?: 'Bienvenue sur notre site',
            'description' => ACFModel::getField('home_description') ?: 'Découvrez nos derniers articles',
            'latest_posts' => PostModel::getLatestPosts(3)
        ];
        $this->render('home', $data);
    }

    public static function handleForm() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = sanitize_text_field($_POST['name'] ?? '');
            $prenom = sanitize_text_field($_POST['prenom'] ?? '');
            $email = sanitize_email($_POST['email'] ?? '');
            $phone = sanitize_text_field($_POST['phone'] ?? '');
            $subject = sanitize_text_field($_POST['subject'] ?? '');
            $message = sanitize_textarea_field($_POST['message'] ?? '');
            $terms = isset($_POST['terms']) ? true : false;

            $errors = [];
            if (empty($name)) $errors['name'] = "Le nom est requis.";
            if (empty($prenom)) $errors['prenom'] = "Le prénom est requis.";
            if (empty($email) || !is_email($email)) $errors['email'] = "Une adresse email valide est requise.";
            if (empty($subject)) $errors['subject'] = "Le sujet est requis.";
            if (empty($message)) $errors['message'] = "Le message est requis.";
            if (!$terms) $errors['terms'] = "Vous devez accepter les termes.";

            if (!empty($errors)) {
                wp_send_json_error(['errors' => $errors]);
            }

            // Construction du corps de l'email (le téléphone est facultatif)
            $to = "test@example.com";
            $subject_mail = "Nouveau message de contact : $subject";
            $body = "Nom: $name\nPrénom: $prenom\nEmail: $email\nTéléphone: $phone\nSujet: $subject\nMessage:\n$message";
            $headers = ['Content-Type: text/plain; charset=UTF-8'];

            if (wp_mail($to, $subject_mail, $body, $headers)) {
                wp_send_json_success(['message' => "Votre message a été envoyé avec succès."]);
            } else {
                wp_send_json_error(['errors' => ['global' => "Une erreur est survenue lors de l'envoi de l'email."]]);
            }
        }
    }
    
}
