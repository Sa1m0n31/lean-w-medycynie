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
                Chcesz inwestować w rozwój pracowników?
            </h1>
            <h3 class="smallHeader">
                Zobacz jak pozyskać fundusze
            </h3>

            <div class="dofinansowaniaLeftInfo">
                <h2 class="dofinansowaniaGreen">
                    Jesteś Pracodawcą?
                </h2>

                <h3 class="dofinansowaniaBold">
                    Wystarczy, że zatrudnisz jednego pracownika!
                </h3>

                <h4 class="dofinansowaniaText">
                    Możesz otrzymać dofinansowanie na:
                </h4>
                <h4 class="dofinansowaniaText">
                    - określenie potrzeb rozwojowych organizacji i pracowników
                </h4>
                <h4 class="dofinansowaniaText">
                    - rozwój kompetencji pracowników (szkolenia, programy rozwojowe, egzaminy)
                </h4>
            </div>
        </div>

        <div class="dofinansowaniaRight">
            <img class="dofinansowaniaTopImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/dofinansowania_01.jpg'; ?>" alt="lean-w-medycynie-dofinansowania" />

            <div class="dofinansowaniaAbsoluteBox">
                <h3 class="absoluteBoxPercent">
                    300%
                </h3>
                <p class="absoluteBoxText">
                    <span class="bold">Przeciętnego wynagrodzenia w danym roku</span> to maksymalna wysokość dofinansowania na jednego pracownika rocznie.
                </p>
            </div>
        </div>
    </section>

    <!-- FRAME -->
    <section class="frame">
        <div class="framePart">
            <div class="left">
                <h3 class="green bold procentDofinansowania">
                    PROCENT DOFINANSOWANIA
                </h3>
                <h3 class="regular font18">
                    zależy od wielkości przedsiębiorstwa:
                </h3>
            </div>
        </div>

        <div class="framePart">
            <img class="icon icon-1" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/corpo.svg'; ?>" alt="biuro" />
            <div class="left">
                <h3 class="bold">
                    Duże i średnie przedsiębiorstwa
                </h3>
                <h3 class="regular font18">
                    do 80% kosztów kształcenia
                </h3>
            </div>
            <h3 class="percent green bold framePercent">
                80%
            </h3>
        </div>

        <div class="framePart">
            <img class="icon icon-2" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/zespol.svg'; ?>" alt="druzyna" />
            <div class="left">
                <h3 class="bold">
                    Mikroprzedsiębiorcy
                </h3>
                <h3 class="regular font18">
                    do 100% kosztów kształcenia
                </h3>
            </div>
            <h3 class="percent green bold framePercent">
                100%
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
                        Jak uzyskac dofinansowanie
                    </h3>
                    <p class="faqAnswer">
                        Skontaktuj się z nami. Zapewniamy pełne wsparcie w zakresie realizacji projektu rozwojowego oraz pomożemy w zdobyciu dofinansowania na ten cel.
                    </p>
                </div>
            </div>

            <div class="faqItem">
                <img class="arrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-green.svg'; ?>" alt="arrow" />
                <div class="faqItemContent">
                    <h3 class="faqQuestion">
                        Ile będzie to kosztowało?
                    </h3>
                    <p class="faqAnswer">
                        Ile to będzie kosztowało? Napisanie wniosku oraz przygotowanie dokumentów jest naszym kosztem.
                    </p>
                </div>
            </div>

            <div class="faqItem">
                <img class="arrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-green.svg'; ?>" alt="arrow" />
                <div class="faqItemContent">
                    <h3 class="faqQuestion">
                        Jak Ci pomożemy?
                    </h3>
                    <p class="faqAnswer">
                        Po analizie potrzeb szkoleniowych i możliwości dofinansowania.
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
                Przygotowanie wniosku
            </h4>

            <img class="etapyImg extraMargin1" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/umowa.svg'; ?>" alt="umowa" />
        </div>

        <img class="etapyArrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-green.svg'; ?>" alt="arrow" />

        <div class="etap">
            <h3 class="etapHeader green">
                Etap 2
            </h3>
            <h4 class="etapDescription">
                Złożenie wniosku o dofinansowanie (oczekiwanie na wyniki 30 dni)
            </h4>

            <img class="etapyImg extraMargin2" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/akcept.svg'; ?>" alt="zlozenie-wniosku" />
        </div>

        <img class="etapyArrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/arrow-green.svg'; ?>" alt="arrow" />

        <div class="etap">
            <h3 class="etapHeader green">
                Etap 3
            </h3>
            <h4 class="etapDescription">
                Realizacja
            </h4>

            <img class="etapyImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/realizacja.svg'; ?>" alt="realizacja" />
        </div>
    </section>

    <!-- WIZYTOWKI -->
    <section class="wizytowki">
        <div class="person">
            <img class="personImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/agnieszka_zdeba.png'; ?>" alt="agnieszka-zdeba-mozola" />
            <div class="personData">
                <h2 class="personName green">Agnieszka Zdęba-Mozoła</h2>
                <h3 class="personFunction regular">Specjalista ds. dofinansowań</h3>

                <h4 class="personContact regular link">
                    <a href="mailto:agnieszka.zdeba@leanwmedycynie.pl"></a>
                    <span class="green bold">E:</span>
                    agnieszka.zdeba@leanwmedycynie.pl
                </h4>
                <h3 class="personContact regular link">
                    <a href="tel:+48728956864"></a>
                    <span class="green bold">T:</span>
                    +48 728 956 864
                </h3>
            </div>
        </div>

        <div class="person">
            <img class="personImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/jakub_napierala.png'; ?>" alt="jakub-napierala" />
            <div class="personData">
                <h2 class="personName green">Jakub Napierała</h2>
                <h3 class="personFunction regular">CFO / Członek Zarządu</h3>

                <h4 class="personContact regular link">
                    <a href="mailto:jakub.napierala@leanwmedycynie.pl"></a>
                    <span class="green bold">E:</span>
                    jakub.napierala@leanwmedycynie.pl
                </h4>
                <h3 class="personContact regular link">
                    <a href="tel:+48602509538"></a>
                    <span class="green bold">T:</span>
                    +48 602 509 538
                </h3>
            </div>
        </div>
    </section>

</div>
</div>

<?php
get_footer();
?>
