<?php
get_header();
?>

    <!-- LANDING -->
    <main class="landing">
        <button class="nextSlide" onclick="nextSlide()">
            <img class="landingArrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/next.svg'; ?>" alt="next" />
        </button>
        <button class="prevSlide" onclick="nextSlide()">
            <img class="landingArrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/next-grey.svg'; ?>" alt="next" />
        </button>

        <!-- SLIDER -->
        <?php
            $args = array(
                    'post_type' => 'Slider'
            );

            $slider = new WP_Query($args);
            $i = 1;

            if($slider->have_posts()) {
                while($slider->have_posts()) {
                    $slider->the_post();
                    $sliderId = 'landing' . $i;
                    ?>

                    <div class="landingSlide <?php
                        if($i == 0) {
                            echo 'landingActive';
                        }
                    ?>" id="<?php echo $sliderId; ?>">
                        <img class="sliderPhoto" id="slider1" src="<?php echo get_field('zdjecie'); ?>" alt="landingPhoto" />

                        <div class="landingLeft" id="left1">
                            <h1 class="landingTitle">
                                <?php echo get_field('naglowek_na_zielono'); ?>
                                <span class="big"><?php echo get_field('naglowek_na_czarno'); ?></span>
                            </h1>
                            <p class="landingText">
                                <?php echo get_field('tekst'); ?>
                            </p>
                            <button class="landingButton">
                                <a href="<?php echo get_field('link_do_buttona'); ?>">
                                    <span class="landingButtonText"><?php echo get_field('napis_na_buttonie'); ?></span>
                                </a>
                            </button>

                            <div class="dots dotsMobile">
                                <svg height="30" width="30" onclick="nextMobileSlide(0)">
                                    <circle id="circle1M" cx="15" cy="15" r="10" stroke="none" stroke-width="3" fill="none" />
                                    <circle id="circleI1M" cx="15" cy="15" r="5" fill="#6E8A37" />
                                </svg>
                                <svg height="30" width="30" onclick="nextMobileSlide(1)">
                                    <circle id="circle2M" cx="15" cy="15" r="10" stroke="none" stroke-width="3" fill="none" />
                                    <circle id="circleI2M" cx="15" cy="15" r="5" fill="#cdcdcd" />
                                </svg>
                            </div>
                        </div>
                    </div>


                        <?php
                    $i++;
                }
                wp_reset_postdata();
            }


        ?>

        <!-- DOTS DESKTOP -->
        <div class="dots dotsDesktop">
            <svg height="50" width="50">
                <circle id="circle1" cx="25" cy="25" r="20" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextSlide(0)" id="circleI1" cx="25" cy="25" r="8" fill="#6E8A37" />
            </svg>
            <svg height="50" width="50">
                <circle id="circle2" cx="25" cy="25" r="20" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextSlide(1)" id="circleI2" cx="25" cy="25" r="8" fill="#cdcdcd" />
            </svg>
        </div>
    </main>

    <!-- MISJA -->
    <section class="naszaMisja">
        <span class="observerHelper" id="firstSection"></span>
        <img class="misjaLeft" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/nasza_misja_BG.jpg'; ?>" alt="nasza-misja" />

        <div class="misjaRight">
            <h2 class="firstHeader">
                Nasza misja
            </h2>
            <h2 class="bigHeader">
                Pomagamy zobaczyć więcej i pójść dalej
            </h2>
            <p class="misjaText">
                Jako zespół o szerokich umiejętnościach zdobywanych przez lata współpracy w sektorze medycznym, usługowym i produkcyjnym chcemy dzielić się wiedzą i pomagać pacjentom, personelowi medycznemu oraz Zarządom szpitali i innych placówek medycznych w realizacji ich misji, wizji i celów strategicznych.
            </p>

            <div class="stats">
                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        Liczba wykonanych transformacji
                    </h3>
                    <h4 class="statsItemRight" id="count1">
                        5
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        Średni czas zwrotu z inwestycji (m-ce)
                    </h3>
                    <h4 class="statsItemRight">
                        <span id="count4">6</span>-<span id="count5">9</span>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        Oszczędności w MLN
                    </h3>
                    <h4 class="statsItemRight">
                        <span id="count3">30</span>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        NPS - Wskaźnik oceny Klientów
                    </h3>
                    <h4 class="statsItemRight" id="count2">
                        95
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        ROI<br/>zwrot z inwestycji
                    </h3>
                    <h4 class="statsItemRight mobileSmaller">
                        <span class="smaller">+</span><span id="count7">300</span><span class="smaller">%</span>
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        Liczba przeszkolonych osób
                    </h3>
                    <h4 class="statsItemRight" id="count6">
                        1000
                    </h4>
                </div>


            </div>
        </div>
    </section>

    <!--THREE BOXES-->
    <section class="threeBoxes">
        <span class="observerHelper" id="secondSection"></span>
        <span class="progressBar">
                    <span class="progressGreen"></span>
                </span>

        <div class="boxItem">
            <h2 class="boxHeader">
                Analiza
            </h2>

            <span class="circleOuter">
                <span class="circleInner"></span>
            </span>

            <p class="boxText">
                Analiza to kompleksowa weryfikacja procesów zachodzących w danym obszarze, wykonana z udziałem pracowników klienta.
            </p>
        </div>

        <div class="boxItem">
            <h2 class="boxHeader">
                Inspiracja
            </h2>

            <span class="circleOuter">
                <span class="circleInner"></span>
            </span>

            <p class="boxText">
                Inspiracja to warsztaty w formie gry edukacyjno-warsztatowej Lean Air, pokazującej bezpośredni wpływ lean managementu w codziennej pracy.
            </p>
        </div>

        <div class="boxItem">
            <h2 class="boxHeader">
                Transformacja
            </h2>

            <span class="circleOuter">
                <span class="circleInner"></span>
            </span>

            <p class="boxText">
                Transformacja to proces ciągłej zmiany organizacji w procesie zarządzania, opartym na metodyce lean management.
            </p>
        </div>
    </section>

    <!-- WIERZYMY -->
    <section class="wierzymy">
        <span class="observerHelper" id="thirdSection"></span>
        <img class="wierzymyLeft" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/nasza_misja_bg.png"; ?>" alt="wierzymy" />

        <div class="wierzymyRight">
            <h2 class="firstHeader">
                Wierzymy, że
            </h2>
            <h1 class="bigHeader bigHeader2">
                Każdego można zainspirować do zbudowania organizacji dającej maksymalną wartość dodaną jej Klientom.
            </h1>
            <button class="landingButton landingButton2">
                <a href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
                    Porozmawiajmy o współpracy
                </a>
            </button>
        </div>
    </section>

    <!-- NASZA OFERTA -->
    <section class="oferta">
        <span class="observerHelper" id="fourthSection"></span>
        <div class="ofertaLeft">
            <h2 class="firstHeader">
                Nasza oferta
            </h2>
            <h2 class="bigHeader">
                Główne obszary działania Lean w Medycynie
            </h2>
            <p class="misjaText">
                Jesteśmy w stanie, razem z Państwem, zdiagnozować, opracować i wdrożyć indywidualny, dostosowany do Państwa potrzeb strategiczny program rozwoju firmy. Zmiany które muszą zaistnieć przy wprowadzaniu takiego systemu, są bardzo czasochłonne i wymagają systematycznego, ustrukturyzowanego podejścia.
            </p>
        </div>

        <div class="ofertaRight" id="oferta1">
            <a class="ofertaItem" href="<?php echo get_page_link( get_page_by_title( 'produkty' )->ID ) . '/#lean-hospital'; ?>">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-1.jpg"; ?>" alt="oferta-1" />

                <h3 class="ofertaNumber">01</h3>

                <div class="ofertaRightRight">
                    <h4 class="ofertaTitle">
                        Lean Hospital
                    </h4>
                    <h5 class="ofertaText">
                        Budowa strategicznych programów rozwoju
                    </h5>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </a>

            <a class="ofertaItem" id="oferta2" href="<?php echo get_page_link( get_page_by_title( 'produkty' )->ID ) . '/#diagnoza-potencjalu'; ?>">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-2.jpg"; ?>" alt="oferta-2" />

                <h3 class="ofertaNumber">02</h3>

                <div class="ofertaRightRight">
                    <h4 class="ofertaTitle">
                        Diagnoza potencjału
                    </h4>
                    <h5 class="ofertaText">
                        Szybka analiza potencjału podmiotów medycznych
                    </h5>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </a>

            <a class="ofertaItem" href="<?php echo get_page_link( get_page_by_title( 'produkty' )->ID ) . '/#online-transformacje'; ?>">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-3.jpg"; ?>" alt="oferta-3" />

                <h3 class="ofertaNumber">03</h3>

                <div class="ofertaRightRight">
                    <h4 class="ofertaTitle">
                        Online Transformacje
                    </h4>
                    <h5 class="ofertaText">
                        Chcesz wdrażać zmiany w nowym otoczeniu? Współpracuj stale ze swoim zespołem.
                    </h5>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </a>

            <a class="ofertaItem" href="<?php echo get_page_link( get_page_by_title( 'produkty' )->ID ) . '/#akademia-healthcare'; ?>">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-4.jpg"; ?>" alt="oferta-4" />

                <h3 class="ofertaNumber">04</h3>

                <div class="ofertaRightRight">
                    <h4 class="ofertaTitle">
                        Akademia Healthcare
                    </h4>
                    <h5 class="ofertaText">
                        Warsztaty umiejętności managerskich w metodologii lean z praktyką w miejscu pracy.
                    </h5>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </a>

            <a class="ofertaItem" href="<?php echo get_page_link( get_page_by_title( 'produkty' )->ID ) . '/#warsztaty-leanair'; ?>">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-5.jpg"; ?>" alt="oferta-5" />

                <h3 class="ofertaNumber">05</h3>

                <div class="ofertaRightRight">
                    <h4 class="ofertaTitle">
                        Warsztaty LeanAir
                    </h4>
                    <h5 class="ofertaText">
                        Szkolenia z zakresu narzędzia optymalizacji Lean
                    </h5>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </a>
        </div>
    </section>

    <!-- REFERENCJE -->
    <section class="referencje">
        <span class="observerHelper" id="fifthSection"></span>
        <div class="referencjeLeft">
            <h2 class="bigHeader">
                Nasze referencje
            </h2>
            <h3 class="ofertaText">
                Naszym atutem jest satysfakcja naszych klientów
            </h3>

            <div class="referencjeButtons">
                <button class="ofertaRightLeft referencjeLeftBtn" onclick="refLeftClick()">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                </button>
                <button class="ofertaRightLeft referencjeRightBtn" onclick="refRightClick()">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                </button>
            </div>
        </div>

        <div class="referencjeRight">
            <span class="divider"></span>

            <?php
            $args = array(
                    'post_type' => 'Referencje'
            );

            $ref = new WP_Query($args);
            $i = 1;

            if($ref->have_posts()) {
                while($ref->have_posts()) {
                    $ref->the_post();
                    $refId = 'ref' . $i;
                    ?>
                    <div class="referencjeItem <?php
                        if($i == 1) {
                            echo 'refActive';
                        }
                    ?>" id="<?php echo $refId; ?>">
                        <div class="referencjeImg">
                            <img class="referencjeImgImg"
                                 src="<?php echo get_field('zdjecie_referencji'); ?>"
                                 alt="company" />
                        </div>

                        <div class="referencjeText">
                            <?php echo get_field('tekst_referencji'); ?>
                        </div>

                        <div class="referencjeAuthor">
                            <h4 class="authorName">
                                <?php echo get_field('autor'); ?>
                            </h4>
                            <h5 class="authorFunction">
                                <?php echo get_field('pozycja_autora'); ?>
                            </h5>
                        </div>
                    </div>
                        <?php
                    $i += 1;
                }
                wp_reset_postdata();
            }

            ?>

        </div>

        <div class="referencjeDots">
            <?php
            $args = array(
                    'post_type' => 'Referencje'
            );

            $dots = new WP_Query($args);
            $i = 1;

            if($dots->have_posts()) {
                while($dots->have_posts()) {
                    $dots->the_post();
                    $refId = 'refDot' . $i;
                    ?>
                    <span class="referencjeDot <?php
                        if($i == 1) {
                            echo 'activeDot';
                        }
                    ?>" id="<?php echo $refId; ?>"></span>
                        <?php
                    $i++;
                }
                wp_reset_postdata();
            }
            ?>
        </div>

        <div class="referencjeButtons referencjeButtonsMobile">
            <button class="ofertaRightLeft referencjeLeftBtn" onclick="refLeftClick()">
                <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
            </button>
            <button class="ofertaRightLeft referencjeRightBtn" onclick="refRightClick()">
                <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
            </button>
        </div>
    </section>
    </div>
<?php
get_footer();
