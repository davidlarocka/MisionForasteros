<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">
        <div class="nav-container">
            <div class="logo">
                <a href="<?php echo home_url(); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_transparent.png" class="logo"
                        alt="Logo"></a>
            </div>

            <div class="menu-toggle" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="nav" id="nav">

                <div class="search-container">
                    <button class="search-toggle" id="search-toggle" aria-label="Buscar">
                        <svg class="icon-search" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2" fill="none" />
                            <line x1="16.5" y1="16.5" x2="21" y2="21" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </button>

                    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                        <input type="search" name="s" placeholder="Buscar..." />
                    </form>
                </div>

                <a href="/">Inicio</a>
                <a href="/mision">Sobre la misión</a>
                <a href="/noticias">Noticias</a>
                <a href="/mensajes">Mensajes</a>
                <a href="/tienda">Tienda</a>
                <a href="/donar" class="btn-nav">Donar</a>


            </nav>
        </div>
    </header>
    <div class="overlay" id="overlay"></div>