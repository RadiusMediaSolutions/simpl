<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,600;1,300&display=swap"
        rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">

            <div class="site-branding">
                <?php
         the_custom_logo();
         if ( is_front_page() && is_home() ) :
         	?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
         else :
         	?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
         endif;
         $simpl_description = get_bloginfo( 'description', 'display' );
         if ( $simpl_description || is_customize_preview() ) :
         	?>
                <p class="site-description">
                    <?php echo $simpl_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                </p>
                <?php endif; ?>
            </div>
            <!-- .site-branding -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse header-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                    'menu_class' => 'nav',
                                    'add_li_class'      => 'nav-item'
                                )
                            );
                            ?>
                </ul>
            </div>
        </div>
    </nav>