<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( 'charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Header Bereich -->
    <header>
        <div class="row mb-3 mt-3">
        <div class="col-md-2 order-md-2 col-sm-2 order-sm-2">
        <div id="logo" class="d-flex align-items-center justify-content-end">
            <!-- Ihr Logo hier -->
            <?php $logo_url = get_template_directory_uri() .'/logo.png'; ?>
            <img src="<?php echo esc_url($logo_url); ?>" alt="Logo" class="img-fluid">
        </div>
        </div>
        <div class="col-md-10 order-md-1 col-sm-10 order-sm-1">
        <div id="slogan" class="px-3">
            <!-- Ihr Slogan hier -->
            <h1>Mein Slogan</h1>
        </div>
        </div>
        </div>
                <!-- Menü -->
         <nav id="header-menu" class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container-fluid">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu', 
                'menu_class' => 'navbar-nav',
                'container' => false,
            ));
            ?>
        </div>
         </div>
            </nav>
    </header>
     <!-- Content Bereich -->
     <main>
    <div id="content">

        <!-- Slider -->
        <div class="row">
        <div id="slider" class="col-12 col-md-12 mb-1">
            <?php $slider_url = get_template_directory_uri() .'/images/beach.jpg'; ?>
            <img src="<?php echo esc_url($slider_url); ?>" alt="Slider Image" class="img-fluid col-12 col-md-12">
        </div>
        </div>

        <!-- Inhaltskarten -->
            <div class="row">
        <div class="content-card col-md-4">
            <h2>Karte 1</h2>
            <img src="pfad/zum/bild1.jpg" alt="Bild 1">
            <p>Inhalt der Karte 1</p>
        </div>

        <div class="content-card col-md-4">
            <h2>Karte 2</h2>
            <img src="pfad/zum/bild2.jpg" alt="Bild 2">
            <p>Inhalt der Karte 2</p>
        </div>

        <div class="content-card col-md-4">
            <h2>Karte 3</h2>
            <img src="pfad/zum/bild3.jpg" alt="Bild 3">
            <p>Inhalt der Karte 3</p>
        </div>
            </div>

        </div> 
     </main>
</body>
    <!-- Footer Bereich -->
    <footer>
        <div class="row">
        <div id="footer-left" class="col-6 cold-md-6">
            <p>Linker Footer-Text</p>
        </div>
        <div id="footer-right" class="col-6 cold-md-6">
            <p>Rechter Footer-Text</p>
        </div>
        </div>
    </footer>
    <!-- Hier können Sie Ihre JavaScript-Dateien einbinden -->
</html>

