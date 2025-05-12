<?php wp_head(); ?>

<div class="page-wrapper">
  <header role="banner">
    <div class="container">
      <div class="main-header">
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Web Idea Logo">
          </a>
        </div>
        <div class="menu-toggle" id="menu-toggle">
          <div class="burger"></div>
        </div>

        <!-- Menu Overlay -->
        <div class="menu-overlay" id="menu-overlay">
          <div class="menu-content container">
            <div class="menu-close" id="menu-close"></div>
            <nav aria-label="Navigation principale">
              <div class="menu-section">
                <h3>Création de site internet <i class="fa-solid fa-arrow-right"></i></h3>
                <ul>
                  <li><a href="#">Sodales gravida nunc</a></li>
                  <li><a href="#">Amet imperdiet</a></li>
                  <li><a href="#">Ultrices vestibulum</a></li>
                  <li><a href="#">Etiam magna vestibulum</a></li>
                  <li><a href="#">Fringilla gravida</a></li>
                </ul>
              </div>
              <div class="menu-section">
                <h3>Marketing digital <i class="fa-solid fa-arrow-right"></i></h3>
                <ul>
                  <li><a href="#">Dapibus est arcu</a></li>
                  <li><a href="#">Amet auctor</a></li>
                  <li><a href="#">Praesent condimentum</a></li>
                  <li><a href="#">Velit ornae auctor</a></li>
                  <li><a href="#">Nisl ipsum mauris</a></li>
                  <li><a href="#">Ipsum dapibus rhoncus</a></li>
                </ul>
              </div>
            </nav>
          </divZ>
        </div>
      </div>
    </div>
  </header>
  

