<?php
get_header();
?>

<!-- PAGE HEADER -->
<header class="pageHeader konferencjeHeader">
    <h1 class="pageHeaderHeader">
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

            <?php
                $title = get_post()->post_title;
                $args = array(
                    'post_type' => 'Agenda'
                );
                $agenda = new WP_Query( $args );
                if($agenda->have_posts()) {
                    while($agenda->have_posts()) {
                        $agenda->the_post();

                        if($title == get_the_title()) {
                  ?>
                            <li class="konferencjaMenuItem" id="konfMenu2" onclick="konferencja(2)">Agenda</li>
                                <?php
                        }
                    }
                    wp_reset_postdata();
                ?>
                    <?php
                }
            ?>
            <li class="konferencjaMenuItem" id="konfMenu3" onclick="konferencja(3)">Prelegenci</li>

            <?php
            $title = get_post()->post_title;
            $args = array(
                    'post_type' => 'Galeria konferencji'
            );

            $gal = new WP_Query($args);

            if($gal->have_posts()) {
                while($gal->have_posts()) {
                    $gal->the_post();

                    if($title == get_the_title()) {
                        ?>
                        <li class="konferencjaMenuItem" id="konfMenu4" onclick="konferencja(4)">Galeria</li>
            <?php
                    }
                }
                wp_reset_postdata();
            }


            ?>


            <li class="konferencjaMenuItem" id="konfMenu5" onclick="konferencja(5)">Partnerzy</li>


            <button class="konferencjaComeBackBtn">
                <a href="https://leanwmedycynie.pl/konferencje">
                    <span class="konferencjaComeBackBtnEntity">&lsaquo;</span>
                    <span>Wstecz</span>
                </a>
            </button>

        </ul>

        <div class="konferencjaContent">
            <section class="oKonferencji">
                <span id="oKonferencji"></span>



                <?php
                if(have_posts()) {
                    while(have_posts()) {
                        the_post(); ?>

                        <div class="oKonferencjiLeft">
                            <?php
                            echo get_field('opis_konferencji_-_pierwsza_kolumna'); ?>
                        </div>

                        <div class="oKonferencjiRight">
                            <?php echo get_field('opis_konferencji_-_druga_kolumna'); ?>
                        </div>

                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </section>

                    <?php
                    /* Loop through Konferencje to get the title */
                    $title = 0;
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                        $title = get_the_title();
                            }
                            wp_reset_postdata();
                    }

                        $args = array(
                            'post_type' => 'Agenda'
                        );
                        $agenda = new WP_Query( $args );

                        if($agenda->have_posts()) {
                            while($agenda->have_posts()) {
                                $agenda->the_post();

                                if(get_the_title() == $title) {
                                    $fields = get_fields();

                                    if($fields) {
                                        ?>

            <section class="agenda">
                <span id="agenda"></span>
                <h3 class="konferencjaItemHeader">
                    Agenda konferencji
                </h3>

                <ul class="agendaInner">

                <?php

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
                                        ?>
                </ul>
            </section>

                    <?php
                                }
                                }
                            }
                            wp_reset_postdata();
                        }

                    ?>


                    <?php
                    /* Loop through Konferencje to get the title */
                    $title = '';
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <span class="transparent"> <?php
                                $title = get_the_title(); ?> </span> <?php
                        }
                        wp_reset_postdata();
                    }

                    $args = array(
                            'post_type' => 'Prelegenci'
                    );

                    $pre = new WP_Query($args);

                    if($pre->have_posts()) {
                        while($pre->have_posts()) {
                            $pre->the_post();

                            if(get_the_title() == $title) {
                                $fields = get_fields();
                                ?>

            <section class="prelegenci">
                <span id="pregegenci"></span>
                <h3 class="konferencjaItemHeader">
                    Prelegenci konferencji
                </h3>

                <ul class="prelegenciInner">
            <?php

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
                            } ?>
                </ul>
            </section>

                    <?php
                            }
                        }
                        wp_reset_postdata();
                    }

                    ?>

                                <?php
                    /* Loop through Konferencje to get the title */
                    $title = '';
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                            $title = get_the_title();
                        }
                        wp_reset_postdata();
                    }

                    $args = array(
                            'post_type' => 'Galeria konferencji'
                    );

                    $gal = new WP_Query($args);

                    if($gal->have_posts()) {
                        while($gal->have_posts()) {
                            $gal->the_post();

                            if(get_the_title() == $title) {
                                ?>
                                    <section class="galeria">
                                <span id="galeria"></span>
                                <h3 class="konferencjaItemHeader">
                                    Galeria konferencji
                                </h3>
            <?php echo get_field('test'); ?>
                    <?php
                                }
                            }
                    wp_reset_postdata();
                        ?>
                        </section>

                        <?php
                        }
                ?>

            <section class="partnerzy">
                <span id="partnerzy"></span>
                <?php
                /* Loop through Konferencje to get the title */
                $title = '';
                if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                        $title = get_the_title();
                    }
                    wp_reset_postdata();
                }

                $args = array(
                    'post_type' => 'Sponsorzy konferencji'
                );

                $gal = new WP_Query($args);

                if($gal->have_posts()) {
                    while($gal->have_posts()) {
                        $gal->the_post();

                        if(get_the_title() == $title) {
                            $images = acf_photo_gallery('sponsorzy_konferencji', get_the_id());

                            if(count($images)) {
                                ?>
                                <h3 class="konferencjaItemHeader konferencjaItemHeaderCenter">
                                    Sponsorzy oraz uczestnicy konferencji
                                </h3>
                                <div class="partnerzyInner partnerzySiema">
                                    <?php
                                    foreach($images as $image) {
                                        ?>
                                        <img class="partnerzyInnerItem" src="<?php echo $image['full_image_url']; ?>" alt="<?php echo $image['title']; ?>" />

                                        <?php
                                    } ?>

                                </div>
                                <?php
                            }

                            $images2 = acf_photo_gallery('patronat_honorowy', get_the_id());

                            if(count($images2)) {
                                ?>
                                <h3 class="konferencjaItemHeader konferencjaItemHeaderCenter">
                                    Patronat honorowy
                                </h3>
                                <div class="partnerzyInner patroniSiema">
                                    <?php
                                    foreach($images2 as $image) {
                                        ?>
                                        <img class="partnerzyInnerItem" src="<?php echo $image['full_image_url']; ?>" alt="<?php echo $image['title']; ?>" />

                                        <?php
                                    } ?>

                                </div>
                                <?php
                            }
                        }

                    }
                    wp_reset_postdata();
                }
                ?>
            </section>

 <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post();
              if(get_the_title() === "Inspirowanie do samodoskonalenia w ochronie zdrowia") {
              	?>
      				<section style="margin: auto; display: flex; justify-content: center; align-items: center; max-width: 90%; width: 400px !important; height: 200px; border: 1px solid #D4D4D4; border-radius: 8px;">
			<span style="position: relative; font-size: 15px; font-style: italic; top: 0; text-align: center; padding: 20px;">
                Ze względu na ograniczoną ilość miejsc zapisy zostały zakończone 
                </span>
</section>          
                <?php
              }
            }
            wp_reset_postdata();
        }
    ?>
        </div>
    </div>
</main>


</div>
<!-- FOOTER -->

<?php get_footer(); ?>

</body>
</html>
