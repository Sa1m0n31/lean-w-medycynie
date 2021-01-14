<?php
get_header();
?>

    <!-- LANDING -->
    <main class="landing">
        <button class="nextSlide" onclick="nextSlide()">
            <img class="landingArrow" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/next.svg'; ?>" alt="next" />
        </button>

        <!-- SLIDER -->
        <div class="landingSlide landingActive" id="landing1">
            <img class="sliderPhoto" id="slider1" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/lean_slider_01.jpg'; ?>" alt="landingPhoto" />

            <div class="landingLeft">
                <h1 class="landingTitle">
                    Lean Healthcare
                    <span class="big">Academy</span>
                </h1>
                <p class="landingText">
                    Pierwsza w Polsce Akademia z zakresu Lean Management prowadzona przez praktyków w obszarze ochrony zdrowia, przeznaczona dla każdego, kto chce rozwinąć swoje kompetencje w zakresie optymalizacji procesów.
                </p>
                <button class="landingButton">
                    <span class="landingButtonText">Dowiedz się więcej</span>
                </button>
            </div>
        </div>

        <div class="landingSlide" id="landing2">
            <img class="sliderPhoto" id="slider1" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/lean_slider_01.jpg'; ?>" alt="landingPhoto" />

            <div class="landingLeft">
                <h1 class="landingTitle">
                    Slide numer
                    <span class="big">Dwa</span>
                </h1>
                <p class="landingText">
                    Pierwsza w Polsce Akademia z zakresu Lean Management prowadzona przez praktyków w obszarze ochrony zdrowia, przeznaczona dla każdego, kto chce rozwinąć swoje kompetencje w zakresie optymalizacji procesów.
                </p>
                <button class="landingButton">
                    <span class="landingButtonText">Button 2</span>
                </button>
            </div>
        </div>

        <div class="landingSlide" id="landing3">
            <img class="sliderPhoto" id="slider1" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/lean_slider_01.jpg'; ?>" alt="landingPhoto" />

            <div class="landingLeft">
                <h1 class="landingTitle">
                    Lean Healthcare
                    <span class="big">Academy</span>
                </h1>
                <p class="landingText">
                    Pierwsza w Polsce Akademia z zakresu Lean Management prowadzona przez praktyków w obszarze ochrony zdrowia, przeznaczona dla każdego, kto chce rozwinąć swoje kompetencje w zakresie optymalizacji procesów.
                </p>
                <button class="landingButton">
                    <span class="landingButtonText">Dowiedz się więcej</span>
                </button>
            </div>
        </div>

        <div class="landingSlide" id="landing4">
            <img class="sliderPhoto" id="slider1" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/lean_slider_01.jpg'; ?>" alt="landingPhoto" />

            <div class="landingLeft">
                <h1 class="landingTitle">
                    Lean Healthcare
                    <span class="big">Academy</span>
                </h1>
                <p class="landingText">
                    Pierwsza w Polsce Akademia z zakresu Lean Management prowadzona przez praktyków w obszarze ochrony zdrowia, przeznaczona dla każdego, kto chce rozwinąć swoje kompetencje w zakresie optymalizacji procesów.
                </p>
                <button class="landingButton">
                    <span class="landingButtonText">Dowiedz się więcej</span>
                </button>
            </div>
        </div>
        <!-- END OF SLIDER -->

        <div class="dots dotsMobile">
            <svg height="30" width="30">
                <circle id="circle1M" cx="15" cy="15" r="10" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextMobileSlide(0)" id="circleI1M" cx="15" cy="15" r="5" fill="#6E8A37" />
            </svg>
            <svg height="30" width="30">
                <circle id="circle2M" cx="15" cy="15" r="10" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextMobileSlide(1)" id="circleI2M" cx="15" cy="15" r="5" fill="#cdcdcd" />
            </svg>
            <svg height="30" width="30">
                <circle id="circle3M" cx="15" cy="15" r="10" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextMobileSlide(2)" id="circleI3M" cx="15" cy="15" r="5" fill="#cdcdcd" />
            </svg>
            <svg height="30" width="30">
                <circle id="circle4M" cx="15" cy="15" r="10" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextMobileSlide(3)" id="circleI4M" cx="15" cy="15" r="5" fill="#cdcdcd" />
            </svg>
        </div>

        <div class="dots dotsDesktop">
            <svg height="50" width="50">
                <circle id="circle1" cx="25" cy="25" r="20" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextSlide(0)" id="circleI1" cx="25" cy="25" r="8" fill="#6E8A37" />
            </svg>
            <svg height="50" width="50">
                <circle id="circle2" cx="25" cy="25" r="20" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextSlide(1)" id="circleI2" cx="25" cy="25" r="8" fill="#cdcdcd" />
            </svg>
            <svg height="50" width="50">
                <circle id="circle3" cx="25" cy="25" r="20" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextSlide(2)" id="circleI3" cx="25" cy="25" r="8" fill="#cdcdcd" />
            </svg>
            <svg height="50" width="50">
                <circle id="circle4" cx="25" cy="25" r="20" stroke="none" stroke-width="3" fill="none" />
                <circle onclick="nextSlide(3)" id="circleI4" cx="25" cy="25" r="8" fill="#cdcdcd" />
            </svg>
        </div>
    </main>

    <!-- MISJA -->
    <section class="naszaMisja">
        <img class="misjaLeft" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/nasza_misja_BG.jpg'; ?>" alt="nasza-misja" />

        <div class="misjaRight">
            <h2 class="firstHeader">
                Nasza misja
            </h2>
            <h1 class="bigHeader">
                Pomagamy zobaczyć więcej i pójść dalej
            </h1>
            <p class="misjaText">
                Jako zespół o szerokich umiejętnościach zdobywanych przez lata współpracy w sektorze medycznym, usługowym i produkcyjnym chcemy dzielić się wiedzą i pomagać pacjentom, personelowi medycznemu oraz Zarządom szpitali i innych placówek medycznych w realizacji ich misji, wizji i celów strategicznych.
            </p>

            <div class="stats">
                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        Ilość wykonanych transformacji
                    </h3>
                    <h4 class="statsItemRight" id="count1">
                        5
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
                        Oszczędności
                    </h3>
                    <h4 class="statsItemRight">
                        <span id="count3">5</span> MLN
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        Ilość projektów w medycynie
                    </h3>
                    <h4 class="statsItemRight" id="count4">
                        11
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        Ilość przeszkolonych osób
                    </h3>
                    <h4 class="statsItemRight" id="count5">
                        1100
                    </h4>
                </div>

                <div class="statsItem">
                    <h3 class="statsItemLeft">
                        ROI
                    </h3>
                    <h4 class="statsItemRight">
                        +<span id="count6">200</span>%
                    </h4>
                </div>


            </div>
        </div>
    </section>

    <!--THREE BOXES-->
    <section class="threeBoxes">
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
        <div class="ofertaLeft">
            <h2 class="firstHeader">
                Nasza oferta
            </h2>
            <h1 class="bigHeader">
                Główne obszary działania Lean w Medycynie
            </h1>
            <p class="misjaText">
                Jesteśmy w stanie, razem z Państwem, zdiagnozować, opracować i wdrożyć indywidualny, dostosowany do Państwa potrzeb strategiczny program rozwoju firmy. Zmiany które muszą zaistnieć przy wprowadzaniu takiego systemu, są bardzo czasochłonne i wymagają systematycznego, ustrukturyzowanego podejścia.
            </p>
        </div>

        <div class="ofertaRight" id="oferta1">
            <div class="ofertaItem">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-1.jpg"; ?>" alt="oferta-1" />

                <h3 class="ofertaNumber">01</h3>

                <div class="ofertaRightRight">
                    <h2 class="ofertaTitle">
                        Lean Hospital
                    </h2>
                    <h4 class="ofertaText">
                        Budowa strategicznych programów rozwoju
                    </h4>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </div>

            <div class="ofertaItem" id="oferta2">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-2.jpg"; ?>" alt="oferta-2" />

                <h3 class="ofertaNumber">02</h3>

                <div class="ofertaRightRight">
                    <h2 class="ofertaTitle">
                        Diagnoza potencjału
                    </h2>
                    <h4 class="ofertaText">
                        Szybka analiza potencjału podmiotów medycznych
                    </h4>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </div>

            <div class="ofertaItem">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-3.jpg"; ?>" alt="oferta-3" />

                <h3 class="ofertaNumber">03</h3>

                <div class="ofertaRightRight">
                    <h2 class="ofertaTitle">
                        Lean Nawigator
                    </h2>
                    <h4 class="ofertaText">
                        Tutaj jeszcze trzeba wstawić brakujący tekst opisowy
                    </h4>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </div>

            <div class="ofertaItem">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-4.jpg"; ?>" alt="oferta-4" />

                <h3 class="ofertaNumber">04</h3>

                <div class="ofertaRightRight">
                    <h2 class="ofertaTitle">
                        Akademia Healthcare
                    </h2>
                    <h4 class="ofertaText">
                        Warsztaty umiejętności managerskich w metodologii lean z praktyką w miejscu pracy.
                    </h4>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </div>

            <div class="ofertaItem">
                <img class="ofertaBackground" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/oferta-5.jpg"; ?>" alt="oferta-5" />

                <h3 class="ofertaNumber">05</h3>

                <div class="ofertaRightRight">
                    <h2 class="ofertaTitle">
                        Warsztaty LeanAir
                    </h2>
                    <h4 class="ofertaText">
                        Szkolenia z zakresu narzędzia optymalizacji Lean
                    </h4>
                </div>

                <div class="ofertaRightLeft">
                    <img class="ofertaNext" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next-black.svg"; ?>" alt="click" />
                    <img class="ofertaNextHover" src="<?php echo get_bloginfo('stylesheet_directory') . "/img/next.svg"; ?>" alt="click" />
                </div>
            </div>
        </div>
    </section>

    <!-- REFERENCJE -->
    <section class="referencje">
        <div class="referencjeLeft">
            <h2 class="bigHeader">
                Nasze referencje
            </h2>
            <h4 class="ofertaText">
                Naszym atutem jest satysfakcja naszych klientów
            </h4>

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
            <div class="referencjeItem">
                <div class="referencjeImg">
                    <img class="referencjeImgImg"
                         src="<?php echo get_bloginfo('stylesheet_directory') . "/img/nfz.png"; ?>"
                         alt="company" />
                </div>

                <div class="referencjeText">
                    Profesjonalizm, podejście i doświadczenie trenerów wpłynęło na wysoką aktywność i zaangażowanie zespołu w realizację celu projektu. Uczestnicy ocenili warsztaty na poziomie 9,3 (w skali 1-10). Efekt pracy przekroczyły pierwotne oczekiwania zamawiającego.
                </div>

                <div class="referencjeAuthor">
                    <h4 class="authorName">
                        Adam Niedzielski
                    </h4>
                    <h5 class="authorFunction">
                        Prezes NFZ
                    </h5>
                </div>
            </div>
        </div>

        <div class="referencjeDots">
            <span class="referencjeDot activeDot" id="refDot1"></span>
            <span class="referencjeDot" id="refDot2"></span>
            <span class="referencjeDot" id="refDot3"></span>
            <span class="referencjeDot" id="refDot4"></span>
        </div>
    </section>
    </div>
<?php
get_footer();
