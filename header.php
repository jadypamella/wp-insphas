<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Insphas_Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Insphas - Instituto Phallas Sapienthia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Carregando...</span>
    </div>
  </div>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <div class="d-flex mr-auto">
                <a target="_blank" href="<?php echo get_contacts('endereco_url'); ?>" title="<?php echo get_contacts('endereco_title'); ?>" class="d-flex align-items-center mr-4">
                  <span class="<?php echo get_contacts('endereco_icon'); ?> mr-2"></span>
                  <span class="d-none d-md-inline-block"><?php echo get_contacts('endereco_description'); ?></span>
                </a>
                <a target="_blank" href="<?php echo get_contacts('whatsapp_url'); ?>" title="<?php echo get_contacts('whatsapp_title'); ?>" class="d-flex align-items-center mr-auto">
                  <span class="<?php echo get_contacts('whatsapp_icon'); ?> mr-2"></span>
                  <span class="d-none d-md-inline-block"><?php echo get_contacts('whatsapp_description'); ?></span>
                </a>
              </div>
            </div>
            <div class="col-6 text-right">
              <div class="mr-auto">
                <a href="<?php echo get_contacts('facebook_url'); ?>" target="_blank" title="<?php echo get_contacts('facebook_title'); ?>" class="p-2 pl-0"><span class="<?php echo get_contacts('facebook_icon'); ?>"></span></a>
                <a href="<?php echo get_contacts('instagram_url'); ?>" target="_blank" title="<?php echo get_contacts('instagram_title'); ?>" class="p-2 pl-0"><span class="<?php echo get_contacts('instagram_icon'); ?>"></span></a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo"><a href="/">Insphas</a></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li><a href="#home-section" class="nav-link">Início</a></li>
                    <li><a href="#about-section" class="nav-link">Sobre</a></li>
                    <li><a href="#schedule-section" class="nav-link">Atividades</a></li>
                    <li><a href="#contact-section" class="nav-link">Contato</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/header-bg.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"id="home-section">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-8 home-header">
            <p class="logo">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-header.png" alt="Insphas" id="logo-header" title="Insphas">
            </p>
            <h1 class="font-weight-bold">Instituto<br/>Phallas Sapienthia</h1>
            <p class="sub-text mb-4 d-block">Voluntários de bom coração melhorando a qualidade de vida da comunidade da Expansão do Setor O</p>

          </div>
        </div>
      </div>
    </div>
