# WebIdea Theme

Thème WordPress moderne pour test d'intégration front-end et back-end.

**Projet en mode developpement**
**Pour passer en production** : modifiez la variable d’environnement `WP_ENV` dans le fichier `.env` à la racine du projet, en mettant `WP_ENV=production` (au lieu de `development`).

## **Technologies utilisées**

- **Bedrock** WordPress boilerplate avec Composer
- **WordPress** (structure thème personnalisée)
- **PHP** (contrôleurs, hooks, AJAX)
- **SCSS** (styles modulaires, responsive, variables)
- **JavaScript** (vanilla, gestion du menu, AJAX)
- **FontAwesome** (icônes)
- **MailHog** (pour tester l'envoi d'e-mails en local)
- **Autoload PSR-4** (pour les classes PHP)
- **HTML5 sémantique**

---

## **Installation & Lancement**

### **Prérequis**
- PHP >= 7.4
- MySQL/MariaDB
- Node.js & npm (pour compiler le SCSS si besoin)
- WordPress installé (local ou distant)
- MailHog (pour tester les emails en local)

### **Étapes d'installation**

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/thiernosow1/webidea-theme.git
   ```

2. **Placer le thème**
   - Copier le dossier `webidea-theme` dans `wp-content/themes/` de votre installation WordPress.

3. **Installer les dépendances (optionnel, pour SCSS)**
   ```bash
   cd webidea-theme
   npm install
   npm run build   # ou npm run dev pour le mode watch
   ```

4. **Activer le thème**
   - Se connecter à l'admin WordPress > Apparence > Thèmes > Activer « WebIdea Theme »

5. **Configurer MailHog (pour tester les emails)**
   - Installer MailHog :  
     ```bash
     go install github.com/mailhog/MailHog@latest
     ```
   - Lancer MailHog :  
     ```bash
     MailHog
     ```
   - Accéder à l'interface : [http://localhost:8025](http://localhost:8025)

6. **Vérifier la configuration SMTP**
   - Le thème configure automatiquement WordPress pour envoyer les emails via MailHog (`127.0.0.1:1025`).

---

## **Fonctionnalités principales**

- **Menu overlay responsive** (burger, croix, navigation fluide)
- **Formulaire de contact AJAX** (validation JS/PHP, message de succès/erreur, envoi d'email)
- **Structure SCSS moderne** (variables, responsive, grid/flex)
- **Accessibilité** (navigation clavier, aria-labels)
- **Facilement extensible**

---

## **Structure du thème**

- `assets/` : JS, SCSS, images
- `views/partials/` : header, footer, etc.
- `views/templates/` : pages principales
- `Controllers/` : logique PHP (MVC light)
- `functions.php` : hooks, enqueues, autoload
- `src/scss/` : tous les styles SCSS

---

## **Conseils d'utilisation**

- Pour modifier les styles, éditer les fichiers SCSS puis recompiler.
- Pour tester l'envoi de mail, utiliser MailHog (aucun mail ne part en production).
- Pour ajouter des pages, suivre la logique des templates et controllers existants.

---

## **Contact**

Pour toute question, contactez-moi à :  
**contact@thiernosow.com**

---



<p align="center">
  <a href="https://roots.io/bedrock/">
    <img alt="Bedrock" src="https://cdn.roots.io/app/uploads/logo-bedrock.svg" height="100">
  </a>
</p>

<p align="center">
  <a href="https://packagist.org/packages/roots/bedrock">
    <img alt="Packagist Installs" src="https://img.shields.io/packagist/dt/roots/bedrock?label=projects%20created&colorB=2b3072&colorA=525ddc&style=flat-square">
  </a>

  <a href="https://packagist.org/packages/roots/wordpress">
    <img alt="roots/wordpress Packagist Downloads" src="https://img.shields.io/packagist/dt/roots/wordpress?label=roots%2Fwordpress%20downloads&logo=roots&logoColor=white&colorB=2b3072&colorA=525ddc&style=flat-square">
  </a>

  <img src="https://img.shields.io/badge/dynamic/json.svg?url=https://raw.githubusercontent.com/roots/bedrock/master/composer.json&label=wordpress&logo=roots&logoColor=white&query=$.require[%22roots/wordpress%22]&colorB=2b3072&colorA=525ddc&style=flat-square">

  <a href="https://github.com/roots/bedrock/actions/workflows/ci.yml">
    <img alt="Build Status" src="https://img.shields.io/github/actions/workflow/status/roots/bedrock/ci.yml?branch=master&logo=github&label=CI&style=flat-square">
  </a>

  <a href="https://twitter.com/rootswp">
    <img alt="Follow Roots" src="https://img.shields.io/badge/follow%20@rootswp-1da1f2?logo=twitter&logoColor=ffffff&message=&style=flat-square">
  </a>
</p>

<p align="center">WordPress boilerplate with Composer, easier configuration, and an improved folder structure</p>

<p align="center">
  <a href="https://roots.io/bedrock/">Website</a> &nbsp;&nbsp; <a href="https://roots.io/bedrock/docs/installation/">Documentation</a> &nbsp;&nbsp; <a href="https://github.com/roots/bedrock/releases">Releases</a> &nbsp;&nbsp; <a href="https://discourse.roots.io/">Community</a>
</p>

## Sponsors

Bedrock is an open source project and completely free to use. If you've benefited from our projects and would like to support our future endeavors, please consider [sponsoring Roots](https://github.com/sponsors/roots).

<div align="center">
<a href="https://carrot.com/"><img src="https://cdn.roots.io/app/uploads/carrot.svg" alt="Carrot" width="120" height="90"></a> <a href="https://wordpress.com/"><img src="https://cdn.roots.io/app/uploads/wordpress.svg" alt="WordPress.com" width="120" height="90"></a> <a href="https://worksitesafety.ca/careers/"><img src="https://cdn.roots.io/app/uploads/worksite-safety.svg" alt="Worksite Safety" width="120" height="90"></a> <a href="https://www.itineris.co.uk/"><img src="https://cdn.roots.io/app/uploads/itineris.svg" alt="Itineris" width="120" height="90"></a> <a href="https://bonsai.so/"><img src="https://cdn.roots.io/app/uploads/bonsai.svg" alt="Bonsai" width="120" height="90"></a>
</div>

## Overview

Bedrock is a WordPress boilerplate for developers that want to manage their projects with Git and Composer. Much of the philosophy behind Bedrock is inspired by the [Twelve-Factor App](http://12factor.net/) methodology, including the [WordPress specific version](https://roots.io/twelve-factor-wordpress/).

- Better folder structure
- Dependency management with [Composer](https://getcomposer.org)
- Easy WordPress configuration with environment specific files
- Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
- Autoloader for mu-plugins (use regular plugins as mu-plugins)

## Getting Started

See the [Bedrock installation documentation](https://roots.io/bedrock/docs/installation/).

## Stay Connected

- Join us on Discord by [sponsoring us on GitHub](https://github.com/sponsors/roots)
- Participate on [Roots Discourse](https://discourse.roots.io/)
- Follow [@rootswp on Twitter](https://twitter.com/rootswp)
- Read the [Roots Blog](https://roots.io/blog/)
- Subscribe to the [Roots Newsletter](https://roots.io/newsletter/)

---

