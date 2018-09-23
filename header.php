<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Nunito+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php wp_title(''); ?><?php if (!(is_404()) && (is_single()) || (is_page()) || (is_archive())) { ?> &raquo; <?php } ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">

        <div class="nav-container" itemscope itemtype="http://schema.org/WebSite">
        
        
        <div>
            <?php if ( ! has_custom_logo() ) { ?>
                
                <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                
                <?php } else {
                    the_custom_logo();
                } ?>
    </div>
    
    
    <nav class="nav-menu">
        <?php
    if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( array( 'theme_location' => 'primary' ) );
    } ?> 
    </nav>
</div>
</div>