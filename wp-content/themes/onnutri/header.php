<?php

/**
 * This file has been left empty on purpose.
 *
 * @link https://core.trac.wordpress.org/ticket/54272
 *
 * @package on-nutri
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <?php wp_head(); ?>
</head>
<body class="opacity-active" <?php body_class(); ?> data-nonce="<?php echo wp_create_nonce( 'wc_store_api' ); ?>">
    <script id="__bs_script__">//<![CDATA[
    (function() {
        try {
        var script = document.createElement('script');
        if ('async') {
            script.async = true;
        }
        script.src = 'http://HOST:3000/browser-sync/browser-sync-client.js?v=2.29.1'.replace("HOST", location.hostname);
        if (document.body) {
            document.body.appendChild(script);
        }
        } catch (e) {
        console.error("Browsersync: could not append script tag", e);
        }
    })()
    //]]></script>
    <header>
        <div class="top_bar">
            <div class="container d-flex justify-content-center">
                <div class="mails">
                    <a href="mailto:claudia.gomes@ionnutri.com.br">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6666 2.6665H3.33331C2.80288 2.6665 2.29417 2.87722 1.9191 3.25229C1.54403 3.62736 1.33331 4.13607 1.33331 4.6665V11.3332C1.33331 11.8636 1.54403 12.3723 1.9191 12.7474C2.29417 13.1225 2.80288 13.3332 3.33331 13.3332H12.6666C13.1971 13.3332 13.7058 13.1225 14.0809 12.7474C14.4559 12.3723 14.6666 11.8636 14.6666 11.3332V4.6665C14.6666 4.13607 14.4559 3.62736 14.0809 3.25229C13.7058 2.87722 13.1971 2.6665 12.6666 2.6665ZM3.33331 3.99984H12.6666C12.8435 3.99984 13.013 4.07008 13.1381 4.1951C13.2631 4.32012 13.3333 4.48969 13.3333 4.6665L7.99998 7.91984L2.66665 4.6665C2.66665 4.48969 2.73688 4.32012 2.86191 4.1951C2.98693 4.07008 3.1565 3.99984 3.33331 3.99984ZM13.3333 11.3332C13.3333 11.51 13.2631 11.6796 13.1381 11.8046C13.013 11.9296 12.8435 11.9998 12.6666 11.9998H3.33331C3.1565 11.9998 2.98693 11.9296 2.86191 11.8046C2.73688 11.6796 2.66665 11.51 2.66665 11.3332V6.1865L7.65331 9.23317C7.75466 9.29168 7.86962 9.32249 7.98665 9.32249C8.10367 9.32249 8.21863 9.29168 8.31998 9.23317L13.3333 6.1865V11.3332Z" fill="white"/>
                        </svg>
                        claudia.gomes@ionnutri.com.br
                    </a>
                    <a href="mailto:contato@ionnutri.com.br">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6666 2.6665H3.33331C2.80288 2.6665 2.29417 2.87722 1.9191 3.25229C1.54403 3.62736 1.33331 4.13607 1.33331 4.6665V11.3332C1.33331 11.8636 1.54403 12.3723 1.9191 12.7474C2.29417 13.1225 2.80288 13.3332 3.33331 13.3332H12.6666C13.1971 13.3332 13.7058 13.1225 14.0809 12.7474C14.4559 12.3723 14.6666 11.8636 14.6666 11.3332V4.6665C14.6666 4.13607 14.4559 3.62736 14.0809 3.25229C13.7058 2.87722 13.1971 2.6665 12.6666 2.6665ZM3.33331 3.99984H12.6666C12.8435 3.99984 13.013 4.07008 13.1381 4.1951C13.2631 4.32012 13.3333 4.48969 13.3333 4.6665L7.99998 7.91984L2.66665 4.6665C2.66665 4.48969 2.73688 4.32012 2.86191 4.1951C2.98693 4.07008 3.1565 3.99984 3.33331 3.99984ZM13.3333 11.3332C13.3333 11.51 13.2631 11.6796 13.1381 11.8046C13.013 11.9296 12.8435 11.9998 12.6666 11.9998H3.33331C3.1565 11.9998 2.98693 11.9296 2.86191 11.8046C2.73688 11.6796 2.66665 11.51 2.66665 11.3332V6.1865L7.65331 9.23317C7.75466 9.29168 7.86962 9.32249 7.98665 9.32249C8.10367 9.32249 8.21863 9.29168 8.31998 9.23317L13.3333 6.1865V11.3332Z" fill="white"/>
                        </svg>
                        contato@ionnutri.com.br
                    </a>
                </div>
    
                <div class="phones">
                    <a href="tel:1131641214">(11) 3164-1214</a>
                    <a href="tel:11910813015">(11) 9 1081-3015</a>
                </div>
    
                <div class="cart text-end">
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg> Carrinho
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="navigation d-flex align-items-center">
                <div class="logo">
                    <?php 
                        echo '<img src="' .wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ))[0]. '" />' ;
                    ?>
                </div>

                <nav>
                    <?php  
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1'
                        ) );
                    ?>
                </nav>

                <a href="#" class="buy-kit">Comprar Kit</a>

                <div class="menu-mobile">
                    <button class="open-menu"><i class="fa-solid fa-bars"></i></button>

                    <div class="menu">
                        <button class="close-menu"><i class="fa-solid fa-xmark"></i></button>
                        <?php  
                            wp_nav_menu( ['theme_location' => 'menu-1'] );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>