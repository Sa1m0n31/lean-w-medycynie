<?php
get_header();
?>

<!-- PAGE HEADER -->
<header class="pageHeader naszaMisjaHeader">
    <!--<img class="pageHeaderImg" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/hero_image_podstrona_misja.jpg'; ?>" alt="nasza-misja" />
        --><h1 class="pageHeaderHeader">
        Konferencje
    </h1>
</header>

<main class="konferencjaContainer">
    <h2 class="firstHeader">
        Nasze konferencje
    </h2>

    <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>

        <h1 class="bigHeader">
            <?php echo the_title(); ?>
        </h1>
    <?php
            }
            wp_reset_postdata();
        }
    ?>

    <div class="konferencjaInner">
        <ul class="konferencjaMenu">
            <li class="konferencjaMenuItem active" id="konfMenu1" onclick="konferencja(1)">O Konferencji</li>
            <li class="konferencjaMenuItem" id="konfMenu2" onclick="konferencja(2)">Agenda</li>
            <li class="konferencjaMenuItem" id="konfMenu3" onclick="konferencja(3)">Prelegenci</li>
            <li class="konferencjaMenuItem" id="konfMenu4" onclick="konferencja(4)">Galeria</li>
            <li class="konferencjaMenuItem" id="konfMenu5" onclick="konferencja(5)">Partnerzy</li>
        </ul>

        <div class="konferencjaContent">
            <section id="oKonferencji">



                <?php
                if(have_posts()) {
                    while(have_posts()) {
                        the_post(); ?>

                        <p class="oKonferencjiLeft">
                            <?php echo get_field('opis_konferencji_-_pierwsza_kolumna'); ?>
                        </p>

                        <p class="oKonferencjiRight">
                            <?php echo get_field('opis_konferencji_-_druga_kolumna'); ?>
                        </p>

                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </section>

            <section id="agenda">
                <h3 class="konferencjaItemHeader">
                    Agenda konferencji
                </h3>

                <ul class="agendaInner">
                    <?php
                    /* Loop through Konferencje to get the title */
                    $title = 0;
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                    <span class="transparent"> <?php
                        $title = the_title(); ?> </span> <?php
                            }
                            wp_reset_postdata();
                    }

                        $args = array(
                            'post_type' => 'Agenda',
                            'title' => $title
                        );
                    echo $title;
                        $agenda = new WP_Query( $args );

                        if($agenda->have_posts()) {
                            while($agenda->have_posts()) {
                                $agenda->the_post();
                                $fields = get_fields();

                                if($fields) {
                                    foreach( $fields as $name => $value ) {
                                        if($value['godzina_rozpoczecia'] != '') {
                                        ?>
                                        <li class="agendaInnerItem">
                                            <div class="godziny">
                                                <span class="godzinyOd">
                                                    <?php echo $value['godzina_rozpoczecia']; ?>
                                                </span>
                                                 -
                                                 <span class="godzinyDo">
                                                    <?php echo $value['godzina_zakonczenia']; ?>
                                            </span>
                                            </div>

                                            <div class="event">
                                                <span class="bold block">
                                                    <?php echo $value['nazwisko_prelegenta']; ?>
                                                </span>
                                                <?php echo $value['opis_wydarzenia']; ?>
                                            </div>
                                        </li>

                    <?php
                                    }
                                    }
                                }
                            }
                        }

                    ?>
                </ul>
            </section>

            <section id="pregegenci">
                <h3 class="konferencjaItemHeader">
                    Pregegenci konferencji
                </h3>

                <ul class="prelegenciInner">

                    <?php
                    /* Loop through Konferencje to get the title */
                    $title = 0;
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <span class="transparent"> <?php
                                $title = the_title(); ?> </span> <?php
                        }
                        wp_reset_postdata();
                    }

                    $args = array(
                            'post_type' => 'Prelegenci',
                            'title' => $title
                    );

                    $pre = new WP_Query($args);

                    if($pre->have_posts()) {
                        while($pre->have_posts()) {
                            $pre->the_post();
                            $fields = get_fields();

                            foreach($fields as $name => $value) {
                                if($value['imie_i_nazwisko'] != '') {
                                ?>
                                    <li class="prelegenciInnerItem">
                                        <div class="prelegenciImage">
                                            <img src="<?php echo $value['zdjecie']; ?>" alt="alt" />
                                        </div>

                                        <div class="prelegenciInfo">
                                            <h4 class="prelegenciName">
                                                <?php echo $value['imie_i_nazwisko']; ?>
                                            </h4>

                                            <p class="prelegenciText">
                                                <?php echo $value['opis_prelegenta']; ?>
                                            </p>
                                        </div>
                                    </li>

                    <?php
                                }
                            }
                        }
                    }

                    ?>

                </ul>
            </section>

            <section id="galeria">
                <h3 class="konferencjaItemHeader">
                    Galeria konferencji
                </h3>

                <div class="galeriaInner">
                    <div class="galeriaItemContainer">
                        <img class="galeriaItem" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/konferecja_01.png'; ?>" alt="alt" />
                    </div>

                    <div class="galeriaItemContainer">
                        <img class="galeriaItem" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/konferecja_02.png'; ?>" alt="alt" />
                    </div>

                    <div class="galeriaItemContainer">
                        <img class="galeriaItem" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/konferecja_03.png'; ?>" alt="alt" />
                    </div>
                </div>
            </section>

            <section id="partnerzy">
                <h3 class="konferencjaItemHeader konferencjaItemHeaderCenter">
                    Sponsorzy oraz uczestnicy konferencji
                </h3>

                <div class="partnerzyInner">
                    <img class="partnerzyInnerItem" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/haxon.svg'; ?>" alt="haxon" />
                    <img class="partnerzyInnerItem" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/haxon.svg'; ?>" alt="haxon" />
                    <img class="partnerzyInnerItem" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/haxon.svg'; ?>" alt="haxon" />
                    <img class="partnerzyInnerItem" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/haxon.svg'; ?>" alt="haxon" />
                    <img class="partnerzyInnerItem" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/haxon.svg'; ?>" alt="haxon" />
                </div>
            </section>
        </div>
    </div>
</main>



</div>
<?php
get_footer();
?>
