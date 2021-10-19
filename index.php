<?php
get_header();
?>

    <!-- LANDING -->
    <main class="landing">
        <video style="width: 100%;" onloadeddata="this.play()" playsinline loop muted>
            <source src="<?php echo get_bloginfo('stylesheet_directory') . '/video/promo.mp4'; ?>" type="video/mp4">
        </video>





<!--        <button class="nextSlide" onclick="nextSlide()">-->
<!--            <img class="landingArrow" src="--><?php //echo get_bloginfo('stylesheet_directory') . '/img/next.svg'; ?><!--" alt="next" />-->
<!--        </button>-->
<!--        <button class="prevSlide" onclick="prevSlide()">-->
<!--            <img class="landingArrow" src="--><?php //echo get_bloginfo('stylesheet_directory') . '/img/next-grey.svg'; ?><!--" alt="next" />-->
<!--        </button>-->
<!---->
<!--        <main class="landing__inner">-->
        <!-- SLIDER -->
<!--        --><?php
//            $args = array(
//                    'post_type' => 'Slider'
//            );
//
//            $slider = new WP_Query($args);
//            $i = 1;
//
//            if($slider->have_posts()) {
//                while($slider->have_posts()) {
//                    $slider->the_post();
//                    $sliderId = 'landing' . $i;
//                    ?>
<!---->
<!--                    <div class="landingSlide" id="--><?php //echo $sliderId; ?><!--">-->
<!--                        <img class="sliderPhoto" id="slider1" src="--><?php //echo get_field('zdjecie'); ?><!--" alt="landingPhoto" />-->
<!---->
<!--                        <div class="landingLeft" id="left1">-->
<!--                            <h1 class="landingTitle">-->
<!--                                --><?php //echo get_field('naglowek_na_zielono'); ?>
<!--                                <span class="big">--><?php //echo get_field('naglowek_na_czarno'); ?><!--</span>-->
<!--                            </h1>-->
<!--                            <p class="landingText">-->
<!--                                --><?php //echo get_field('tekst'); ?>
<!--                            </p>-->
<!--                            <button class="landingButton">-->
<!--                                <a href="--><?php //echo get_field('link_do_buttona'); ?><!--">-->
<!--                                    <span class="landingButtonText">--><?php //echo get_field('napis_na_buttonie'); ?><!--</span>-->
<!--                                </a>-->
<!--                            </button>-->
<!---->
<!--                            <div class="dots dotsMobile">-->
<!--                                --><?php
//                                $args = array(
//                                    'post_type' => 'Slider'
//                                );
//                                $query = new WP_Query($args);
//
//                                if($query->have_posts()) {
//                                    $i = 1;
//                                    while($query->have_posts()) {
//                                        $query->the_post();
//                                        ?>
<!--                                        <svg height="30" width="30">-->
<!--                                            <circle class="circle-mobile-outer" id="circle--><?php //echo $i; ?><!--M" cx="15" cy="15" r="10" stroke="none" stroke-width="3" fill="none" />-->
<!--                                            <circle class="circle-mobile" id="circleI--><?php //echo $i; ?><!--M" cx="15" cy="15" r="5" fill="#cdcdcd" />-->
<!--                                        </svg>-->
<!--                                        --><?php
//                                        $i++;
//                                    }
//                                }
//                                ?>
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!---->
<!--                        --><?php
//                    $i++;
//                }
//                wp_reset_postdata();
//            }
//        ?>
        </main>

        <!-- DOTS DESKTOP -->
<!--        <div class="dots dotsDesktop">-->
<!--            --><?php
//                $args = array(
//                        'post_type' => 'Slider'
//                );
//                $query = new WP_Query($args);
//
//                if($query->have_posts()) {
//                    $i = 1;
//                    while($query->have_posts()) {
//                        $query->the_post();
//                        ?>
<!--                        <svg height="50" width="50">-->
<!--                            <circle class="circle-outer" id="circle--><?php //echo $i; ?><!--" cx="25" cy="25" r="20" stroke="none" stroke-width="3" fill="none" />-->
<!--                            <circle class="circle" id="circleI--><?php //echo $i; ?><!--" cx="25" cy="25" r="8" fill="#cdcdcd" />-->
<!--                        </svg>-->
<!--                            --><?php
//                        $i++;
//                    }
//                }
//            ?>
<!--        </div>-->
    </main>

    <!-- MISJA -->
    <section class="naszaMisja">
        <span class="observerHelper" id="firstSection"></span>
        <img class="misjaLeft" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/lean-pod-sliderem.jpg'; ?>" alt="nasza-misja" />

        <div class="misjaRight">
            <h2 class="firstHeader">
                Nasza misja
            </h2>
            <h2 class="bigHeader">
                Pomagamy zobaczyć więcej i pójść dalej
            </h2>
            <p class="misjaText">
                Od wielu lat współpracujemy z sektorami: medycznym, usługowym i produkcyjnym. W tym czasie zdobyliśmy wiedzę oraz umiejętności, dzięki którym możemy dobrze doradzać innym. Dziś skutecznie pomagamy pacjentom, personelowi medycznemu oraz zarządom szpitali i innych placówek medycznych. Dzięki naszym kompetencjom mogą one realizować swoją misję, wizję oraz cele strategiczne.
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
                Najpierw, w porozumieniu z pracownikami instytucji, której pomagamy, kompleksowo weryfikujemy procesy zachodzące w danym obszarze.
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
                Mając już wiedzę na temat funkcjonowania instytucji, organizujemy warsztaty w formie gry edukacyjnej Lean Air. W ich trakcie pokazujemy bezpośredni wpływ lean managementu na efekty codziennej pracy.
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
                Inicjujemy proces ciągłej zmiany organizacji, która obejmuje sferę zarządzania. Jest on oparty na metodyce lean management.
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
               Każdego możemy zainspirować do zbudowania samodoskonalącej się organizacji.
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
                We współpracy z naszymi klientami, diagnozujemy problemy, a następnie opracowujemy i wdrażamy, dostosowany do potrzeb organizacji, strategiczny program rozwoju. Sam proces wprowadzenia zmian jest czasochłonny i wymaga systematycznego, ustrukturyzowanego podejścia.
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
                        Budowa strategicznych programów rozwoju.
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
                        Szybka analiza możliwości podmiotów medycznych.
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
                        Narzędzia, które umożliwiają dokonywanie zmian w trybie zdalnym.
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
                        Warsztaty umiejętności managerskich w metodologii lean, z praktyką w miejscu pracy.
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
                        Szkolenia z zakresu narzędzia optymalizacji Lean.
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
                    ?>" id="<?php echo $refId; ?>" onclick="goToReferencje(<?php echo $i; ?>)"></span>
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
