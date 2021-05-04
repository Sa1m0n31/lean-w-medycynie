<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <title>Lean w medycynie</title>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0,
maximum-scale=5.0, user-scalable=yes" />
    <meta name="description" content="Eksperci i praktycy lean w ochronie zdrowia oraz obszarach wspierających. Programy rozwojowe dla pracowników ochrony zdrowia." />
    <link rel="icon" href="<?php echo get_bloginfo('stylesheet_directory') . '/img/lean_w_medycynie_sygnet.svg'; ?>">

    <?php wp_head(); ?>
</head>
<body>
    <!-- Move to top of the page button -->
    <button class="moveUpBtn" onclick="toTop()">
        <img class="moveUpBtnImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/black-arrow.png'; ?>" alt="do-gory" />
    </button>
    <!-- Cookies img -->
    <img class="cookiesImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/cookies.png'?>" alt="ciasteczka" />
    <!-- MENU -->
    <header class="topMenu">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img class="logoImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Lean_w_medycynie_logo_01.svg'; ?>" alt="lean-w-medycynie-logo" />
            </a>
        </div>

        <!-- MOBILE -->
        <button aria-label="Menu" class="hamburgerMenu" onclick="openMenu()">
            <span class="hamburgerLine"></span>
            <span class="hamburgerLine"></span>
            <span class="hamburgerLine"></span>
        </button>

        <div class="mobileMenuContainer">
            <div class="mobileMenuTop">
                <a href="<?php echo home_url(); ?>">
                    <img class="logoImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/lean_logo_kontra.svg'; ?>" alt="lean-w-medycynie-logo" />
                </a>
                <button class="exit" onclick="closeMenu()">
                <img class="close" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/close.svg'; ?>" alt="exit" />
                </button>
            </div>
            <ul class="mobileMenu">
                <li class="mobileMenuItem mobileMenuGreen"><a href="<?php echo get_page_link( get_page_by_title( 'lean nawigator' )->ID ); ?>">Lean Nawigator</a></li>
                <li class="mobileMenuItem mobileMenuGreen"><a href="<?php echo get_page_link(get_page_by_title('akademia')->ID); ?>">Akademia</a></li>
                <li class="mobileMenuItem mobileMenuGreen"><a href="<?php echo get_page_link( get_page_by_title( 'konferencje' )->ID ); ?>">Konferencja</a></li>
                <li class="mobileMenuItem mobileMenuGreen"><a href="<?php echo get_page_link( get_page_by_title( 'dofinansowania' )->ID ); ?>">Dofinansowania</a></li>
                <li class="mobileMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'o nas' )->ID ); ?>">O nas</a></li>
                <li class="mobileMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'eksperci' )->ID ); ?>">Eksperci</a></li>
                <li class="mobileMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'produkty' )->ID ); ?>">Produkty</a></li>
                <li class="mobileMenuItem"><a href="<?php echo get_page_link( get_page_by_title( 'kontakt' )->ID ); ?>">Kontakt</a></li>
            </ul>
            <div class="mobileMenuBottom">
                <h4 class="mobileMenuBottomText">Śledź nas:</h4>
                <a href="https://www.facebook.com/leanwmedycynie" target="_blank" rel="noreferrer">
                    <img class="socialMediaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/facebook.svg'; ?>" alt="facebook" />
                </a>

                <a href="https://www.youtube.com/channel/UCnn9QMd7UEPmusGA_8pzCNA" target="_blank" rel="noreferrer">
                    <img class="socialMediaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/youtube.svg'; ?>" alt="youtube" />
                </a>

                <a href="https://www.linkedin.com/company/lean-w-medycynie/" target="_blank" rel="noreferrer">
                    <img class="socialMediaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/linkedin.svg'; ?>" alt="linkedin" />
                </a>

                <a href="https://twitter.com/_leanwmedycynie" target="_blank" rel="noreferrer">
                    <img class="socialMediaImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/twitter.svg'; ?>" alt="twitter" />
                </a>
            </div>
        </div>


        <ul class="menu">
            <li class="menuItem menuItemOrdinary">
                <a class="<?php
                    if(is_page('misja')) {
                        echo 'green';
                    }
                ?>" href="<?php echo get_page_link( get_page_by_title( 'o nas' )->ID ); ?>">
                    O nas
                </a>
            </li>
            <li class="menuItem menuItemOrdinary">
                <a class="<?php
                if(is_page('produkty')) {
                    echo 'green';
                }
                ?>" href="<?php echo get_page_link( get_page_by_title( 'produkty' )->ID ); ?>">
                    Produkty
                </a>
            </li>
            <li class="menuItem menuItemOrdinary">
                <a class="<?php
                if(is_page('eksperci')) {
                    echo 'green';
                }
                ?>" href="<?php echo get_page_link( get_page_by_title( 'eksperci' )->ID ); ?>">
                    Eksperci
                </a></li>
            <!--<li class="menuItem menuItemOrdinary">
                <a class="<?php
                if(is_page('sklep')) {
                    echo 'green';
                }
                ?>" href="<?php echo get_page_link( get_page_by_title( 'sklep' )->ID ); ?>">Sklep</a></li>-->
            <li class="menuItem menuItemOrdinary"><a class="<?php
                if(is_page('kontakt')) {
                    echo 'green';
                }
                ?>" href="<?php echo get_page_link( get_page_by_title( 'kontakt' )->ID ); ?>">Kontakt</a></li>
            <li class="menuItem menuItemBordered <?php
            if(is_page('lean-nawigator')) {
                echo 'greenBackground';
            }
            ?>"><a href="<?php echo get_page_link( get_page_by_title( 'lean nawigator' )->ID ); ?>">Lean Nawigator</a></li>
            <li class="menuItem menuItemBordered <?php
            if(is_page('akademia')) {
                echo 'greenBackground';
            }
            ?>"><a href="<?php echo get_page_link(get_page_by_title('akademia')->ID); ?>">Akademia</a></li>
            <li class="menuItem menuItemBordered <?php
            if(is_page('konferencje')) {
                echo 'greenBackground';
            }
            ?>" ><a href="<?php echo get_page_link( get_page_by_title( 'konferencje' )->ID ); ?>">Konferencja</a></li>
            <li class="menuItem menuItemBordered <?php
            if(is_page('dofinansowania')) {
                echo 'greenBackground';
            }
            ?>"><a href="<?php echo get_page_link( get_page_by_title( 'dofinansowania' )->ID ); ?>">Dofinansowania</a></li>
        </ul>
        <div class="socialMediaIcons">
            <a aria-label="Facebook" id="facebook" href="https://www.facebook.com/leanwmedycynie" target="_blank" rel="noreferrer">

            </a>

            <a aria-label="Youtube" id="youtube" href="https://www.youtube.com/channel/UCnn9QMd7UEPmusGA_8pzCNA" target="_blank" rel="noreferrer">

            </a>

            <a aria-label="Linkedin" id="linkedin" href="https://www.linkedin.com/company/lean-w-medycynie/" target="_blank" rel="noreferrer">

            </a>

            <a aria-label="Twitter" id="twitter" href="https://twitter.com/_leanwmedycynie" target="_blank" rel="noreferrer">

            </a>
        </div>
    </header>
<div class="container">