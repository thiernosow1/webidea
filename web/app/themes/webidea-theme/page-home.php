<?php
/**
 * Template Name: Landing Home
 */

// Charger les modèles
require_once __DIR__ . '/models/ACFModel.php';
require_once __DIR__ . '/models/PostModel.php';

// Charger les contrôleurs
require_once __DIR__ . '/Controllers/BaseController.php';
require_once __DIR__ . '/Controllers/HomeController.php';
use WebideaTheme\Controllers\HomeController;

include __DIR__ . '/views/partials/header.php';

// Initialiser le contrôleur et récupérer les données
$controller = new HomeController();

?>
<main class="landing">
  <!-- Section Hero -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Test d'intégration d'un site internet pour un <span>poste de développeur</span></h1>
        <p>Réalisez ce test d'intégration web pour évaluer vos compétences et tentez de rejoindre l'équipe Web Idea !</p>
        <!-- <div class="vertical-text">
          <span><a href=""><i class="fas fa-horizontal-rule"></i> Faites défiler</a></span>
        </div> -->
      </div>
    <div>
  </section>

  <!-- Section Services -->
  <!-- <section class="services">
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
  </section> -->

  <!-- Section Content -->
  <section class="container"">
    <div class="content bloc-nullam">
      <article>
        <div class="article-head">
          <p class="subtitle">sous-titre de section</p>
          <h2>Nullam pulvinar felis at metus malesuada</h2>
        </div>
        <div class="article-txt">
          <p>Pellentesque tincidunt tristique neque, eget venenatis enim gravida quis. Fusce at egestas libero. Cras convallis egestas ullamcorper. Suspendisse sed ultricies nisl, pharetra rutrum mauris. Vestibulum at massa dui. Morbi et purus velit. Etiam tristique, justo eu condimentum efficitur, purus velit facilisis sem, id fringilla tortor quam quis dolor. Praesent ultricies dignissim ex, at volutpat sapien ullamcorper rhoncus.</p>
        </div>
        <span><a href="#" class="btn primary">Découvrez le service <i class="fa-solid fa-arrow-right"></i></a></span>
      </article>
      <article>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-one.jpg" alt="Sample Image">
      </article>
    </div>
  </section>

  <section class="container"">
    <div class="content bloc-aenean">
      <div class="image-wrapper">
        <img class="bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-2-img.jpg" alt="Sample Image">
        <img class="fg"src="<?php echo get_template_directory_uri(); ?>/assets/images/Img-two.png" alt="Sample Image">
      </div>
      <article>
        <div class="article-head">
          <p class="subtitle">sous-titre de section</p>
          <h2>Aenean sed nibh a magna posuere</h2>
        </div>
        <div class="article-txt">
          <p>Maecenas interdum lorem eleifend orci aliquam mollis aliquam non rhoncus magna :</p>
          <ul>
            <li><i class="fa-solid fa-circle"></i> Suscipit libero </li>
            <li><i class="fa-solid fa-circle"></i> Suscipit libero </li>
            <li><i class="fa-solid fa-circle"></i> Suscipit libero </li>
          </ul>
        </div>
        <span><a href="#">Découvrez le service <i class="fa-solid fa-arrow-right"></i></a></span>
      </article>
    </div>
  </section>
  <section class="container">
  <div class="carousel-section">
      <article>
        <div class="article-head">
          <p class="subtitle">sous-titre de section</p>
          <h2>Dolor imperdiet</h2>
        </div>
        <div class="article-txt d-grid-2">
          <p>Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.</p>
          <div class="pagination">
              <button class="nav-btn prev"><i class="fa-solid fa-arrow-left"></i></button>
              <button class="nav-btn next"><i class="fa-solid fa-arrow-right"></i></button>
          </div>
      </article>
      <div class="carousel">
          <div class="carousel-track">
              <a href="" class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/card-img-1.jpg');">
                  <div class="item-text">Duis porta ligula rhoncus euismod pretium<i class="fa-solid fa-arrow-right"></i></div>
              </a>
              <a href="" class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/card-img-2.jpg');">
                  <div class="item-text">Duis porta ligula rhoncus euismod pretium<i class="fa-solid fa-arrow-right"></i></div>
              </a>
              <a href="" class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/card-img-1.jpg');">
                  <div class="item-text">Duis porta ligula rhoncus euismod pretium<i class="fa-solid fa-arrow-right"></i></div>
              </a>
              <a href="" class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/card-img-2.jpg');">
                  <div class="item-text">Duis porta ligula rhoncus euismod pretium<i class="fa-solid fa-arrow-right"></i></div>
              </a>
          </div>
      </div>
    </div>
  </section>



  <!-- Section Contact -->
  <section class="container">
    <div class="contact-section">
    <article>
        <div class="article-head">
          <p class="subtitle">sous-titre de section</p>
          <h2>Odio mauris diam </h2>
        </div>
        <div class="article-txt">
          <p>Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.</p>
          
      </article>
      <div class="contact">
        <form id="contact-form">
          <div class="form-row">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" placeholder="Dupond" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" placeholder="Martin" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" name="email" placeholder="exemple@email.fr" required>
            </div>
            <div class="form-group">
                <label for="phone">Tèléphone (facultatif)</label>
                <input type="tel" name="phone" placeholder="+33">
            </div>
          </div>
          
          
          <div class="form-subjet">
            <label for="subject">Sujet</label>
            <select name="subject" required>
              <option value="">Choisissez un sujet</option>
              <option value="option1">Option 1</option>
              <option value="option2">Option 2</option>
              <option value="option3">Option 3</option>
            </select>
          </div>
          <textarea name="message" placeholder="Votre message" required></textarea>
          <div class="form-terms">
            <input type="checkbox" id="terms" name="terms" class="styled-checkbox" required>
            <label for="terms">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis risus mi. 
                Ut placerat quam lectus. Curabitur dictum velit non luctus ornare tempor.
            </label>
          </div>
          <button type="submit" class="primary">Envoyer</button>
        </form>
      </div>
    <div>
  </section>
</main>

<?php include __DIR__ . '/views/partials/footer.php'; ?> 