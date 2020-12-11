<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="browsehappy">
        <p class="wrapper mbn"><b>Vous utilisez un navigateur obsolète</b>.<br/>Merci de faire <a href="http://browsehappy.com/?locale=fr_FR">la mise à niveau</a> de votre navigateur pour améliorer votre expérience.</p>
      </div>
    <![endif]-->

    <header id="header" role="banner">
      <div class="wrapper">
        <nav id="navigation" class="main-menu menu menu-desktop">
          <?php nav_header() ?>
        </nav>
        <div class="js-toggle-menu toggle-menu">
          <button class="hamburger hamburger--slider" type="button" aria-label="Menu" aria-controls="navigation">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
    </header>

    <main id="main" role="main">

