# WebIdea Theme

Thème WordPress moderne pour test d'intégration front-end et back-end.

**Projet en mode développement**  
**Pour passer en production** : modifiez la variable d'environnement `WP_ENV` dans le fichier `.env` à la racine du projet, en mettant `WP_ENV=production` (au lieu de `development`).

---

## Technologies utilisées

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

## Installation & Lancement

### Prérequis

- PHP >= 7.4  
- MySQL / MariaDB  
- Composer  
- Node.js & npm  
- MailHog (facultatif mais recommandé pour tester les emails)

### Étapes d'installation

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/thiernosow1/webidea-theme.git
   ```

2. **Créer une base de données webidea**
   - Importer la base incluse :
   ```bash
   mysql -u root -p webidea < webidea.sql
   ```

3. **Configurer le fichier .env**
   - Copier l'exemple et ajuster :
   ```bash
   cp .env.example .env
   ```
   - Modifier :
   ```
   DB_NAME=webidea
   DB_USER=root
   DB_PASSWORD=motdepasse
   WP_ENV=development
   WP_HOME=http://webidea.local
   WP_SITEURL=${WP_HOME}/wp
   ```

4. **Installer les dépendances PHP**
   ```bash
   composer install
   ```

5. **Compiler le SCSS**
   ```bash
   cd web/app/themes/webidea-theme
   npm install
   npm run build:css   # ou npm run watch:css pour le mode watch
   ```

6. **Activer le thème**
   Visitez http://webidea.local

7. **Configurer MailHog (pour tester les emails)**
   - Installer MailHog :  
     ```bash
     go install github.com/mailhog/MailHog@latest
     ```
   - Lancer MailHog :  
     ```bash
     MailHog
     ```
   - Accéder à l'interface : [http://localhost:8025](http://localhost:8025)

8. **Vérifier la configuration SMTP**
   - Le thème configure automatiquement WordPress pour envoyer les emails via MailHog (`127.0.0.1:1025`).

---

## Fonctionnalités principales

- **Menu overlay responsive** (burger, croix, navigation fluide)
- **Formulaire de contact AJAX** (validation JS/PHP, message de succès/erreur, envoi d'email)
- **Structure SCSS moderne** (variables, responsive, grid/flex)
- **Accessibilité** (navigation clavier, aria-labels)
- **Facilement extensible**

---

## Structure du thème

- `assets/` : JS, SCSS, images
- `views/partials/` : header, footer, etc.
- `views/templates/` : pages principales
- `Controllers/` : logique PHP (MVC light)
- `functions.php` : hooks, enqueues, autoload
- `src/scss/` : tous les styles SCSS

---

## Conseils d'utilisation

- Pour modifier les styles, éditer les fichiers SCSS puis recompiler.
- Pour tester l'envoi de mail, utiliser MailHog (aucun mail ne part en production).
- Pour ajouter des pages, suivre la logique des templates et controllers existants.

---

## Contact

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

---

## Sponsors

Bedrock est un projet open source et totalement gratuit. Si vous souhaitez soutenir nos futurs développements, pensez à [soutenir Roots](https://github.com/sponsors/roots).

<div align="center">
  <a href="https://carrot.com/"><img src="https://cdn.roots.io/app/uploads/carrot.svg" alt="Carrot" width="120" height="90"></a>
  <a href="https://wordpress.com/"><img src="https://cdn.roots.io/app/uploads/wordpress.svg" alt="WordPress.com" width="120" height="90"></a>
  <a href="https://worksitesafety.ca/careers/"><img src="https://cdn.roots.io/app/uploads/worksite-safety.svg" alt="Worksite Safety" width="120" height="90"></a>
  <a href="https://www.itineris.co.uk/"><img src="https://cdn.roots.io/app/uploads/itineris.svg" alt="Itineris" width="120" height="90"></a>
  <a href="https://bonsai.so/"><img src="https://cdn.roots.io/app/uploads/bonsai.svg" alt="Bonsai" width="120" height="90"></a>
</div>

---

## Overview

Bedrock est un boilerplate WordPress pour les développeurs souhaitant gérer leurs projets avec Git et Composer. La philosophie de Bedrock s'inspire de la [méthodologie Twelve-Factor App](http://12factor.net/) et de sa [version spécifique à WordPress](https://roots.io/twelve-factor-wordpress/).

- Meilleure structure de dossiers
- Gestion des dépendances avec [Composer](https://getcomposer.org)
- Configuration WordPress facilitée avec des fichiers spécifiques à chaque environnement
- Variables d'environnement avec [Dotenv](https://github.com/vlucas/phpdotenv)
- Autoloader pour mu-plugins (utilisez les plugins classiques comme mu-plugins)

---

## Getting Started

Voir la [documentation d'installation de Bedrock](https://roots.io/bedrock/docs/installation/).

---

## Stay Connected

- Rejoignez-nous sur Discord en [soutenant sur GitHub](https://github.com/sponsors/roots)
- Participez sur [Roots Discourse](https://discourse.roots.io/)
- Suivez [@rootswp sur Twitter](https://twitter.com/rootswp)
- Lisez le [Roots Blog](https://roots.io/blog/)
- Abonnez-vous à la [Roots Newsletter](https://roots.io/newsletter/)

---

