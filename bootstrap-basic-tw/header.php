<?php
   /**
    * The theme header
    *
    * @package bootstrap-basic
    */
   ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>>
   <![endif]-->
   <!--[if IE 7]>
   <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>>
      <![endif]-->
      <!--[if IE 8]>
      <html class="no-js lt-ie9" <?php language_attributes(); ?>>
         <![endif]-->
         <!--[if gt IE 8]><!-->
         <html class="no-js" <?php language_attributes(); ?>>
            <!--<![endif]-->
            <head>
               <meta charset="<?php bloginfo('charset'); ?>">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width">
               <link rel="profile" href="http://gmpg.org/xfn/11">
               <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
               <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
               <!--wordpress head-->
               <?php wp_head(); ?>
            </head>
            <body <?php body_class(); ?>>
               <!--[if lt IE 8]>
               <p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
               <![endif]-->
               <div class="container">
                  <?php do_action('before'); ?>
                  <header role="banner">
                     <nav class="navbar navbar-light" role="navigation">
                        <div class="container-fluid">
                           <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar top-bar"></span>
                              <span class="icon-bar middle-bar"></span>
                              <span class="icon-bar bottom-bar"></span>
                              </button>
                              <a class="navbar-brand" href="/"><img style="max-width:80px;" alt="Brand" src="/timswilson/wp-content/themes/bootstrap-basic/img/timswilson-logo.svg"></a>
                           </div>
                           <div id="navbar" class="navbar-collapse collapse">
                              <ul class="nav navbar-nav">
                                 <li><a class="nav-link" href="/">About Me</a></li>
                                 <li><a class="nav-link" href="/resume/">Resume</a></li>
                                 <li><a class="nav-link" href="/contact/">Contact</a></li>
                              </ul>
                           </div>
                           <!--/.nav-collapse -->
                        </div>
                        <!--/.container-fluid -->
                     </nav>
               <!--.main-navigation-->
               </header>
			   </div>
			   <div id="main-content">
