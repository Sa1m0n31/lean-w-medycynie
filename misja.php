<?php
/* Template Name: Misja */
get_header();
?>

    <!-- PAGE HEADER -->
    <header class="pageHeader naszaMisjaHeader">
       <h1 class="pageHeaderHeader">
            O nas
        </h1>
    </header>

    <!-- MISJA FIRST SECTION -->
    <section class="misjaFirst">
        <h2 class="firstHeader">
            Lean w medycynie
        </h2>
        <h1 class="bigHeader">
            <?php echo get_field('header'); ?>
        </h1>

        <div class="misjaBoxes">
            <div class="misjaBoxItem">
                <img class="misjaBoxImg" src="<?php echo get_field('ikonka_boxa_1') ?>" alt="<?php echo get_field('tytul_boxa_1'); ?>" />

                <h2 class="misjaBoxHeader">
                    <?php echo get_field('tytul_boxa_1'); ?>
                </h2>

                <p class="misjaBoxText">
                    <?php echo get_field('tekst_boxa_1'); ?>
                </p>
            </div>

            <div class="misjaBoxItem">
                <img class="misjaBoxImg" src="<?php echo get_field('ikonka_boxa_2') ?>" alt="<?php echo get_field('tytul_boxa_1'); ?>" />

                <h2 class="misjaBoxHeader">
                    <?php echo get_field('tytul_boxa_2'); ?>
                </h2>

                <p class="misjaBoxText">
                    <?php echo get_field('tekst_boxa_2'); ?>
                </p>
            </div>

            <div class="misjaBoxItem">
                <img class="misjaBoxImg" src="<?php echo get_field('ikonka_boxa_3') ?>" alt="<?php echo get_field('tytul_boxa_1'); ?>" />

                <h2 class="misjaBoxHeader">
                    <?php echo get_field('tytul_boxa_3'); ?>
                </h2>

                <p class="misjaBoxText">
                    <?php echo get_field('tekst_boxa_3'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- WIERZYMY -->
    <section class="wierzymy wierzymyPage">
        <img class="wierzymyLeft" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/nasza_misja_bg.png'; ?>" alt="wierzymy" />

        <div class="wierzymyRight">
            <h2 class="firstHeader">
                <?php echo get_field('maly_tekst_obok_zdjecia'); ?>
            </h2>
            <h1 class="bigHeader bigHeader2">
                <?php echo get_field('duzy_tekst_obok_zdjecia'); ?>
            </h1>
            <button class="landingButton landingButton2">
                <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
                    <?php echo get_field('napis_na_buttonie'); ?>
                </a>
            </button>
        </div>
    </section>

    <!-- NASZE WARTOSCI -->
    <section class="naszeWartosci extraMargin">
        <div class="naszeWartosciLeft">
            <h2 class="firstHeader">
                Lean w medycynie
            </h2>
            <h1 class="bigHeader">
                Nasze wartości
            </h1>
        </div>

        <div class="naszeWartosciRight">
            <div class="naszeWartosciItem">
                <div class="naszeWartosciNumber">
                    01
                </div>
                <div class="naszeWartosciText">
                    <?php echo get_field('nasze_wartosci_1'); ?>
                </div>
            </div>

            <div class="naszeWartosciItem">
                <div class="naszeWartosciNumber">
                    02
                </div>
                <div class="naszeWartosciText">
                    <?php echo get_field('nasze_wartosci_2'); ?>
                </div>
            </div>

            <div class="naszeWartosciItem">
                <div class="naszeWartosciNumber">
                    03
                </div>
                <div class="naszeWartosciText">
                    <?php echo get_field('nasze_wartosci_3'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- NASZE DOSWIADCZENIE -->
    <section class="naszeWartosci">
        <div class="naszeWartosciLeft">
            <h2 class="firstHeader">
                Lean w medycynie
            </h2>
            <h1 class="bigHeader">
                Nasze doświadczenie
            </h1>
        </div>

        <div class="naszeWartosciRight">
            <div class="naszeWartosciItem">
                <div class="naszeWartosciNumber">
                    04
                </div>
                <div class="naszeWartosciText">
                    <?php echo get_field('nasze_wartosci_4'); ?>
                </div>
            </div>

            <div class="naszeWartosciItem">
                <div class="naszeWartosciNumber">
                    05
                </div>
                <div class="naszeWartosciText">
                    <?php echo get_field('nasze_wartosci_5'); ?>
                </div>
            </div>

            <div class="naszeWartosciItem">
                <div class="naszeWartosciNumber">
                    06
                </div>
                <div class="naszeWartosciText">
                    <?php echo get_field('nasze_wartosci_6'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- IMAGE -->
    <img class="imgToRight" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/nasza_misja.jpg'; ?>" alt="lean-w-medycynie" />

    <!-- LICZBY I MY -->
    <section class="liczbyIMy">
        <h2 class="firstHeader">
            Lean w medycynie
        </h2>
        <h1 class="bigHeader">
            Liczby i my
        </h1>

        <div class="liczbyIMyInner">
                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_1'); ?>
                    </h3>
                    <h4 class="statsItemRight" id="count1">
                        <?php echo get_field('wartosc_liczby_i_my_1'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_2'); ?>
                    </h3>
                    <h4 class="statsItemRight">
                        <?php echo get_field('wartosc_liczby_i_my_2'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_3'); ?>
                    </h3>
                    <h4 class="statsItemRight" id="count4">
                        <?php echo get_field('wartosc_liczby_i_my_3'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_4'); ?>
                    </h3>
                    <h4 class="statsItemRight" id="count1">
                        <?php echo get_field('wartosc_liczby_i_my_4'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_5'); ?>
                    </h3>
                    <h4 class="statsItemRight" id="count2">
                        <?php echo get_field('wartosc_liczby_i_my_5'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_6'); ?>
                    </h3>
                    <h4 class="statsItemRight">
                        <?php echo get_field('wartosc_liczby_i_my_6'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_7'); ?>
                    </h3>
                    <h4 class="statsItemRight" id="count4">
                        <?php echo get_field('wartosc_liczby_i_my_7'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_8'); ?>
                    </h3>
                    <h4 class="statsItemRight" id="count1">
                        <?php echo get_field('wartosc_liczby_i_my_8'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_9'); ?>
                    </h3>
                    <h4 class="statsItemRight" id="count2">
                        <?php echo get_field('wartosc_liczby_i_my_9'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_10'); ?>
                    </h3>
                    <h4 class="statsItemRight">
                        <?php echo get_field('wartosc_liczby_i_my_10'); ?>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        <?php echo get_field('tekst_liczby_i_my_11'); ?>
                    </h3>
                    <h4 class="statsItemRight" id="count4">
                        <?php echo get_field('wartosc_liczby_i_my_11'); ?>
                    </h4>
                </div>

            <div class="statsItem">
                <h3 class="statsItemLeft">
                    <?php echo get_field('tekst_liczby_i_my_12'); ?>
                </h3>
                <h4 class="statsItemRight" id="count4">
                    <?php echo get_field('wartosc_liczby_i_my_12'); ?>
                </h4>
            </div>
        </div>
    </section>

    <!-- CASE STUDY -->
    <section class="naszeWartosci">
        <div class="naszeWartosciLeft">
            <h2 class="firstHeader">
                Case Study
            </h2>
            <h1 class="bigHeader">
                Punkt wymazowy
            </h1>
        </div>

        <div class="naszeWartosciRight">
            <section  class="caseStudySection">
                <h3 class="caseStudySectionHeader">
                    <?php echo get_field('case_study_-_header_1'); ?>
                </h3>

                <div class="caseStudySectionText">
                    <?php echo get_field('case_study_-_tekst_1'); ?>
                </div>
            </section>

            <section class="caseStudySection">
                <h3 class="caseStudySectionHeader">
                    <?php echo get_field('case_study_-_header_2'); ?>
                </h3>

                <div class="caseStudyStep">
                    <div class="caseStudyStepFrame">
                        <span class="caseStudyStepNumber">
                            1
                        </span>
                        <span class="caseStudyStepStep">
                            Krok
                        </span>
                    </div>
                    <p class="caseStudyStepText">
                        <?php echo get_field('case_study_-_krok_1'); ?>
                    </p>
                </div>
                <div class="caseStudyStep">
                    <div class="caseStudyStepFrame">
                        <span class="caseStudyStepNumber">
                            2
                        </span>
                        <span class="caseStudyStepStep">
                            Krok
                        </span>
                    </div>
                    <p class="caseStudyStepText">
                        <?php echo get_field('case_study_-_krok_2'); ?>
                    </p>
                </div>
                <div class="caseStudyStep">
                    <div class="caseStudyStepFrame">
                        <span class="caseStudyStepNumber">
                            3
                        </span>
                        <span class="caseStudyStepStep">
                            Krok
                        </span>
                    </div>
                    <p class="caseStudyStepText">
                        <?php echo get_field('case_study_-_krok_3'); ?>
                    </p>
                </div>
            </section>

            <section class="caseStudySection">
                <h3 class="caseStudySectionHeader">
                    <?php echo get_field('case_study_-_header_3'); ?>
                </h3>

                <img class="caseStudyImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/wymaz.png'; ?>" alt="wymaz" />

                <p class="caseStudySectionText">
                    <?php echo get_field('case_study_-_tekst_3'); ?>
                </p>

                <div class="caseStudySectionStats">
                    <div class="caseStudySectionStatsItem">
                        <span class="caseStudySectionStatsValue">
                            <?php echo get_field('case_study_-_statystyki_wynik_1'); ?>
                        </span>
                        <span class="caseStudySectionStatsKey">
                            <?php echo get_field('case_study_-_statystyki_opis_1'); ?>
                        </span>
                    </div>

                    <div class="caseStudySectionStatsItem">
                        <span class="caseStudySectionStatsValue">
                            <?php echo get_field('case_study_-_statystyki_wynik_2'); ?>
                        </span>
                        <span class="caseStudySectionStatsKey">
                            <?php echo get_field('case_study_-_statystyki_opis_2'); ?>
                        </span>
                    </div>

                    <div class="caseStudySectionStatsItem">
                        <span class="caseStudySectionStatsValue">
                            <?php echo get_field('case_study_-_statystyki_wynik_3'); ?>
                        </span>
                        <span class="caseStudySectionStatsKey">
                            <?php echo get_field('case_study_-_statystyki_opis_3'); ?>
                        </span>
                    </div>
                </div>

                <?php echo the_content(); ?>

            </section>
        </div>
    </section>

    <!-- DLACZEGO MY -->
    <section class="dlaczegoMy">
        <h2 class="firstHeader">
            Lean w medycynie
        </h2>
        <h1 class="bigHeader">
            Dlaczego my?
        </h1>

        <div class="dlaczegoMyInner">
            <div class="dlaczegoMyItem">
                <img class="dlaczegoMyImg" src="<?php echo get_field('dlaczego_my_ikonka_1'); ?>" alt="lean-dlaczego-my-1" />

                <p class="dlaczegoMyText">
                    <?php echo get_field('dlaczego_my_tekst_1'); ?>
                </p>
            </div>

            <div class="dlaczegoMyItem">
                <img class="dlaczegoMyImg" src="<?php echo get_field('dlaczego_my_ikonka_2'); ?>" alt="lean-dlaczego-my-2" />

                <p class="dlaczegoMyText">
                    <?php echo get_field('dlaczego_my_tekst_2'); ?>
                </p>
            </div>

            <div class="dlaczegoMyItem">
                <img class="dlaczegoMyImg" src="<?php echo get_field('dlaczego_my_ikonka_3'); ?>" alt="lean-dlaczego-my-3" />

                <p class="dlaczegoMyText">
                    <?php echo get_field('dlaczego_my_tekst_3'); ?>
                </p>
            </div>

            <div class="dlaczegoMyItem">
                <img class="dlaczegoMyImg" src="<?php echo get_field('dlaczego_my_ikonka_4'); ?>" alt="lean-dlaczego-my-4" />

                <p class="dlaczegoMyText">
                    <?php echo get_field('dlaczego_my_tekst_4'); ?>
                </p>
            </div>

            <div class="dlaczegoMyItem">
                <img class="dlaczegoMyImg" src="<?php echo get_field('dlaczego_my_ikonka_5'); ?>" alt="lean-dlaczego-my-5" />

                <p class="dlaczegoMyText">
                    <?php echo get_field('dlaczego_my_tekst_5'); ?>
                </p>
            </div>

            <div class="dlaczegoMyItem">
                <img class="dlaczegoMyImg" src="<?php echo get_field('dlaczego_my_ikonka_6'); ?>" alt="lean-dlaczego-my-6" />

                <p class="dlaczegoMyText">
                    <?php echo get_field('dlaczego_my_tekst_6'); ?>
                </p>
            </div>

            <div class="dlaczegoMyItem">
                <img class="dlaczegoMyImg" src="<?php echo get_field('dlaczego_my_ikonka_7'); ?>" alt="lean-dlaczego-my-7" />

                <p class="dlaczegoMyText">
                    <?php echo get_field('dlaczego_my_tekst_7'); ?>
                </p>
            </div>

            <div class="dlaczegoMyItem">
                <img class="dlaczegoMyImg" src="<?php echo get_field('dlaczego_my_ikonka_8'); ?>" alt="lean-dlaczego-my-8" />

                <p class="dlaczegoMyText">
                    <?php echo get_field('dlaczego_my_tekst_8'); ?>
                </p>
            </div>
        </div>
    </section>

</div>


<?php
get_footer();
