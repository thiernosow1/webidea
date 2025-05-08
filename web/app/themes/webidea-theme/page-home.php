<?php
/**
 * Template Name: Landing Home
 */
get_header(); ?>
<main class="landing">
  <!-- Ton HTML pixel-perfect ici -->
  <form id="contact-form">
    <input name="name"    type="text"    placeholder="Votre nom"    required>
    <input name="email"   type="email"   placeholder="Votre email"  required>
    <textarea name="message" placeholder="Votre message" required></textarea>
    <button type="submit">Envoyer</button>
  </form>
</main>
<?php get_footer(); ?>
