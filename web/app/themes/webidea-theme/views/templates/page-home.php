<?php
/**
 * Template Name: Landing Home
 */

// Charger les modèles
require_once dirname(__DIR__, 2) . '/models/ACFModel.php';
require_once dirname(__DIR__, 2) . '/models/PostModel.php';

// Charger les contrôleurs
require_once dirname(__DIR__, 2) . '/Controllers/BaseController.php';
require_once dirname(__DIR__, 2) . '/Controllers/HomeController.php';
use WebideaTheme\Controllers\HomeController;

include dirname(__DIR__) . '/partials/header.php';

// Initialiser le contrôleur et récupérer les données
$controller = new HomeController();

?>
<main class="landing">
  <!-- Section Hero -->
  <section class="hero">
    <div class="hero-content">
      <h1>Test d'intégration d'un site internet pour un <span>poste de développeur</span></h1>
      <p>Réalisez ce test d'intégration web pour évaluer vos compétences et tentez de rejoindre l'équipe Web Idea !</p>
    </div>
  </section>

  <!-- Section Services -->
  <section class="services">
    <div class="service">
      <h2>Création de site internet</h2>
      <ul>
        <li>Sodales gravida nunc</li>
        <li>Amet imperdiet</li>
        <li>Ultrices vestibulum</li>
      </ul>
    </div>
    <div class="service">
      <h2>Marketing digital</h2>
      <ul>
        <li>Dapibus est arcu</li>
        <li>Amet auctor</li>
        <li>Praesent condimentum</li>
      </ul>
    </div>
  </section>

  <!-- Section Content -->
  <section class="content">
    <article>
      <h2>Nullam pulvinar felis at metus malesuada</h2>
      <p>Pellentesque tincidunt tristique neque, eget venenatis enim gravida quis.</p>
      <a href="#" class="btn primary">Découvrez le service →</a>
    </article>
    <article>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample-image.jpg" alt="Sample Image">
    </article>
  </section>

  <!-- Section Contact -->
  <section class="contact">
    <h2>Contactez-nous</h2>
    <form id="contact-form">
      <div class="form-group">
        <input type="text" name="name" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Adresse email" required>
        <input type="tel" name="phone" placeholder="Téléphone" required>
      </div>
      <div class="form-group">
        <select name="subject" required>
          <option value="">Choisissez un sujet</option>
          <option value="service1">Service 1</option>
          <option value="service2">Service 2</option>
        </select>
      </div>
      <textarea name="message" placeholder="Votre message" required></textarea>
      <div class="form-terms">
        <input type="checkbox" id="terms" name="terms" class="styled-checkbox" required>
        <label for="terms">
            J'accepte les conditions d'utilisation.
        </label>
      </div>
      <button type="submit" class="btn primary">Envoyer</button>
    </form>
  </section>
</main>

<?php include dirname(__DIR__) . '/partials/footer.php'; ?> 