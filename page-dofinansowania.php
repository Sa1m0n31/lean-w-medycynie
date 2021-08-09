<?php
get_header();
?>

<!-- PAGE HEADER -->
<header class="pageHeader pageDofinansowaniaHeader">
    <h1 class="pageHeaderHeader">
        Dofinansowania
    </h1>
</header>

<div class="dofinansowaniaContainer">
    <!--DOFINANSOWANIA FIRST-->
    <section class="dofinansowaniaFirst">
        <div class="dofinansowaniaLeft">
            <h2 class="firstHeader">
                Dofinansowania
            </h2>
            <h1 class="bigHeader">
                <?php echo get_field('header'); ?>
            </h1>
            <h3 class="smallHeader">
                <?php echo get_field('subheader'); ?>
            </h3>

            <div class="dofinansowaniaLeftInfo">
                <h2 class="dofinansowaniaGreen">
                    <?php echo get_field('zielony_naglowek'); ?>
                </h2>

                <h3 class="dofinansowaniaBold">
                    <?php echo get_field('pogrubiony_naglowek'); ?>
                </h3>

                <div class="dofinansowaniaText">
                    <?php echo get_field('tekst_pod_naglowkami'); ?>
                </div>
            </div>
        </div>

        <div class="dofinansowaniaRight">
            <img class="dofinansowaniaTopImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/dofinansowania_01.jpg'; ?>" alt="lean-w-medycynie-dofinansowania" />

            <div class="dofinansowaniaAbsoluteBox">
                <h3 class="absoluteBoxPercent">
                    <?php echo get_field('pogrubiona_liczba_w_ramce'); ?>
                </h3>
                <p class="absoluteBoxText">
                    <?php echo get_field('tekst_w_ramce'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- FRAME -->
    <section class="frame">
        <div class="framePart">
            <div class="left">
                <?php echo get_field('ramka_-_pierwszy_tekst'); ?>
            </div>
        </div>

        <div class="framePart">
            <img class="icon icon-1" src="<?php echo get_field('ramka_-_pierwsza_ikonka'); ?>" alt="biuro" />
            <div class="left">
                <?php echo get_field('ramka_-_drugi_tekst'); ?>
            </div>
            <h3 class="percent green bold framePercent">
                <?php echo get_field('ramka_-_pierwszy_procent'); ?>
            </h3>
        </div>

        <div class="framePart">
            <img class="icon icon-2" src="<?php echo get_field('ramka_-_druga_ikonka'); ?>" alt="druzyna" />
            <div class="left">
                <?php echo get_field('ramka_-_trzeci_tekst'); ?>
            </div>
            <h3 class="percent green bold framePercent">
                <?php echo get_field('ramka_-_drugi_procent'); ?>
            </h3>
        </div>
    </section>

    <!-- FAQ -->
    <section class="dofFaq">
        <div class="left">
            <div class="faqItem">
                <img class="arrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-green.svg'; ?>" alt="arrow" />
                <div class="faqItemContent">
                    <h3 class="faqQuestion">
                        <?php echo get_field('pytanie_1_-_header'); ?>
                    </h3>
                    <p class="faqAnswer">
                        <?php echo get_field('pytanie_1_-_tekst'); ?>
                    </p>
                </div>
            </div>

            <div class="faqItem">
                <img class="arrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-green.svg'; ?>" alt="arrow" />
                <div class="faqItemContent">
                    <h3 class="faqQuestion">
                        <?php echo get_field('pytanie_2_-_header'); ?>
                    </h3>
                    <p class="faqAnswer">
                        <?php echo get_field('pytanie_2_-_tekst'); ?>
                    </p>
                </div>
            </div>

            <div class="faqItem">
                <img class="arrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-green.svg'; ?>" alt="arrow" />
                <div class="faqItemContent">
                    <h3 class="faqQuestion">
                        <?php echo get_field('pytanie_3_-_header'); ?>
                    </h3>
                    <p class="faqAnswer">
                        <?php echo get_field('pytanie_3_-_tekst'); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="right">
            <img class="faqImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/dofinansowania_02.jpg'; ?>" alt="dofinansowania-faq" />
        </div>
    </section>

    <!-- ETAPY -->
    <section class="steps">
        <div class="etap">
            <h3 class="etapHeader green">
                Etap 1
            </h3>
            <h4 class="etapDescription">
                <?php echo get_field('etap_1_-_tekst'); ?>
            </h4>

            <img class="etapyImg extraMargin1" src=" <?php echo get_field('etap_1_-_ikonka'); ?>" alt="umowa" />
        </div>

        <img class="etapyArrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-green.svg'; ?>" alt="arrow" />

        <div class="etap">
            <h3 class="etapHeader green">
                Etap 2
            </h3>
            <h4 class="etapDescription">
                <?php echo get_field('etap_2_-_tekst'); ?>
            </h4>

            <img class="etapyImg extraMargin2" src=" <?php echo get_field('etap_2_-_ikonka'); ?>" alt="zlozenie-wniosku" />
        </div>

        <img class="etapyArrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-green.svg'; ?>" alt="arrow" />

        <div class="etap">
            <h3 class="etapHeader green">
                Etap 3
            </h3>
            <h4 class="etapDescription">
                <?php echo get_field('etap_3_-_tekst'); ?>
            </h4>

            <img class="etapyImg" src=" <?php echo get_field('etap_3_-_ikonka'); ?>" alt="realizacja" />
        </div>
    </section>

    <!-- WIZYTOWKI -->
    <section class="wizytowki">
        <header class="wizytowkiHeader">
            <h2 class="wizytowkiHeaderH">
                Skontaktuj się z naszymi przedstawicielami
            </h2>
        </header>
        <div class="person">
            <img class="personImg" src="<?php echo get_field('kontakt_1_-_zdjecie'); ?>" alt="agnieszka-zdeba-mozola" />
            <div class="personData">
                <h2 class="personName green">
                    <?php echo get_field('kontakt_1_-_imie_i_nazwisko'); ?>
                </h2>
                <h3 class="personFunction regular">
                    <?php echo get_field('kontakt_1_-_tytul'); ?>
                </h3>

                <h4 class="personContact regular link">
                    <a href="mailto:<?php echo get_field('kontakt_1_-_mail'); ?>"></a>
                    <span class="green bold">E:</span>
                    <?php echo get_field('kontakt_1_-_mail'); ?>
                </h4>
                <h3 class="personContact regular link">
                    <a href="tel:<?php echo str_replace(' ', '', get_field('kontakt_1_-_telefon')); ?>"></a>
                    <span class="green bold">T:</span>
                    <?php echo get_field('kontakt_1_-_telefon'); ?>
                </h3>
            </div>
        </div>

        <div class="person">
            <img class="personImg" src="<?php echo get_field('kontakt_2_-_zdjecie'); ?>" alt="jakub-napierala" />
            <div class="personData">
                <h2 class="personName green">
                    <?php echo get_field('kontakt_2_-_imie_i_nazwisko'); ?>
                </h2>
                <h3 class="personFunction regular">
                    <?php echo get_field('kontakt_2_-_tytul'); ?>
                </h3>

                <h4 class="personContact regular link">
                    <a href="mailto:<?php echo get_field('kontakt_2_-_mail'); ?>"></a>
                    <span class="green bold">E:</span>
                    <?php echo get_field('kontakt_2_-_mail'); ?>
                </h4>
                <h3 class="personContact regular link">
                    <a href="tel:<?php echo str_replace(' ', '', get_field('kontakt_2_-_mail')); ?>"></a>
                    <span class="green bold">T:</span>
                    <?php echo get_field('kontakt_2_-_telefon'); ?>
                </h3>
            </div>
        </div>
    </section>

</div>
</div>

<?php
get_footer();
?>
