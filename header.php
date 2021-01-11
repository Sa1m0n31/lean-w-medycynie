<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <title>Lean w medycynie</title>

    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <!-- MENU -->
    <header class="topMenu">
        <div class="logo">
            <a href=".">
                <img class="logoImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Lean_w_medycynie_logo_01.svg'; ?>" alt="lean-w-medycynie-logo" />
            </a>
        </div>
        <ul class="menu">
            <li class="menuItem menuItemOrdinary"><a href="<?php echo get_page_link( get_page_by_title( 'misja' )->ID ); ?>">Misja</a></li>
            <li class="menuItem menuItemOrdinary"><a href="<?php echo get_page_link( get_page_by_title( 'eksperci' )->ID ); ?>">Eskperci</a></li>
            <li class="menuItem menuItemOrdinary"><a href="<?php echo get_page_link( get_page_by_title( 'sklep' )->ID ); ?>">Sklep</a></li>
            <li class="menuItem menuItemOrdinary"><a href="<?php echo get_page_link( get_page_by_title( 'kontakt' )->ID ); ?>">Kontakt</a></li>
            <li class="menuItem menuItemBordered"><a href="<?php echo get_page_link( get_page_by_title( 'lean-nawigator' )->ID ); ?>">Lean Nawigator</a></li>
            <li class="menuItem menuItemBordered"><a href="<?php echo get_page_link( get_page_by_title( 'akademia' )->ID ); ?>">Akademia</a></li>
            <li class="menuItem menuItemBordered"><a href="<?php echo get_page_link( get_page_by_title( 'konferencja' )->ID ); ?>">Konferencja</a></li>
            <li class="menuItem menuItemBordered"><a href="<?php echo get_page_link( get_page_by_title( 'dofinansowania' )->ID ); ?>">Dofinansowania</a></li>
        </ul>
        <ul class="socialMediaIcons">
            <a href="https://facebook.com" target="_blank" rel="noreferrer">
                <img class="socialMediaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/facebook.svg'; ?>" alt="facebook" />
            </a>

            <a href="https://facebook.com" target="_blank" rel="noreferrer">
                <img class="socialMediaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/youtube.svg'; ?>" alt="youtube" />
            </a>

            <a href="https://facebook.com" target="_blank" rel="noreferrer">
                <img class="socialMediaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/linkedin.svg'; ?>" alt="linkedin" />
            </a>

            <a href="https://facebook.com" target="_blank" rel="noreferrer">
                <img class="socialMediaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/twitter.svg'; ?>" alt="twitter" />
            </a>
        </ul>
    </header>